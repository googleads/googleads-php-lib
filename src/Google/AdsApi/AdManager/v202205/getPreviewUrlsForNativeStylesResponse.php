<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPreviewUrlsForNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\CreativeNativeStylePreview[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\CreativeNativeStylePreview[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\CreativeNativeStylePreview[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\CreativeNativeStylePreview[]|null $rval
     * @return \Google\AdsApi\AdManager\v202205\getPreviewUrlsForNativeStylesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
