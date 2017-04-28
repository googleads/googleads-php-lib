<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\AdWords\Reporting\v201702;

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsNormalizer;
use Google\AdsApi\Common\Util\OAuth2TokenRefresher;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

/**
 * Creates request options for downloading reports.
 */
class RequestOptionsFactory {

  /**
   * A default timeout for opening streams to download AdWords API reports.
   * You can override this using the constructor. See README.md for details.
   */
  const DEFAULT_TIMEOUT_IN_SECONDS = 120;

  private $session;
  private $reportDefinitionSerializer;
  private $oAuth2TokenRefresher;
  private $options;

  /**
   * Creates a factory for request options with the specified AdWords session.
   *
   * @param AdWordsSession $session the session for using the AdWords API
   * @param string[] $options the additional request options for making
   *     requests in the form of associative array
   * @param Serializer|null $reportDefinitionSerializer the Symfony serializer
   *     for serializing report definitions
   */
  public function __construct(
      AdWordsSession $session,
      array $options = null,
      Serializer $reportDefinitionSerializer = null
  ) {
    $this->session = $session;
    $this->reportDefinitionSerializer = ($reportDefinitionSerializer === null)
        ? new Serializer([new AdWordsNormalizer()],
            [new XmlEncoder()])
        : $reportDefinitionSerializer;
    $this->oAuth2TokenRefresher = new OAuth2TokenRefresher();
    $this->options = ($options === null) ? [
        'stream_context' => [
            'http' => ['timeout' => self::DEFAULT_TIMEOUT_IN_SECONDS]
        ]
    ] : $options;
  }

  private function createHeaders() {
    $headers = [
        'Authorization' => 'Bearer ' . urlencode(
            $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                $this->session->getOAuth2Credential())),
        'developerToken' => $this->session->getDeveloperToken(),
        'clientCustomerId' => $this->session->getClientCustomerId()
    ];
    // Assigns 'true' or 'false' strings based on the boolean values, as the
    // AdWords API reporting expects those strings, but PHP casts boolean
    // values to string as '1' and ''.
    $headers['skipReportHeader'] =
        ($this->session->getReportSettings()->isSkipReportHeader())
        ? 'true' : 'false';
    $headers['skipColumnHeader'] =
        ($this->session->getReportSettings()->isSkipColumnHeader())
        ? 'true' : 'false';
    $headers['skipReportSummary'] =
        ($this->session->getReportSettings()->isSkipReportSummary())
        ? 'true' : 'false';
    $headers['useRawEnumValues'] =
        ($this->session->getReportSettings()->isUseRawEnumValues())
        ? 'true' : 'false';
    if ($this->session->getReportSettings()->isIncludeZeroImpressions()
        !== null) {
      $headers['includeZeroImpressions'] =
          ($this->session->getReportSettings()->isIncludeZeroImpressions())
          ? 'true' : 'false';
    }
    return $headers;
  }

  /**
   * Creates request options for downloading a report using an XML-based report
   * definition.
   *
   * @see
   *     https://developers.google.com/adwords/api/docs/guides/reporting#create-a-report-definition
   * @param ReportDefinition $reportDefinition the report definition
   * @return array the request options
   */
  public function createRequestOptionsWithReportDefinition(
      ReportDefinition $reportDefinition) {
    $context = ['xml_root_node_name' => 'reportDefinition'];
    $params['__rdxml'] = $this->reportDefinitionSerializer->serialize(
        $reportDefinition, 'xml', $context);
    return array_merge($this->options, [
        RequestOptions::HEADERS => $this->createHeaders(),
        RequestOptions::FORM_PARAMS => $params,
    ]);
  }

  /**
   * Creates request options for downloading a report using an AWQL-based
   * report definition.
   *
   * @see
   *     https://developers.google.com/adwords/api/docs/guides/reporting#create-a-report-definition
   * @param string $reportDefinition the report definition in AWQL format
   * @param string $reportFormat the format to download report as
   * @return array the request options
   */
  public function createRequestOptionsWithAwqlQuery($reportDefinition,
      $reportFormat) {
    $params = ['__rdquery' => $reportDefinition, '__fmt' => $reportFormat];
    return array_merge($this->options, [
        RequestOptions::HEADERS => $this->createHeaders(),
        RequestOptions::FORM_PARAMS => $params,
    ]);
  }
}
