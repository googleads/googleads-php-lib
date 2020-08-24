<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyDataDeclaration
{

    /**
     * @var string $declarationType
     */
    protected $declarationType = null;

    /**
     * @var int[] $thirdPartyCompanyIds
     */
    protected $thirdPartyCompanyIds = null;

    /**
     * @param string $declarationType
     * @param int[] $thirdPartyCompanyIds
     */
    public function __construct($declarationType = null, array $thirdPartyCompanyIds = null)
    {
      $this->declarationType = $declarationType;
      $this->thirdPartyCompanyIds = $thirdPartyCompanyIds;
    }

    /**
     * @return string
     */
    public function getDeclarationType()
    {
      return $this->declarationType;
    }

    /**
     * @param string $declarationType
     * @return \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration
     */
    public function setDeclarationType($declarationType)
    {
      $this->declarationType = $declarationType;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getThirdPartyCompanyIds()
    {
      return $this->thirdPartyCompanyIds;
    }

    /**
     * @param int[]|null $thirdPartyCompanyIds
     * @return \Google\AdsApi\AdManager\v202005\ThirdPartyDataDeclaration
     */
    public function setThirdPartyCompanyIds(array $thirdPartyCompanyIds = null)
    {
      $this->thirdPartyCompanyIds = $thirdPartyCompanyIds;
      return $this;
    }

}
