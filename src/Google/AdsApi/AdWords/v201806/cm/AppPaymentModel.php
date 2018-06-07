<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppPaymentModel extends \Google\AdsApi\AdWords\v201806\cm\Criterion
{

    /**
     * @var string $appPaymentModelType
     */
    protected $appPaymentModelType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $appPaymentModelType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $appPaymentModelType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->appPaymentModelType = $appPaymentModelType;
    }

    /**
     * @return string
     */
    public function getAppPaymentModelType()
    {
      return $this->appPaymentModelType;
    }

    /**
     * @param string $appPaymentModelType
     * @return \Google\AdsApi\AdWords\v201806\cm\AppPaymentModel
     */
    public function setAppPaymentModelType($appPaymentModelType)
    {
      $this->appPaymentModelType = $appPaymentModelType;
      return $this;
    }

}
