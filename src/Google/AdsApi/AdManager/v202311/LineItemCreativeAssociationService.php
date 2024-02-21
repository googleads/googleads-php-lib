<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202311\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202311\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202311\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202311\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202311\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202311\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202311\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202311\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202311\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202311\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativePreviewError',
      'CreativePushOptions' => 'Google\\AdsApi\\AdManager\\v202311\\CreativePushOptions',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202311\\CreativeTemplateOperationError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202311\\CrossSellError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202311\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202311\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202311\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202311\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202311\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202311\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202311\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202311\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202311\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202311\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202311\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202311\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202311\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202311\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202311\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202311\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202311\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v202311\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202311\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202311\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202311\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202311\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202311\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202311\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202311\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202311\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202311\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202311\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202311\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202311\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202311\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202311\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202311\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202311\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202311\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202311\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202311\\TextValue',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202311\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202311\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202311\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202311\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202311\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202311\\performLineItemCreativeAssociationActionResponse',
      'pushCreativeToDevicesResponse' => 'Google\\AdsApi\\AdManager\\v202311\\pushCreativeToDevicesResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202311\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202311/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
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
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v202311\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
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
     * @return \Google\AdsApi\AdManager\v202311\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getPreviewUrlsForNativeStyles($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrlsForNativeStyles', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v202311\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Pushes a creative to devices that that satisfy the given {@link Statement#query}. *
     *
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @param \Google\AdsApi\AdManager\v202311\CreativePushOptions $options
     * @return \Google\AdsApi\AdManager\v202311\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function pushCreativeToDevices(\Google\AdsApi\AdManager\v202311\Statement $filterStatement, \Google\AdsApi\AdManager\v202311\CreativePushOptions $options)
    {
      return $this->__soapCall('pushCreativeToDevices', array(array('filterStatement' => $filterStatement, 'options' => $options)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * @param \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202311\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
