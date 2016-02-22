<?php

namespace Google\AdsApi\AdWords\v201601\express;

class NegativeKeyword extends \Google\AdsApi\AdWords\v201601\cm\Keyword
{

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $text
     * @param string $matchType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $text = null, $matchType = null)
    {
      parent::__construct($id, $type, $CriterionType, $text, $matchType);
    }

}
