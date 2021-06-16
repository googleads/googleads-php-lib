<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroup' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroup',
      'AdGroupAdRotationMode' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupAdRotationMode',
      'AdGroupLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupLabel',
      'AdGroupLabelOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupLabelOperation',
      'AdGroupLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupLabelReturnValue',
      'AdGroupOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupOperation',
      'AdGroupPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupPage',
      'AdGroupReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupReturnValue',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupServiceError',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Bids',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ComparableValue',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpmBid',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'ExplorerAutoOptimizerSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExplorerAutoOptimizerSetting',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ForwardCompatibilityError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'Label' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ManualCpmBiddingScheme',
      'MaximizeConversionValueBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MaximizeConversionValueBiddingScheme',
      'MaximizeConversionsBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MaximizeConversionsBiddingScheme',
      'Money' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Setting',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetOutrankShareBiddingScheme',
      'TargetingSettingDetail' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetingSettingDetail',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetSpendBiddingScheme',
      'TargetingSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetingSetting',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/AdGroupService?wsdl')
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
     * Returns a list of all the ad groups specified by the selector
     * from the target customer's account.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, updates, or removes ad groups.
     * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
     * {@code REMOVE} operator. To remove an ad group, set its
     * {@link AdGroup#status status} to {@code REMOVED}.</p>
     *
     * specified in more than one operation.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds labels to the {@linkplain AdGroup ad group} or removes {@linkplain Label label}s from the
     * {@linkplain AdGroup ad group}.
     * <p>{@code ADD} -- Apply an existing label to an existing {@linkplain AdGroup ad group}.
     * The {@code adGroupId} must reference an existing {@linkplain AdGroup ad group}. The
     * {@code labelId} must reference an existing {@linkplain Label label}.
     * <p>{@code REMOVE} -- Removes the link between the specified {@linkplain AdGroup ad group}
     * and a {@linkplain Label label}.</p>
     *
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupLabel contains the AdGroupId and the LabelId.
     * In the case of a remove operation, the returned AdGroupLabel will only have AdGroupId.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of ad groups that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
