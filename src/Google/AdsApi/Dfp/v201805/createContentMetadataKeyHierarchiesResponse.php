<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createContentMetadataKeyHierarchiesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\ContentMetadataKeyHierarchy[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\ContentMetadataKeyHierarchy[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\ContentMetadataKeyHierarchy[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\ContentMetadataKeyHierarchy[] $rval
     * @return \Google\AdsApi\Dfp\v201805\createContentMetadataKeyHierarchiesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
