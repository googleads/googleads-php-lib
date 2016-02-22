<?php

namespace Google\AdsApi\AdWords\v201601\o;

class LongAttribute extends \Google\AdsApi\AdWords\v201601\o\Attribute
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param int $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
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
     * @return \Google\AdsApi\AdWords\v201601\o\LongAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
