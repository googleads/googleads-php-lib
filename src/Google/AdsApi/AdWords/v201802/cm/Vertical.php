<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Vertical extends \Google\AdsApi\AdWords\v201802\cm\Criterion
{

    /**
     * @var int $verticalId
     */
    protected $verticalId = null;

    /**
     * @var int $verticalParentId
     */
    protected $verticalParentId = null;

    /**
     * @var string[] $path
     */
    protected $path = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $verticalId
     * @param int $verticalParentId
     * @param string[] $path
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $verticalId = null, $verticalParentId = null, array $path = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->verticalId = $verticalId;
      $this->verticalParentId = $verticalParentId;
      $this->path = $path;
    }

    /**
     * @return int
     */
    public function getVerticalId()
    {
      return $this->verticalId;
    }

    /**
     * @param int $verticalId
     * @return \Google\AdsApi\AdWords\v201802\cm\Vertical
     */
    public function setVerticalId($verticalId)
    {
      $this->verticalId = (!is_null($verticalId) && PHP_INT_SIZE === 4)
          ? floatval($verticalId) : $verticalId;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerticalParentId()
    {
      return $this->verticalParentId;
    }

    /**
     * @param int $verticalParentId
     * @return \Google\AdsApi\AdWords\v201802\cm\Vertical
     */
    public function setVerticalParentId($verticalParentId)
    {
      $this->verticalParentId = (!is_null($verticalParentId) && PHP_INT_SIZE === 4)
          ? floatval($verticalParentId) : $verticalParentId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPath()
    {
      return $this->path;
    }

    /**
     * @param string[] $path
     * @return \Google\AdsApi\AdWords\v201802\cm\Vertical
     */
    public function setPath(array $path)
    {
      $this->path = $path;
      return $this;
    }

}
