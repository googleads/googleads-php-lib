<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomTargetingPremiumFeature extends \Google\AdsApi\Dfp\v201705\PremiumFeature
{

    /**
     * @var int $customTargetingKeyId
     */
    protected $customTargetingKeyId = null;

    /**
     * @var int $customTargetingValueId
     */
    protected $customTargetingValueId = null;

    /**
     * @param int $customTargetingKeyId
     * @param int $customTargetingValueId
     */
    public function __construct($customTargetingKeyId = null, $customTargetingValueId = null)
    {
      $this->customTargetingKeyId = $customTargetingKeyId;
      $this->customTargetingValueId = $customTargetingValueId;
    }

    /**
     * @return int
     */
    public function getCustomTargetingKeyId()
    {
      return $this->customTargetingKeyId;
    }

    /**
     * @param int $customTargetingKeyId
     * @return \Google\AdsApi\Dfp\v201705\CustomTargetingPremiumFeature
     */
    public function setCustomTargetingKeyId($customTargetingKeyId)
    {
      $this->customTargetingKeyId = (!is_null($customTargetingKeyId) && PHP_INT_SIZE === 4)
          ? floatval($customTargetingKeyId) : $customTargetingKeyId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomTargetingValueId()
    {
      return $this->customTargetingValueId;
    }

    /**
     * @param int $customTargetingValueId
     * @return \Google\AdsApi\Dfp\v201705\CustomTargetingPremiumFeature
     */
    public function setCustomTargetingValueId($customTargetingValueId)
    {
      $this->customTargetingValueId = (!is_null($customTargetingValueId) && PHP_INT_SIZE === 4)
          ? floatval($customTargetingValueId) : $customTargetingValueId;
      return $this;
    }

}
