<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoRedirectAsset extends \Google\AdsApi\Dfp\v201708\RedirectAsset
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\VideoMetadata $metadata
     */
    protected $metadata = null;

    /**
     * @param string $redirectUrl
     * @param \Google\AdsApi\Dfp\v201708\VideoMetadata $metadata
     */
    public function __construct($redirectUrl = null, $metadata = null)
    {
      parent::__construct($redirectUrl);
      $this->metadata = $metadata;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\VideoMetadata
     */
    public function getMetadata()
    {
      return $this->metadata;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\VideoMetadata $metadata
     * @return \Google\AdsApi\Dfp\v201708\VideoRedirectAsset
     */
    public function setMetadata($metadata)
    {
      $this->metadata = $metadata;
      return $this;
    }

}
