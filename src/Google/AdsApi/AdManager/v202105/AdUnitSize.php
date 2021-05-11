<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUnitSize
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\Size $size
     */
    protected $size = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\AdUnitSize[] $companions
     */
    protected $companions = null;

    /**
     * @var string $fullDisplayString
     */
    protected $fullDisplayString = null;

    /**
     * @var boolean $isAudio
     */
    protected $isAudio = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\Size $size
     * @param string $environmentType
     * @param \Google\AdsApi\AdManager\v202105\AdUnitSize[] $companions
     * @param string $fullDisplayString
     * @param boolean $isAudio
     */
    public function __construct($size = null, $environmentType = null, array $companions = null, $fullDisplayString = null, $isAudio = null)
    {
      $this->size = $size;
      $this->environmentType = $environmentType;
      $this->companions = $companions;
      $this->fullDisplayString = $fullDisplayString;
      $this->isAudio = $isAudio;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Size $size
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentType()
    {
      return $this->environmentType;
    }

    /**
     * @param string $environmentType
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize[]
     */
    public function getCompanions()
    {
      return $this->companions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\AdUnitSize[]|null $companions
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize
     */
    public function setCompanions(array $companions = null)
    {
      $this->companions = $companions;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullDisplayString()
    {
      return $this->fullDisplayString;
    }

    /**
     * @param string $fullDisplayString
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize
     */
    public function setFullDisplayString($fullDisplayString)
    {
      $this->fullDisplayString = $fullDisplayString;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAudio()
    {
      return $this->isAudio;
    }

    /**
     * @param boolean $isAudio
     * @return \Google\AdsApi\AdManager\v202105\AdUnitSize
     */
    public function setIsAudio($isAudio)
    {
      $this->isAudio = $isAudio;
      return $this;
    }

}
