<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'AssetCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\AssetCreativeTemplateVariable',
      'CreativeTemplate' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplate',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateError',
      'ListStringCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\ListStringCreativeTemplateVariable',
      'ListStringCreativeTemplateVariable.VariableChoice' => 'Google\\AdsApi\\AdManager\\v202008\\ListStringCreativeTemplateVariableVariableChoice',
      'LongCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\LongCreativeTemplateVariable',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateOperationError',
      'CreativeTemplatePage' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplatePage',
      'StringCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\StringCreativeTemplateVariable',
      'UrlCreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\UrlCreativeTemplateVariable',
      'CreativeTemplateVariable' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateVariable',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'getCreativeTemplatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getCreativeTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/CreativeTemplateService?wsdl')
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
     * Gets a {@link CreativeTemplatePage} of {@link CreativeTemplate} objects that satisfy the
     * given {@link Statement#query}.  The following fields are supported for
     * filtering:
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
     * a set of creative templates.
     *
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\CreativeTemplatePage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getCreativeTemplatesByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
