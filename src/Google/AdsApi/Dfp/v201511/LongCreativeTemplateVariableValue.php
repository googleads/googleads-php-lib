<?php

namespace Google\AdsApi\Dfp\v201511;

class LongCreativeTemplateVariableValue extends \Google\AdsApi\Dfp\v201511\BaseCreativeTemplateVariableValue
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
     * @return \Google\AdsApi\Dfp\v201511\LongCreativeTemplateVariableValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
