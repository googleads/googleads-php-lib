<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202205\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202205\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202205\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202205\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202205\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202205\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202205\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202205\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202205\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202205\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202205\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202205\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202205\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202205\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202205\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202205\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202205\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202205\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202205\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202205\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202205\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202205\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202205\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202205\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202205\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202205\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202205\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202205\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202205\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202205\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202205\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202205\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202205\Order[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\OrderPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\AdManager\v202205\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202205\OrderAction $orderAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202205\Order[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
