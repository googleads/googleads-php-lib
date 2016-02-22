<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AppUrlList
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AppUrl[] $appUrls
     */
    protected $appUrls = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AppUrl[] $appUrls
     */
    public function __construct(array $appUrls = null)
    {
      $this->appUrls = $appUrls;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AppUrl[]
     */
    public function getAppUrls()
    {
      return $this->appUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AppUrl[] $appUrls
     * @return \Google\AdsApi\AdWords\v201601\cm\AppUrlList
     */
    public function setAppUrls(array $appUrls)
    {
      $this->appUrls = $appUrls;
      return $this;
    }

}
