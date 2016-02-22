<?php

namespace Google\AdsApi\AdWords\v201601\cm;

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
     * @return \Google\AdsApi\AdWords\v201601\cm\QualityInfo
     */
    public function setQualityScore($qualityScore)
    {
      $this->qualityScore = $qualityScore;
      return $this;
    }

}
