<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class TemporaryUrl
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $expiration
     */
    protected $expiration = null;

    /**
     * @param string $url
     * @param string $expiration
     */
    public function __construct($url = null, $expiration = null)
    {
      $this->url = $url;
      $this->expiration = $expiration;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Google\AdsApi\AdWords\v201601\cm\TemporaryUrl
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
      return $this->expiration;
    }

    /**
     * @param string $expiration
     * @return \Google\AdsApi\AdWords\v201601\cm\TemporaryUrl
     */
    public function setExpiration($expiration)
    {
      $this->expiration = $expiration;
      return $this;
    }

}
