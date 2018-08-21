<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentMetadataKeyHierarchiesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ContentMetadataKeyHierarchyPage $rval
     * @return \Google\AdsApi\AdManager\v201808\getContentMetadataKeyHierarchiesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
