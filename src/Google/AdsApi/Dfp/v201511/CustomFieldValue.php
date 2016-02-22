<?php

namespace Google\AdsApi\Dfp\v201511;

class CustomFieldValue extends \Google\AdsApi\Dfp\v201511\BaseCustomFieldValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Value $value
     */
    protected $value = null;

    /**
     * @param int $customFieldId
     * @param \Google\AdsApi\Dfp\v201511\Value $value
     */
    public function __construct($customFieldId = null, $value = null)
    {
      parent::__construct($customFieldId);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Value
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Value $value
     * @return \Google\AdsApi\Dfp\v201511\CustomFieldValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
