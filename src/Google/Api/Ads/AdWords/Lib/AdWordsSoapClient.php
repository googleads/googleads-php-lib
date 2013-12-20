<?php
/**
 * An extension of the {@link AdsSoapClient} for the AdWords API.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Lib
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @see        AdsSoapClient
 */
require_once dirname(__FILE__) . '/../../Common/Lib/AdsSoapClient.php';

/**
 * An extension of the {@link AdsSoapClient} for the AdWords API.
 * @package GoogleApiAdsAdWords
 * @subpackage Lib
 */
class AdWordsSoapClient extends AdsSoapClient {

  /**
   * Constructor for the AdWords API SOAP client.
   * @param string $wsdl URI of the WSDL file or <var>NULL</var> if working in
   *     non-WSDL mode
   * @param array $options the SOAP client options
   * @param AdsUser $user the user which is responsible for this client
   * @param string $serviceName the name of the service which is making this
   *     call
   * @param string $serviceNamespace the namespace of the service
   */
  public function __construct($wsdl, array $options, AdsUser $user,
      $serviceName, $serviceNamespace) {
    parent::__construct($wsdl, $options, $user, $serviceName,
        $serviceNamespace);
  }

  /**
   * Overrides the method __doRequest(). When OAuth2 authentication is used the
   * URL parameters added.
   * @param string $request the request XML
   * @param string $location the URL to request
   * @param string $action the SOAP action
   * @param string $version the SOAP version
   * @param int $one_way if set to 1, this method returns nothing
   * @return string the XML SOAP response
   */
  function __doRequest($request , $location , $action , $version,
      $one_way = 0) {
    $oAuth2Info = $this->user->GetOAuth2Info();
    $oAuth2Handler = $this->user->GetOAuth2Handler();
    if (!empty($oAuth2Info)) {
      $oAuth2Info = $oAuth2Handler->GetOrRefreshAccessToken($oAuth2Info);
      $this->user->SetOAuth2Info($oAuth2Info);
      $oauth2Parameters = $oAuth2Handler->FormatCredentialsForUrl($oAuth2Info);
      $location .= '?' . $oauth2Parameters;
    }
    return parent::__doRequest($request, $location, $action, $version);
  }

  /**
   * Generates the SOAP header for the client.
   * @return SoapHeader the instantiated SoapHeader ready to set
   * @access protected
   */
  protected function GenerateSoapHeader() {
    $headerObject = $this->Create('SoapHeader');
    foreach (get_object_vars($headerObject) as $var => $value) {
      $headerObject->$var = $this->GetHeaderValue($var);
    }
    return new SoapHeader($this->serviceNamespace, 'RequestHeader',
        $headerObject, FALSE);
  }

  /**
   * Removes the authentication token from the request before being logged.
   * @param string $request the request with sensitive data to remove
   * @return string the request with the authentication token removed
   * @access protected
   */
  protected function RemoveSensitiveInfo($request) {
    $result = preg_replace(
        '/(.*authToken>)(.*)(<\/.*authToken>.*)/sU', '\1*****\3', $request);
    return isset($result) ? $result : $request;
  }

  /**
   * Gets the effective user the request was made against.
   * @return string the effective user the request was made against
   */
  public function GetEffectiveUser() {
    return $this->GetAdsUser()->GetClientCustomerId();
  }

  /**
   * Gets the last set of operators the last call in the form of
   * "operator1,operator2".
   * @return string the last set of operators
   */
  public function GetLastOperators() {
    try {
      $operatorString = '{';
      $operators = array();
      $operatorElements =
          $this->GetLastRequestDom()->getElementsByTagName('operator');

      foreach ($operatorElements as $operatorElement) {
        if (array_key_exists($operatorElement->nodeValue, $operators)) {
          $operators[$operatorElement->nodeValue] += 1;
        } else {
          $operators[$operatorElement->nodeValue] = 1;
        }
      }

      foreach ($operators as $operator => $numOps) {
        $operatorString .= $operator . ': ' . $numOps . ', ';
      }

      if ($operatorString != '{') {
        $operatorString = substr($operatorString, 0, -2);
      }

      return $operatorString . '}';
    } catch (DOMException $e) {
      // TODO(api.arogal): Log failures to retrieve headers.
      return 'null';
    }
  }

  /**
   * Gets the last number of operations.
   * @return string the last number of operations
   */
  public function GetLastOperations() {
    try {
      $operationsElements =
          $this->GetLastResponseDom()->getElementsByTagName('operations');
      foreach ($operationsElements as $operationsElement) {
        return $operationsElement->nodeValue;
      }
    } catch (DOMException $e) {
      // TODO(api.arogal): Log failures to retrieve headers.
      return 'null';
    }
  }

  /**
   * Gets the last number of units.
   * @return string the last number of units
   */
  public function GetLastUnits() {
    try {
      $unitsElements =
          $this->GetLastResponseDom()->getElementsByTagName('units');
      foreach ($unitsElements as $unitsElement) {
        return $unitsElement->nodeValue;
      }
    } catch (DOMException $e) {
      // TODO(api.arogal): Log failures to retrieve headers.
      return 'null';
    }
  }

  /**
   * Generates the request info message containing:
   * <ul>
   * <li>email</li>
   * <li>effectiveUser</li>
   * <li>service</li>
   * <li>method</li>
   * <li>operators</li>
   * <li>responseTime</li>
   * <li>requestId</li>
   * <li>operations</li>
   * <li>units</li>
   * <li>server</li>
   * <li>isFault</li>
   * <li>faultMessage</li>
   * </ul>
   * @return string the request info message to log
   * @access protected
   */
  protected function GenerateRequestInfoMessage() {
    return 'email=' . $this->GetEmail() . ' effectiveUser='
        . $this->GetEffectiveUser() . ' service=' . $this->GetServiceName()
        . ' method=' . $this->GetLastMethodName() . ' operators='
        . $this->GetLastOperators() . ' responseTime='
        . $this->GetLastResponseTime() . ' requestId='
        . $this->GetLastRequestId() . ' operations='
        . $this->GetLastOperations() . ' units='
        . $this->GetLastUnits() . ' server=' . $this->GetServer()
        . ' isFault=' . ($this->IsFault() ? 'true' : 'false')
        . ' faultMessage=' . $this->GetLastFaultMessage();
  }
}

