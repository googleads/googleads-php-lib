<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseDynamicAllocationCreative extends \Google\AdsApi\AdManager\v202111\Creative
{

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202111\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202111\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202111\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202111\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration);
    }

}
