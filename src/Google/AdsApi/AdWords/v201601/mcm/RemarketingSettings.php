<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class RemarketingSettings
{

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @param string $snippet
     */
    public function __construct($snippet = null)
    {
      $this->snippet = $snippet;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\AdWords\v201601\mcm\RemarketingSettings
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

}
