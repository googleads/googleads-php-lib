<?php

namespace Google\AdsApi\Dfp\v201802;


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
     * @param string[] $urls
     * @return \Google\AdsApi\Dfp\v201802\TrackingUrls
     */
    public function setUrls(array $urls)
    {
      $this->urls = $urls;
      return $this;
    }

}
