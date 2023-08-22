<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdDecisionCreative
{

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var int $slateDurationMills
     */
    protected $slateDurationMills = null;

    /**
     * @var int $creativeDurationMills
     */
    protected $creativeDurationMills = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\CreativeTranscode $creativeTranscode
     */
    protected $creativeTranscode = null;

    /**
     * @var string $googleVideoId
     */
    protected $googleVideoId = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\SamError $samError
     */
    protected $samError = null;

    /**
     * @var boolean $isTranscoded
     */
    protected $isTranscoded = null;

    /**
     * @var boolean $isDropped
     */
    protected $isDropped = null;

    /**
     * @param int $sequence
     * @param int $slateDurationMills
     * @param int $creativeDurationMills
     * @param \Google\AdsApi\AdManager\v202308\CreativeTranscode $creativeTranscode
     * @param string $googleVideoId
     * @param \Google\AdsApi\AdManager\v202308\SamError $samError
     * @param boolean $isTranscoded
     * @param boolean $isDropped
     */
    public function __construct($sequence = null, $slateDurationMills = null, $creativeDurationMills = null, $creativeTranscode = null, $googleVideoId = null, $samError = null, $isTranscoded = null, $isDropped = null)
    {
      $this->sequence = $sequence;
      $this->slateDurationMills = $slateDurationMills;
      $this->creativeDurationMills = $creativeDurationMills;
      $this->creativeTranscode = $creativeTranscode;
      $this->googleVideoId = $googleVideoId;
      $this->samError = $samError;
      $this->isTranscoded = $isTranscoded;
      $this->isDropped = $isDropped;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return int
     */
    public function getSlateDurationMills()
    {
      return $this->slateDurationMills;
    }

    /**
     * @param int $slateDurationMills
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setSlateDurationMills($slateDurationMills)
    {
      $this->slateDurationMills = (!is_null($slateDurationMills) && PHP_INT_SIZE === 4)
          ? floatval($slateDurationMills) : $slateDurationMills;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeDurationMills()
    {
      return $this->creativeDurationMills;
    }

    /**
     * @param int $creativeDurationMills
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setCreativeDurationMills($creativeDurationMills)
    {
      $this->creativeDurationMills = (!is_null($creativeDurationMills) && PHP_INT_SIZE === 4)
          ? floatval($creativeDurationMills) : $creativeDurationMills;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\CreativeTranscode
     */
    public function getCreativeTranscode()
    {
      return $this->creativeTranscode;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\CreativeTranscode $creativeTranscode
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setCreativeTranscode($creativeTranscode)
    {
      $this->creativeTranscode = $creativeTranscode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoogleVideoId()
    {
      return $this->googleVideoId;
    }

    /**
     * @param string $googleVideoId
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setGoogleVideoId($googleVideoId)
    {
      $this->googleVideoId = $googleVideoId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\SamError
     */
    public function getSamError()
    {
      return $this->samError;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\SamError $samError
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setSamError($samError)
    {
      $this->samError = $samError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTranscoded()
    {
      return $this->isTranscoded;
    }

    /**
     * @param boolean $isTranscoded
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setIsTranscoded($isTranscoded)
    {
      $this->isTranscoded = $isTranscoded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropped()
    {
      return $this->isDropped;
    }

    /**
     * @param boolean $isDropped
     * @return \Google\AdsApi\AdManager\v202308\AdDecisionCreative
     */
    public function setIsDropped($isDropped)
    {
      $this->isDropped = $isDropped;
      return $this;
    }

}
