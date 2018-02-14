<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'ActivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201802\\ActivateLineItemCreativeAssociations',
      'AdSenseAccountError' => 'Google\\AdsApi\\Dfp\\v201802\\AdSenseAccountError',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AssetError' => 'Google\\AdsApi\\Dfp\\v201802\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'CreativeAssetMacroError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeAssetMacroError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeError',
      'CreativeNativeStylePreview' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeNativeStylePreview',
      'CreativePreviewError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativePreviewError',
      'CreativeSetError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeSetError',
      'CreativeTemplateError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeTemplateError',
      'CreativeTemplateOperationError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeTemplateOperationError',
      'CustomCreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCreativeError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DeactivateLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201802\\DeactivateLineItemCreativeAssociations',
      'DeleteLineItemCreativeAssociations' => 'Google\\AdsApi\\Dfp\\v201802\\DeleteLineItemCreativeAssociations',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201802\\FileError',
      'HtmlBundleProcessorError' => 'Google\\AdsApi\\Dfp\\v201802\\HtmlBundleProcessorError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201802\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'InvalidPhoneNumberError' => 'Google\\AdsApi\\Dfp\\v201802\\InvalidPhoneNumberError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201802\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LabelEntityAssociationError',
      'LineItemCreativeAssociationAction' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationAction',
      'LineItemCreativeAssociation' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationError',
      'LineItemCreativeAssociationOperationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationOperationError',
      'LineItemCreativeAssociationPage' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationPage',
      'LineItemCreativeAssociationStats' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationStats',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemError',
      'Long_StatsMapEntry' => 'Google\\AdsApi\\Dfp\\v201802\\Long_StatsMapEntry',
      'Money' => 'Google\\AdsApi\\Dfp\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201802\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201802\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredSizeError',
      'RichMediaStudioCreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\RichMediaStudioCreativeError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetTopBoxCreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\SetTopBoxCreativeError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201802\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201802\\String_ValueMapEntry',
      'SwiffyConversionError' => 'Google\\AdsApi\\Dfp\\v201802\\SwiffyConversionError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201802\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201802\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201802\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201802\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'createLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createLineItemCreativeAssociationsResponse',
      'getLineItemCreativeAssociationsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getLineItemCreativeAssociationsByStatementResponse',
      'getPreviewUrlResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getPreviewUrlResponse',
      'getPreviewUrlsForNativeStylesResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getPreviewUrlsForNativeStylesResponse',
      'performLineItemCreativeAssociationActionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\performLineItemCreativeAssociationActionResponse',
      'updateLineItemCreativeAssociationsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateLineItemCreativeAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/LineItemCreativeAssociationService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
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
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociationPage
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getLineItemCreativeAssociationsByStatement(\Google\AdsApi\Dfp\v201802\Statement $filterStatement)
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
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
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
     * @return \Google\AdsApi\Dfp\v201802\CreativeNativeStylePreview[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
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
     * @param \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function performLineItemCreativeAssociationAction(\Google\AdsApi\Dfp\v201802\LineItemCreativeAssociationAction $lineItemCreativeAssociationAction, \Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemCreativeAssociationAction', array(array('lineItemCreativeAssociationAction' => $lineItemCreativeAssociationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * update
     *
     * @param \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociation[] $lineItemCreativeAssociations
     * @return \Google\AdsApi\Dfp\v201802\LineItemCreativeAssociation[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateLineItemCreativeAssociations(array $lineItemCreativeAssociations)
    {
      return $this->__soapCall('updateLineItemCreativeAssociations', array(array('lineItemCreativeAssociations' => $lineItemCreativeAssociations)))->getRval();
    }

}
