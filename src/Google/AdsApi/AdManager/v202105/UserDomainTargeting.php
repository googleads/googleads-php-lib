<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserDomainTargeting
{

    /**
     * @var string[] $domains
     */
    protected $domains = null;

    /**
     * @var boolean $targeted
     */
    protected $targeted = null;

    /**
     * @param string[] $domains
     * @param boolean $targeted
     */
    public function __construct(array $domains = null, $targeted = null)
    {
      $this->domains = $domains;
      $this->targeted = $targeted;
    }

    /**
     * @return string[]
     */
    public function getDomains()
    {
      return $this->domains;
    }

    /**
     * @param string[]|null $domains
     * @return \Google\AdsApi\AdManager\v202105\UserDomainTargeting
     */
    public function setDomains(array $domains = null)
    {
      $this->domains = $domains;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargeted()
    {
      return $this->targeted;
    }

    /**
     * @param boolean $targeted
     * @return \Google\AdsApi\AdManager\v202105\UserDomainTargeting
     */
    public function setTargeted($targeted)
    {
      $this->targeted = $targeted;
      return $this;
    }

}
