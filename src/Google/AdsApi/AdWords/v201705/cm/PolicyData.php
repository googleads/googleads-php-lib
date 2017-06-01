<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyData
{

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\DisapprovalReason[] $disapprovalReasons
     */
    protected $disapprovalReasons = null;

    /**
     * @var string $PolicyDataType
     */
    protected $PolicyDataType = null;

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\DisapprovalReason[] $disapprovalReasons
     * @param string $PolicyDataType
     */
    public function __construct(array $disapprovalReasons = null, $PolicyDataType = null)
    {
      $this->disapprovalReasons = $disapprovalReasons;
      $this->PolicyDataType = $PolicyDataType;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\DisapprovalReason[]
     */
    public function getDisapprovalReasons()
    {
      return $this->disapprovalReasons;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\DisapprovalReason[] $disapprovalReasons
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyData
     */
    public function setDisapprovalReasons(array $disapprovalReasons)
    {
      $this->disapprovalReasons = $disapprovalReasons;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyDataType()
    {
      return $this->PolicyDataType;
    }

    /**
     * @param string $PolicyDataType
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyData
     */
    public function setPolicyDataType($PolicyDataType)
    {
      $this->PolicyDataType = $PolicyDataType;
      return $this;
    }

}
