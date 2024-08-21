<?php

namespace Google\AdsApi\AdManager\v202408;


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
     * @var string $creativeWrapperType
     */
    protected $creativeWrapperType = null;

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
     * @var \Google\AdsApi\AdManager\v202408\ConversionEvent_TrackingUrlsMapEntry[] $videoTrackingUrls
     */
    protected $videoTrackingUrls = null;

    /**
     * @var \Google\AdsApi\AdManager\v202408\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     */
    protected $thirdPartyDataDeclaration = null;

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
     * @param string $creativeWrapperType
     * @param string $htmlHeader
     * @param string $htmlFooter
     * @param string $ampHead
     * @param string $ampBody
     * @param \Google\AdsApi\AdManager\v202408\ConversionEvent_TrackingUrlsMapEntry[] $videoTrackingUrls
     * @param \Google\AdsApi\AdManager\v202408\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $ordering
     * @param string $status
     */
    public function __construct($id = null, $labelId = null, $creativeWrapperType = null, $htmlHeader = null, $htmlFooter = null, $ampHead = null, $ampBody = null, array $videoTrackingUrls = null, $thirdPartyDataDeclaration = null, $ordering = null, $status = null)
    {
      $this->id = $id;
      $this->labelId = $labelId;
      $this->creativeWrapperType = $creativeWrapperType;
      $this->htmlHeader = $htmlHeader;
      $this->htmlFooter = $htmlFooter;
      $this->ampHead = $ampHead;
      $this->ampBody = $ampBody;
      $this->videoTrackingUrls = $videoTrackingUrls;
      $this->thirdPartyDataDeclaration = $thirdPartyDataDeclaration;
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
    public function getCreativeWrapperType()
    {
      return $this->creativeWrapperType;
    }

    /**
     * @param string $creativeWrapperType
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
     */
    public function setCreativeWrapperType($creativeWrapperType)
    {
      $this->creativeWrapperType = $creativeWrapperType;
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
     */
    public function setAmpBody($ampBody)
    {
      $this->ampBody = $ampBody;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\ConversionEvent_TrackingUrlsMapEntry[]
     */
    public function getVideoTrackingUrls()
    {
      return $this->videoTrackingUrls;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\ConversionEvent_TrackingUrlsMapEntry[]|null $videoTrackingUrls
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
     */
    public function setVideoTrackingUrls(array $videoTrackingUrls = null)
    {
      $this->videoTrackingUrls = $videoTrackingUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\ThirdPartyDataDeclaration
     */
    public function getThirdPartyDataDeclaration()
    {
      return $this->thirdPartyDataDeclaration;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
     */
    public function setThirdPartyDataDeclaration($thirdPartyDataDeclaration)
    {
      $this->thirdPartyDataDeclaration = $thirdPartyDataDeclaration;
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
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
     * @return \Google\AdsApi\AdManager\v202408\CreativeWrapper
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
