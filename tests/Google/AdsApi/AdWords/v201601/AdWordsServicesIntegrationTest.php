<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\AdWords\v201601;


use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201601\cm\Campaign;
use Google\AdsApi\AdWords\v201601\cm\Selector;
use Google\AdsApi\Common\AdsServicesSoapClientFactory;
use Google\AdsApi\Common\Testing\ApplicationNameTestHelper;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit_Framework_TestCase;

/**
 * Integration test for AdWordsServices.
 * @see AdWordsServices
 * @large
 */
class AdWordsServicesIntegrationTest extends PHPUnit_Framework_TestCase {

  private $applicationNameTestHelper;
  private $adWordsSession;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->applicationNameTestHelper = new ApplicationNameTestHelper();

    $simpleGoogleCredentialMock =
        $this->getMock('Google\AdsApi\Common\Util\SimpleGoogleCredential');
    $adWordsSessionBuilder = new AdWordsSessionBuilder();
    $this->adWordsSession = $adWordsSessionBuilder
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withUserAgent('report downloader')
        ->withOAuth2Credential($simpleGoogleCredentialMock)
        ->withLogger(new Logger('', array(new NullHandler())))
        ->build();

    set_include_path(get_include_path() . PATH_SEPARATOR
        . __DIR__ . '/../../../../../src/Google/AdsApi/AdWords/Testing');
  }

  /**
   * @see PHPUnit_Framework_TestCase::tearDown
   */
  protected function tearDown() {
    restore_include_path();
  }

  /**
   * Tests a successful end to end call to the CampaignService with the XML
   * response mocked out so the API call never reaches the live service. Note
   * however that the PHP SOAP client still requires a live WSDL to validate
   * against.
   *
   * @param Campaign[] $expectedCampaigns the expected campaigns
   * @covers Google\AdsApi\AdWords\AdWordsServices::get
   * @dataProvider campaignProvider
   */
  public function testGetCallToCampaignServiceReturnsResults(
      array $expectedCampaigns) {
    // Mock the SOAP XML response from the HTTP request to the campaign service.
    $campaignServiceMock = $this
        ->getMockBuilder('Google\AdsApi\AdWords\v201601\cm\CampaignService')
        ->setMethods(array('__doRequest'))
        ->getMock();
    // Test that the application name is formatted correctly in the outgoing
    // SOAP XML request header.
    $campaignServiceMock->expects($this->once())
        ->method('__doRequest')
        ->with($this->matchesRegularExpression(
            $this->applicationNameTestHelper
                ->getRegexForFormattedApplicationName('report downloader')))
        ->will($this->returnValue(file_get_contents('getCampaigns_response.xml',
            FILE_USE_INCLUDE_PATH)));
    // "Inject" the mock campaign service.
    $reflectionUtilsMock =
        $this->getMockBuilder('Google\AdsApi\Common\Util\AdsReflectionUtils')
        ->getMock();
    $reflectionUtilsMock->expects($this->once())
        ->method('createInstance')
        ->will($this->returnValue($campaignServiceMock));
    $soapClientFactory = new AdsServicesSoapClientFactory($reflectionUtilsMock);

    // Use AdWords services to get an instance of a campaign service, which will
    // configure and return the mock campaign service.
    $adWordsServices = new AdWordsServices();
    $adWordsServices->setSoapClientFactory($soapClientFactory);
    $campaignService = $adWordsServices->get(
        $this->adWordsSession, 'CampaignService', 'v201601', 'cm');

    // Make an API call where the mock campaign service will return a mocked
    // SOAP XML response.
    $selector = new Selector();
    $selector->setFields(array('Id', 'Name', 'Status', 'StartDate', 'EndDate'));
    $page = $campaignService->get($selector);

    // Check that the campaign service (which is a SOAP client) has deserialized
    // the SOAP XML response to the Campaign object correctly.
    $actualCampaigns = $page->getEntries();
    $this->assertSame(count($expectedCampaigns), count($actualCampaigns));

    for ($i = 0; $i < count($actualCampaigns); $i++) {
      $expectedCampaign = $expectedCampaigns[$i];
      $actualCampaign = $actualCampaigns[$i];
      $this->assertSame(
          $expectedCampaign->getId(),
          $actualCampaign->getId(),
          'Campaign ID does not match.'
      );
      $this->assertSame(
          $expectedCampaign->getName(),
          $actualCampaign->getName(),
          'Campaign name does not match.'
      );
      $this->assertSame(
          $expectedCampaign->getStatus(),
          $actualCampaign->getStatus(),
          'Campaign status does not match.'
      );
      $this->assertSame(
          $expectedCampaign->getStartDate(),
          $actualCampaign->getStartDate(),
          'Campaign start date does not match.'
      );
      $this->assertSame(
          $expectedCampaign->getEndDate(),
          $actualCampaign->getEndDate(),
          'Campaign end date does not match.'
      );
    }
  }

  /**
   * Tests an unsuccessful end to end call to the CampaignService with the XML
   * response mocked out so the API call never reaches the live service. Note
   * however that the PHP SOAP client still requires a live WSDL to validate
   * against.
   *
   * @covers Google\AdsApi\AdWords\AdWordsServices::get
   * @expectedException SoapFault
   * @expectedExceptionMessage [SelectorError.INVALID_FIELD_NAME @ serviceSelector; trigger:'asDEEf'; errorDetails:asDEEf]
   */
  public function testGetCallToCampaignServiceExpectFault() {
    // Mock the SOAP XML response from the HTTP request to the campaign service.
    $campaignServiceMock = $this
        ->getMockBuilder('Google\AdsApi\AdWords\v201601\cm\CampaignService')
        ->setMethods(array('__doRequest'))
        ->getMock();
    $campaignServiceMock->expects($this->once())
        ->method('__doRequest')
        ->will($this->returnValue(file_get_contents(
            'getCampaigns_soapfault.xml', FILE_USE_INCLUDE_PATH)));
    // "Inject" the mock campaign service.
    $reflectionUtilsMock =
        $this->getMockBuilder('Google\AdsApi\Common\Util\AdsReflectionUtils')
        ->getMock();
    $reflectionUtilsMock->expects($this->once())
        ->method('createInstance')
        ->will($this->returnValue($campaignServiceMock));
    $soapClientFactory = new AdsServicesSoapClientFactory($reflectionUtilsMock);

    // Use AdWords services to get an instance of a campaign service, which will
    // configure and return the mock campaign service.
    $adWordsServices = new AdWordsServices();
    $adWordsServices->setSoapClientFactory($soapClientFactory);
    $campaignService = $adWordsServices->get(
        $this->adWordsSession, 'CampaignService', 'v201601', 'cm');

    // Make an API call where the mock campaign service will return a mocked
    // SOAP XML response.
    $selector = new Selector();
    $selector->setFields(array('Id', 'Name', 'Status', 'StartDate', 'EndDate'));
    $page = $campaignService->get($selector);
  }

  /**
   * Provides expected campaign objects.
   *
   * @return array an array of arrays of expected campaign objects
   */
  public function campaignProvider() {
    $campaign1 = new Campaign();
    $campaign1->setId(9223372036854775808);
    $campaign1->setName('Summer shoes');
    $campaign1->setStatus('ENABLED');
    $campaign1->setStartDate('20120701');
    $campaign1->setEndDate('20120825');

    $campaign2 = new Campaign();
    $campaign2->setId(123456789);
    $campaign2->setName('Fall clothing');
    $campaign2->setStatus('ENABLED');
    $campaign2->setStartDate('20120901');
    $campaign2->setEndDate('20121215');

    return array(array(array($campaign1, $campaign2)));
  }
}

