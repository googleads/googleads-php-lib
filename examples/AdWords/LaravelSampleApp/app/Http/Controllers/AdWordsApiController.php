<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace App\Http\Controllers;

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Query\v201802\ReportQueryBuilder;
use Google\AdsApi\AdWords\Query\v201806\ServiceQueryBuilder;
use Google\AdsApi\AdWords\Reporting\v201806\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201806\ReportDownloader;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\v201806\cm\CampaignService;
use Google\Auth\FetchAuthTokenInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class AdWordsApiController extends Controller
{

    private static $REPORT_TYPE_TO_DEFAULT_SELECTED_FIELDS = [
        'CAMPAIGN_PERFORMANCE_REPORT' => [
            'CampaignId',
            'CampaignName',
            'CampaignStatus',
            'AccountDescriptiveName'
        ],
        'ADGROUP_PERFORMANCE_REPORT' => [
            'AdGroupId',
            'AdGroupName',
            'AdGroupStatus',
            'CampaignId'
        ],
        'AD_PERFORMANCE_REPORT' => ['AdGroupId', 'AdGroupName', 'Id', 'AdType'],
        'ACCOUNT_PERFORMANCE_REPORT' => [
            'AccountDescriptiveName',
            'ExternalCustomerId'
        ],
    ];

    /**
     * Controls a POST and GET request that is submitted from the "Get All
     * Campaigns" form.
     *
     * @param Request $request
     * @param FetchAuthTokenInterface $oAuth2Credential
     * @param AdWordsServices $adWordsServices
     * @param AdWordsSessionBuilder $adWordsSessionBuilder
     * @return View
     */
    public function getCampaignsAction(
        Request $request,
        FetchAuthTokenInterface $oAuth2Credential,
        AdWordsServices $adWordsServices,
        AdWordsSessionBuilder $adWordsSessionBuilder
    ) {
        if ($request->method() === 'POST') {
            // Always select at least the "Id" field.
            $selectedFields = array_values(
                ['id' => 'Id'] + $request->except(
                    ['_token', 'clientCustomerId', 'entriesPerPage']
                )
            );
            $clientCustomerId = $request->input('clientCustomerId');
            $entriesPerPage = $request->input('entriesPerPage');

            // Construct an API session configured from a properties file and
            // the OAuth2 credentials above.
            $session =
                $adWordsSessionBuilder->fromFile(config('app.adsapi_php_path'))
                    ->withOAuth2Credential($oAuth2Credential)
                    ->withClientCustomerId($clientCustomerId)
                    ->build();

            $request->session()->put('selectedFields', $selectedFields);
            $request->session()->put('entriesPerPage', $entriesPerPage);
            $request->session()->put('session', $session);
        } else {
            $selectedFields = $request->session()->get('selectedFields');
            $entriesPerPage = $request->session()->get('entriesPerPage');
            $session = $request->session()->get('session');
        }

        $pageNo = $request->input('page') ?: 1;
        $collection = self::fetchCampaigns(
            $request,
            $adWordsServices->get($session, CampaignService::class),
            $selectedFields,
            $entriesPerPage,
            $pageNo
        );

        // Create a length aware paginator to supply campaigns for the view,
        // based on the specified number of entries per page.
        $campaigns = new LengthAwarePaginator(
            $collection,
            $request->session()->get('totalNumEntries'),
            $entriesPerPage,
            $pageNo,
            ['path' => url('get-campaigns')]
        );

        return view('campaigns', compact('campaigns', 'selectedFields'));
    }

    /**
     * Fetch campaigns using the provided campaign service, selected fields, the
     * number of entries per page and the specified page number.
     *
     * @param Request $request
     * @param CampaignService $campaignService
     * @param string[] $selectedFields
     * @param int $entriesPerPage
     * @param int $pageNo
     * @return Collection
     */
    private function fetchCampaigns(
        Request $request,
        CampaignService $campaignService,
        array $selectedFields,
        $entriesPerPage,
        $pageNo
    ) {
        $query = (new ServiceQueryBuilder())
            ->select($selectedFields)
            ->orderByAsc('Name')
            ->limit(
                ($pageNo - 1) * $entriesPerPage,
                intval($entriesPerPage)
            )->build();

        $totalNumEntries = 0;
        $results = [];

        $page = $campaignService->query("$query");
        if (!empty($page->getEntries())) {
            $totalNumEntries = $page->getTotalNumEntries();
            $results = $page->getEntries();
        }

        $request->session()->put('totalNumEntries', $totalNumEntries);

        return collect($results);
    }

    /**
     * Controls a POST and GET request that is submitted from the "Download
     * Report" form.
     *
     * @param Request $request
     * @param FetchAuthTokenInterface $oAuth2Credential
     * @param AdWordsServices $adWordsServices
     * @param AdWordsSessionBuilder $adWordsSessionBuilder
     * @return View
     */
    public function downloadReportAction(
        Request $request,
        FetchAuthTokenInterface $oAuth2Credential,
        AdWordsServices $adWordsServices,
        AdWordsSessionBuilder $adWordsSessionBuilder
    ) {
        if ($request->method() === 'POST') {
            $clientCustomerId = $request->input('clientCustomerId');
            $reportType = $request->input('reportType');
            $reportRange = $request->input('reportRange');
            $entriesPerPage = $request->input('entriesPerPage');

            $selectedFields = array_values(
                $request->except(
                    [
                        '_token',
                        'clientCustomerId',
                        'reportType',
                        'entriesPerPage',
                        'reportRange'
                    ]
                )
            );
            $selectedFields = array_merge(
                self::$REPORT_TYPE_TO_DEFAULT_SELECTED_FIELDS[$reportType],
                $selectedFields
            );

            $request->session()->put('clientCustomerId', $clientCustomerId);
            $request->session()->put('reportType', $reportType);
            $request->session()->put('reportRange', $reportRange);
            $request->session()->put('selectedFields', $selectedFields);
            $request->session()->put('entriesPerPage', $entriesPerPage);

            // Construct an API session configured from a properties file and
            // the OAuth2 credentials above.
            $session =
                $adWordsSessionBuilder->fromFile(config('app.adsapi_php_path'))
                    ->withOAuth2Credential($oAuth2Credential)
                    ->withClientCustomerId($clientCustomerId)
                    ->build();

            // There is no paging mechanism for reporting, so we fetch all
            // results at once.
            $collection = self::downloadReport(
                $reportType,
                $reportRange,
                new ReportDownloader($session),
                $selectedFields
            );
            $request->session()->put('collection', $collection);
        } else {
            $selectedFields = $request->session()->get('selectedFields');
            $entriesPerPage = $request->session()->get('entriesPerPage');
            $collection = $request->session()->get('collection');
        }

        $pageNo = $request->input('page') ?: 1;

        // Create a length aware paginator to supply report results for the
        // view, based on the specified number of entries per page.
        $reportResults = new LengthAwarePaginator(
            $collection->forPage($pageNo, $entriesPerPage),
            $collection->count(),
            $entriesPerPage,
            $pageNo,
            ['path' => url('download-report')]
        );

        return view(
            'report-results',
            compact('reportResults', 'selectedFields')
        );
    }

    /**
     * Download a report of the specified report type and date range, selected
     * fields, and the number of entries per page.
     *
     * @param string $reportType
     * @param string $reportRange
     * @param ReportDownloader $reportDownloader
     * @param string[] $selectedFields
     * @return Collection
     */
    private function downloadReport(
        $reportType,
        $reportRange,
        ReportDownloader $reportDownloader,
        array $selectedFields
    ) {
        $query = (new ReportQueryBuilder())
            ->select($selectedFields)
            ->from($reportType)
            ->duringDateRange($reportRange)->build();

        // For brevity, this sample app always excludes zero-impression rows.
        $reportSettingsOverride = (new ReportSettingsBuilder())
            ->includeZeroImpressions(false)
            ->build();
        $reportDownloadResult = $reportDownloader->downloadReportWithAwql(
            "$query",
            DownloadFormat::XML,
            $reportSettingsOverride
        );

        $json = json_encode(
            simplexml_load_string($reportDownloadResult->getAsString())
        );
        $resultTable = json_decode($json, true)['table'];

        if (array_key_exists('row', $resultTable)) {
            // When there is only one row, PHP decodes it by automatically
            // removing the containing array. We need to add it back, so the
            // "view" can render this data properly.
            $row = $resultTable['row'];
            $row = count($row) > 1 ? $row : [$row];
            return collect($row);
        }

        // No results returned for this query.
        return collect([]);
    }
}

