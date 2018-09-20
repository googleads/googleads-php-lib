<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Keyword extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $matchType
     */
    protected $matchType = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $text
     * @param string $matchType
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $text = null, $matchType = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->text = $text;
      $this->matchType = $matchType;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Google\AdsApi\AdWords\v201809\cm\Keyword
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
      return $this->matchType;
    }

    /**
     * @param string $matchType
     * @return \Google\AdsApi\AdWords\v201809\cm\Keyword
     */
    public function setMatchType($matchType)
    {
      $this->matchType = $matchType;
      return $this;
    }

}
