<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetCreativeTemplateVariableValue extends \Google\AdsApi\AdManager\v202008\BaseCreativeTemplateVariableValue
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $uniqueName
     * @param \Google\AdsApi\AdManager\v202008\CreativeAsset $asset
     */
    public function __construct($uniqueName = null, $asset = null)
    {
      parent::__construct($uniqueName);
      $this->asset = $asset;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\CreativeAsset $asset
     * @return \Google\AdsApi\AdManager\v202008\AssetCreativeTemplateVariableValue
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}
