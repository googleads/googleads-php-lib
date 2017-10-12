<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Language extends \Google\AdsApi\AdWords\v201710\cm\Criterion
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $code
     * @param string $name
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $code = null, $name = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->code = $code;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Google\AdsApi\AdWords\v201710\cm\Language
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201710\cm\Language
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
