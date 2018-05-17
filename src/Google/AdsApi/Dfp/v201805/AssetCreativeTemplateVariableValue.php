<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetCreativeTemplateVariableValue extends \Google\AdsApi\Dfp\v201805\BaseCreativeTemplateVariableValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $uniqueName
     * @param \Google\AdsApi\Dfp\v201805\CreativeAsset $asset
     */
    public function __construct($uniqueName = null, $asset = null)
    {
      parent::__construct($uniqueName);
      $this->asset = $asset;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\CreativeAsset $asset
     * @return \Google\AdsApi\Dfp\v201805\AssetCreativeTemplateVariableValue
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}
