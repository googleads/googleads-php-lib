<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201708\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201708\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201708\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CreativePreviewError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201708\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201708\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
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
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\Dfp\\v201708\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderError',
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
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201708\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201708\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getPreviewUrlResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/LineItemCreativeAssociationService?wsdl')
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
     * Creates new {@link LineItemCreativeAssociation} objects
     *
     * create
     * in
     *
     * @param \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function createLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('createLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

    /**
     * Gets a {@link LineItemCreativeAssociationPage} of
     * {@link LineItemCreativeAssociation} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code creativeId}</td>
     * <td>{@link LineItemCreativeAssociation#creativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code manualCreativeRotationWeight}</td>
     * <td>{@link LineItemCreativeAssociation#manualCreativeRotationWeight}</td>
     * </tr>
     * <tr>
     * <td>{@code destinationUrl}</td>
     * <td>{@link LineItemCreativeAssociation#destinationUrl}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link LineItemCreativeAssociation#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link LineItemCreativeAssociation#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link LineItemCreativeAssociation#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * a set of line item creative associations
     *
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemCreativeAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns an insite preview URL that references the specified site URL with
     * the specified creative from the association served to it. For Creative Set
     * previewing you may specify the master creative Id.
     *
     * creative served to it
     *
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return string
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getPreviewUrl($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrl', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match
     * the given {@link Statement#query}.
     *
     * a set of line item creative associations
     *
     * @param \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\Dfp\v201708\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201708\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
