<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CriterionCustomIntent extends \Google\AdsApi\AdWords\v201806\cm\Criterion
{

    /**
     * @var int $customIntentId
     */
    protected $customIntentId = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $customIntentId
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $customIntentId = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->customIntentId = $customIntentId;
    }

    /**
     * @return int
     */
    public function getCustomIntentId()
    {
      return $this->customIntentId;
    }

    /**
     * @param int $customIntentId
     * @return \Google\AdsApi\AdWords\v201806\cm\CriterionCustomIntent
     */
    public function setCustomIntentId($customIntentId)
    {
      $this->customIntentId = (!is_null($customIntentId) && PHP_INT_SIZE === 4)
          ? floatval($customIntentId) : $customIntentId;
      return $this;
    }

}
