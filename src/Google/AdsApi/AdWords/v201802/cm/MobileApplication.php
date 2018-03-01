<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplication extends \Google\AdsApi\AdWords\v201802\cm\Criterion
{

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $appId
     * @param string $displayName
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $appId = null, $displayName = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->appId = $appId;
      $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Google\AdsApi\AdWords\v201802\cm\MobileApplication
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\MobileApplication
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

}
