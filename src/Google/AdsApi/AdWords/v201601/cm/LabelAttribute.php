<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LabelAttribute
{

    /**
     * @var string $LabelAttributeType
     */
    protected $LabelAttributeType = null;

    /**
     * @param string $LabelAttributeType
     */
    public function __construct($LabelAttributeType = null)
    {
      $this->LabelAttributeType = $LabelAttributeType;
    }

    /**
     * @return string
     */
    public function getLabelAttributeType()
    {
      return $this->LabelAttributeType;
    }

    /**
     * @param string $LabelAttributeType
     * @return \Google\AdsApi\AdWords\v201601\cm\LabelAttribute
     */
    public function setLabelAttributeType($LabelAttributeType)
    {
      $this->LabelAttributeType = $LabelAttributeType;
      return $this;
    }

}
