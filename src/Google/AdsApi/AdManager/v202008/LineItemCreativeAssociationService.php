<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202008\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202008\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202008\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202008\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202008\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202008\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202008\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v202008\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202008\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202008\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202008\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202008\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202008\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @return \Google\AdsApi\AdManager\v202008\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v202008\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202008\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
