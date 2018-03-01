<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyViolationKey
{

    /**
     * @var string $policyName
     */
    protected $policyName = null;

    /**
     * @var string $violatingText
     */
    protected $violatingText = null;

    /**
     * @param string $policyName
     * @param string $violatingText
     */
    public function __construct($policyName = null, $violatingText = null)
    {
      $this->policyName = $policyName;
      $this->violatingText = $violatingText;
    }

    /**
     * @return string
     */
    public function getPolicyName()
    {
      return $this->policyName;
    }

    /**
     * @param string $policyName
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyViolationKey
     */
    public function setPolicyName($policyName)
    {
      $this->policyName = $policyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getViolatingText()
    {
      return $this->violatingText;
    }

    /**
     * @param string $violatingText
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyViolationKey
     */
    public function setViolatingText($violatingText)
    {
      $this->violatingText = $violatingText;
      return $this;
    }

}
