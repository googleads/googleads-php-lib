<?php

namespace Google\AdsApi\Dfp\v201511;

class SharedAdUnit
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
     * @var string $distributorName
     */
    protected $distributorName = null;

    /**
     * @var int $contentProviderAdUnitId
     */
    protected $contentProviderAdUnitId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $targetPlatform
     */
    protected $targetPlatform = null;

    /**
     * @var string $targetWindow
     */
    protected $targetWindow = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\AdUnitSize[] $adUnitSizes
     */
    protected $adUnitSizes = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $distributorName
     * @param int $contentProviderAdUnitId
     * @param string $status
     * @param string $targetPlatform
     * @param string $targetWindow
     * @param \Google\AdsApi\Dfp\v201511\AdUnitSize[] $adUnitSizes
     */
    public function __construct($id = null, $name = null, $distributorName = null, $contentProviderAdUnitId = null, $status = null, $targetPlatform = null, $targetWindow = null, array $adUnitSizes = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->distributorName = $distributorName;
      $this->contentProviderAdUnitId = $contentProviderAdUnitId;
      $this->status = $status;
      $this->targetPlatform = $targetPlatform;
      $this->targetWindow = $targetWindow;
      $this->adUnitSizes = $adUnitSizes;
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
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistributorName()
    {
      return $this->distributorName;
    }

    /**
     * @param string $distributorName
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setDistributorName($distributorName)
    {
      $this->distributorName = $distributorName;
      return $this;
    }

    /**
     * @return int
     */
    public function getContentProviderAdUnitId()
    {
      return $this->contentProviderAdUnitId;
    }

    /**
     * @param int $contentProviderAdUnitId
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setContentProviderAdUnitId($contentProviderAdUnitId)
    {
      $this->contentProviderAdUnitId = $contentProviderAdUnitId;
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
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setTargetPlatform($targetPlatform)
    {
      $this->targetPlatform = $targetPlatform;
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
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setTargetWindow($targetWindow)
    {
      $this->targetWindow = $targetWindow;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\AdUnitSize[]
     */
    public function getAdUnitSizes()
    {
      return $this->adUnitSizes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\AdUnitSize[] $adUnitSizes
     * @return \Google\AdsApi\Dfp\v201511\SharedAdUnit
     */
    public function setAdUnitSizes(array $adUnitSizes)
    {
      $this->adUnitSizes = $adUnitSizes;
      return $this;
    }

}
