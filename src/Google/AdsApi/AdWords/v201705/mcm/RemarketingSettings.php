<?php

namespace Google\AdsApi\AdWords\v201705\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
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
     * @return \Google\AdsApi\AdWords\v201705\mcm\RemarketingSettings
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

}
