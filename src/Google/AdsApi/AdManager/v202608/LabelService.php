<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'ActivateLabels' => 'Google\\AdsApi\\AdManager\\v202608\\ActivateLabels',
      'AdCategoryDto' => 'Google\\AdsApi\\AdManager\\v202608\\AdCategoryDto',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeWrapperError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DeactivateLabels' => 'Google\\AdsApi\\AdManager\\v202608\\DeactivateLabels',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'LabelAction' => 'Google\\AdsApi\\AdManager\\v202608\\LabelAction',
      'Label' => 'Google\\AdsApi\\AdManager\\v202608\\Label',
      'LabelError' => 'Google\\AdsApi\\AdManager\\v202608\\LabelError',
      'LabelPage' => 'Google\\AdsApi\\AdManager\\v202608\\LabelPage',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'createLabelsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\createLabelsResponse',
      'getLabelsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getLabelsByStatementResponse',
      'performLabelActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performLabelActionResponse',
      'updateLabelsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateLabelsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/LabelService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202608\Label[] $labels
     * @return \Google\AdsApi\AdManager\v202608\Label[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\LabelPage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getLabelsByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('getLabelsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Label} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202608\LabelAction $labelAction
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performLabelAction(\Google\AdsApi\AdManager\v202608\LabelAction $labelAction, \Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('performLabelAction', array(array('labelAction' => $labelAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Label} objects.
     *
     * @param \Google\AdsApi\AdManager\v202608\Label[] $labels
     * @return \Google\AdsApi\AdManager\v202608\Label[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateLabels(array $labels)
    {
      return $this->__soapCall('updateLabels', array(array('labels' => $labels)))->getRval();
    }

}
