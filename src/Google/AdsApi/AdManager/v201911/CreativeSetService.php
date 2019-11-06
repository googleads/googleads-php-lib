<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201911\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201911\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201911\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201911\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201911\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v201911\CreativeSet
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\AdManager\v201911\CreativeSet $creativeSet)
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $statement
     * @return \Google\AdsApi\AdManager\v201911\CreativeSetPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\AdManager\v201911\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\AdManager\v201911\CreativeSet $creativeSet
     * @return \Google\AdsApi\AdManager\v201911\CreativeSet
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\AdManager\v201911\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
