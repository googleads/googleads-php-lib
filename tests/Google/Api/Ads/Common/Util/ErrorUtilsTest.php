<?php
/**
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/ErrorUtils.php';

/**
 * Unit tests for {@link ErrorUtils}.
 * @group small
 */
class ErrorUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * Test getting the API errors from a SOAP fault.
   * @param SoapFault $fault the SOAP fault to get errors from
   * @param array $expected the expected errors
   * @covers ErrorUtils::GetApiErrors
   * @dataProvider SoapFaultProvider
   */
  public function testGetApiErrors(SoapFault $fault, array $expected) {
    $errors = ErrorUtils::GetApiErrors($fault);
    $this->assertEquals($expected, $errors);
  }

  /**
   * Provides SOAP faults along with the expected errors.
   * @return array an array of arrays of SOAP faults and expected
   *     errors
   */
  public function SoapFaultProvider() {
    $data = array();
    $error = (object) array();

    // No SoapVar.
    $exception = (object) array('errors' => array($error));
    $details = (object) array('ApiExceptionFault' => $exception);
    $fault = new SoapFault('soap:Server', NULL, NULL, $details);
    $data[] = array($fault, array($error));

    // With SoapVar.
    $soapVar = new SoapVar($error, SOAP_ENC_OBJECT);
    $exception = (object) array('errors' => array($soapVar));
    $details = (object) array('ApiExceptionFault' => $exception);
    $fault = new SoapFault('soap:Server', NULL, NULL, $details);
    $data[] = array($fault, array($error));

    // No errors.
    $fault = new SoapFault('soap:Server', NULL);
    $data[] = array($fault, array());

    return $data;
  }

  /**
   * Test getting the index of the operation referenced by an error.
   * @param ApiError $error the ApiError to get the operation for
   * @param int $expected the expected operation
   * @covers ErrorUtils::GetSourceOperationIndex
   * @dataProvider SourceOperationIndexProvider
   */
  public function testGetSourceOperationIndex($error, $expected) {
    $index = ErrorUtils::GetSourceOperationIndex($error);
    $this->assertEquals($expected, $index);
  }

  /**
   * Provides errors along with the expected operation index.
   * @return array an array of arrays of error and expected
   *     operation index
   */
  public function SourceOperationIndexProvider() {
    $data = array();

    // Valid data sets.
    // First operation.
    $error = (object) array('fieldPath' => 'operations[0].operand');
    $data[] = array($error, 0);
    // Two digit index.
    $error = (object) array('fieldPath' => 'operations[10].operand');
    $data[] = array($error, 10);

    // Invalid data sets.
    // NULL field path.
    $error = (object) array('fieldPath' => NULL);
    $data[] = array($error, NULL);
    // Empty field path.
    $error = (object) array('fieldPath' => '');
    $data[] = array($error, NULL);
    // Field path that doesn't reference an operation.
    $error = (object) array('fieldPath' => 'foo');
    $data[] = array($error, NULL);
    // Negative index.
    $error = (object) array('fieldPath' => 'operations[-1]');
    $data[] = array($error, NULL);
    // Non-numeric index.
    $error = (object) array('fieldPath' => 'operations[foo]');
    $data[] = array($error, NULL);

    return $data;
  }
}

