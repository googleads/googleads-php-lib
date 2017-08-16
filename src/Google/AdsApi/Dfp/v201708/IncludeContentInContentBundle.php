<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class IncludeContentInContentBundle extends \Google\AdsApi\Dfp\v201708\ContentBundleAction
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Statement $contentStatement
     */
    protected $contentStatement = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\Statement $contentStatement
     */
    public function __construct($contentStatement = null)
    {
      $this->contentStatement = $contentStatement;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Statement
     */
    public function getContentStatement()
    {
      return $this->contentStatement;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Statement $contentStatement
     * @return \Google\AdsApi\Dfp\v201708\IncludeContentInContentBundle
     */
    public function setContentStatement($contentStatement)
    {
      $this->contentStatement = $contentStatement;
      return $this;
    }

}
