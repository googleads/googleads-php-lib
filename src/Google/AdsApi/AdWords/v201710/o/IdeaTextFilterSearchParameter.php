<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class IdeaTextFilterSearchParameter extends \Google\AdsApi\AdWords\v201710\o\SearchParameter
{

    /**
     * @var string[] $included
     */
    protected $included = null;

    /**
     * @var string[] $excluded
     */
    protected $excluded = null;

    /**
     * @param string $SearchParameterType
     * @param string[] $included
     * @param string[] $excluded
     */
    public function __construct($SearchParameterType = null, array $included = null, array $excluded = null)
    {
      parent::__construct($SearchParameterType);
      $this->included = $included;
      $this->excluded = $excluded;
    }

    /**
     * @return string[]
     */
    public function getIncluded()
    {
      return $this->included;
    }

    /**
     * @param string[] $included
     * @return \Google\AdsApi\AdWords\v201710\o\IdeaTextFilterSearchParameter
     */
    public function setIncluded(array $included)
    {
      $this->included = $included;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getExcluded()
    {
      return $this->excluded;
    }

    /**
     * @param string[] $excluded
     * @return \Google\AdsApi\AdWords\v201710\o\IdeaTextFilterSearchParameter
     */
    public function setExcluded(array $excluded)
    {
      $this->excluded = $excluded;
      return $this;
    }

}
