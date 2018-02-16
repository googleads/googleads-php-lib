<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongCreativeTemplateVariableValue extends \Google\AdsApi\Dfp\v201711\BaseCreativeTemplateVariableValue
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param string $uniqueName
     * @param int $value
     */
    public function __construct($uniqueName = null, $value = null)
    {
      parent::__construct($uniqueName);
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Google\AdsApi\Dfp\v201711\LongCreativeTemplateVariableValue
     */
    public function setValue($value)
    {
      $this->value = (!is_null($value) && PHP_INT_SIZE === 4)
          ? floatval($value) : $value;
      return $this;
    }

}
