<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class HlsSettings
{

    /**
     * @var string $playlistType
     */
    protected $playlistType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\MasterPlaylistSettings $masterPlaylistSettings
     */
    protected $masterPlaylistSettings = null;

    /**
     * @param string $playlistType
     * @param \Google\AdsApi\AdManager\v202202\MasterPlaylistSettings $masterPlaylistSettings
     */
    public function __construct($playlistType = null, $masterPlaylistSettings = null)
    {
      $this->playlistType = $playlistType;
      $this->masterPlaylistSettings = $masterPlaylistSettings;
    }

    /**
     * @return string
     */
    public function getPlaylistType()
    {
      return $this->playlistType;
    }

    /**
     * @param string $playlistType
     * @return \Google\AdsApi\AdManager\v202202\HlsSettings
     */
    public function setPlaylistType($playlistType)
    {
      $this->playlistType = $playlistType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\MasterPlaylistSettings
     */
    public function getMasterPlaylistSettings()
    {
      return $this->masterPlaylistSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\MasterPlaylistSettings $masterPlaylistSettings
     * @return \Google\AdsApi\AdManager\v202202\HlsSettings
     */
    public function setMasterPlaylistSettings($masterPlaylistSettings)
    {
      $this->masterPlaylistSettings = $masterPlaylistSettings;
      return $this;
    }

}
