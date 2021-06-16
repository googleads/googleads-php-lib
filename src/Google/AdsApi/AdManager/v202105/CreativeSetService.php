<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202105\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202105\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202105\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202105\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202105\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202105\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202105\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202105\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202105\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202105\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202105\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\AdManager\v202105\CreativeSet $creativeSet)
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
     * @param \Google\AdsApi\AdManager\v202105\Statement $statement
     * @return \Google\AdsApi\AdManager\v202105\CreativeSetPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\AdManager\v202105\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\AdManager\v202105\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v202105\CreativeSet
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\AdManager\v202105\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
