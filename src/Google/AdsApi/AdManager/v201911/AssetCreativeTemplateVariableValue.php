<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetCreativeTemplateVariableValue extends \Google\AdsApi\AdManager\v201911\BaseCreativeTemplateVariableValue
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $uniqueName
     * @param \Google\AdsApi\AdManager\v201911\CreativeAsset $asset
     */
    public function __construct($uniqueName = null, $asset = null)
    {
      parent::__construct($uniqueName);
      $this->asset = $asset;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CreativeAsset $asset
     * @return \Google\AdsApi\AdManager\v201911\AssetCreativeTemplateVariableValue
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}
