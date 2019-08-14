<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201908\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v201908\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v201908\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201908\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v201908\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201908\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201908\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201908\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v201908\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v201908\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201908\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201908\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201908\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201908\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201908\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201908\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v201908\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201908\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v201908\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201908\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v201908\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v201908\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201908\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201908\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201908\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201908\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v201908\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v201908\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v201908\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201908\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201908\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v201908\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v201908\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v201908\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201908\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v201908\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201908\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v201908\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\Order[] $orders
     * @return \Google\AdsApi\AdManager\v201908\Order[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\OrderPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v201908\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v201908\OrderAction $orderAction, \Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v201908\Order[] $orders
     * @return \Google\AdsApi\AdManager\v201908\Order[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
