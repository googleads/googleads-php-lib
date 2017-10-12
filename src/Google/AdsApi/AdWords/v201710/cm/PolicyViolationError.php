<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyViolationError extends \Google\AdsApi\AdWords\v201710\cm\ApiError
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\PolicyViolationKey $key
     */
    protected $key = null;

    /**
     * @var string $externalPolicyName
     */
    protected $externalPolicyName = null;

    /**
     * @var string $externalPolicyUrl
     */
    protected $externalPolicyUrl = null;

    /**
     * @var string $externalPolicyDescription
     */
    protected $externalPolicyDescription = null;

    /**
     * @var boolean $isExemptable
     */
    protected $isExemptable = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\PolicyViolationErrorPart[] $violatingParts
     */
    protected $violatingParts = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201710\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyViolationKey $key
     * @param string $externalPolicyName
     * @param string $externalPolicyUrl
     * @param string $externalPolicyDescription
     * @param boolean $isExemptable
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyViolationErrorPart[] $violatingParts
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, array $violatingParts = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->key = $key;
      $this->externalPolicyName = $externalPolicyName;
      $this->externalPolicyUrl = $externalPolicyUrl;
      $this->externalPolicyDescription = $externalPolicyDescription;
      $this->isExemptable = $isExemptable;
      $this->violatingParts = $violatingParts;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyViolationKey $key
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalPolicyName()
    {
      return $this->externalPolicyName;
    }

    /**
     * @param string $externalPolicyName
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setExternalPolicyName($externalPolicyName)
    {
      $this->externalPolicyName = $externalPolicyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalPolicyUrl()
    {
      return $this->externalPolicyUrl;
    }

    /**
     * @param string $externalPolicyUrl
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setExternalPolicyUrl($externalPolicyUrl)
    {
      $this->externalPolicyUrl = $externalPolicyUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalPolicyDescription()
    {
      return $this->externalPolicyDescription;
    }

    /**
     * @param string $externalPolicyDescription
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setExternalPolicyDescription($externalPolicyDescription)
    {
      $this->externalPolicyDescription = $externalPolicyDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExemptable()
    {
      return $this->isExemptable;
    }

    /**
     * @param boolean $isExemptable
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setIsExemptable($isExemptable)
    {
      $this->isExemptable = $isExemptable;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationErrorPart[]
     */
    public function getViolatingParts()
    {
      return $this->violatingParts;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyViolationErrorPart[] $violatingParts
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyViolationError
     */
    public function setViolatingParts(array $violatingParts)
    {
      $this->violatingParts = $violatingParts;
      return $this;
    }

}
