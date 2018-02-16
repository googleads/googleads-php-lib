<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DropDownCustomFieldValue extends \Google\AdsApi\Dfp\v201705\BaseCustomFieldValue
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
     * @return \Google\AdsApi\Dfp\v201705\DropDownCustomFieldValue
     */
    public function setCustomFieldOptionId($customFieldOptionId)
    {
      $this->customFieldOptionId = (!is_null($customFieldOptionId) && PHP_INT_SIZE === 4)
          ? floatval($customFieldOptionId) : $customFieldOptionId;
      return $this;
    }

}
