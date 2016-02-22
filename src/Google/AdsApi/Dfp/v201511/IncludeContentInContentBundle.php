<?php

namespace Google\AdsApi\Dfp\v201511;

class IncludeContentInContentBundle extends \Google\AdsApi\Dfp\v201511\ContentBundleAction
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Statement $contentStatement
     */
    protected $contentStatement = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\Statement $contentStatement
     */
    public function __construct($contentStatement = null)
    {
      $this->contentStatement = $contentStatement;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Statement
     */
    public function getContentStatement()
    {
      return $this->contentStatement;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Statement $contentStatement
     * @return \Google\AdsApi\Dfp\v201511\IncludeContentInContentBundle
     */
    public function setContentStatement($contentStatement)
    {
      $this->contentStatement = $contentStatement;
      return $this;
    }

}
