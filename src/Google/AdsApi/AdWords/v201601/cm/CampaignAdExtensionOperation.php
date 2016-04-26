<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignAdExtensionOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $operand
     */
    public function __construct($operator = null, $operationType = null, $operand = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtensionOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
