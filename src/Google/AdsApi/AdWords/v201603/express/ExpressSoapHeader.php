<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpressSoapHeader extends \Google\AdsApi\AdWords\v201603\cm\SoapHeader
{

    /**
     * @var int $expressBusinessId
     */
    protected $expressBusinessId = null;

    /**
     * @var string $pageId
     */
    protected $pageId = null;

    /**
     * @param string $clientCustomerId
     * @param string $developerToken
     * @param string $userAgent
     * @param boolean $validateOnly
     * @param boolean $partialFailure
     * @param int $expressBusinessId
     * @param string $pageId
     */
    public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null, $expressBusinessId = null, $pageId = null)
    {
      parent::__construct($clientCustomerId, $developerToken, $userAgent, $validateOnly, $partialFailure);
      $this->expressBusinessId = $expressBusinessId;
      $this->pageId = $pageId;
    }

    /**
     * @return int
     */
    public function getExpressBusinessId()
    {
      return $this->expressBusinessId;
    }

    /**
     * @param int $expressBusinessId
     * @return \Google\AdsApi\AdWords\v201603\express\ExpressSoapHeader
     */
    public function setExpressBusinessId($expressBusinessId)
    {
      $this->expressBusinessId = $expressBusinessId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageId()
    {
      return $this->pageId;
    }

    /**
     * @param string $pageId
     * @return \Google\AdsApi\AdWords\v201603\express\ExpressSoapHeader
     */
    public function setPageId($pageId)
    {
      $this->pageId = $pageId;
      return $this;
    }

}
