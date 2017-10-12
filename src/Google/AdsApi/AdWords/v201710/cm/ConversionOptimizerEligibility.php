<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionOptimizerEligibility
{

    /**
     * @var boolean $eligible
     */
    protected $eligible = null;

    /**
     * @var string[] $rejectionReasons
     */
    protected $rejectionReasons = null;

    /**
     * @param boolean $eligible
     * @param string[] $rejectionReasons
     */
    public function __construct($eligible = null, array $rejectionReasons = null)
    {
      $this->eligible = $eligible;
      $this->rejectionReasons = $rejectionReasons;
    }

    /**
     * @return boolean
     */
    public function getEligible()
    {
      return $this->eligible;
    }

    /**
     * @param boolean $eligible
     * @return \Google\AdsApi\AdWords\v201710\cm\ConversionOptimizerEligibility
     */
    public function setEligible($eligible)
    {
      $this->eligible = $eligible;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRejectionReasons()
    {
      return $this->rejectionReasons;
    }

    /**
     * @param string[] $rejectionReasons
     * @return \Google\AdsApi\AdWords\v201710\cm\ConversionOptimizerEligibility
     */
    public function setRejectionReasons(array $rejectionReasons)
    {
      $this->rejectionReasons = $rejectionReasons;
      return $this;
    }

}
