<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExcludeContentFromContentBundle extends \Google\AdsApi\AdManager\v202005\ContentBundleAction
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\Statement $contentStatement
     */
    protected $contentStatement = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\Statement $contentStatement
     */
    public function __construct($contentStatement = null)
    {
      $this->contentStatement = $contentStatement;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Statement
     */
    public function getContentStatement()
    {
      return $this->contentStatement;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Statement $contentStatement
     * @return \Google\AdsApi\AdManager\v202005\ExcludeContentFromContentBundle
     */
    public function setContentStatement($contentStatement)
    {
      $this->contentStatement = $contentStatement;
      return $this;
    }

}
