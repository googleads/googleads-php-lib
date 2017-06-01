<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PageFeed
{

    /**
     * @var long[] $feedIds
     */
    protected $feedIds = null;

    /**
     * @param long[] $feedIds
     */
    public function __construct(array $feedIds = null)
    {
      $this->feedIds = $feedIds;
    }

    /**
     * @return long[]
     */
    public function getFeedIds()
    {
      return $this->feedIds;
    }

    /**
     * @param long[] $feedIds
     * @return \Google\AdsApi\AdWords\v201705\cm\PageFeed
     */
    public function setFeedIds(array $feedIds)
    {
      $this->feedIds = $feedIds;
      return $this;
    }

}
