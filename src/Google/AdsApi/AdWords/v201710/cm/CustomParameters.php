<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomParameters
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\CustomParameter[] $parameters
     */
    protected $parameters = null;

    /**
     * @var boolean $doReplace
     */
    protected $doReplace = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameter[] $parameters
     * @param boolean $doReplace
     */
    public function __construct(array $parameters = null, $doReplace = null)
    {
      $this->parameters = $parameters;
      $this->doReplace = $doReplace;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomParameter[]
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameter[] $parameters
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomParameters
     */
    public function setParameters(array $parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoReplace()
    {
      return $this->doReplace;
    }

    /**
     * @param boolean $doReplace
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomParameters
     */
    public function setDoReplace($doReplace)
    {
      $this->doReplace = $doReplace;
      return $this;
    }

}
