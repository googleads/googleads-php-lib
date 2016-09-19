<?php

namespace Google\AdsApi\AdWords\v201607\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpressBusinessPage extends \Google\AdsApi\AdWords\v201607\express\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\express\ExpressBusiness[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201607\express\ExpressBusiness[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\express\ExpressBusiness[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\express\ExpressBusiness[] $entries
     * @return \Google\AdsApi\AdWords\v201607\express\ExpressBusinessPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
