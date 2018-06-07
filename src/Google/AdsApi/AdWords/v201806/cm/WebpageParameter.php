<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WebpageParameter extends \Google\AdsApi\AdWords\v201806\cm\CriterionParameter
{

    /**
     * @var string $criterionName
     */
    protected $criterionName = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\WebpageCondition[] $conditions
     */
    protected $conditions = null;

    /**
     * @param string $CriterionParameterType
     * @param string $criterionName
     * @param \Google\AdsApi\AdWords\v201806\cm\WebpageCondition[] $conditions
     */
    public function __construct($CriterionParameterType = null, $criterionName = null, array $conditions = null)
    {
      parent::__construct($CriterionParameterType);
      $this->criterionName = $criterionName;
      $this->conditions = $conditions;
    }

    /**
     * @return string
     */
    public function getCriterionName()
    {
      return $this->criterionName;
    }

    /**
     * @param string $criterionName
     * @return \Google\AdsApi\AdWords\v201806\cm\WebpageParameter
     */
    public function setCriterionName($criterionName)
    {
      $this->criterionName = $criterionName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\WebpageCondition[]
     */
    public function getConditions()
    {
      return $this->conditions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\WebpageCondition[] $conditions
     * @return \Google\AdsApi\AdWords\v201806\cm\WebpageParameter
     */
    public function setConditions(array $conditions)
    {
      $this->conditions = $conditions;
      return $this;
    }

}
