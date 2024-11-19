<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202411\\ObjectValue',
      'ActivateLabels' => 'Google\\AdsApi\\AdManager\\v202411\\ActivateLabels',
      'AdCategoryDto' => 'Google\\AdsApi\\AdManager\\v202411\\AdCategoryDto',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202411\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202411\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202411\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202411\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202411\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202411\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202411\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202411\\CommonError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202411\\CreativeWrapperError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202411\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202411\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202411\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202411\\DateValue',
      'DeactivateLabels' => 'Google\\AdsApi\\AdManager\\v202411\\DeactivateLabels',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202411\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202411\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202411\\InternalApiError',
      'LabelAction' => 'Google\\AdsApi\\AdManager\\v202411\\LabelAction',
      'Label' => 'Google\\AdsApi\\AdManager\\v202411\\Label',
      'LabelError' => 'Google\\AdsApi\\AdManager\\v202411\\LabelError',
      'LabelPage' => 'Google\\AdsApi\\AdManager\\v202411\\LabelPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202411\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202411\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202411\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202411\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202411\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202411\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202411\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202411\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202411\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202411\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202411\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202411\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202411\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202411\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202411\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202411\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202411\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202411\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202411\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202411\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202411\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202411\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202411\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202411\\Value',
      'createLabelsResponse' => 'Google\\AdsApi\\AdManager\\v202411\\createLabelsResponse',
      'getLabelsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202411\\getLabelsByStatementResponse',
      'performLabelActionResponse' => 'Google\\AdsApi\\AdManager\\v202411\\performLabelActionResponse',
      'updateLabelsResponse' => 'Google\\AdsApi\\AdManager\\v202411\\updateLabelsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202411/LabelService?wsdl')
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
     * Creates new {@link Label} objects.
     *
     * @param \Google\AdsApi\AdManager\v202411\Label[] $labels
     * @return \Google\AdsApi\AdManager\v202411\Label[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function createLabels(array $labels)
    {
      return $this->__soapCall('createLabels', array(array('labels' => $labels)))->getRval();
    }

    /**
     * Gets a {@link LabelPage} of {@link Label} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Label#id}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link Label#type}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Label#name}</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Label#description}</td>
     * </tr>
     * <tr>
     * <td>{@code isActive}</td>
     * <td>{@link Label#isActive}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\LabelPage
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function getLabelsByStatement(\Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('getLabelsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Label} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202411\LabelAction $labelAction
     * @param \Google\AdsApi\AdManager\v202411\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202411\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function performLabelAction(\Google\AdsApi\AdManager\v202411\LabelAction $labelAction, \Google\AdsApi\AdManager\v202411\Statement $filterStatement)
    {
      return $this->__soapCall('performLabelAction', array(array('labelAction' => $labelAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Label} objects.
     *
     * @param \Google\AdsApi\AdManager\v202411\Label[] $labels
     * @return \Google\AdsApi\AdManager\v202411\Label[]
     * @throws \Google\AdsApi\AdManager\v202411\ApiException
     */
    public function updateLabels(array $labels)
    {
      return $this->__soapCall('updateLabels', array(array('labels' => $labels)))->getRval();
    }

}
