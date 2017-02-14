<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentMetadataKeyHierarchiesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\ContentMetadataKeyHierarchyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentMetadataKeyHierarchyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ContentMetadataKeyHierarchyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentMetadataKeyHierarchyPage $rval
     * @return \Google\AdsApi\Dfp\v201702\getContentMetadataKeyHierarchiesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
