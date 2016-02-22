<?php

namespace Google\AdsApi\Dfp\v201511;

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
     * @return \Google\AdsApi\Dfp\v201511\TrackingUrls
     */
    public function setUrls(array $urls)
    {
      $this->urls = $urls;
      return $this;
    }

}
