<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MediaService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Audio' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Audio',
      'AudioError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AudioError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Dimensions',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Image',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MediaBundle',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Media_Size_StringMapEntry',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'Video' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Video',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\VideoError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'Media' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Media',
      'MediaPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MediaPage',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
      'uploadResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\uploadResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/MediaService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of media that meet the criteria specified by the selector.
     * <p class="note"><b>Note:</b> {@code MediaService} will not return any
     * {@link ImageAd} image files.</p>
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201710\cm\MediaPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns the list of {@link Media} objects that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\MediaPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

    /**
     * Uploads new media. Currently, you can upload {@link Image} files and {@link MediaBundle}s.
     *
     * be uploaded.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\Media[] $media
     * @return \Google\AdsApi\AdWords\v201710\cm\Media[]
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function upload(array $media)
    {
      return $this->__soapCall('upload', array(array('media' => $media)))->getRval();
    }

}
