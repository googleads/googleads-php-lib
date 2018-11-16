<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CriterionPolicyError extends \Google\AdsApi\AdWords\v201802\cm\PolicyViolationError
{

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201802\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param \Google\AdsApi\AdWords\v201802\cm\PolicyViolationKey $key
     * @param string $externalPolicyName
     * @param string $externalPolicyUrl
     * @param string $externalPolicyDescription
     * @param boolean $isExemptable
     * @param \Google\AdsApi\AdWords\v201802\cm\PolicyViolationErrorPart[] $violatingParts
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, array $violatingParts = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType, $key, $externalPolicyName, $externalPolicyUrl, $externalPolicyDescription, $isExemptable, $violatingParts);
    }

}
