<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class TextLabel extends \Google\AdsApi\AdWords\v201601\cm\Label
{

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201601\cm\LabelAttribute $attribute
     * @param string $LabelType
     */
    public function __construct($id = null, $name = null, $status = null, $attribute = null, $LabelType = null)
    {
      parent::__construct($id, $name, $status, $attribute, $LabelType);
    }

}
