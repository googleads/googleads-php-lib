<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201805\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201805\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201805\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201805\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201805\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201805\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\Dfp\v201805\CreativeSet $creativeSet)
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $statement
     * @return \Google\AdsApi\Dfp\v201805\CreativeSetPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\Dfp\v201805\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\Dfp\v201805\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201805\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\Dfp\v201805\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
