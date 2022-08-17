<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202202\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202202\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202202\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202202\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202202\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202202\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202202\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202202\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202202\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202202\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202202\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202202\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202202\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202202\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202202\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202202\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202202\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202202\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202202\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202202\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202202\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202202\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202202\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202202\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202202\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202202\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202202\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202202\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202202\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202202\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202202\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202202\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202202\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202202\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202202\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202202\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202202\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202202\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202202\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202202\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202202\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202202\Order[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\OrderPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v202202\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202202\OrderAction $orderAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202202\Order[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
