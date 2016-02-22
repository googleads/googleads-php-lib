<?php

namespace Google\AdsApi\Dfp\v201511;

class ResultSet
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\ColumnType[] $columnTypes
     */
    protected $columnTypes = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Row[] $rows
     */
    protected $rows = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\ColumnType[] $columnTypes
     * @param \Google\AdsApi\Dfp\v201511\Row[] $rows
     */
    public function __construct(array $columnTypes = null, array $rows = null)
    {
      $this->columnTypes = $columnTypes;
      $this->rows = $rows;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\ColumnType[]
     */
    public function getColumnTypes()
    {
      return $this->columnTypes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\ColumnType[] $columnTypes
     * @return \Google\AdsApi\Dfp\v201511\ResultSet
     */
    public function setColumnTypes(array $columnTypes)
    {
      $this->columnTypes = $columnTypes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Row[]
     */
    public function getRows()
    {
      return $this->rows;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Row[] $rows
     * @return \Google\AdsApi\Dfp\v201511\ResultSet
     */
    public function setRows(array $rows)
    {
      $this->rows = $rows;
      return $this;
    }

}
