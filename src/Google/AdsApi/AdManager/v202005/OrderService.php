<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202005\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202005\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202005\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202005\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202005\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202005\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202005\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202005\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202005\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202005\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202005\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202005\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202005\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202005\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202005\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202005\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202005\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202005\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202005\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202005\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202005\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202005\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202005\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202005\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202005\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202005\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202005\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202005\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202005\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202005\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202005\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202005\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202005\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202005\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202005\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202005\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202005\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202005\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202005\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202005\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202005\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202005\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202005\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202005\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202005\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202005\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202005\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202005\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202005\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202005\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202005\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202005\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202005\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202005\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202005\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202005\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202005\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202005\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202005\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202005\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202005\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202005\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202005\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202005\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202005\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202005\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202005\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202005\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202005\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202005\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202005/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202005\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202005\Order[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
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
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\OrderPage
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v202005\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202005\OrderAction $orderAction, \Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202005\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202005\Order[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
