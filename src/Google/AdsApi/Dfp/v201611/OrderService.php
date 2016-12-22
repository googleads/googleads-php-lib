<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201611\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201611\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\Dfp\\v201611\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201611\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\Dfp\\v201611\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201611\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201611\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201611\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\Dfp\\v201611\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\Dfp\\v201611\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201611\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201611\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201611\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201611\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201611\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201611\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201611\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\Dfp\\v201611\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201611\\OrderActionError',
      'Order' => 'Google\\AdsApi\\Dfp\\v201611\\Order',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201611\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\Dfp\\v201611\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\Dfp\\v201611\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201611\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201611\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201611\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201611\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\Dfp\\v201611\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\Dfp\\v201611\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201611\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201611\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\Dfp\\v201611\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\Dfp\\v201611\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201611\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201611\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201611\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201611\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\Dfp\\v201611\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/OrderService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201611\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201611\Order[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\OrderPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\Dfp\v201611\OrderAction $orderAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performOrderAction(\Google\AdsApi\Dfp\v201611\OrderAction $orderAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201611\Order[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
