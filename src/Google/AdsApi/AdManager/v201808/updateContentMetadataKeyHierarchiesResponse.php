<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateContentMetadataKeyHierarchiesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchy[] $rval
     * @return \Google\AdsApi\AdManager\v201808\updateContentMetadataKeyHierarchiesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
