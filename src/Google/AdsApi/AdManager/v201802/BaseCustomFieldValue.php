<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseCustomFieldValue
{

    /**
     * @var int $customFieldId
     */
    protected $customFieldId = null;

    /**
     * @param int $customFieldId
     */
    public function __construct($customFieldId = null)
    {
      $this->customFieldId = $customFieldId;
    }

    /**
     * @return int
     */
    public function getCustomFieldId()
    {
      return $this->customFieldId;
    }

    /**
     * @param int $customFieldId
     * @return \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue
     */
    public function setCustomFieldId($customFieldId)
    {
      $this->customFieldId = (!is_null($customFieldId) && PHP_INT_SIZE === 4)
          ? floatval($customFieldId) : $customFieldId;
      return $this;
    }

}
