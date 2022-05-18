<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeWrapperService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ActivateCreativeWrappers' => 'Google\\AdsApi\\AdManager\\v202205\\ActivateCreativeWrappers',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ConversionEvent_TrackingUrlsMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\ConversionEvent_TrackingUrlsMapEntry',
      'CreativeWrapperAction' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeWrapperAction',
      'CreativeWrapper' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeWrapper',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeWrapperError',
      'CreativeWrapperPage' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeWrapperPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DeactivateCreativeWrappers' => 'Google\\AdsApi\\AdManager\\v202205\\DeactivateCreativeWrappers',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'LabelError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'ThirdPartyDataDeclaration' => 'Google\\AdsApi\\AdManager\\v202205\\ThirdPartyDataDeclaration',
      'TrackingUrls' => 'Google\\AdsApi\\AdManager\\v202205\\TrackingUrls',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'createCreativeWrappersResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createCreativeWrappersResponse',
      'getCreativeWrappersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getCreativeWrappersByStatementResponse',
      'performCreativeWrapperActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performCreativeWrapperActionResponse',
      'updateCreativeWrappersResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateCreativeWrappersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/CreativeWrapperService?wsdl')
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
     * The following fields are required:
     * <ul>
     * <li>{@link CreativeWrapper#labelId}</li>
     * <li>{@link CreativeWrapper#ordering}</li>
     * <li>{@link CreativeWrapper#header} or {@link CreativeWrapper#footer}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202205\CreativeWrapper[] $creativeWrappers
     * @return \Google\AdsApi\AdManager\v202205\CreativeWrapper[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createCreativeWrappers(array $creativeWrappers)
    {
      return $this->__soapCall('createCreativeWrappers', array(array('creativeWrappers' => $creativeWrappers)))->getRval();
    }

    /**
     * Gets a {@link CreativeWrapperPage} of {@link CreativeWrapper}
     * objects that satisfy the given {@link Statement#query}. The following
     * fields are supported for filtering:
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
     * a set of creative wrappers.
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\CreativeWrapperPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getCreativeWrappersByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeWrappersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CreativeWrapper} objects that match the
     * given {@link Statement#query}.
     *
     * a set of labels
     *
     * @param \Google\AdsApi\AdManager\v202205\CreativeWrapperAction $creativeWrapperAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performCreativeWrapperAction(\Google\AdsApi\AdManager\v202205\CreativeWrapperAction $creativeWrapperAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeWrapperAction', array(array('creativeWrapperAction' => $creativeWrapperAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@code CreativeWrapper} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\CreativeWrapper[] $creativeWrappers
     * @return \Google\AdsApi\AdManager\v202205\CreativeWrapper[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateCreativeWrappers(array $creativeWrappers)
    {
      return $this->__soapCall('updateCreativeWrappers', array(array('creativeWrappers' => $creativeWrappers)))->getRval();
    }

}
