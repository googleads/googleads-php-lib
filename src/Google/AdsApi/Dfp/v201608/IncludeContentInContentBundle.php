<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class IncludeContentInContentBundle extends \Google\AdsApi\Dfp\v201608\ContentBundleAction
{

    /**
     * @var \Google\AdsApi\Dfp\v201608\Statement $contentStatement
     */
    protected $contentStatement = null;

    /**
     * @param \Google\AdsApi\Dfp\v201608\Statement $contentStatement
     */
    public function __construct($contentStatement = null)
    {
      $this->contentStatement = $contentStatement;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\Statement
     */
    public function getContentStatement()
    {
      return $this->contentStatement;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\Statement $contentStatement
     * @return \Google\AdsApi\Dfp\v201608\IncludeContentInContentBundle
     */
    public function setContentStatement($contentStatement)
    {
      $this->contentStatement = $contentStatement;
      return $this;
    }

}
