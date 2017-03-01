<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
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
     * @return \Google\AdsApi\AdWords\v201702\cm\DataEntry
     */
    public function setDataEntryType($DataEntryType)
    {
      $this->DataEntryType = $DataEntryType;
      return $this;
    }

}
