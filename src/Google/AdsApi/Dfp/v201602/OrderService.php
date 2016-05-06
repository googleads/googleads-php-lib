<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201602\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201602\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\Dfp\\v201602\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201602\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\Dfp\\v201602\\ArchiveOrders',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201602\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201602\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201602\\CrossSellError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\Dfp\\v201602\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\Dfp\\v201602\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201602\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201602\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201602\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201602\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemOperationError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201602\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\Dfp\\v201602\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201602\\OrderActionError',
      'Order' => 'Google\\AdsApi\\Dfp\\v201602\\Order',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201602\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\Dfp\\v201602\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\Dfp\\v201602\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201602\\ProgrammaticError',
      'ProgrammaticSettings' => 'Google\\AdsApi\\Dfp\\v201602\\ProgrammaticSettings',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201602\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201602\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\Dfp\\v201602\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\Dfp\\v201602\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\Dfp\\v201602\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201602\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\Dfp\\v201602\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\Dfp\\v201602\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\Dfp\\v201602\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\Dfp\\v201602\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201602\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\Dfp\\v201602\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionTargetingError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/OrderService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201602\Order[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createOrders(array $orders)
    {
      return $this->__soapCall('createOrders', array(array('orders' => $orders)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\OrderPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * a set of orders
     *
     * @param \Google\AdsApi\Dfp\v201602\OrderAction $orderAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performOrderAction(\Google\AdsApi\Dfp\v201602\OrderAction $orderAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\Order[] $orders
     * @return \Google\AdsApi\Dfp\v201602\Order[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->rval;
    }

}
