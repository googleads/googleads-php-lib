<?php

namespace Google\AdsApi\Dfp\v201511;

class AssetCreativeTemplateVariableValue extends \Google\AdsApi\Dfp\v201511\BaseCreativeTemplateVariableValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $uniqueName
     * @param \Google\AdsApi\Dfp\v201511\CreativeAsset $asset
     */
    public function __construct($uniqueName = null, $asset = null)
    {
      parent::__construct($uniqueName);
      $this->asset = $asset;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\CreativeAsset $asset
     * @return \Google\AdsApi\Dfp\v201511\AssetCreativeTemplateVariableValue
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}
