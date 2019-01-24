<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinityToken
{

    /**
     * @var int $customAffinityId
     */
    protected $customAffinityId = null;

    /**
     * @var int $customAffinityTokenId
     */
    protected $customAffinityTokenId = null;

    /**
     * @var string $tokenType
     */
    protected $tokenType = null;

    /**
     * @var string $parameter
     */
    protected $parameter = null;

    /**
     * @param int $customAffinityId
     * @param int $customAffinityTokenId
     * @param string $tokenType
     * @param string $parameter
     */
    public function __construct($customAffinityId = null, $customAffinityTokenId = null, $tokenType = null, $parameter = null)
    {
      $this->customAffinityId = $customAffinityId;
      $this->customAffinityTokenId = $customAffinityTokenId;
      $this->tokenType = $tokenType;
      $this->parameter = $parameter;
    }

    /**
     * @return int
     */
    public function getCustomAffinityId()
    {
      return $this->customAffinityId;
    }

    /**
     * @param int $customAffinityId
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken
     */
    public function setCustomAffinityId($customAffinityId)
    {
      $this->customAffinityId = (!is_null($customAffinityId) && PHP_INT_SIZE === 4)
          ? floatval($customAffinityId) : $customAffinityId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomAffinityTokenId()
    {
      return $this->customAffinityTokenId;
    }

    /**
     * @param int $customAffinityTokenId
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken
     */
    public function setCustomAffinityTokenId($customAffinityTokenId)
    {
      $this->customAffinityTokenId = (!is_null($customAffinityTokenId) && PHP_INT_SIZE === 4)
          ? floatval($customAffinityTokenId) : $customAffinityTokenId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
      return $this->tokenType;
    }

    /**
     * @param string $tokenType
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken
     */
    public function setTokenType($tokenType)
    {
      $this->tokenType = $tokenType;
      return $this;
    }

    /**
     * @return string
     */
    public function getParameter()
    {
      return $this->parameter;
    }

    /**
     * @param string $parameter
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken
     */
    public function setParameter($parameter)
    {
      $this->parameter = $parameter;
      return $this;
    }

}
