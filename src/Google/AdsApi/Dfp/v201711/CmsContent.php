<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsContent
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $cmsContentId
     */
    protected $cmsContentId = null;

    /**
     * @param int $id
     * @param string $displayName
     * @param string $cmsContentId
     */
    public function __construct($id = null, $displayName = null, $cmsContentId = null)
    {
      $this->id = $id;
      $this->displayName = $displayName;
      $this->cmsContentId = $cmsContentId;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201711\CmsContent
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\Dfp\v201711\CmsContent
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCmsContentId()
    {
      return $this->cmsContentId;
    }

    /**
     * @param string $cmsContentId
     * @return \Google\AdsApi\Dfp\v201711\CmsContent
     */
    public function setCmsContentId($cmsContentId)
    {
      $this->cmsContentId = $cmsContentId;
      return $this;
    }

}
