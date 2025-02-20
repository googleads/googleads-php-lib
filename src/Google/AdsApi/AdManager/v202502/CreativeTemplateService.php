<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'AssetCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\AssetCreativeTemplateVariable',
      'CreativeTemplate' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTemplate',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTemplateError',
      'ListStringCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\ListStringCreativeTemplateVariable',
      'ListStringCreativeTemplateVariable.VariableChoice' => 'Google\\AdsApi\\AdManager\\v202502\\ListStringCreativeTemplateVariableVariableChoice',
      'LongCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\LongCreativeTemplateVariable',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTemplateOperationError',
      'CreativeTemplatePage' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTemplatePage',
      'StringCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\StringCreativeTemplateVariable',
      'UrlCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\UrlCreativeTemplateVariable',
      'CreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTemplateVariable',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidUrlError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202502\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202502\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'getCreativeTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getCreativeTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/CreativeTemplateService?wsdl')
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
     * Gets a {@link CreativeTemplatePage} of {@link CreativeTemplate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CreativeTemplate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CreativeTemplate#name}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link CreativeTemplate#type}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link CreativeTemplate#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\CreativeTemplatePage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getCreativeTemplatesByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
