<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201705\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\Dfp\\v201705\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201705\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\Dfp\\v201705\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201705\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201705\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\Dfp\\v201705\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\Dfp\\v201705\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201705\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201705\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201705\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201705\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\Dfp\\v201705\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderActionError',
      'Order' => 'Google\\AdsApi\\Dfp\\v201705\\Order',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\Dfp\\v201705\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\Dfp\\v201705\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201705\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201705\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201705\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\Dfp\\v201705\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\Dfp\\v201705\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201705\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201705\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201705\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\Dfp\\v201705\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/OrderService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201705\Order[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\OrderPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\Dfp\v201705\OrderAction $orderAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performOrderAction(\Google\AdsApi\Dfp\v201705\OrderAction $orderAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201705\Order[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
