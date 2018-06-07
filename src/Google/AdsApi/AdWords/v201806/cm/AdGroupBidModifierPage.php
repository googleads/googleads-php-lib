<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupBidModifierPage extends \Google\AdsApi\AdWords\v201806\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifier[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifier[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifier[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifier[] $entries
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifierPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
