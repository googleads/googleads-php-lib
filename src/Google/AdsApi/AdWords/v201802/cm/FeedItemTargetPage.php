<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemTargetPage extends \Google\AdsApi\AdWords\v201802\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemTarget[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemTarget[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemTarget[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemTarget[] $entries
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemTargetPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
