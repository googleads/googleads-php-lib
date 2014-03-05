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
 * @author     Paul Matthews
 * @author     Vincent Tsao
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
    $selector->fields = array('Login', 'CustomerId',  'Name');

    // Make the get request.
    $graph = $campaignService->get($selector);

    $this->assertEquals($graph->entries[0]->id, self::CAMPAIGN_ID);
  }

  /**
   * Tests that the user access_token is properly set in the URL for this client
   * library.
   */
  public function testIntegrationCheckSoapHeaders() {
    $campaignService = $this->adWordsUser->getService(self::SERVICE);

    $oauth2AccessToken = '';
    $oAuth2Info = $this->adWordsUser->GetOAuth2Info();
    if (is_array($oAuth2Info) && isset($oAuth2Info['access_token'])) {
      $oauth2AccessToken = $oAuth2Info['access_token'];
    }
    $oauth2Url = http_build_query(array('access_token' => $oauth2AccessToken));

    // Setup the test.
    $soapClientMock = $this->getMockBuilder('SoapClient')
                           ->setMethods(array('__doRequest'))
                           ->disableOriginalConstructor()
                           ->getMock();

    // Checking for the URL param for the auth token
    // (passed in the second function param)
    $soapClientMock->expects($this->any())
                   ->method('__doRequest')
                   ->with($this->anything(), $this->stringContains($oauth2Url))
                   ->will($this->returnValue($this->xmlResponse));

    // Set the transport layer on the soap client to be the mocked soap client.
    $campaignService->__SetTransportLayer($soapClientMock);

    // Create selector.
    $selector = new Selector();
    // Specify the fields to retrieve.
    $selector->fields = array('Login', 'CustomerId',  'Name');

    // Make the get request.
    $campaignService->get($selector);

    $this->assertFalse(empty($oauth2AccessToken));
  }

  /**
   * Tests that access_token is properly converted into a URL parameter for this
   * client library when it's valid.
   */
  public function testIntegrationOAuth2Handler_ValidAccessToken() {
    $credentialsOverride = array(
      'access_token' => sprintf('TEST_ACCESS_TOKEN_%s', uniqid())
    );

    $campaignService = $this->adWordsUser->getService(self::SERVICE);

    $oAuth2Info = $this->adWordsUser->GetOAuth2Info();
    $this->adWordsUser->SetOAuth2Info(array_merge($oAuth2Info,
        $credentialsOverride));

    // Get the expected auth param for the URL.
    $oauth2Url = http_build_query(
        array('access_token' => $credentialsOverride['access_token']));

    // Setup the test.
    $soapClientMock = $this->getMockBuilder('SoapClient')
                           ->setMethods(array('__doRequest'))
                           ->disableOriginalConstructor()
                           ->getMock();

    // Checking for the URL param for the auth token
    // (passed in the second function param)
    $soapClientMock->expects($this->any())
                   ->method('__doRequest')
                   ->with($this->anything(), $this->stringContains($oauth2Url))
                   ->will($this->returnValue($this->xmlResponse));

    // Set the transport layer on the soap client to be the mocked soap client.
    $campaignService->__SetTransportLayer($soapClientMock);

    // Create selector.
    $selector = new Selector();
    // Specify the fields to retrieve.
    $selector->fields = array('Login', 'CustomerId',  'Name');

    // Make the get request.
    $campaignService->get($selector);
  }

  /**
   * Tests that the access_token is refreshed correctly and set on the URL
   * params for this client library.
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

    $campaignService = $this->adWordsUser->getService(self::SERVICE);

    $oAuth2Info = $this->adWordsUser->GetOAuth2Info();
    $newOAuth2Info = array_merge($oAuth2Info, $credentialsOverride);
    $this->adWordsUser->SetOAuth2Info($newOAuth2Info);

    // Get the expected auth param for the URL.
    $oauth2Url = http_build_query(
        array('access_token' => $credentialsRefreshed['access_token']));

    // Setup the mocked OAuth2Handler class.
    $oAuth2Handler = $this->getMock('SimpleOAuth2Handler',
        array('RefreshAccessToken'));

    $oAuth2Handler->expects($this->any())
                  ->method('RefreshAccessToken')
                  ->will($this->returnValue($credentialsRefreshed));
    $this->adWordsUser->SetOAuth2Handler($oAuth2Handler);

    // Setup the test.
    $soapClientMock = $this->getMockBuilder('SoapClient')
                           ->setMethods(array('__doRequest'))
                           ->disableOriginalConstructor()
                           ->getMock();

    // Checking for the URL param for the auth token (passed in the second
    // function param).
    $soapClientMock->expects($this->any())
                   ->method('__doRequest')
                   ->with($this->anything(), $this->stringContains($oauth2Url))
                   ->will($this->returnValue($this->xmlResponse));

    // Set the transport layer on the soap client to be the mocked soap client.
    $campaignService->__SetTransportLayer($soapClientMock);

    // Create selector.
    $selector = new Selector();
    // Specify the fields to retrieve.
    $selector->fields = array('Login', 'CustomerId',  'Name');

    // Make the get request.
    $campaignService->get($selector);
  }
}
