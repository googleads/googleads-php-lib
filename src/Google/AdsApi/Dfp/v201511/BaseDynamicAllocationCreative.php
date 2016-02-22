<?php

namespace Google\AdsApi\Dfp\v201511;

abstract class BaseDynamicAllocationCreative extends \Google\AdsApi\Dfp\v201511\Creative
{

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201511\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201511\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201511\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
    }

}
