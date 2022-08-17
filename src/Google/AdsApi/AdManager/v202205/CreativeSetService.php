<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202205\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202205\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202205\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202205\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202205\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202205\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202205\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\AdManager\v202205\CreativeSet $creativeSet)
    {
      return $this->__soapCall('createCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

    /**
     * Gets a {@link CreativeSetPage} of {@link CreativeSet} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
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
     * a set of creative sets
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $statement
     * @return \Google\AdsApi\AdManager\v202205\CreativeSetPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\AdManager\v202205\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\AdManager\v202205\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202205\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\AdManager\v202205\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
