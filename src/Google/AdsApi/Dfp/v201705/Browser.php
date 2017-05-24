<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Browser extends \Google\AdsApi\Dfp\v201705\Technology
{

    /**
     * @var string $majorVersion
     */
    protected $majorVersion = null;

    /**
     * @var string $minorVersion
     */
    protected $minorVersion = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $majorVersion
     * @param string $minorVersion
     */
    public function __construct($id = null, $name = null, $majorVersion = null, $minorVersion = null)
    {
      parent::__construct($id, $name);
      $this->majorVersion = $majorVersion;
      $this->minorVersion = $minorVersion;
    }

    /**
     * @return string
     */
    public function getMajorVersion()
    {
      return $this->majorVersion;
    }

    /**
     * @param string $majorVersion
     * @return \Google\AdsApi\Dfp\v201705\Browser
     */
    public function setMajorVersion($majorVersion)
    {
      $this->majorVersion = $majorVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinorVersion()
    {
      return $this->minorVersion;
    }

    /**
     * @param string $minorVersion
     * @return \Google\AdsApi\Dfp\v201705\Browser
     */
    public function setMinorVersion($minorVersion)
    {
      $this->minorVersion = $minorVersion;
      return $this;
    }

}
