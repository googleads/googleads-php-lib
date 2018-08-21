<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Company
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $faxPhone
     */
    protected $faxPhone = null;

    /**
     * @var string $primaryPhone
     */
    protected $primaryPhone = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $creditStatus
     */
    protected $creditStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\CompanySettings $settings
     */
    protected $settings = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var int $primaryContactId
     */
    protected $primaryContactId = null;

    /**
     * @var int[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var int $thirdPartyCompanyId
     */
    protected $thirdPartyCompanyId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\ViewabilityProvider $viewabilityProvider
     */
    protected $viewabilityProvider = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $type
     * @param string $address
     * @param string $email
     * @param string $faxPhone
     * @param string $primaryPhone
     * @param string $externalId
     * @param string $comment
     * @param string $creditStatus
     * @param \Google\AdsApi\AdManager\v201805\CompanySettings $settings
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @param int $primaryContactId
     * @param int[] $appliedTeamIds
     * @param int $thirdPartyCompanyId
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201805\ViewabilityProvider $viewabilityProvider
     */
    public function __construct($id = null, $name = null, $type = null, $address = null, $email = null, $faxPhone = null, $primaryPhone = null, $externalId = null, $comment = null, $creditStatus = null, $settings = null, array $appliedLabels = null, $primaryContactId = null, array $appliedTeamIds = null, $thirdPartyCompanyId = null, $lastModifiedDateTime = null, $viewabilityProvider = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->type = $type;
      $this->address = $address;
      $this->email = $email;
      $this->faxPhone = $faxPhone;
      $this->primaryPhone = $primaryPhone;
      $this->externalId = $externalId;
      $this->comment = $comment;
      $this->creditStatus = $creditStatus;
      $this->settings = $settings;
      $this->appliedLabels = $appliedLabels;
      $this->primaryContactId = $primaryContactId;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->thirdPartyCompanyId = $thirdPartyCompanyId;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->viewabilityProvider = $viewabilityProvider;
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
     * @return \Google\AdsApi\AdManager\v201805\Company
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
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxPhone()
    {
      return $this->faxPhone;
    }

    /**
     * @param string $faxPhone
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setFaxPhone($faxPhone)
    {
      $this->faxPhone = $faxPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryPhone()
    {
      return $this->primaryPhone;
    }

    /**
     * @param string $primaryPhone
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setPrimaryPhone($primaryPhone)
    {
      $this->primaryPhone = $primaryPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditStatus()
    {
      return $this->creditStatus;
    }

    /**
     * @param string $creditStatus
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setCreditStatus($creditStatus)
    {
      $this->creditStatus = $creditStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\CompanySettings $settings
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryContactId()
    {
      return $this->primaryContactId;
    }

    /**
     * @param int $primaryContactId
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setPrimaryContactId($primaryContactId)
    {
      $this->primaryContactId = (!is_null($primaryContactId) && PHP_INT_SIZE === 4)
          ? floatval($primaryContactId) : $primaryContactId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAppliedTeamIds()
    {
      return $this->appliedTeamIds;
    }

    /**
     * @param int[] $appliedTeamIds
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setAppliedTeamIds(array $appliedTeamIds)
    {
      $this->appliedTeamIds = $appliedTeamIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyCompanyId()
    {
      return $this->thirdPartyCompanyId;
    }

    /**
     * @param int $thirdPartyCompanyId
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setThirdPartyCompanyId($thirdPartyCompanyId)
    {
      $this->thirdPartyCompanyId = $thirdPartyCompanyId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ViewabilityProvider
     */
    public function getViewabilityProvider()
    {
      return $this->viewabilityProvider;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ViewabilityProvider $viewabilityProvider
     * @return \Google\AdsApi\AdManager\v201805\Company
     */
    public function setViewabilityProvider($viewabilityProvider)
    {
      $this->viewabilityProvider = $viewabilityProvider;
      return $this;
    }

}
