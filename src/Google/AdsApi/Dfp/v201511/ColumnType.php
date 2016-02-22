<?php

namespace Google\AdsApi\Dfp\v201511;

class ColumnType
{

    /**
     * @var string $labelName
     */
    protected $labelName = null;

    /**
     * @param string $labelName
     */
    public function __construct($labelName = null)
    {
      $this->labelName = $labelName;
    }

    /**
     * @return string
     */
    public function getLabelName()
    {
      return $this->labelName;
    }

    /**
     * @param string $labelName
     * @return \Google\AdsApi\Dfp\v201511\ColumnType
     */
    public function setLabelName($labelName)
    {
      $this->labelName = $labelName;
      return $this;
    }

}
