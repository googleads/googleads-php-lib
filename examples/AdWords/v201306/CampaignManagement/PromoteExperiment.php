<?php
/**
 * This example promotes an experiment, which permanently applies all the
 * experimental changes made to its related ad groups, criteria and ads.
 * To add an experiment, run AddExperiment.php.
 *
 * Tags: ExperimentService.mutate
 * Restriction: adwords-only
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$experimentId = 'INSERT_EXPERIMENT_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $experimentId the ID of the experiment to promote
 */
function PromoteExperimentExample(AdWordsUser $user, $experimentId) {
  // Get the service, which loads the required classes.
  $experimentService = $user->GetService('ExperimentService', ADWORDS_VERSION);

  // Create experiment with PROMOTED status.
  $experiment = new Experiment();
  $experiment->id = $experimentId;
  $experiment->status = 'PROMOTED';

  // Create operation.
  $operation = new ExperimentOperation();
  $operation->operand = $experiment;
  $operation->operator = 'SET';

  $operations = array($operation);

  // Make the mutate request.
  $result = $experimentService->mutate($operations);

  // Display result.
  $experiment = $result->value[0];
  printf ("Experiment with name '%s' and ID '%s' was promoted.\n",
      $experiment->name, $experiment->id);
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
  PromoteExperimentExample($user, $experimentId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
