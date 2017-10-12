<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingSettingDetail
{

    /**
     * @var string $criterionTypeGroup
     */
    protected $criterionTypeGroup = null;

    /**
     * @var boolean $targetAll
     */
    protected $targetAll = null;

    /**
     * @param string $criterionTypeGroup
     * @param boolean $targetAll
     */
    public function __construct($criterionTypeGroup = null, $targetAll = null)
    {
      $this->criterionTypeGroup = $criterionTypeGroup;
      $this->targetAll = $targetAll;
    }

    /**
     * @return string
     */
    public function getCriterionTypeGroup()
    {
      return $this->criterionTypeGroup;
    }

    /**
     * @param string $criterionTypeGroup
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetingSettingDetail
     */
    public function setCriterionTypeGroup($criterionTypeGroup)
    {
      $this->criterionTypeGroup = $criterionTypeGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetAll()
    {
      return $this->targetAll;
    }

    /**
     * @param boolean $targetAll
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetingSettingDetail
     */
    public function setTargetAll($targetAll)
    {
      $this->targetAll = $targetAll;
      return $this;
    }

}
