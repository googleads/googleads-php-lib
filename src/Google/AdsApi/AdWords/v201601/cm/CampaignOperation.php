<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Campaign $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\cm\Campaign $operand
     */
    public function __construct($operator = null, $operationType = null, $operand = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Campaign
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Campaign $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
