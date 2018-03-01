<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LocationGroups extends \Google\AdsApi\AdWords\v201802\cm\Criterion
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\MatchingFunction $matchingFunction
     */
    protected $matchingFunction = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $feedId
     * @param \Google\AdsApi\AdWords\v201802\cm\MatchingFunction $matchingFunction
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $feedId = null, $matchingFunction = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->feedId = $feedId;
      $this->matchingFunction = $matchingFunction;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201802\cm\LocationGroups
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\MatchingFunction
     */
    public function getMatchingFunction()
    {
      return $this->matchingFunction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\MatchingFunction $matchingFunction
     * @return \Google\AdsApi\AdWords\v201802\cm\LocationGroups
     */
    public function setMatchingFunction($matchingFunction)
    {
      $this->matchingFunction = $matchingFunction;
      return $this;
    }

}
