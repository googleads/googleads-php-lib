<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentLabel extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var string $contentLabelType
     */
    protected $contentLabelType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $contentLabelType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $contentLabelType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->contentLabelType = $contentLabelType;
    }

    /**
     * @return string
     */
    public function getContentLabelType()
    {
      return $this->contentLabelType;
    }

    /**
     * @param string $contentLabelType
     * @return \Google\AdsApi\AdWords\v201809\cm\ContentLabel
     */
    public function setContentLabelType($contentLabelType)
    {
      $this->contentLabelType = $contentLabelType;
      return $this;
    }

}
