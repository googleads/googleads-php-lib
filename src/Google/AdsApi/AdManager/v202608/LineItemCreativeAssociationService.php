<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202608\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202608\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202608\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeTemplateOperationError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202608\\CrossSellError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202608\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202608\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202608\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202608\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202608\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\Long_StatsMapEntry',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202608\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202608\\RangeError',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202608\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202608\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202608\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function createLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('createLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

    /**
     * Gets a {@link LineItemCreativeAssociationPage} of {@link LineItemCreativeAssociation} objects
     * that satisfy the given {@link Statement#query}. The following fields are supported for
     * filtering:
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemCreativeAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns an insite preview URL that references the specified site URL with the specified
     * creative from the association served to it. For Creative Set previewing you may specify the
     * master creative Id.
     *
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return string
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
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
     * @param int $lineItemId
     * @param int $creativeId
     * @param string $siteUrl
     * @return \Google\AdsApi\AdManager\v202608\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getPreviewUrlsForNativeStyles($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrlsForNativeStyles', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v202608\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * @param \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202608\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
