<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class DataEntry
{

    /**
     * @var string $DataEntryType
     */
    protected $DataEntryType = null;

    /**
     * @param string $DataEntryType
     */
    public function __construct($DataEntryType = null)
    {
      $this->DataEntryType = $DataEntryType;
    }

    /**
     * @return string
     */
    public function getDataEntryType()
    {
      return $this->DataEntryType;
    }

    /**
     * @param string $DataEntryType
     * @return \Google\AdsApi\AdWords\v201601\cm\DataEntry
     */
    public function setDataEntryType($DataEntryType)
    {
      $this->DataEntryType = $DataEntryType;
      return $this;
    }

}
