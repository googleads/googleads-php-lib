<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResultSet
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\ColumnType[] $columnTypes
     */
    protected $columnTypes = null;

    /**
     * @var \Google\AdsApi\AdManager\v202111\Row[] $rows
     */
    protected $rows = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\ColumnType[] $columnTypes
     * @param \Google\AdsApi\AdManager\v202111\Row[] $rows
     */
    public function __construct(array $columnTypes = null, array $rows = null)
    {
      $this->columnTypes = $columnTypes;
      $this->rows = $rows;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\ColumnType[]
     */
    public function getColumnTypes()
    {
      return $this->columnTypes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\ColumnType[]|null $columnTypes
     * @return \Google\AdsApi\AdManager\v202111\ResultSet
     */
    public function setColumnTypes(array $columnTypes = null)
    {
      $this->columnTypes = $columnTypes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\Row[]
     */
    public function getRows()
    {
      return $this->rows;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\Row[]|null $rows
     * @return \Google\AdsApi\AdManager\v202111\ResultSet
     */
    public function setRows(array $rows = null)
    {
      $this->rows = $rows;
      return $this;
    }

}
