<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPreviewUrlsForNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\CreativeNativeStylePreview[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\CreativeNativeStylePreview[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\CreativeNativeStylePreview[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\CreativeNativeStylePreview[]|null $rval
     * @return \Google\AdsApi\AdManager\v202502\getPreviewUrlsForNativeStylesResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
