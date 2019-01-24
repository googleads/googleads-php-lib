<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPosition
{

    /**
     * @var string $positionType
     */
    protected $positionType = null;

    /**
     * @var int $midrollIndex
     */
    protected $midrollIndex = null;

    /**
     * @param string $positionType
     * @param int $midrollIndex
     */
    public function __construct($positionType = null, $midrollIndex = null)
    {
      $this->positionType = $positionType;
      $this->midrollIndex = $midrollIndex;
    }

    /**
     * @return string
     */
    public function getPositionType()
    {
      return $this->positionType;
    }

    /**
     * @param string $positionType
     * @return \Google\AdsApi\AdManager\v201808\VideoPosition
     */
    public function setPositionType($positionType)
    {
      $this->positionType = $positionType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMidrollIndex()
    {
      return $this->midrollIndex;
    }

    /**
     * @param int $midrollIndex
     * @return \Google\AdsApi\AdManager\v201808\VideoPosition
     */
    public function setMidrollIndex($midrollIndex)
    {
      $this->midrollIndex = $midrollIndex;
      return $this;
    }

}
