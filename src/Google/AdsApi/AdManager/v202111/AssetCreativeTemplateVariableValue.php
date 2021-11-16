<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetCreativeTemplateVariableValue extends \Google\AdsApi\AdManager\v202111\BaseCreativeTemplateVariableValue
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $uniqueName
     * @param \Google\AdsApi\AdManager\v202111\CreativeAsset $asset
     */
    public function __construct($uniqueName = null, $asset = null)
    {
      parent::__construct($uniqueName);
      $this->asset = $asset;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\CreativeAsset $asset
     * @return \Google\AdsApi\AdManager\v202111\AssetCreativeTemplateVariableValue
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}
