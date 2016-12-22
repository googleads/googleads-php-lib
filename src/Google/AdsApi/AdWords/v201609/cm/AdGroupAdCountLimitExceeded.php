<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdCountLimitExceeded extends \Google\AdsApi\AdWords\v201609\cm\EntityCountLimitExceeded
{

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $enclosingId
     * @param int $limit
     * @param string $accountLimitType
     * @param int $existingCount
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType, $reason, $enclosingId, $limit, $accountLimitType, $existingCount);
    }

}
