<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiEncodingProfile
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $variantType
     */
    protected $variantType = null;

    /**
     * @var string $containerType
     */
    protected $containerType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202208\VideoSettings $videoSettings
     */
    protected $videoSettings = null;

    /**
     * @var \Google\AdsApi\AdManager\v202208\AudioSettings $audioSettings
     */
    protected $audioSettings = null;

    /**
     * @var boolean $persistUnmatchedProfiles
     */
    protected $persistUnmatchedProfiles = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $variantType
     * @param string $containerType
     * @param \Google\AdsApi\AdManager\v202208\VideoSettings $videoSettings
     * @param \Google\AdsApi\AdManager\v202208\AudioSettings $audioSettings
     * @param boolean $persistUnmatchedProfiles
     */
    public function __construct($id = null, $name = null, $status = null, $variantType = null, $containerType = null, $videoSettings = null, $audioSettings = null, $persistUnmatchedProfiles = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->variantType = $variantType;
      $this->containerType = $containerType;
      $this->videoSettings = $videoSettings;
      $this->audioSettings = $audioSettings;
      $this->persistUnmatchedProfiles = $persistUnmatchedProfiles;
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
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
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
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantType()
    {
      return $this->variantType;
    }

    /**
     * @param string $variantType
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setVariantType($variantType)
    {
      $this->variantType = $variantType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerType()
    {
      return $this->containerType;
    }

    /**
     * @param string $containerType
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setContainerType($containerType)
    {
      $this->containerType = $containerType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\VideoSettings
     */
    public function getVideoSettings()
    {
      return $this->videoSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\VideoSettings $videoSettings
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setVideoSettings($videoSettings)
    {
      $this->videoSettings = $videoSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\AudioSettings
     */
    public function getAudioSettings()
    {
      return $this->audioSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\AudioSettings $audioSettings
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setAudioSettings($audioSettings)
    {
      $this->audioSettings = $audioSettings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPersistUnmatchedProfiles()
    {
      return $this->persistUnmatchedProfiles;
    }

    /**
     * @param boolean $persistUnmatchedProfiles
     * @return \Google\AdsApi\AdManager\v202208\DaiEncodingProfile
     */
    public function setPersistUnmatchedProfiles($persistUnmatchedProfiles)
    {
      $this->persistUnmatchedProfiles = $persistUnmatchedProfiles;
      return $this;
    }

}
