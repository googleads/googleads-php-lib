<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201608\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeError',
      'CreativeSet' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeSet',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeSetError',
      'CreativeSetPage' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeSetPage',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201608\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201608\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201608\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201608\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201608\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LabelEntityAssociationError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201608\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201608\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/CreativeSetService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201608\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function createCreativeSet(\Google\AdsApi\Dfp\v201608\CreativeSet $creativeSet)
    {
      return $this->__soapCall('createCreativeSet', array(array('creativeSet' => $creativeSet)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $statement
     * @return \Google\AdsApi\Dfp\v201608\CreativeSetPage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getCreativeSetsByStatement(\Google\AdsApi\Dfp\v201608\Statement $statement)
    {
      return $this->__soapCall('getCreativeSetsByStatement', array(array('statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param \Google\AdsApi\Dfp\v201608\CreativeSet $creativeSet
     * @return \Google\AdsApi\Dfp\v201608\CreativeSet
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateCreativeSet(\Google\AdsApi\Dfp\v201608\CreativeSet $creativeSet)
    {
      return $this->__soapCall('updateCreativeSet', array(array('creativeSet' => $creativeSet)))->rval;
    }

}
