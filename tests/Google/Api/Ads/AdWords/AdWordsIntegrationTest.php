<?php
/**
 * Copyright 2013, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Testing/AssetHelper.php';
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';

/**
 * Integration test for the AdWords library.
 * @group large
 */
class AdWordsIntegrationTest extends PHPUnit_Framework_TestCase {

  const SERVICE = 'CampaignService';
  const RESPONSE_NAME = '%s-response.xml';
  const CAMPAIGN_ID = '000000000';

  protected $xmlResponse;
  protected $adWordsUser;

  public function setUp() {
    date_default_timezone_set('America/New_York');
    $assetHelper = new AssetHelper(dirname(__FILE__));

    $this->xmlResponse = $assetHelper->getAsset(
        sprintf(self::RESPONSE_NAME, self::SERVICE));

    $this->adWordsUser = new AdWordsUser(
        $assetHelper->getAssetPath('auth.ini'));
  }

  /**
   * Tests that the user agent header is properly set for this client library.
   */
  public function testIntegrationCheckUserAgent() {
    $campaignService = $this->adWordsUser->getService(self::SERVICE);

    // Build a mocked SoapClient.
    $headerPortion = implode('/',
        $this->adWordsUser->GetClientLibraryNameAndVersion());

    // Setup the test.
    $soapClientMock = $this->getMockBuilder('SoapClient')
                           ->setMethods(array('__doRequest'))
                           ->disableOriginalConstructor()
                           ->getMock();

    $soapClientMock->expects($this->any())
                   ->method('__doRequest')
                   ->with($this->stringContains($headerPortion, false))
                   ->will($this->returnValue($this->xmlResponse));

    // Set the transport layer on the soap client to be the mocked soap client.
    $campaignService->__SetTransportLayer($soapClientMock);

    // Create selector.
    $selector = new Selector();
    // Specify the fields to retrieve.
    $selector->fields = array('Login', 'CustomerId', 'Name');

    // Make the get request.
    $graph = $campaignService->get($selector);

    $this->assertEquals($graph->entries[0]->id, self::CAMPAIGN_ID);
  }

  /**
   * Tests that the OAuth2 access token is properly set in the HTTP headers.
   */
  public function testIntegrationCheckHttpHeaders() {
    $campaignService = $this->adWordsUser->getService(self::SERVICE);
    $selector = new Selector();
    $selector->fields = array('Login', 'CustomerId', 'Name');

    try {
      $campaignService->get($selector);
      // We expect this exception since we're using a dummy access token, but
      // we need to make the request in order for the last request headers to
      // be filled in by the soap client.
    } catch (Exception $e) {
      $this->assertRegExp('/Authorization: Bearer TestAccessToken/',
          $campaignService->__getLastRequestHeaders());
    }
  }

  /**
   * Tests that an overriden access token is set in the HTTP headers.
   */
  public function testIntegrationOAuth2Handler_ValidAccessToken() {
    $credentialsOverride = array(
      'access_token' => sprintf('TEST_ACCESS_TOKEN_%s', uniqid())
    );
    $oAuth2Info = $this->adWordsUser->GetOAuth2Info();
    $this->adWordsUser->SetOAuth2Info(array_merge($oAuth2Info,
        $credentialsOverride));

    $campaignService = $this->adWordsUser->getService(self::SERVICE);
    $selector = new Selector();
    $selector->fields = array('Login', 'CustomerId', 'Name');

    try {
      $campaignService->get($selector);
      // We expect this exception since we're using a dummy access token, but
      // we need to make the request in order for the last request headers to
      // be filled in by the soap client.
    } catch (Exception $e) {
      $this->assertRegExp(sprintf("/Authorization: Bearer %s/",
          $credentialsOverride['access_token']),
          $campaignService->__getLastRequestHeaders());
    }
  }

  /**
   * Tests that the OAuth2 access token is refreshed correctly and set in the
   * HTTP headers.
   */
  public function testIntegrationOAuth2Handler_InvalidAccessToken() {
    $credentialsOverride = array(
      'access_token' => sprintf('TEST_ACCESS_TOKEN_%s', uniqid()),
      'refresh_token' => sprintf('TEST_REFRESH_TOKEN_%s', uniqid()),
      'expires_in' => '3600',
      'timestamp' => strtotime('-1 day'),
    );
    $credentialsRefreshed = array(
      'access_token' => sprintf('TEST_ACCESS_TOKEN_%s', uniqid()),
      'refresh_token' => $credentialsOverride['refresh_token'],
      'expires_in' => '3600',
      'timestamp' => time(),
      'Foo' => 'bar',
    );

    $oAuth2Info = $this->adWordsUser->GetOAuth2Info();
    $newOAuth2Info = array_merge($oAuth2Info, $credentialsOverride);
    $this->adWordsUser->SetOAuth2Info($newOAuth2Info);

    // Setup the mocked OAuth2Handler class.
    $oAuth2Handler = $this->getMock('SimpleOAuth2Handler',
        array('RefreshAccessToken'));
    $oAuth2Handler->expects($this->any())
                  ->method('RefreshAccessToken')
                  ->will($this->returnValue($credentialsRefreshed));
    $this->adWordsUser->SetOAuth2Handler($oAuth2Handler);

    $campaignService = $this->adWordsUser->getService(self::SERVICE);
    $selector = new Selector();
    $selector->fields = array('Login', 'CustomerId', 'Name');

    try {
      $campaignService->get($selector);
      // We expect this exception since we're using a dummy access token, but
      // we need to make the request in order for the last request headers to
      // be filled in by the soap client.
    } catch (Exception $e) {
      $this->assertRegExp(sprintf("/Authorization: Bearer %s/",
          $credentialsRefreshed['access_token']),
          $campaignService->__getLastRequestHeaders());
    }
  }
}

