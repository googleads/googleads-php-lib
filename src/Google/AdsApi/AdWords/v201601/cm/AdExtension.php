<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdExtension
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $AdExtensionType
     */
    protected $AdExtensionType = null;

    /**
     * @param int $id
     * @param string $AdExtensionType
     */
    public function __construct($id = null, $AdExtensionType = null)
    {
      $this->id = $id;
      $this->AdExtensionType = $AdExtensionType;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdExtension
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdExtensionType()
    {
      return $this->AdExtensionType;
    }

    /**
     * @param string $AdExtensionType
     * @return \Google\AdsApi\AdWords\v201601\cm\AdExtension
     */
    public function setAdExtensionType($AdExtensionType)
    {
      $this->AdExtensionType = $AdExtensionType;
      return $this;
    }

}
