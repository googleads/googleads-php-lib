<?php

namespace Google\AdsApi\Dfp\v201511;

class TypeError extends \Google\AdsApi\Dfp\v201511\ApiError
{

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString);
    }

}
