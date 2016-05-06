<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class KeywordSet extends \Google\AdsApi\AdWords\v201603\cm\Criterion
{

    /**
     * @var string $keywordSetId
     */
    protected $keywordSetId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $deprecated
     */
    protected $deprecated = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $keywordSetId
     * @param string $name
     * @param boolean $deprecated
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $keywordSetId = null, $name = null, $deprecated = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->keywordSetId = $keywordSetId;
      $this->name = $name;
      $this->deprecated = $deprecated;
    }

    /**
     * @return string
     */
    public function getKeywordSetId()
    {
      return $this->keywordSetId;
    }

    /**
     * @param string $keywordSetId
     * @return \Google\AdsApi\AdWords\v201603\express\KeywordSet
     */
    public function setKeywordSetId($keywordSetId)
    {
      $this->keywordSetId = $keywordSetId;
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
     * @return \Google\AdsApi\AdWords\v201603\express\KeywordSet
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeprecated()
    {
      return $this->deprecated;
    }

    /**
     * @param boolean $deprecated
     * @return \Google\AdsApi\AdWords\v201603\express\KeywordSet
     */
    public function setDeprecated($deprecated)
    {
      $this->deprecated = $deprecated;
      return $this;
    }

}
