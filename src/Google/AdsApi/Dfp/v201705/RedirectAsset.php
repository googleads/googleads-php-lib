<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class RedirectAsset extends \Google\AdsApi\Dfp\v201705\Asset
{

    /**
     * @var string $redirectUrl
     */
    protected $redirectUrl = null;

    /**
     * @param string $redirectUrl
     */
    public function __construct($redirectUrl = null)
    {
      $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
      return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return \Google\AdsApi\Dfp\v201705\RedirectAsset
     */
    public function setRedirectUrl($redirectUrl)
    {
      $this->redirectUrl = $redirectUrl;
      return $this;
    }

}
