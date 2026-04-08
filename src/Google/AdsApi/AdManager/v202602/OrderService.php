<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202602\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202602\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202602\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202602\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202602\\ArchiveOrders',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202602\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202602\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202602\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\CurrencyCodeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202602\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202602\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202602\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202602\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202602\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202602\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202602\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202602\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202602\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticError',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202602\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202602\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202602\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202602\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202602\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202602\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202602\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202602\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202602\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202602\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202602\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202602\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202602\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202602\Order[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\OrderPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202602\OrderAction $orderAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202602\Order[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
