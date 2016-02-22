<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class RuleItemGroup
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\RuleItem[] $items
     */
    protected $items = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\RuleItem[] $items
     */
    public function __construct(array $items = null)
    {
      $this->items = $items;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\RuleItem[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\RuleItem[] $items
     * @return \Google\AdsApi\AdWords\v201601\rm\RuleItemGroup
     */
    public function setItems(array $items)
    {
      $this->items = $items;
      return $this;
    }

}
