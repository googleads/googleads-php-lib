<?php

namespace Google\AdsApi\Dfp\v201511;

class ReportJob
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\ReportQuery $reportQuery
     */
    protected $reportQuery = null;

    /**
     * @param int $id
     * @param \Google\AdsApi\Dfp\v201511\ReportQuery $reportQuery
     */
    public function __construct($id = null, $reportQuery = null)
    {
      $this->id = $id;
      $this->reportQuery = $reportQuery;
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
     * @return \Google\AdsApi\Dfp\v201511\ReportJob
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\ReportQuery
     */
    public function getReportQuery()
    {
      return $this->reportQuery;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\ReportQuery $reportQuery
     * @return \Google\AdsApi\Dfp\v201511\ReportJob
     */
    public function setReportQuery($reportQuery)
    {
      $this->reportQuery = $reportQuery;
      return $this;
    }

}
