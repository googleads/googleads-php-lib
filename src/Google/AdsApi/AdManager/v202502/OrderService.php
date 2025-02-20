<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202502\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202502\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202502\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202502\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202502\\ArchiveOrders',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202502\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202502\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202502\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202502\\CurrencyCodeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202502\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202502\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202502\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202502\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202502\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202502\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202502\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202502\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202502\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202502\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202502\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202502\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202502\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202502\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202502\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202502\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202502\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202502\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202502\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202502\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202502\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202502\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202502\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202502\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202502\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202502\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202502\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202502\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202502\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202502\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202502\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202502\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202502\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202502\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202502\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202502\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202502\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202502\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202502\Order[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
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
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\OrderPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202502\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202502\OrderAction $orderAction, \Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202502\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202502\Order[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
