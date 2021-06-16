<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExcludeContentFromContentBundle extends \Google\AdsApi\AdManager\v202105\ContentBundleAction
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\Statement $contentStatement
     */
    protected $contentStatement = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\Statement $contentStatement
     */
    public function __construct($contentStatement = null)
    {
      $this->contentStatement = $contentStatement;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Statement
     */
    public function getContentStatement()
    {
      return $this->contentStatement;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Statement $contentStatement
     * @return \Google\AdsApi\AdManager\v202105\ExcludeContentFromContentBundle
     */
    public function setContentStatement($contentStatement)
    {
      $this->contentStatement = $contentStatement;
      return $this;
    }

}
