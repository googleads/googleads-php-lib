<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class KeywordEstimate extends \Google\AdsApi\AdWords\v201710\o\Estimate
{

    /**
     * @var int $criterionId
     */
    protected $criterionId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\o\StatsEstimate $min
     */
    protected $min = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\o\StatsEstimate $max
     */
    protected $max = null;

    /**
     * @param string $EstimateType
     * @param int $criterionId
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $min
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $max
     */
    public function __construct($EstimateType = null, $criterionId = null, $min = null, $max = null)
    {
      parent::__construct($EstimateType);
      $this->criterionId = $criterionId;
      $this->min = $min;
      $this->max = $max;
    }

    /**
     * @return int
     */
    public function getCriterionId()
    {
      return $this->criterionId;
    }

    /**
     * @param int $criterionId
     * @return \Google\AdsApi\AdWords\v201710\o\KeywordEstimate
     */
    public function setCriterionId($criterionId)
    {
      $this->criterionId = (!is_null($criterionId) && PHP_INT_SIZE === 4)
          ? floatval($criterionId) : $criterionId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\o\StatsEstimate
     */
    public function getMin()
    {
      return $this->min;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $min
     * @return \Google\AdsApi\AdWords\v201710\o\KeywordEstimate
     */
    public function setMin($min)
    {
      $this->min = $min;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\o\StatsEstimate
     */
    public function getMax()
    {
      return $this->max;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $max
     * @return \Google\AdsApi\AdWords\v201710\o\KeywordEstimate
     */
    public function setMax($max)
    {
      $this->max = $max;
      return $this;
    }

}
