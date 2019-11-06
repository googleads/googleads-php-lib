<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrackingUrls
{

    /**
     * @var string[] $urls
     */
    protected $urls = null;

    /**
     * @param string[] $urls
     */
    public function __construct(array $urls = null)
    {
      $this->urls = $urls;
    }

    /**
     * @return string[]
     */
    public function getUrls()
    {
      return $this->urls;
    }

    /**
     * @param string[]|null $urls
     * @return \Google\AdsApi\AdManager\v201911\TrackingUrls
     */
    public function setUrls(array $urls = null)
    {
      $this->urls = $urls;
      return $this;
    }

}
