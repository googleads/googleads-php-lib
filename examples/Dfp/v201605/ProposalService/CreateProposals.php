<?php
/**
 * This example creates a new proposal. To determine which proposals exist, run
 * GetAllProposals.php.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the advertiser that the proposal will belong to.
$advertiserId = 'INSERT_ADVERTISER_ID_HERE';

// Set the ID of the primary salesperson.
$primarySalespersonId = 'INSERT_PRIMARY_SALESPERSON_ID_HERE';

// Set the ID of the secondary salesperson.
$secondarySalespersonId = 'INSERT_SECONDARY_SALESPERSON_ID_HERE';

// Set the ID of the primary trafficker.
$primaryTraffickerId = 'INSERT_PRIMARY_TRAFFICKER_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ProposalService.
  $proposalService = $user->GetService('ProposalService', 'v201605');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201605');

  // Create a proposal.
  $proposal = new Proposal();
  $proposal->name = sprintf('Proposal #%s', uniqid());

  // Create a proposal company association.
  $proposalCompanyAssociation = new ProposalCompanyAssociation();
  $proposalCompanyAssociation->companyId = $advertiserId;
  $proposalCompanyAssociation->type = 'ADVERTISER';
  $proposal->advertiser = $proposalCompanyAssociation;

  // Create salesperson splits for the primary salesperson and secondary
  // salespeople.
  $primarySalesperson = new SalespersonSplit();
  $primarySalesperson->userId = $primarySalespersonId;
  $primarySalesperson->split = 75000;
  $proposal->primarySalesperson = $primarySalesperson;

  $secondarySalesperson = new SalespersonSplit();
  $secondarySalesperson->userId = $secondarySalespersonId;
  $secondarySalesperson->split = 25000;
  $proposal->secondarySalespeople = array($secondarySalesperson);

  // Set the probability to close to 100%.
  $proposal->probabilityOfClose = 100000;

  // Set the primary trafficker on the proposal for when it becomes an order.
  $proposal->primaryTraffickerId = $primaryTraffickerId;

  // Create a budget for the proposal worth 100 in the network local currency.
  $budget = new Money();
  $budget->microAmount = 100000000;
  $budget->currencyCode = $networkService->getCurrentNetwork()->currencyCode;
  $proposal->budget = $budget;

  $proposal->billingCap = 'CAPPED_CUMULATIVE';
  $proposal->billingSource = 'DFP_VOLUME';

  // Create the proposal on the server.
  $proposals = $proposalService->createProposals(array($proposal));

  foreach ($proposals as $createdProposal) {
    printf("A proposal with ID %d and name '%s' was created.\n",
        $createdProposal->id, $createdProposal->name);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

