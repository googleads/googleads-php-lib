<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ClickTrackingCreative extends \Google\AdsApi\AdManager\v201905\Creative
{

    /**
     * @var string $clickTrackingUrl
     */
    protected $clickTrackingUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201905\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v201905\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201905\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201905\BaseCustomFieldValue[] $customFieldValues
     * @param string $clickTrackingUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $clickTrackingUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return string
     */
    public function getClickTrackingUrl()
    {
      return $this->clickTrackingUrl;
    }

    /**
     * @param string $clickTrackingUrl
     * @return \Google\AdsApi\AdManager\v201905\ClickTrackingCreative
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
      $this->clickTrackingUrl = $clickTrackingUrl;
      return $this;
    }

}
