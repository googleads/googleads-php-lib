<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseCreativeTemplateVariableValue
{

    /**
     * @var string $uniqueName
     */
    protected $uniqueName = null;

    /**
     * @param string $uniqueName
     */
    public function __construct($uniqueName = null)
    {
      $this->uniqueName = $uniqueName;
    }

    /**
     * @return string
     */
    public function getUniqueName()
    {
      return $this->uniqueName;
    }

    /**
     * @param string $uniqueName
     * @return \Google\AdsApi\Dfp\v201708\BaseCreativeTemplateVariableValue
     */
    public function setUniqueName($uniqueName)
    {
      $this->uniqueName = $uniqueName;
      return $this;
    }

}
