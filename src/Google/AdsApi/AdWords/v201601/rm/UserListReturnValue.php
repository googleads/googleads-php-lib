<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class UserListReturnValue extends \Google\AdsApi\AdWords\v201601\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\UserList[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201601\rm\UserList[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\UserList[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\UserList[] $value
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
