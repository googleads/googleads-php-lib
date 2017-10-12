<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyData
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\DisapprovalReason[] $disapprovalReasons
     */
    protected $disapprovalReasons = null;

    /**
     * @var string $PolicyDataType
     */
    protected $PolicyDataType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['PolicyData.Type' => 'PolicyDataType'];

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\DisapprovalReason[] $disapprovalReasons
     * @param string $PolicyDataType
     */
    public function __construct(array $disapprovalReasons = null, $PolicyDataType = null)
    {
      $this->disapprovalReasons = $disapprovalReasons;
      $this->PolicyDataType = $PolicyDataType;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\DisapprovalReason[]
     */
    public function getDisapprovalReasons()
    {
      return $this->disapprovalReasons;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\DisapprovalReason[] $disapprovalReasons
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyData
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
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyData
     */
    public function setPolicyDataType($PolicyDataType)
    {
      $this->PolicyDataType = $PolicyDataType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyData
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
