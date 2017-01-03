<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201611\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201611\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201611\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201611\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201611\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createCreativeSetResponse',
      'getCreativeSetsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getCreativeSetsByStatementResponse',
      'updateCreativeSetResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateCreativeSetResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201611\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\Dfp\v201611\CreativeSet $creativeSet)
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $statement
     * @return \Google\AdsApi\Dfp\v201611\CreativeSetPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\Dfp\v201611\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\Dfp\v201611\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201611\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\Dfp\v201611\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->getRval();
    }

}
