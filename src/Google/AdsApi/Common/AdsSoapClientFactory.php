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
namespace Google\AdsApi\Common;

/**
 * Factory for creating SOAP clients that interface with ads APIs.
 * @see http://php.net/manual/en/class.soapclient.php
 */
interface AdsSoapClientFactory {

  /**
   * Generates a SOAP client that interfaces with the specified service using
   * configuration data from the specified ads session.
   *
   * @param AdsSession $session the session to read configuration information
   *     from
   * @param AdsHeaderHandler $headerHandler the header handler that will
   *     generate HTTP and SOAP headers
   * @param AdsServiceDescriptor $serviceDescriptor descriptor for the service
   *     the SOAP client is being generated to interface with
   * @return SoapClient a SOAP client
   * @throws UnexpectedValueException if the SOAP client could not be generated
   */
  public function generateSoapClient(AdsSession $session,
      AdsHeaderHandler $headerHandler,
      AdsServiceDescriptor $serviceDescriptor);
}

