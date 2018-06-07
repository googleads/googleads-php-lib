<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class KeywordAttribute extends \Google\AdsApi\AdWords\v201806\o\Attribute
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Keyword $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param \Google\AdsApi\AdWords\v201806\cm\Keyword $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Keyword
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Keyword $value
     * @return \Google\AdsApi\AdWords\v201806\o\KeywordAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
