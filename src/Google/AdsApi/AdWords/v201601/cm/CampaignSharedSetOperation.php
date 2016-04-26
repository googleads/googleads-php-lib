<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignSharedSetOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignSharedSet $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignSharedSet $operand
     */
    public function __construct($operator = null, $operationType = null, $operand = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignSharedSet
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignSharedSet $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignSharedSetOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
