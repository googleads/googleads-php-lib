<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPreviewUrlsForNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\CreativeNativeStylePreview[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\CreativeNativeStylePreview[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\CreativeNativeStylePreview[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\CreativeNativeStylePreview[] $rval
     * @return \Google\AdsApi\AdManager\v201902\getPreviewUrlsForNativeStylesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
