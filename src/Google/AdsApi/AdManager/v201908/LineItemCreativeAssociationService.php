<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201908\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v201908\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v201908\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201908\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v201908\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201908\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v201908\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201908\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v201908\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201908\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201908\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201908\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201908\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v201908\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @return \Google\AdsApi\AdManager\v201908\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v201908\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v201908\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
