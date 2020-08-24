<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportQuery
{

    /**
     * @var string[] $dimensions
     */
    protected $dimensions = null;

    /**
     * @var string $adUnitView
     */
    protected $adUnitView = null;

    /**
     * @var string[] $columns
     */
    protected $columns = null;

    /**
     * @var string[] $dimensionAttributes
     */
    protected $dimensionAttributes = null;

    /**
     * @var int[] $customFieldIds
     */
    protected $customFieldIds = null;

    /**
     * @var int[] $cmsMetadataKeyIds
     */
    protected $cmsMetadataKeyIds = null;

    /**
     * @var int[] $customDimensionKeyIds
     */
    protected $customDimensionKeyIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Date $startDate
     */
    protected $startDate = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Date $endDate
     */
    protected $endDate = null;

    /**
     * @var string $dateRangeType
     */
    protected $dateRangeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Statement $statement
     */
    protected $statement = null;

    /**
     * @var string $adxReportCurrency
     */
    protected $adxReportCurrency = null;

    /**
     * @var string $timeZoneType
     */
    protected $timeZoneType = null;

    /**
     * @param string[] $dimensions
     * @param string $adUnitView
     * @param string[] $columns
     * @param string[] $dimensionAttributes
     * @param int[] $customFieldIds
     * @param int[] $cmsMetadataKeyIds
     * @param int[] $customDimensionKeyIds
     * @param \Google\AdsApi\AdManager\v202002\Date $startDate
     * @param \Google\AdsApi\AdManager\v202002\Date $endDate
     * @param string $dateRangeType
     * @param \Google\AdsApi\AdManager\v202002\Statement $statement
     * @param string $adxReportCurrency
     * @param string $timeZoneType
     */
    public function __construct(array $dimensions = null, $adUnitView = null, array $columns = null, array $dimensionAttributes = null, array $customFieldIds = null, array $cmsMetadataKeyIds = null, array $customDimensionKeyIds = null, $startDate = null, $endDate = null, $dateRangeType = null, $statement = null, $adxReportCurrency = null, $timeZoneType = null)
    {
      $this->dimensions = $dimensions;
      $this->adUnitView = $adUnitView;
      $this->columns = $columns;
      $this->dimensionAttributes = $dimensionAttributes;
      $this->customFieldIds = $customFieldIds;
      $this->cmsMetadataKeyIds = $cmsMetadataKeyIds;
      $this->customDimensionKeyIds = $customDimensionKeyIds;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->dateRangeType = $dateRangeType;
      $this->statement = $statement;
      $this->adxReportCurrency = $adxReportCurrency;
      $this->timeZoneType = $timeZoneType;
    }

    /**
     * @return string[]
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param string[]|null $dimensions
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setDimensions(array $dimensions = null)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnitView()
    {
      return $this->adUnitView;
    }

    /**
     * @param string $adUnitView
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setAdUnitView($adUnitView)
    {
      $this->adUnitView = $adUnitView;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param string[]|null $columns
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setColumns(array $columns = null)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDimensionAttributes()
    {
      return $this->dimensionAttributes;
    }

    /**
     * @param string[]|null $dimensionAttributes
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setDimensionAttributes(array $dimensionAttributes = null)
    {
      $this->dimensionAttributes = $dimensionAttributes;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCustomFieldIds()
    {
      return $this->customFieldIds;
    }

    /**
     * @param int[]|null $customFieldIds
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setCustomFieldIds(array $customFieldIds = null)
    {
      $this->customFieldIds = $customFieldIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCmsMetadataKeyIds()
    {
      return $this->cmsMetadataKeyIds;
    }

    /**
     * @param int[]|null $cmsMetadataKeyIds
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setCmsMetadataKeyIds(array $cmsMetadataKeyIds = null)
    {
      $this->cmsMetadataKeyIds = $cmsMetadataKeyIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCustomDimensionKeyIds()
    {
      return $this->customDimensionKeyIds;
    }

    /**
     * @param int[]|null $customDimensionKeyIds
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setCustomDimensionKeyIds(array $customDimensionKeyIds = null)
    {
      $this->customDimensionKeyIds = $customDimensionKeyIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Date $startDate
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Date $endDate
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateRangeType()
    {
      return $this->dateRangeType;
    }

    /**
     * @param string $dateRangeType
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setDateRangeType($dateRangeType)
    {
      $this->dateRangeType = $dateRangeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Statement
     */
    public function getStatement()
    {
      return $this->statement;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Statement $statement
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setStatement($statement)
    {
      $this->statement = $statement;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdxReportCurrency()
    {
      return $this->adxReportCurrency;
    }

    /**
     * @param string $adxReportCurrency
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setAdxReportCurrency($adxReportCurrency)
    {
      $this->adxReportCurrency = $adxReportCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZoneType()
    {
      return $this->timeZoneType;
    }

    /**
     * @param string $timeZoneType
     * @return \Google\AdsApi\AdManager\v202002\ReportQuery
     */
    public function setTimeZoneType($timeZoneType)
    {
      $this->timeZoneType = $timeZoneType;
      return $this;
    }

}
