<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeReview
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $reviewableUrl
     */
    protected $reviewableUrl = null;

    /**
     * @var int $impressions
     */
    protected $impressions = null;

    /**
     * @param string $id
     * @param string $reviewableUrl
     * @param int $impressions
     */
    public function __construct($id = null, $reviewableUrl = null, $impressions = null)
    {
      $this->id = $id;
      $this->reviewableUrl = $reviewableUrl;
      $this->impressions = $impressions;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\AdManager\v202002\CreativeReview
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getReviewableUrl()
    {
      return $this->reviewableUrl;
    }

    /**
     * @param string $reviewableUrl
     * @return \Google\AdsApi\AdManager\v202002\CreativeReview
     */
    public function setReviewableUrl($reviewableUrl)
    {
      $this->reviewableUrl = $reviewableUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->impressions;
    }

    /**
     * @param int $impressions
     * @return \Google\AdsApi\AdManager\v202002\CreativeReview
     */
    public function setImpressions($impressions)
    {
      $this->impressions = (!is_null($impressions) && PHP_INT_SIZE === 4)
          ? floatval($impressions) : $impressions;
      return $this;
    }

}
