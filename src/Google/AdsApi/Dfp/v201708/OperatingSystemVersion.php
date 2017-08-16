<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OperatingSystemVersion extends \Google\AdsApi\Dfp\v201708\Technology
{

    /**
     * @var int $majorVersion
     */
    protected $majorVersion = null;

    /**
     * @var int $minorVersion
     */
    protected $minorVersion = null;

    /**
     * @var int $microVersion
     */
    protected $microVersion = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $majorVersion
     * @param int $minorVersion
     * @param int $microVersion
     */
    public function __construct($id = null, $name = null, $majorVersion = null, $minorVersion = null, $microVersion = null)
    {
      parent::__construct($id, $name);
      $this->majorVersion = $majorVersion;
      $this->minorVersion = $minorVersion;
      $this->microVersion = $microVersion;
    }

    /**
     * @return int
     */
    public function getMajorVersion()
    {
      return $this->majorVersion;
    }

    /**
     * @param int $majorVersion
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemVersion
     */
    public function setMajorVersion($majorVersion)
    {
      $this->majorVersion = $majorVersion;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinorVersion()
    {
      return $this->minorVersion;
    }

    /**
     * @param int $minorVersion
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemVersion
     */
    public function setMinorVersion($minorVersion)
    {
      $this->minorVersion = $minorVersion;
      return $this;
    }

    /**
     * @return int
     */
    public function getMicroVersion()
    {
      return $this->microVersion;
    }

    /**
     * @param int $microVersion
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemVersion
     */
    public function setMicroVersion($microVersion)
    {
      $this->microVersion = $microVersion;
      return $this;
    }

}
