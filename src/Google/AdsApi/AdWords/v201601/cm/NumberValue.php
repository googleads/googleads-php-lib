<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class NumberValue extends \Google\AdsApi\AdWords\v201601\cm\ComparableValue
{

    /**
     * @param string $ComparableValueType
     */
    public function __construct($ComparableValueType = null)
    {
      parent::__construct($ComparableValueType);
    }

}
