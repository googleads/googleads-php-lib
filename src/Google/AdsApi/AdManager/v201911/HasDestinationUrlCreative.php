<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class HasDestinationUrlCreative extends \Google\AdsApi\AdManager\v201911\Creative
{

    /**
     * @var string $destinationUrl
     */
    protected $destinationUrl = null;

    /**
     * @var string $destinationUrlType
     */
    protected $destinationUrlType = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201911\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201911\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->destinationUrl = $destinationUrl;
      $this->destinationUrlType = $destinationUrlType;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     * @return \Google\AdsApi\AdManager\v201911\HasDestinationUrlCreative
     */
    public function setDestinationUrl($destinationUrl)
    {
      $this->destinationUrl = $destinationUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrlType()
    {
      return $this->destinationUrlType;
    }

    /**
     * @param string $destinationUrlType
     * @return \Google\AdsApi\AdManager\v201911\HasDestinationUrlCreative
     */
    public function setDestinationUrlType($destinationUrlType)
    {
      $this->destinationUrlType = $destinationUrlType;
      return $this;
    }

}
