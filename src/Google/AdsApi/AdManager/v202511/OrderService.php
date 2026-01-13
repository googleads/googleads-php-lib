<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202511\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202511\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202511\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202511\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202511\\ArchiveOrders',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202511\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202511\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202511\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202511\\CurrencyCodeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202511\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202511\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202511\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202511\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202511\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202511\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202511\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202511\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202511\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202511\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202511\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202511\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202511\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202511\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202511\\ProgrammaticError',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202511\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202511\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202511\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202511\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202511\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202511\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202511\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202511\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202511\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202511\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202511\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202511\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202511\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202511\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202511\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202511\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202511\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/OrderService?wsdl')
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
     * Creates new {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202511\Order[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createOrders(array $orders)
    {
      return $this->__soapCall('createOrders', array(array('orders' => $orders)))->getRval();
    }

    /**
     * Gets an {@link OrderPage} of {@link Order} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Order#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link Order#endDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Order#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Order#name}</td>
     * </tr>
     * <tr>
     * <td>{@code salespersonId}</td>
     * <td>{@link Order#salespersonId}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link Order#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Order#status}</td>
     * </tr>
     * <tr>
     * <td>{@code traffickerId}</td>
     * <td>{@link Order#traffickerId}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Order#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\OrderPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202511\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202511\OrderAction $orderAction, \Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202511\Order[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
