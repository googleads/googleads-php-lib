<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DisapprovalReason
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $details
     */
    protected $details = null;

    /**
     * @param string $type
     * @param string $details
     */
    public function __construct($type = null, $details = null)
    {
      $this->type = $type;
      $this->details = $details;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdManager\v202105\DisapprovalReason
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param string $details
     * @return \Google\AdsApi\AdManager\v202105\DisapprovalReason
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

}
