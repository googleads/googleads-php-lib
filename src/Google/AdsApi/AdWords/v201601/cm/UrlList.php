<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class UrlList
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
     * @return \Google\AdsApi\AdWords\v201601\cm\UrlList
     */
    public function setUrls(array $urls)
    {
      $this->urls = $urls;
      return $this;
    }

}
