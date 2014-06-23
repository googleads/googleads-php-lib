<?php
/**
 * This example updates the names of all companies that are advertisers by
 * appending "LLC." up to the first 500. To determine which companies exist, run
 * GetAllCompaniesExample.php.
 *
 * Tags: CompanyService.getCompaniesByStatement
 * Tags: CompanyService.updateCompanies
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CompanyService.
  $companyService = $user->GetService('CompanyService', 'v201405');

  // Create a statement to only select companies that are advertisers.
  $filterStatement = new Statement("WHERE type = 'ADVERTISER' LIMIT 500");

  // Get companies by statement.
  $page = $companyService->getCompaniesByStatement($filterStatement);

  if (isset($page->results)) {
    $companies = $page->results;

    // Update each local company object by appending LLC. to its name.
    foreach ($companies as $company) {
      $company->name .= ' LLC.';
    }

    // Update the companies on the server.
    $companies = $companyService->updateCompanies($companies);

    // Display results.
    if (isset($companies)) {
      foreach ($companies as $company) {
        print 'A company with ID "' . $company->id
            . '" and name "' . $company->name . "\" was updated.\n";
      }
    } else {
      print "No companies updated.\n";
    }
  } else {
    print "No companies found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

