<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SavedQuery
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ReportQuery $reportQuery
     */
    protected $reportQuery = null;

    /**
     * @var boolean $isCompatibleWithApiVersion
     */
    protected $isCompatibleWithApiVersion = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201708\ReportQuery $reportQuery
     * @param boolean $isCompatibleWithApiVersion
     */
    public function __construct($id = null, $name = null, $reportQuery = null, $isCompatibleWithApiVersion = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->reportQuery = $reportQuery;
      $this->isCompatibleWithApiVersion = $isCompatibleWithApiVersion;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201708\SavedQuery
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201708\SavedQuery
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ReportQuery
     */
    public function getReportQuery()
    {
      return $this->reportQuery;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ReportQuery $reportQuery
     * @return \Google\AdsApi\Dfp\v201708\SavedQuery
     */
    public function setReportQuery($reportQuery)
    {
      $this->reportQuery = $reportQuery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompatibleWithApiVersion()
    {
      return $this->isCompatibleWithApiVersion;
    }

    /**
     * @param boolean $isCompatibleWithApiVersion
     * @return \Google\AdsApi\Dfp\v201708\SavedQuery
     */
    public function setIsCompatibleWithApiVersion($isCompatibleWithApiVersion)
    {
      $this->isCompatibleWithApiVersion = $isCompatibleWithApiVersion;
      return $this;
    }

}
