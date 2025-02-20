<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentLabelTargeting
{

    /**
     * @var int[] $excludedContentLabelIds
     */
    protected $excludedContentLabelIds = null;

    /**
     * @param int[] $excludedContentLabelIds
     */
    public function __construct(array $excludedContentLabelIds = null)
    {
      $this->excludedContentLabelIds = $excludedContentLabelIds;
    }

    /**
     * @return int[]
     */
    public function getExcludedContentLabelIds()
    {
      return $this->excludedContentLabelIds;
    }

    /**
     * @param int[]|null $excludedContentLabelIds
     * @return \Google\AdsApi\AdManager\v202502\ContentLabelTargeting
     */
    public function setExcludedContentLabelIds(array $excludedContentLabelIds = null)
    {
      $this->excludedContentLabelIds = $excludedContentLabelIds;
      return $this;
    }

}
