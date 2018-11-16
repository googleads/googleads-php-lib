<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExtensionSetting
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem[] $extensions
     */
    protected $extensions = null;

    /**
     * @var string $platformRestrictions
     */
    protected $platformRestrictions = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem[] $extensions
     * @param string $platformRestrictions
     */
    public function __construct(array $extensions = null, $platformRestrictions = null)
    {
      $this->extensions = $extensions;
      $this->platformRestrictions = $platformRestrictions;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem[]
     */
    public function getExtensions()
    {
      return $this->extensions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem[] $extensions
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionSetting
     */
    public function setExtensions(array $extensions)
    {
      $this->extensions = $extensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatformRestrictions()
    {
      return $this->platformRestrictions;
    }

    /**
     * @param string $platformRestrictions
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionSetting
     */
    public function setPlatformRestrictions($platformRestrictions)
    {
      $this->platformRestrictions = $platformRestrictions;
      return $this;
    }

}
