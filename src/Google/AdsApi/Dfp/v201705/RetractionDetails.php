<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RetractionDetails
{

    /**
     * @var int $retractionReasonId
     */
    protected $retractionReasonId = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @param int $retractionReasonId
     * @param string $comments
     */
    public function __construct($retractionReasonId = null, $comments = null)
    {
      $this->retractionReasonId = $retractionReasonId;
      $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getRetractionReasonId()
    {
      return $this->retractionReasonId;
    }

    /**
     * @param int $retractionReasonId
     * @return \Google\AdsApi\Dfp\v201705\RetractionDetails
     */
    public function setRetractionReasonId($retractionReasonId)
    {
      $this->retractionReasonId = (!is_null($retractionReasonId) && PHP_INT_SIZE === 4)
          ? floatval($retractionReasonId) : $retractionReasonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Google\AdsApi\Dfp\v201705\RetractionDetails
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

}
