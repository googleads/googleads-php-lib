<?php

namespace Google\AdsApi\Dfp\v201511;

class DropDownCustomFieldValue extends \Google\AdsApi\Dfp\v201511\BaseCustomFieldValue
{

    /**
     * @var int $customFieldOptionId
     */
    protected $customFieldOptionId = null;

    /**
     * @param int $customFieldId
     * @param int $customFieldOptionId
     */
    public function __construct($customFieldId = null, $customFieldOptionId = null)
    {
      parent::__construct($customFieldId);
      $this->customFieldOptionId = $customFieldOptionId;
    }

    /**
     * @return int
     */
    public function getCustomFieldOptionId()
    {
      return $this->customFieldOptionId;
    }

    /**
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\Dfp\v201511\DropDownCustomFieldValue
     */
    public function setCustomFieldOptionId($customFieldOptionId)
    {
      $this->customFieldOptionId = $customFieldOptionId;
      return $this;
    }

}
