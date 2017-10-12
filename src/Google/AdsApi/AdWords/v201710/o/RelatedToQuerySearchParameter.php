<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RelatedToQuerySearchParameter extends \Google\AdsApi\AdWords\v201710\o\SearchParameter
{

    /**
     * @var string[] $queries
     */
    protected $queries = null;

    /**
     * @param string $SearchParameterType
     * @param string[] $queries
     */
    public function __construct($SearchParameterType = null, array $queries = null)
    {
      parent::__construct($SearchParameterType);
      $this->queries = $queries;
    }

    /**
     * @return string[]
     */
    public function getQueries()
    {
      return $this->queries;
    }

    /**
     * @param string[] $queries
     * @return \Google\AdsApi\AdWords\v201710\o\RelatedToQuerySearchParameter
     */
    public function setQueries(array $queries)
    {
      $this->queries = $queries;
      return $this;
    }

}
