<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\VideoPositionTarget[] $targetedPositions
     */
    protected $targetedPositions = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\VideoPositionTarget[] $targetedPositions
     */
    public function __construct(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\VideoPositionTarget[]
     */
    public function getTargetedPositions()
    {
      return $this->targetedPositions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\VideoPositionTarget[]|null $targetedPositions
     * @return \Google\AdsApi\AdManager\v201908\VideoPositionTargeting
     */
    public function setTargetedPositions(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
      return $this;
    }

}
