<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BiddingScheme
{

    /**
     * @var string $BiddingSchemeType
     */
    protected $BiddingSchemeType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['BiddingScheme.Type' => 'BiddingSchemeType'];

    /**
     * @param string $BiddingSchemeType
     */
    public function __construct($BiddingSchemeType = null)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

    /**
     * @return string
     */
    public function getBiddingSchemeType()
    {
      return $this->BiddingSchemeType;
    }

    /**
     * @param string $BiddingSchemeType
     * @return \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
     */
    public function setBiddingSchemeType($BiddingSchemeType)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
