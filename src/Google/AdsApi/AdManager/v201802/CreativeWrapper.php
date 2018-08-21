<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeWrapper
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @var string $htmlHeader
     */
    protected $htmlHeader = null;

    /**
     * @var string $htmlFooter
     */
    protected $htmlFooter = null;

    /**
     * @var string $ampHead
     */
    protected $ampHead = null;

    /**
     * @var string $ampBody
     */
    protected $ampBody = null;

    /**
     * @var string $ordering
     */
    protected $ordering = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $id
     * @param int $labelId
     * @param string $htmlHeader
     * @param string $htmlFooter
     * @param string $ampHead
     * @param string $ampBody
     * @param string $ordering
     * @param string $status
     */
    public function __construct($id = null, $labelId = null, $htmlHeader = null, $htmlFooter = null, $ampHead = null, $ampBody = null, $ordering = null, $status = null)
    {
      $this->id = $id;
      $this->labelId = $labelId;
      $this->htmlHeader = $htmlHeader;
      $this->htmlFooter = $htmlFooter;
      $this->ampHead = $ampHead;
      $this->ampBody = $ampBody;
      $this->ordering = $ordering;
      $this->status = $status;
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
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlHeader()
    {
      return $this->htmlHeader;
    }

    /**
     * @param string $htmlHeader
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setHtmlHeader($htmlHeader)
    {
      $this->htmlHeader = $htmlHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getHtmlFooter()
    {
      return $this->htmlFooter;
    }

    /**
     * @param string $htmlFooter
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setHtmlFooter($htmlFooter)
    {
      $this->htmlFooter = $htmlFooter;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmpHead()
    {
      return $this->ampHead;
    }

    /**
     * @param string $ampHead
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setAmpHead($ampHead)
    {
      $this->ampHead = $ampHead;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmpBody()
    {
      return $this->ampBody;
    }

    /**
     * @param string $ampBody
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setAmpBody($ampBody)
    {
      $this->ampBody = $ampBody;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrdering()
    {
      return $this->ordering;
    }

    /**
     * @param string $ordering
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setOrdering($ordering)
    {
      $this->ordering = $ordering;
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
     * @return \Google\AdsApi\AdManager\v201802\CreativeWrapper
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
