<?php

namespace Google\AdsApi\AdManager\v201802;


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
     * @param string $playlistType
     */
    public function __construct($playlistType = null)
    {
      $this->playlistType = $playlistType;
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
     * @return \Google\AdsApi\AdManager\v201802\HlsSettings
     */
    public function setPlaylistType($playlistType)
    {
      $this->playlistType = $playlistType;
      return $this;
    }

}
