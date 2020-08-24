<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Creative
{

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\Size $size
     */
    protected $size = null;

    /**
     * @var string $previewUrl
     */
    protected $previewUrl = null;

    /**
     * @var string[] $policyViolations
     */
    protected $policyViolations = null;

    /**
     * @var string[] $policyLabels
     */
    protected $policyLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     */
    protected $thirdPartyDataDeclaration = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202005\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202005\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202005\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null)
    {
      $this->advertiserId = $advertiserId;
      $this->id = $id;
      $this->name = $name;
      $this->size = $size;
      $this->previewUrl = $previewUrl;
      $this->policyViolations = $policyViolations;
      $this->policyLabels = $policyLabels;
      $this->appliedLabels = $appliedLabels;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->customFieldValues = $customFieldValues;
      $this->thirdPartyDataDeclaration = $thirdPartyDataDeclaration;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = (!is_null($advertiserId) && PHP_INT_SIZE === 4)
          ? floatval($advertiserId) : $advertiserId;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202005\Creative
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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Size $size
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
      return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setPreviewUrl($previewUrl)
    {
      $this->previewUrl = $previewUrl;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPolicyViolations()
    {
      return $this->policyViolations;
    }

    /**
     * @param string[]|null $policyViolations
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setPolicyViolations(array $policyViolations = null)
    {
      $this->policyViolations = $policyViolations;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPolicyLabels()
    {
      return $this->policyLabels;
    }

    /**
     * @param string[]|null $policyLabels
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setPolicyLabels(array $policyLabels = null)
    {
      $this->policyLabels = $policyLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\AppliedLabel[]|null $appliedLabels
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setAppliedLabels(array $appliedLabels = null)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\BaseCustomFieldValue[]|null $customFieldValues
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setCustomFieldValues(array $customFieldValues = null)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration
     */
    public function getThirdPartyDataDeclaration()
    {
      return $this->thirdPartyDataDeclaration;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @return \Google\AdsApi\AdManager\v202005\Creative
     */
    public function setThirdPartyDataDeclaration($thirdPartyDataDeclaration)
    {
      $this->thirdPartyDataDeclaration = $thirdPartyDataDeclaration;
      return $this;
    }

}
