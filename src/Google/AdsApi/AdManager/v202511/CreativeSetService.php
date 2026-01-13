<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202511\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202511\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202511\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202511\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202511\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202511\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202511\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202511\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/CreativeSetService?wsdl')
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
     * Creates a new {@link CreativeSet}.
     *
     * @param \Google\AdsApi\AdManager\v202511\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202511\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\AdManager\v202511\CreativeSet $creativeSet)
    {
      return $this->__soapCall('createCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

    /**
     * Gets a {@link CreativeSetPage} of {@link CreativeSet} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CreativeSet#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CreativeSet#name}</td>
     * </tr>
     * <tr>
     * <td>{@code masterCreativeId}</td>
     * <td>{@link CreativeSet#masterCreativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link CreativeSet#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202511\Statement $statement
     * @return \Google\AdsApi\AdManager\v202511\CreativeSetPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\AdManager\v202511\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\AdManager\v202511\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202511\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\AdManager\v202511\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
