<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTemplateService extends \Google\AdsApi\Common\AdsSoapClient
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
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'AssetCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\AssetCreativeTemplateVariable',
      'CreativeTemplate' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplate',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateError',
      'ListStringCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\ListStringCreativeTemplateVariable',
      'ListStringCreativeTemplateVariable.VariableChoice' => 'Google\\AdsApi\\Dfp\\v201708\\ListStringCreativeTemplateVariableVariableChoice',
      'LongCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\LongCreativeTemplateVariable',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateOperationError',
      'CreativeTemplatePage' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplatePage',
      'StringCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\StringCreativeTemplateVariable',
      'UrlCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\UrlCreativeTemplateVariable',
      'CreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateVariable',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
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
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'getCreativeTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getCreativeTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/CreativeTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\CreativeTemplatePage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getCreativeTemplatesByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
