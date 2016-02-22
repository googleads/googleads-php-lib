<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CriterionPolicyError extends \Google\AdsApi\AdWords\v201601\cm\PolicyViolationError
{

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param \Google\AdsApi\AdWords\v201601\cm\PolicyViolationKey $key
     * @param string $externalPolicyName
     * @param string $externalPolicyUrl
     * @param string $externalPolicyDescription
     * @param boolean $isExemptable
     * @param \Google\AdsApi\AdWords\v201601\cm\PolicyViolationErrorPart[] $violatingParts
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null, $key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, array $violatingParts = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType, $key, $externalPolicyName, $externalPolicyUrl, $externalPolicyDescription, $isExemptable, $violatingParts);
    }

}
