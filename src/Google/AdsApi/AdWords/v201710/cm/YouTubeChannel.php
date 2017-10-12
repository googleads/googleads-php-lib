<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YouTubeChannel extends \Google\AdsApi\AdWords\v201710\cm\Criterion
{

    /**
     * @var string $channelId
     */
    protected $channelId = null;

    /**
     * @var string $channelName
     */
    protected $channelName = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $channelId
     * @param string $channelName
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $channelId = null, $channelName = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->channelId = $channelId;
      $this->channelName = $channelName;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
      return $this->channelId;
    }

    /**
     * @param string $channelId
     * @return \Google\AdsApi\AdWords\v201710\cm\YouTubeChannel
     */
    public function setChannelId($channelId)
    {
      $this->channelId = $channelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannelName()
    {
      return $this->channelName;
    }

    /**
     * @param string $channelName
     * @return \Google\AdsApi\AdWords\v201710\cm\YouTubeChannel
     */
    public function setChannelName($channelName)
    {
      $this->channelName = $channelName;
      return $this;
    }

}
