<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Stats
{

    /**
     * @var int $impressionsDelivered
     */
    protected $impressionsDelivered = null;

    /**
     * @var int $clicksDelivered
     */
    protected $clicksDelivered = null;

    /**
     * @var int $videoCompletionsDelivered
     */
    protected $videoCompletionsDelivered = null;

    /**
     * @var int $videoStartsDelivered
     */
    protected $videoStartsDelivered = null;

    /**
     * @var int $viewableImpressionsDelivered
     */
    protected $viewableImpressionsDelivered = null;

    /**
     * @param int $impressionsDelivered
     * @param int $clicksDelivered
     * @param int $videoCompletionsDelivered
     * @param int $videoStartsDelivered
     * @param int $viewableImpressionsDelivered
     */
    public function __construct($impressionsDelivered = null, $clicksDelivered = null, $videoCompletionsDelivered = null, $videoStartsDelivered = null, $viewableImpressionsDelivered = null)
    {
      $this->impressionsDelivered = $impressionsDelivered;
      $this->clicksDelivered = $clicksDelivered;
      $this->videoCompletionsDelivered = $videoCompletionsDelivered;
      $this->videoStartsDelivered = $videoStartsDelivered;
      $this->viewableImpressionsDelivered = $viewableImpressionsDelivered;
    }

    /**
     * @return int
     */
    public function getImpressionsDelivered()
    {
      return $this->impressionsDelivered;
    }

    /**
     * @param int $impressionsDelivered
     * @return \Google\AdsApi\Dfp\v201602\Stats
     */
    public function setImpressionsDelivered($impressionsDelivered)
    {
      $this->impressionsDelivered = $impressionsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getClicksDelivered()
    {
      return $this->clicksDelivered;
    }

    /**
     * @param int $clicksDelivered
     * @return \Google\AdsApi\Dfp\v201602\Stats
     */
    public function setClicksDelivered($clicksDelivered)
    {
      $this->clicksDelivered = $clicksDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoCompletionsDelivered()
    {
      return $this->videoCompletionsDelivered;
    }

    /**
     * @param int $videoCompletionsDelivered
     * @return \Google\AdsApi\Dfp\v201602\Stats
     */
    public function setVideoCompletionsDelivered($videoCompletionsDelivered)
    {
      $this->videoCompletionsDelivered = $videoCompletionsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoStartsDelivered()
    {
      return $this->videoStartsDelivered;
    }

    /**
     * @param int $videoStartsDelivered
     * @return \Google\AdsApi\Dfp\v201602\Stats
     */
    public function setVideoStartsDelivered($videoStartsDelivered)
    {
      $this->videoStartsDelivered = $videoStartsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getViewableImpressionsDelivered()
    {
      return $this->viewableImpressionsDelivered;
    }

    /**
     * @param int $viewableImpressionsDelivered
     * @return \Google\AdsApi\Dfp\v201602\Stats
     */
    public function setViewableImpressionsDelivered($viewableImpressionsDelivered)
    {
      $this->viewableImpressionsDelivered = $viewableImpressionsDelivered;
      return $this;
    }

}
