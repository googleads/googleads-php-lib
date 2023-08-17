<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeWrapperService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202302\\ObjectValue',
      'ActivateCreativeWrappers' => 'Google\\AdsApi\\AdManager\\v202302\\ActivateCreativeWrappers',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202302\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202302\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202302\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202302\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202302\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202302\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeWrapperAction' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeWrapperAction',
      'CreativeWrapper' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeWrapper',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeWrapperError',
      'CreativeWrapperPage' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeWrapperPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202302\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202302\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateValue',
      'DeactivateCreativeWrappers' => 'Google\\AdsApi\\AdManager\\v202302\\DeactivateCreativeWrappers',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202302\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202302\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202302\\InternalApiError',
      'LabelError' => 'Google\\AdsApi\\AdManager\\v202302\\LabelError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202302\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202302\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202302\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202302\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202302\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202302\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202302\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202302\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202302\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202302\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202302\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202302\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202302\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202302\\TextValue',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202302\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202302\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202302\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202302\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202302\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202302\\Value',
      'createCreativeWrappersResponse' => 'Google\\AdsApi\\AdManager\\v202302\\createCreativeWrappersResponse',
      'getCreativeWrappersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getCreativeWrappersByStatementResponse',
      'performCreativeWrapperActionResponse' => 'Google\\AdsApi\\AdManager\\v202302\\performCreativeWrapperActionResponse',
      'updateCreativeWrappersResponse' => 'Google\\AdsApi\\AdManager\\v202302\\updateCreativeWrappersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202302/CreativeWrapperService?wsdl')
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
     * Creates a new {@code CreativeWrapper} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link CreativeWrapper#labelId}
     * <li>{@link CreativeWrapper#ordering}
     * <li>{@link CreativeWrapper#header} or {@link CreativeWrapper#footer}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202302\CreativeWrapper[] $creativeWrappers
     * @return \Google\AdsApi\AdManager\v202302\CreativeWrapper[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function createCreativeWrappers(array $creativeWrappers)
    {
      return $this->__soapCall('createCreativeWrappers', array(array('creativeWrappers' => $creativeWrappers)))->getRval();
    }

    /**
     * Gets a {@link CreativeWrapperPage} of {@link CreativeWrapper} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CreativeWrapper#id}</td>
     * </tr>
     * <tr>
     * <td>{@code labelId}</td>
     * <td>{@link CreativeWrapper#labelId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link CreativeWrapper#status}</td>
     * </tr>
     * <tr>
     * <td>{@code ordering}</td>
     * <td>{@link CreativeWrapper#ordering}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\CreativeWrapperPage
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getCreativeWrappersByStatement(\Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeWrappersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CreativeWrapper} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202302\CreativeWrapperAction $creativeWrapperAction
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function performCreativeWrapperAction(\Google\AdsApi\AdManager\v202302\CreativeWrapperAction $creativeWrapperAction, \Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeWrapperAction', array(array('creativeWrapperAction' => $creativeWrapperAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@code CreativeWrapper} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\CreativeWrapper[] $creativeWrappers
     * @return \Google\AdsApi\AdManager\v202302\CreativeWrapper[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function updateCreativeWrappers(array $creativeWrappers)
    {
      return $this->__soapCall('updateCreativeWrappers', array(array('creativeWrappers' => $creativeWrappers)))->getRval();
    }

}
