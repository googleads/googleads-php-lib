<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202102\VideoPositionTarget[] $targetedPositions
     */
    protected $targetedPositions = null;

    /**
     * @param \Google\AdsApi\AdManager\v202102\VideoPositionTarget[] $targetedPositions
     */
    public function __construct(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\VideoPositionTarget[]
     */
    public function getTargetedPositions()
    {
      return $this->targetedPositions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\VideoPositionTarget[]|null $targetedPositions
     * @return \Google\AdsApi\AdManager\v202102\VideoPositionTargeting
     */
    public function setTargetedPositions(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
      return $this;
    }

}
