<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202105\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202105\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202105\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativePreviewError',
      'CreativePushOptions' => 'Google\\AdsApi\\AdManager\\v202105\\CreativePushOptions',
      'CreativeSetError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\AdManager\\v202105\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202105\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\AdManager\\v202105\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v202105\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\AdManager\\v202105\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202105\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202105\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\AdManager\\v202105\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202105\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202105\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202105\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202105\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202105\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\AdManager\\v202105\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202105\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202105\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202105\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202105\\performLineItemCreativeAssociationActionResponse',
      'pushCreativeToDevicesResponse' => 'Google\\AdsApi\\AdManager\\v202105\\pushCreativeToDevicesResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\AdManager\v202105\Statement $filterStatement)
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
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * @return \Google\AdsApi\AdManager\v202105\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * @param \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\AdManager\v202105\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Pushes a creative to devices that that satisfy the given {@link Statement#query}. *
     *
     * LinkedDeviceVisibility fields of the LinkedDevice table.
     *
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @param \Google\AdsApi\AdManager\v202105\CreativePushOptions $options
     * @return \Google\AdsApi\AdManager\v202105\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function pushCreativeToDevices(\Google\AdsApi\AdManager\v202105\Statement $filterStatement, \Google\AdsApi\AdManager\v202105\CreativePushOptions $options)
    {
      return $this->__soapCall('pushCreativeToDevices', array(array('filterStatement' => $filterStatement, 'options' => $options)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\AdManager\v202105\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
