<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202508\\AppliedLabel',
      'ApproveAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202508\\ApproveAndOverbookOrders',
      'ApproveOrders' => 'Google\\AdsApi\\AdManager\\v202508\\ApproveOrders',
      'ApproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202508\\ApproveOrdersWithoutReservationChanges',
      'ArchiveOrders' => 'Google\\AdsApi\\AdManager\\v202508\\ArchiveOrders',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202508\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202508\\CompanyCreditStatusError',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202508\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202508\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202508\\CurrencyCodeError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargetingError',
      'DeleteOrders' => 'Google\\AdsApi\\AdManager\\v202508\\DeleteOrders',
      'DisapproveOrders' => 'Google\\AdsApi\\AdManager\\v202508\\DisapproveOrders',
      'DisapproveOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202508\\DisapproveOrdersWithoutReservationChanges',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202508\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202508\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemOperationError',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargetingError',
      'Money' => 'Google\\AdsApi\\AdManager\\v202508\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202508\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'OrderAction' => 'Google\\AdsApi\\AdManager\\v202508\\OrderAction',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202508\\OrderActionError',
      'Order' => 'Google\\AdsApi\\AdManager\\v202508\\Order',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202508\\OrderError',
      'OrderPage' => 'Google\\AdsApi\\AdManager\\v202508\\OrderPage',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PauseOrders' => 'Google\\AdsApi\\AdManager\\v202508\\PauseOrders',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202508\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202508\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202508\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202508\\RegExError',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202508\\ReservationDetailsError',
      'ResumeAndOverbookOrders' => 'Google\\AdsApi\\AdManager\\v202508\\ResumeAndOverbookOrders',
      'ResumeOrders' => 'Google\\AdsApi\\AdManager\\v202508\\ResumeOrders',
      'RetractOrders' => 'Google\\AdsApi\\AdManager\\v202508\\RetractOrders',
      'RetractOrdersWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202508\\RetractOrdersWithoutReservationChanges',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'SubmitOrdersForApproval' => 'Google\\AdsApi\\AdManager\\v202508\\SubmitOrdersForApproval',
      'SubmitOrdersForApprovalAndOverbook' => 'Google\\AdsApi\\AdManager\\v202508\\SubmitOrdersForApprovalAndOverbook',
      'SubmitOrdersForApprovalWithoutReservationChanges' => 'Google\\AdsApi\\AdManager\\v202508\\SubmitOrdersForApprovalWithoutReservationChanges',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202508\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargetingError',
      'TemplateInstantiatedCreativeError' => 'Google\\AdsApi\\AdManager\\v202508\\TemplateInstantiatedCreativeError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202508\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202508\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202508\\TypeError',
      'UnarchiveOrders' => 'Google\\AdsApi\\AdManager\\v202508\\UnarchiveOrders',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202508\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargetingError',
      'createOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createOrdersResponse',
      'getOrdersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getOrdersByStatementResponse',
      'performOrderActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performOrderActionResponse',
      'updateOrdersResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateOrdersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/OrderService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202508\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202508\Order[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
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
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\OrderPage
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getOrdersByStatement(\Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('getOrdersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Order} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202508\OrderAction $orderAction
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performOrderAction(\Google\AdsApi\AdManager\v202508\OrderAction $orderAction, \Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('performOrderAction', array(array('orderAction' => $orderAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Order} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\Order[] $orders
     * @return \Google\AdsApi\AdManager\v202508\Order[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateOrders(array $orders)
    {
      return $this->__soapCall('updateOrders', array(array('orders' => $orders)))->getRval();
    }

}
