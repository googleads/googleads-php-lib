<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TypeError extends \Google\AdsApi\Dfp\v201711\ApiError
{

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\Dfp\v201711\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString);
    }

}
