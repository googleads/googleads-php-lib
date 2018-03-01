<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class QualityInfo
{

    /**
     * @var int $qualityScore
     */
    protected $qualityScore = null;

    /**
     * @param int $qualityScore
     */
    public function __construct($qualityScore = null)
    {
      $this->qualityScore = $qualityScore;
    }

    /**
     * @return int
     */
    public function getQualityScore()
    {
      return $this->qualityScore;
    }

    /**
     * @param int $qualityScore
     * @return \Google\AdsApi\AdWords\v201802\cm\QualityInfo
     */
    public function setQualityScore($qualityScore)
    {
      $this->qualityScore = $qualityScore;
      return $this;
    }

}
