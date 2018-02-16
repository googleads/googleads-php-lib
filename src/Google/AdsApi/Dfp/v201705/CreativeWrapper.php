<?php

namespace Google\AdsApi\Dfp\v201705;


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
     * @var \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $header
     */
    protected $header = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $footer
     */
    protected $footer = null;

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
     * @param \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $header
     * @param \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $footer
     * @param string $ordering
     * @param string $status
     */
    public function __construct($id = null, $labelId = null, $header = null, $footer = null, $ordering = null, $status = null)
    {
      $this->id = $id;
      $this->labelId = $labelId;
      $this->header = $header;
      $this->footer = $footer;
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
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
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
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $header
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet
     */
    public function getFooter()
    {
      return $this->footer;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativeWrapperHtmlSnippet $footer
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
     */
    public function setFooter($footer)
    {
      $this->footer = $footer;
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
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
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
     * @return \Google\AdsApi\Dfp\v201705\CreativeWrapper
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
