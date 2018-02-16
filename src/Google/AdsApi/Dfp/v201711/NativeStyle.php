<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NativeStyle
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
     * @var string $htmlSnippet
     */
    protected $htmlSnippet = null;

    /**
     * @var string $cssSnippet
     */
    protected $cssSnippet = null;

    /**
     * @var int $creativeTemplateId
     */
    protected $creativeTemplateId = null;

    /**
     * @var boolean $isFluid
     */
    protected $isFluid = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\Size $size
     */
    protected $size = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $htmlSnippet
     * @param string $cssSnippet
     * @param int $creativeTemplateId
     * @param boolean $isFluid
     * @param \Google\AdsApi\Dfp\v201711\Targeting $targeting
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201711\Size $size
     */
    public function __construct($id = null, $name = null, $htmlSnippet = null, $cssSnippet = null, $creativeTemplateId = null, $isFluid = null, $targeting = null, $status = null, $size = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->htmlSnippet = $htmlSnippet;
      $this->cssSnippet = $cssSnippet;
      $this->creativeTemplateId = $creativeTemplateId;
      $this->isFluid = $isFluid;
      $this->targeting = $targeting;
      $this->status = $status;
      $this->size = $size;
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
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
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
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlSnippet()
    {
      return $this->htmlSnippet;
    }

    /**
     * @param string $htmlSnippet
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setHtmlSnippet($htmlSnippet)
    {
      $this->htmlSnippet = $htmlSnippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getCssSnippet()
    {
      return $this->cssSnippet;
    }

    /**
     * @param string $cssSnippet
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setCssSnippet($cssSnippet)
    {
      $this->cssSnippet = $cssSnippet;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeTemplateId()
    {
      return $this->creativeTemplateId;
    }

    /**
     * @param int $creativeTemplateId
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setCreativeTemplateId($creativeTemplateId)
    {
      $this->creativeTemplateId = (!is_null($creativeTemplateId) && PHP_INT_SIZE === 4)
          ? floatval($creativeTemplateId) : $creativeTemplateId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFluid()
    {
      return $this->isFluid;
    }

    /**
     * @param boolean $isFluid
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setIsFluid($isFluid)
    {
      $this->isFluid = $isFluid;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Targeting $targeting
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
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
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Size $size
     * @return \Google\AdsApi\Dfp\v201711\NativeStyle
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

}
