<?php

namespace Google\AdsApi\AdWords\v201601\o;

class IdeaTypeAttribute extends \Google\AdsApi\AdWords\v201601\o\Attribute
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param string $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdWords\v201601\o\IdeaTypeAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
