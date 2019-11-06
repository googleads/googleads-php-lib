<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201911\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v201911\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v201911\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201911\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v201911\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201911\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201911\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v201911\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v201911\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201911\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201911\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201911\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201911\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201911\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v201911\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v201911\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v201911\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v201911\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201911\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201911\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201911\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v201911\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v201911\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v201911\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201911\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v201911\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v201911\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201911\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201911\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201911\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v201911\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201911\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v201911\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\Order[] $orders
     * @return \Google\AdsApi\AdManager\v201911\Order[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function createOrders(array $orders)
    {
      return $this->__soapCall('createOrders', array(array('orders' => $orders)))->getRval();
    }

    /**
     * Gets an {@link OrderPage} of {@link Order} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\OrderPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v201911\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v201911\OrderAction $orderAction, \Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Order[] $orders
     * @return \Google\AdsApi\AdManager\v201911\Order[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
