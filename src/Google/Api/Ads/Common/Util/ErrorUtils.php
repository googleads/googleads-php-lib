<?php
/**
 * A collection of utility methods for working with errors.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * A collection of utility methods for working with errors.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class ErrorUtils {

  private static $API_EXCEPTION_FIELD_NAME = 'ApiExceptionFault';
  private static $OPERATION_INDEX_OGNL_REGEX = '/^operations\[(\d+)\]/';

  /**
   * The ErrorUtils class is not meant to have any instances.
   * @access private
   */
  private function __construct() {}

  /**
   * Gets the ApiErrors in the SOAP fault, if any.
   * @param SoapFault $fault the SOAP fault to extract errors from
   * @return array the ApiErrors in the SOAP fault, or an empty array if there
   *     were none
   */
  public static function GetApiErrors(SoapFault $fault) {
    $results = array();
    if (isset($fault->detail)) {
      foreach (get_object_vars($fault->detail) as $fieldName => $fieldValue) {
        if ($fieldName == ErrorUtils::$API_EXCEPTION_FIELD_NAME) {
          $errors = $fieldValue->errors;
          if (!is_array($errors)) {
            $errors = array($errors);
          }
          foreach ($errors as $error) {
            if ($error instanceof SoapVar) {
              $error = $error->enc_value;
            }
            $results[] = $error;
          }
        }
      }
    }
    return $results;
  }

  /**
   * Gets the index of the operation that was the source of an error.
   * @param mixed $error the error returned in the response
   * @return int the index of the operation that caused the error, or NULL if
   *     no operation was referenced by the error
   */
  public static function GetSourceOperationIndex($error) {
    $matches = array();
    if (preg_match(ErrorUtils::$OPERATION_INDEX_OGNL_REGEX, $error->fieldPath,
        $matches)) {
      return $matches[1];
    } else {
      // Invalid fieldPath.
      return NULL;
    }
  }
}

