<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class YouTubeVideo extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var string $videoId
     */
    protected $videoId = null;

    /**
     * @var string $videoName
     */
    protected $videoName = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $videoId
     * @param string $videoName
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $videoId = null, $videoName = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->videoId = $videoId;
      $this->videoName = $videoName;
    }

    /**
     * @return string
     */
    public function getVideoId()
    {
      return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return \Google\AdsApi\AdWords\v201601\cm\YouTubeVideo
     */
    public function setVideoId($videoId)
    {
      $this->videoId = $videoId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoName()
    {
      return $this->videoName;
    }

    /**
     * @param string $videoName
     * @return \Google\AdsApi\AdWords\v201601\cm\YouTubeVideo
     */
    public function setVideoName($videoName)
    {
      $this->videoName = $videoName;
      return $this;
    }

}
