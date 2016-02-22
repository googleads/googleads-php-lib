<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LocationSyncExtension extends \Google\AdsApi\AdWords\v201601\cm\AdExtension
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\OAuthInfo $oAuthInfo
     */
    protected $oAuthInfo = null;

    /**
     * @var int $iconMediaId
     */
    protected $iconMediaId = null;

    /**
     * @var boolean $shouldSyncUrl
     */
    protected $shouldSyncUrl = null;

    /**
     * @param int $id
     * @param string $AdExtensionType
     * @param string $email
     * @param \Google\AdsApi\AdWords\v201601\cm\OAuthInfo $oAuthInfo
     * @param int $iconMediaId
     * @param boolean $shouldSyncUrl
     */
    public function __construct($id = null, $AdExtensionType = null, $email = null, $oAuthInfo = null, $iconMediaId = null, $shouldSyncUrl = null)
    {
      parent::__construct($id, $AdExtensionType);
      $this->email = $email;
      $this->oAuthInfo = $oAuthInfo;
      $this->iconMediaId = $iconMediaId;
      $this->shouldSyncUrl = $shouldSyncUrl;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationSyncExtension
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\OAuthInfo
     */
    public function getOAuthInfo()
    {
      return $this->oAuthInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\OAuthInfo $oAuthInfo
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationSyncExtension
     */
    public function setOAuthInfo($oAuthInfo)
    {
      $this->oAuthInfo = $oAuthInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getIconMediaId()
    {
      return $this->iconMediaId;
    }

    /**
     * @param int $iconMediaId
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationSyncExtension
     */
    public function setIconMediaId($iconMediaId)
    {
      $this->iconMediaId = $iconMediaId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShouldSyncUrl()
    {
      return $this->shouldSyncUrl;
    }

    /**
     * @param boolean $shouldSyncUrl
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationSyncExtension
     */
    public function setShouldSyncUrl($shouldSyncUrl)
    {
      $this->shouldSyncUrl = $shouldSyncUrl;
      return $this;
    }

}
