<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpandedCreative
{

    /**
     * @var string $headline1
     */
    protected $headline1 = null;

    /**
     * @var string $headline2
     */
    protected $headline2 = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $headline1
     * @param string $headline2
     * @param string $description
     */
    public function __construct($headline1 = null, $headline2 = null, $description = null)
    {
      $this->headline1 = $headline1;
      $this->headline2 = $headline2;
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function getHeadline1()
    {
      return $this->headline1;
    }

    /**
     * @param string $headline1
     * @return \Google\AdsApi\AdWords\v201609\express\ExpandedCreative
     */
    public function setHeadline1($headline1)
    {
      $this->headline1 = $headline1;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline2()
    {
      return $this->headline2;
    }

    /**
     * @param string $headline2
     * @return \Google\AdsApi\AdWords\v201609\express\ExpandedCreative
     */
    public function setHeadline2($headline2)
    {
      $this->headline2 = $headline2;
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
     * @return \Google\AdsApi\AdWords\v201609\express\ExpandedCreative
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
