<?php

namespace Google\AdsApi\Dfp\v201511;

class VideoRedirectAsset extends \Google\AdsApi\Dfp\v201511\RedirectAsset
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\VideoMetadata $metadata
     */
    protected $metadata = null;

    /**
     * @param string $redirectUrl
     * @param \Google\AdsApi\Dfp\v201511\VideoMetadata $metadata
     */
    public function __construct($redirectUrl = null, $metadata = null)
    {
      parent::__construct($redirectUrl);
      $this->metadata = $metadata;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\VideoMetadata
     */
    public function getMetadata()
    {
      return $this->metadata;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\VideoMetadata $metadata
     * @return \Google\AdsApi\Dfp\v201511\VideoRedirectAsset
     */
    public function setMetadata($metadata)
    {
      $this->metadata = $metadata;
      return $this;
    }

}
