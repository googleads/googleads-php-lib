<?php

namespace Google\AdsApi\AdWords\v201809\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RemarketingSettings
{

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $googleGlobalSiteTag
     */
    protected $googleGlobalSiteTag = null;

    /**
     * @param string $snippet
     * @param string $googleGlobalSiteTag
     */
    public function __construct($snippet = null, $googleGlobalSiteTag = null)
    {
      $this->snippet = $snippet;
      $this->googleGlobalSiteTag = $googleGlobalSiteTag;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\AdWords\v201809\mcm\RemarketingSettings
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogleGlobalSiteTag()
    {
      return $this->googleGlobalSiteTag;
    }

    /**
     * @param string $googleGlobalSiteTag
     * @return \Google\AdsApi\AdWords\v201809\mcm\RemarketingSettings
     */
    public function setGoogleGlobalSiteTag($googleGlobalSiteTag)
    {
      $this->googleGlobalSiteTag = $googleGlobalSiteTag;
      return $this;
    }

}
