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
namespace Google\AdsApi\AdWords\Reporting\v201605;

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\Reporting\NonEmptyFieldObjectNormalizer;
use Google\AdsApi\Common\OAuth2TokenRefresher;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

/**
 * Creates request options for downloading reports.
 */
class RequestOptionsFactory {

  private $session;
  private $reportDefinitionSerializer;
  private $oAuth2TokenRefresher;

  /**
   * Creates a factory for request options with the specified AdWords session.
   *
   * @param AdWordsSession $session the session for using the AdWords API
   * @param Serializer|null $reportDefinitionSerializer the Symfony serializer
   *     for serializing report definitions
   */
  public function __construct(AdWordsSession $session,
      Serializer $reportDefinitionSerializer = null) {
    $this->session = $session;
    $this->reportDefinitionSerializer = ($reportDefinitionSerializer === null)
        ? new Serializer([new NonEmptyFieldObjectNormalizer()],
            [new XmlEncoder()])
        : $reportDefinitionSerializer;
    $this->oAuth2TokenRefresher = new OAuth2TokenRefresher();
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
    return [
        RequestOptions::HEADERS => $this->createHeaders(),
        RequestOptions::FORM_PARAMS => $params,
    ];
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
    return [
        RequestOptions::HEADERS => $this->createHeaders(),
        RequestOptions::FORM_PARAMS => $params,
    ];
  }
}
