<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\VideoPositionTarget[] $targetedPositions
     */
    protected $targetedPositions = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\VideoPositionTarget[] $targetedPositions
     */
    public function __construct(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\VideoPositionTarget[]
     */
    public function getTargetedPositions()
    {
      return $this->targetedPositions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\VideoPositionTarget[] $targetedPositions
     * @return \Google\AdsApi\Dfp\v201708\VideoPositionTargeting
     */
    public function setTargetedPositions(array $targetedPositions)
    {
      $this->targetedPositions = $targetedPositions;
      return $this;
    }

}
