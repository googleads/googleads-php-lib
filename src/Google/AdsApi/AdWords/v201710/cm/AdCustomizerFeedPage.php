<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCustomizerFeedPage extends \Google\AdsApi\AdWords\v201710\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\AdCustomizerFeed[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201710\cm\AdCustomizerFeed[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\AdCustomizerFeed[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\AdCustomizerFeed[] $entries
     * @return \Google\AdsApi\AdWords\v201710\cm\AdCustomizerFeedPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
