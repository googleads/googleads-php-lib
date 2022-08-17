<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnit
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var int $numRequests
     */
    protected $numRequests = null;

    /**
     * @var string[] $path
     */
    protected $path = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\AdUnitParent[] $parentPath
     */
    protected $parentPath = null;

    /**
     * @var string $targetWindow
     */
    protected $targetWindow = null;

    /**
     * @var string $targetPlatform
     */
    protected $targetPlatform = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\AdUnitSize[] $suggestedAdUnitSizes
     */
    protected $suggestedAdUnitSizes = null;

    /**
     * @param string $id
     * @param int $numRequests
     * @param string[] $path
     * @param \Google\AdsApi\AdManager\v202202\AdUnitParent[] $parentPath
     * @param string $targetWindow
     * @param string $targetPlatform
     * @param \Google\AdsApi\AdManager\v202202\AdUnitSize[] $suggestedAdUnitSizes
     */
    public function __construct($id = null, $numRequests = null, array $path = null, array $parentPath = null, $targetWindow = null, $targetPlatform = null, array $suggestedAdUnitSizes = null)
    {
      $this->id = $id;
      $this->numRequests = $numRequests;
      $this->path = $path;
      $this->parentPath = $parentPath;
      $this->targetWindow = $targetWindow;
      $this->targetPlatform = $targetPlatform;
      $this->suggestedAdUnitSizes = $suggestedAdUnitSizes;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumRequests()
    {
      return $this->numRequests;
    }

    /**
     * @param int $numRequests
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setNumRequests($numRequests)
    {
      $this->numRequests = (!is_null($numRequests) && PHP_INT_SIZE === 4)
          ? floatval($numRequests) : $numRequests;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPath()
    {
      return $this->path;
    }

    /**
     * @param string[]|null $path
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setPath(array $path = null)
    {
      $this->path = $path;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\AdUnitParent[]
     */
    public function getParentPath()
    {
      return $this->parentPath;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\AdUnitParent[]|null $parentPath
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setParentPath(array $parentPath = null)
    {
      $this->parentPath = $parentPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetWindow()
    {
      return $this->targetWindow;
    }

    /**
     * @param string $targetWindow
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setTargetWindow($targetWindow)
    {
      $this->targetWindow = $targetWindow;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetPlatform()
    {
      return $this->targetPlatform;
    }

    /**
     * @param string $targetPlatform
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setTargetPlatform($targetPlatform)
    {
      $this->targetPlatform = $targetPlatform;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\AdUnitSize[]
     */
    public function getSuggestedAdUnitSizes()
    {
      return $this->suggestedAdUnitSizes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\AdUnitSize[]|null $suggestedAdUnitSizes
     * @return \Google\AdsApi\AdManager\v202202\SuggestedAdUnit
     */
    public function setSuggestedAdUnitSizes(array $suggestedAdUnitSizes = null)
    {
      $this->suggestedAdUnitSizes = $suggestedAdUnitSizes;
      return $this;
    }

}
