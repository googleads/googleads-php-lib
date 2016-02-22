<?php

namespace Google\AdsApi\AdWords\v201601\express;

class PromotionPage extends \Google\AdsApi\AdWords\v201601\express\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\express\Promotion[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\express\Promotion[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\express\Promotion[] $entries
     * @return \Google\AdsApi\AdWords\v201601\express\PromotionPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
