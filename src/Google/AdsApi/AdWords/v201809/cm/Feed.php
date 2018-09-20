<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Feed
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
     * @var \Google\AdsApi\AdWords\v201809\cm\FeedAttribute[] $attributes
     */
    protected $attributes = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $origin
     */
    protected $origin = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\SystemFeedGenerationData $systemFeedGenerationData
     */
    protected $systemFeedGenerationData = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedAttribute[] $attributes
     * @param string $status
     * @param string $origin
     * @param \Google\AdsApi\AdWords\v201809\cm\SystemFeedGenerationData $systemFeedGenerationData
     */
    public function __construct($id = null, $name = null, array $attributes = null, $status = null, $origin = null, $systemFeedGenerationData = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->attributes = $attributes;
      $this->status = $status;
      $this->origin = $origin;
      $this->systemFeedGenerationData = $systemFeedGenerationData;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedAttribute[]
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedAttribute[] $attributes
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
     */
    public function setAttributes(array $attributes)
    {
      $this->attributes = $attributes;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param string $origin
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\SystemFeedGenerationData
     */
    public function getSystemFeedGenerationData()
    {
      return $this->systemFeedGenerationData;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\SystemFeedGenerationData $systemFeedGenerationData
     * @return \Google\AdsApi\AdWords\v201809\cm\Feed
     */
    public function setSystemFeedGenerationData($systemFeedGenerationData)
    {
      $this->systemFeedGenerationData = $systemFeedGenerationData;
      return $this;
    }

}
