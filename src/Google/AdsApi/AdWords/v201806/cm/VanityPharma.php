<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VanityPharma
{

    /**
     * @var string $vanityPharmaDisplayUrlMode
     */
    protected $vanityPharmaDisplayUrlMode = null;

    /**
     * @var string $vanityPharmaText
     */
    protected $vanityPharmaText = null;

    /**
     * @param string $vanityPharmaDisplayUrlMode
     * @param string $vanityPharmaText
     */
    public function __construct($vanityPharmaDisplayUrlMode = null, $vanityPharmaText = null)
    {
      $this->vanityPharmaDisplayUrlMode = $vanityPharmaDisplayUrlMode;
      $this->vanityPharmaText = $vanityPharmaText;
    }

    /**
     * @return string
     */
    public function getVanityPharmaDisplayUrlMode()
    {
      return $this->vanityPharmaDisplayUrlMode;
    }

    /**
     * @param string $vanityPharmaDisplayUrlMode
     * @return \Google\AdsApi\AdWords\v201806\cm\VanityPharma
     */
    public function setVanityPharmaDisplayUrlMode($vanityPharmaDisplayUrlMode)
    {
      $this->vanityPharmaDisplayUrlMode = $vanityPharmaDisplayUrlMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVanityPharmaText()
    {
      return $this->vanityPharmaText;
    }

    /**
     * @param string $vanityPharmaText
     * @return \Google\AdsApi\AdWords\v201806\cm\VanityPharma
     */
    public function setVanityPharmaText($vanityPharmaText)
    {
      $this->vanityPharmaText = $vanityPharmaText;
      return $this;
    }

}
