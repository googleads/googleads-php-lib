<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201911\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v201911\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201911\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201911\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201911\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201911\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201911\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201911\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v201911\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201911\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201911\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201911\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201911\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v201911\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getPreviewUrl($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrl', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Returns a list of URLs that reference the specified site URL with the specified creative from
     * the association served to it. For Creative Set previewing you may specify the master creative
     * Id. Each URL corresponds to one available native style for previewing the specified creative.
     *
     * creative
     * specified creative with the available native styles
     *
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return \Google\AdsApi\AdManager\v201911\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getPreviewUrlsForNativeStyles($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrlsForNativeStyles', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match
     * the given {@link Statement#query}.
     *
     * a set of line item creative associations
     *
     * @param \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v201911\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v201911\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
