<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppUrlList
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\AppUrl[] $appUrls
     */
    protected $appUrls = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\AppUrl[] $appUrls
     */
    public function __construct(array $appUrls = null)
    {
      $this->appUrls = $appUrls;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\AppUrl[]
     */
    public function getAppUrls()
    {
      return $this->appUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\AppUrl[] $appUrls
     * @return \Google\AdsApi\AdWords\v201802\cm\AppUrlList
     */
    public function setAppUrls(array $appUrls)
    {
      $this->appUrls = $appUrls;
      return $this;
    }

}
