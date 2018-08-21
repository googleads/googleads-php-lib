<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createContentMetadataKeyHierarchiesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201711\ContentMetadataKeyHierarchy[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201711\ContentMetadataKeyHierarchy[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\ContentMetadataKeyHierarchy[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\ContentMetadataKeyHierarchy[] $rval
     * @return \Google\AdsApi\AdManager\v201711\createContentMetadataKeyHierarchiesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
