<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Webpage extends \Google\AdsApi\AdWords\v201806\cm\Criterion
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\WebpageParameter $parameter
     */
    protected $parameter = null;

    /**
     * @var float $criteriaCoverage
     */
    protected $criteriaCoverage = null;

    /**
     * @var string[] $criteriaSamples
     */
    protected $criteriaSamples = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param \Google\AdsApi\AdWords\v201806\cm\WebpageParameter $parameter
     * @param float $criteriaCoverage
     * @param string[] $criteriaSamples
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $parameter = null, $criteriaCoverage = null, array $criteriaSamples = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->parameter = $parameter;
      $this->criteriaCoverage = $criteriaCoverage;
      $this->criteriaSamples = $criteriaSamples;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\WebpageParameter
     */
    public function getParameter()
    {
      return $this->parameter;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\WebpageParameter $parameter
     * @return \Google\AdsApi\AdWords\v201806\cm\Webpage
     */
    public function setParameter($parameter)
    {
      $this->parameter = $parameter;
      return $this;
    }

    /**
     * @return float
     */
    public function getCriteriaCoverage()
    {
      return $this->criteriaCoverage;
    }

    /**
     * @param float $criteriaCoverage
     * @return \Google\AdsApi\AdWords\v201806\cm\Webpage
     */
    public function setCriteriaCoverage($criteriaCoverage)
    {
      $this->criteriaCoverage = $criteriaCoverage;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCriteriaSamples()
    {
      return $this->criteriaSamples;
    }

    /**
     * @param string[] $criteriaSamples
     * @return \Google\AdsApi\AdWords\v201806\cm\Webpage
     */
    public function setCriteriaSamples(array $criteriaSamples)
    {
      $this->criteriaSamples = $criteriaSamples;
      return $this;
    }

}
