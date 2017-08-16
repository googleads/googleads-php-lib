<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createContentMetadataKeyHierarchiesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\ContentMetadataKeyHierarchy[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\ContentMetadataKeyHierarchy[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ContentMetadataKeyHierarchy[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ContentMetadataKeyHierarchy[] $rval
     * @return \Google\AdsApi\Dfp\v201708\createContentMetadataKeyHierarchiesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
