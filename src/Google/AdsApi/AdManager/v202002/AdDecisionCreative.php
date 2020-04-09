<?php

namespace Google\AdsApi\AdManager\v202002;


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
     * @var \Google\AdsApi\AdManager\v202002\CreativeTranscode $creativeTranscode
     */
    protected $creativeTranscode = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\SamError $samError
     */
    protected $samError = null;

    /**
     * @var boolean $isTranscoded
     */
    protected $isTranscoded = null;

    /**
     * @param int $sequence
     * @param int $slateDurationMills
     * @param int $creativeDurationMills
     * @param \Google\AdsApi\AdManager\v202002\CreativeTranscode $creativeTranscode
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @param boolean $isTranscoded
     */
    public function __construct($sequence = null, $slateDurationMills = null, $creativeDurationMills = null, $creativeTranscode = null, $samError = null, $isTranscoded = null)
    {
      $this->sequence = $sequence;
      $this->slateDurationMills = $slateDurationMills;
      $this->creativeDurationMills = $creativeDurationMills;
      $this->creativeTranscode = $creativeTranscode;
      $this->samError = $samError;
      $this->isTranscoded = $isTranscoded;
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
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
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
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
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
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
     */
    public function setCreativeDurationMills($creativeDurationMills)
    {
      $this->creativeDurationMills = (!is_null($creativeDurationMills) && PHP_INT_SIZE === 4)
          ? floatval($creativeDurationMills) : $creativeDurationMills;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\CreativeTranscode
     */
    public function getCreativeTranscode()
    {
      return $this->creativeTranscode;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\CreativeTranscode $creativeTranscode
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
     */
    public function setCreativeTranscode($creativeTranscode)
    {
      $this->creativeTranscode = $creativeTranscode;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\SamError
     */
    public function getSamError()
    {
      return $this->samError;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
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
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative
     */
    public function setIsTranscoded($isTranscoded)
    {
      $this->isTranscoded = $isTranscoded;
      return $this;
    }

}
