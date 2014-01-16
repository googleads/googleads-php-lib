<?php
/**
 * This example sets custom field values on a line item. To determine
 * which custom fields exist, run GetAllCustomFieldsExample.php. To create
 * custom field options, run CreateCustomFieldOptionsExample.php. To
 * determine which line items exist run GetAllLineItemsExample.php.
 *
 * Tags: CustomFieldService.getCustomField
 * Tags: LineItemService.getLineItem
 * Tags: LineItemService.updateLineItems
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201311
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Rashidi
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomFieldService.
  $customFieldService = $user->GetService('CustomFieldService', 'v201311');

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201311');

  // Set the IDs of the custom fields, custom field option, and line item.
  $customFieldId = "INSERT_CUSTOM_FIELD_ID_HERE";
  $dropDownCustomFieldId = "INSERT_DROP_DOWN_CUSTOM_FIELD_ID_HERE";
  $customFieldOptionId = "INSERT_CUSTOM_FIELD_OPTION_ID_HERE";
  $lineItemId = "INSERT_LINE_ITEM_ID_HERE";

  // Get the line item.
  $lineItem = $lineItemService->getLineItem($lineItemId);

  // Create custom field values.
  $customFieldValues = array();

  $customFieldValue = new CustomFieldValue();
  $customFieldValue->customFieldId = $customFieldId;
  $customFieldValue->value = new TextValue("Custom field value");
  $customFieldValues[] = $customFieldValue;

  $dropDownCustomFieldValue = new DropDownCustomFieldValue();
  $dropDownCustomFieldValue->customFieldId = $dropDownCustomFieldId;
  $dropDownCustomFieldValue->customFieldOptionId = $customFieldOptionId;
  $customFieldValues[] = $dropDownCustomFieldValue;

  // Only add existing custom field values for different custom fields than
  // the ones you are setting.
  if (isset($lineItem->customFieldValues)) {
    foreach ($lineItem->customFieldValues as $oldCustomFieldValue) {
      if (($oldCustomFieldValue->customFieldId != $customFieldId) &&
          ($oldCustomFieldValue->customFieldId != $dropDownCustomFieldId)) {
        $customFieldValues[] = $oldCustomFieldValue;
      }
    }
  }

  $lineItem->customFieldValues = $customFieldValues;

  // Update the line item on the server.
  $lineItems = $lineItemService->updateLineItems($lineItem);

  if (isset($lineItems)) {
    foreach ($lineItems as $lineItem) {
      $customFieldValueStrings = array();
      foreach ($lineItem->customFieldValues as $baseCustomFieldValue) {
        if (($baseCustomFieldValue instanceof CustomFieldValue)) {
            $customFieldValueStrings[] = "{ID: '"
                . $baseCustomFieldValue->customFieldId . "', value: '"
                . $baseCustomFieldValue->value->value . "'}";
        } else if ($baseCustomFieldValue instanceof DropDownCustomFieldValue) {
            $customFieldValueStrings[] = "{ID: '"
                . $baseCustomFieldValue->customFieldId
                . "', custom field option ID: '"
                . $baseCustomFieldValue->customFieldOptionId . "'}";
        }
      }
      print "A line item with ID '" . $lineItem->id
          . "' was set with custom field values '"
          . join(",", $customFieldValueStrings) . "'.";
    }
  }

} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

