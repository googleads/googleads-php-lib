<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201708\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201708\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201708\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201708\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201708\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201708\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\Dfp\v201708\CreativeSet $creativeSet)
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $statement
     * @return \Google\AdsApi\Dfp\v201708\CreativeSetPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\Dfp\v201708\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\Dfp\v201708\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201708\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\Dfp\v201708\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
