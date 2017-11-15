<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201711\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201711\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\Dfp\\v201711\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201711\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\Dfp\\v201711\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201711\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201711\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\Dfp\\v201711\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\Dfp\\v201711\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201711\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201711\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201711\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201711\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201711\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\Dfp\\v201711\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201711\\OrderActionError',
      'Order' => 'Google\\AdsApi\\Dfp\\v201711\\Order',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201711\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\Dfp\\v201711\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\Dfp\\v201711\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201711\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201711\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201711\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201711\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\Dfp\\v201711\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\Dfp\\v201711\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201711\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201711\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\Dfp\\v201711\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\Dfp\\v201711\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201711\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201711\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201711\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201711\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\Dfp\\v201711\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201711\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201711\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\Dfp\\v201711\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201711\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/OrderService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201711\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201711\Order[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
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
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\OrderPage
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\Dfp\v201711\OrderAction $orderAction
     * @param \Google\AdsApi\Dfp\v201711\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201711\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function performOrderAction(\Google\AdsApi\Dfp\v201711\OrderAction $orderAction, \Google\AdsApi\Dfp\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\Dfp\v201711\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201711\Order[]
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
