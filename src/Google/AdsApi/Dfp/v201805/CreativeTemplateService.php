<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTemplateService extends \Google\AdsApi\Common\AdsSoapClient
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
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'AssetCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\AssetCreativeTemplateVariable',
      'CreativeTemplate' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplate',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateError',
      'ListStringCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\ListStringCreativeTemplateVariable',
      'ListStringCreativeTemplateVariable.VariableChoice' => 'Google\\AdsApi\\Dfp\\v201805\\ListStringCreativeTemplateVariableVariableChoice',
      'LongCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\LongCreativeTemplateVariable',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateOperationError',
      'CreativeTemplatePage' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplatePage',
      'StringCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\StringCreativeTemplateVariable',
      'UrlCreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\UrlCreativeTemplateVariable',
      'CreativeTemplateVariable' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTemplateVariable',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
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
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'getCreativeTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getCreativeTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/CreativeTemplateService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\CreativeTemplatePage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getCreativeTemplatesByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getCreativeTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
