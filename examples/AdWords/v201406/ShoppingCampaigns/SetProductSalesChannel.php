<?php
/**
 * This example sets the product sales channel.
 *
 * Tags: CampaignCriterionService.mutate
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201406
 * @category   WebServices
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

// ProductSalesChannel is a fixedId criterion, with the possible values
// defined here.
define('ONLINE', 200);
define('LOCAL', 201);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $campaignId the campaign to modify
 */
function setProductSalesChannelExample(AdWordsUser $user, $campaignId) {
  // Get the CampaignCriterionService, which loads the required classes.
  $campaignCriterionService = $user->GetService('CampaignCriterionService',
        ADWORDS_VERSION);

  $productSalesChannel = new ProductSalesChannel(ONLINE);

  $campaignCriterion = new CampaignCriterion();
  $campaignCriterion->campaignId = $campaignId;
  $campaignCriterion->criterion = $productSalesChannel;

  // Create operation.
  $operation = new CampaignCriterionOperation();
  $operation->operand = $campaignCriterion;
  $operation->operator = 'ADD';

  // Make the mutate request.
  $result = $campaignCriterionService->mutate(array($operation));

  $criterion = $result->value[0]->criterion;

  printf("%s set to criterion %d", $criterion->CriterionType, $criterion->id);
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  setProductSalesChannelExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
