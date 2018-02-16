<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdParam
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var int $criterionId
     */
    protected $criterionId = null;

    /**
     * @var string $insertionText
     */
    protected $insertionText = null;

    /**
     * @var int $paramIndex
     */
    protected $paramIndex = null;

    /**
     * @param int $adGroupId
     * @param int $criterionId
     * @param string $insertionText
     * @param int $paramIndex
     */
    public function __construct($adGroupId = null, $criterionId = null, $insertionText = null, $paramIndex = null)
    {
      $this->adGroupId = $adGroupId;
      $this->criterionId = $criterionId;
      $this->insertionText = $insertionText;
      $this->paramIndex = $paramIndex;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParam
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParam
     */
    public function setCriterionId($criterionId)
    {
      $this->criterionId = (!is_null($criterionId) && PHP_INT_SIZE === 4)
          ? floatval($criterionId) : $criterionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsertionText()
    {
      return $this->insertionText;
    }

    /**
     * @param string $insertionText
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParam
     */
    public function setInsertionText($insertionText)
    {
      $this->insertionText = $insertionText;
      return $this;
    }

    /**
     * @return int
     */
    public function getParamIndex()
    {
      return $this->paramIndex;
    }

    /**
     * @param int $paramIndex
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParam
     */
    public function setParamIndex($paramIndex)
    {
      $this->paramIndex = $paramIndex;
      return $this;
    }

}
