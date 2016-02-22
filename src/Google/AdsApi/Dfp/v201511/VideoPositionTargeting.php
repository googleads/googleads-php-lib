<?php

namespace Google\AdsApi\Dfp\v201511;

class VideoPositionTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\VideoPositionTarget[] $targetedPositions
     */
    protected $targetedPositions = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\VideoPositionTarget[] $targetedPositions
     */
    public function __construct(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\VideoPositionTarget[]
     */
    public function getTargetedPositions()
    {
      return $this->targetedPositions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\VideoPositionTarget[] $targetedPositions
     * @return \Google\AdsApi\Dfp\v201511\VideoPositionTargeting
     */
    public function setTargetedPositions(array $targetedPositions)
    {
      $this->targetedPositions = $targetedPositions;
      return $this;
    }

}
