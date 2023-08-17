<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202305\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202305\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202305\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202305\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202305\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202305\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202305\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202305\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202305\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202305\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativePreviewError',
      'CreativePushOptions' => 'Google\\AdsApi\\AdManager\\v202305\\CreativePushOptions',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202305\\CreativeTemplateOperationError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202305\\CrossSellError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202305\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202305\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202305\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202305\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202305\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202305\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202305\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202305\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202305\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202305\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202305\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202305\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202305\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202305\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v202305\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v202305\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202305\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202305\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202305\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202305\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202305\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202305\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202305\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202305\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202305\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202305\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202305\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202305\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202305\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202305\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202305\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202305\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202305\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202305\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202305\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202305\\TextValue',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202305\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202305\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202305\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202305\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202305\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202305\\performLineItemCreativeAssociationActionResponse',
      'pushCreativeToDevicesResponse' => 'Google\\AdsApi\\AdManager\\v202305\\pushCreativeToDevicesResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202305/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
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
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v202305\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
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
     * @return \Google\AdsApi\AdManager\v202305\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getPreviewUrlsForNativeStyles($lineItemId, $creativeId, $siteUrl)
    {
      return $this->__soapCall('getPreviewUrlsForNativeStyles', array(array('lineItemId' => $lineItemId, 'creativeId' => $creativeId, 'siteUrl' => $siteUrl)))->getRval();
    }

    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v202305\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Pushes a creative to devices that that satisfy the given {@link Statement#query}. *
     *
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @param \Google\AdsApi\AdManager\v202305\CreativePushOptions $options
     * @return \Google\AdsApi\AdManager\v202305\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function pushCreativeToDevices(\Google\AdsApi\AdManager\v202305\Statement $filterStatement, \Google\AdsApi\AdManager\v202305\CreativePushOptions $options)
    {
      return $this->__soapCall('pushCreativeToDevices', array(array('filterStatement' => $filterStatement, 'options' => $options)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * @param \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202305\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
