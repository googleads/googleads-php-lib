<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTemplate
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\CreativeTemplateVariable[] $variables
     */
    protected $variables = null;

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @var boolean $isNativeEligible
     */
    protected $isNativeEligible = null;

    /**
     * @var boolean $isSafeFrameCompatible
     */
    protected $isSafeFrameCompatible = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param \Google\AdsApi\Dfp\v201711\CreativeTemplateVariable[] $variables
     * @param string $snippet
     * @param string $status
     * @param string $type
     * @param boolean $isInterstitial
     * @param boolean $isNativeEligible
     * @param boolean $isSafeFrameCompatible
     */
    public function __construct($id = null, $name = null, $description = null, array $variables = null, $snippet = null, $status = null, $type = null, $isInterstitial = null, $isNativeEligible = null, $isSafeFrameCompatible = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->variables = $variables;
      $this->snippet = $snippet;
      $this->status = $status;
      $this->type = $type;
      $this->isInterstitial = $isInterstitial;
      $this->isNativeEligible = $isNativeEligible;
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
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
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
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
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplateVariable[]
     */
    public function getVariables()
    {
      return $this->variables;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\CreativeTemplateVariable[] $variables
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setVariables(array $variables)
    {
      $this->variables = $variables;
      return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
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
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInterstitial()
    {
      return $this->isInterstitial;
    }

    /**
     * @param boolean $isInterstitial
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNativeEligible()
    {
      return $this->isNativeEligible;
    }

    /**
     * @param boolean $isNativeEligible
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setIsNativeEligible($isNativeEligible)
    {
      $this->isNativeEligible = $isNativeEligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSafeFrameCompatible()
    {
      return $this->isSafeFrameCompatible;
    }

    /**
     * @param boolean $isSafeFrameCompatible
     * @return \Google\AdsApi\Dfp\v201711\CreativeTemplate
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      return $this;
    }

}
