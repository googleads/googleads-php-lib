<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RelatedToUrlSearchParameter extends \Google\AdsApi\AdWords\v201710\o\SearchParameter
{

    /**
     * @var string[] $urls
     */
    protected $urls = null;

    /**
     * @var boolean $includeSubUrls
     */
    protected $includeSubUrls = null;

    /**
     * @param string $SearchParameterType
     * @param string[] $urls
     * @param boolean $includeSubUrls
     */
    public function __construct($SearchParameterType = null, array $urls = null, $includeSubUrls = null)
    {
      parent::__construct($SearchParameterType);
      $this->urls = $urls;
      $this->includeSubUrls = $includeSubUrls;
    }

    /**
     * @return string[]
     */
    public function getUrls()
    {
      return $this->urls;
    }

    /**
     * @param string[] $urls
     * @return \Google\AdsApi\AdWords\v201710\o\RelatedToUrlSearchParameter
     */
    public function setUrls(array $urls)
    {
      $this->urls = $urls;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSubUrls()
    {
      return $this->includeSubUrls;
    }

    /**
     * @param boolean $includeSubUrls
     * @return \Google\AdsApi\AdWords\v201710\o\RelatedToUrlSearchParameter
     */
    public function setIncludeSubUrls($includeSubUrls)
    {
      $this->includeSubUrls = $includeSubUrls;
      return $this;
    }

}
