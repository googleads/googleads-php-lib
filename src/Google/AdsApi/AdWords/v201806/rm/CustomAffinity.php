<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinity
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $tokens
     */
    protected $tokens = null;

    /**
     * @param int $id
     * @param string $status
     * @param string $name
     * @param string $type
     * @param string $description
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $tokens
     */
    public function __construct($id = null, $status = null, $name = null, $type = null, $description = null, array $tokens = null)
    {
      $this->id = $id;
      $this->status = $status;
      $this->name = $name;
      $this->type = $type;
      $this->description = $description;
      $this->tokens = $tokens;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[]
     */
    public function getTokens()
    {
      return $this->tokens;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\rm\CustomAffinityToken[] $tokens
     * @return \Google\AdsApi\AdWords\v201806\rm\CustomAffinity
     */
    public function setTokens(array $tokens)
    {
      $this->tokens = $tokens;
      return $this;
    }

}
