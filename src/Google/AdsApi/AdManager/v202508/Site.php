<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Site
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $childNetworkCode
     */
    protected $childNetworkCode = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v202508\DateTime $approvalStatusUpdateTime
     */
    protected $approvalStatusUpdateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202508\DisapprovalReason[] $disapprovalReasons
     */
    protected $disapprovalReasons = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $childNetworkCode
     * @param string $approvalStatus
     * @param \Google\AdsApi\AdManager\v202508\DateTime $approvalStatusUpdateTime
     * @param \Google\AdsApi\AdManager\v202508\DisapprovalReason[] $disapprovalReasons
     */
    public function __construct($id = null, $url = null, $childNetworkCode = null, $approvalStatus = null, $approvalStatusUpdateTime = null, array $disapprovalReasons = null)
    {
      $this->id = $id;
      $this->url = $url;
      $this->childNetworkCode = $childNetworkCode;
      $this->approvalStatus = $approvalStatus;
      $this->approvalStatusUpdateTime = $approvalStatusUpdateTime;
      $this->disapprovalReasons = $disapprovalReasons;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildNetworkCode()
    {
      return $this->childNetworkCode;
    }

    /**
     * @param string $childNetworkCode
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setChildNetworkCode($childNetworkCode)
    {
      $this->childNetworkCode = $childNetworkCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\DateTime
     */
    public function getApprovalStatusUpdateTime()
    {
      return $this->approvalStatusUpdateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\DateTime $approvalStatusUpdateTime
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setApprovalStatusUpdateTime($approvalStatusUpdateTime)
    {
      $this->approvalStatusUpdateTime = $approvalStatusUpdateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\DisapprovalReason[]
     */
    public function getDisapprovalReasons()
    {
      return $this->disapprovalReasons;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\DisapprovalReason[]|null $disapprovalReasons
     * @return \Google\AdsApi\AdManager\v202508\Site
     */
    public function setDisapprovalReasons(array $disapprovalReasons = null)
    {
      $this->disapprovalReasons = $disapprovalReasons;
      return $this;
    }

}
