<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class MutateJobService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Ad',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdError',
      'AdExtension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdExtension',
      'AdExtensionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdExtensionError',
      'AdGroup' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroup',
      'AdGroupAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAd',
      'AdGroupAdCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdCountLimitExceeded',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdError',
      'AdGroupAdExperimentData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdExperimentData',
      'AdGroupAdLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdLabel',
      'AdGroupAdLabelOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdLabelOperation',
      'AdGroupAdOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupAdOperation',
      'AdGroupBidModifier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupBidModifier',
      'AdGroupBidModifierOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupBidModifierOperation',
      'AdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterion',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionError',
      'AdGroupCriterionExperimentBidMultiplier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionExperimentBidMultiplier',
      'AdGroupCriterionLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionLabel',
      'AdGroupCriterionLabelOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionLabelOperation',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionLimitExceeded',
      'AdGroupCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupCriterionOperation',
      'AdGroupExperimentBidMultipliers' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupExperimentBidMultipliers',
      'AdGroupExperimentData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupExperimentData',
      'AdGroupLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupLabel',
      'AdGroupLabelOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupLabelOperation',
      'AdGroupOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupOperation',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupServiceError',
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdSchedule',
      'AdUnionId' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdUnionId',
      'Address' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Address',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiErrorReason' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiErrorReason',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'AppPaymentModel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AppPaymentModel',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AppUrl',
      'AppUrlList' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AppUrlList',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LabelAttribute',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'Bid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Bid',
      'BidMultiplier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BidMultiplier',
      'BiddableAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddableAdGroupCriterion',
      'BiddableAdGroupCriterionExperimentData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddableAdGroupCriterionExperimentData',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Bids',
      'BillingSummary' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BillingSummary',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Budget',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BudgetError',
      'BudgetOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BudgetOperation',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BudgetOptimizerBiddingScheme',
      'BulkMutateJobError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BulkMutateJobError',
      'BulkMutateJobPolicy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BulkMutateJobPolicy',
      'BulkMutateJobSelector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BulkMutateJobSelector',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CallOnlyAd',
      'Campaign' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Campaign',
      'CampaignAdExtension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignAdExtension',
      'CampaignAdExtensionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignAdExtensionError',
      'CampaignAdExtensionOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignAdExtensionOperation',
      'CampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignCriterion',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignCriterionError',
      'CampaignCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignCriterionOperation',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignError',
      'CampaignLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignLabel',
      'CampaignLabelOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignLabelOperation',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DisplayAttribute',
      'CampaignOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignOperation',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ComparableValue',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConstantOperand',
      'ContentLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ContentLabel',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConversionOptimizerBiddingScheme',
      'ConversionOptimizerEligibility' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConversionOptimizerEligibility',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpmBid',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionParameter',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionPolicyError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRangeError',
      'DeprecatedAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DeprecatedAd',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Dimensions',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DoubleValue',
      'DynamicSearchAdsSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DynamicSearchAdsSetting',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ExemptionRequest',
      'ExperimentError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ExperimentError',
      'ExplorerAutoOptimizerSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ExplorerAutoOptimizerSetting',
      'FeedAttributeReferenceError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedAttributeReferenceError',
      'FeedItem' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItem',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemAttributeError',
      'FeedItemAttributeValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemAttributeValue',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemDevicePreference',
      'FeedItemError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemError',
      'FeedItemOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemOperation',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemPolicyData',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedItemScheduling',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ForwardCompatibilityError',
      'FrequencyCap' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FrequencyCap',
      'Function' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionError',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionParsingError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Gender',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\GeoPoint',
      'GeoTargetOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\GeoTargetOperand',
      'GeoTargetTypeSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\GeoTargetTypeSetting',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Image',
      'ImageAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ImageAd',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ImageError',
      'IncomeOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IncomeOperand',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'IpBlock' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IpBlock',
      'Job' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Job',
      'JobError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\JobError',
      'JobEvent' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\JobEvent',
      'JobResult' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\JobResult',
      'JobSelector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\JobSelector',
      'JobStats' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\JobStats',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Keyword',
      'Label' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Label',
      'Language' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Location',
      'LocationExtension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LocationExtension',
      'LocationExtensionOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LocationExtensionOperand',
      'LocationSyncExtension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LocationSyncExtension',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LongValue',
      'ManualCPCAdGroupCriterionExperimentBidMultiplier' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCPCAdGroupCriterionExperimentBidMultiplier',
      'ManualCPCAdGroupExperimentBidMultipliers' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCPCAdGroupExperimentBidMultipliers',
      'ManualCPMAdGroupExperimentBidMultipliers' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCPMAdGroupExperimentBidMultipliers',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCpmBiddingScheme',
      'Media' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Media',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MediaBundle',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Media_Size_StringMapEntry',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileDevice',
      'Money' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MultiplierError',
      'NegativeAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NegativeAdGroupCriterion',
      'NegativeCampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NegativeCampaignCriterion',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NetworkSetting',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NumberValue',
      'OAuthInfo' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OAuthInfo',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionArgumentOperand',
      'Operand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operand',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatingSystemVersion',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatorError',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PageOnePromotedBiddingScheme',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ParentCriterion',
      'PlaceHolder' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PlaceHolder',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Placement',
      'PlacesOfInterestOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PlacesOfInterestOperand',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Platform',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PolicyData',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PolicyViolationKey',
      'ProductAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductAd',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductOfferId',
      'ProductPartition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductPartition',
      'ProductScope' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductScope',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ProductTypeFull',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Proximity',
      'QualityInfo' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QualityInfo',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RealTimeBiddingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RealTimeBiddingSetting',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'RichMediaAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RichMediaAd',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'LocationGroups' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LocationGroups',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Setting',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SettingError',
      'ShoppingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ShoppingSetting',
      'SimpleMutateJob' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SimpleMutateJob',
      'SimpleMutateResult' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SimpleMutateResult',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetOutrankShareBiddingScheme',
      'TargetingSettingDetail' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetingSettingDetail',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetSpendBiddingScheme',
      'TargetingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetingSetting',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TextAd',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ThirdPartyRedirectAd',
      'TrackingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TrackingSetting',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\UnknownProductDimension',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Vertical',
      'Video' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Video',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\WebpageParameter',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DynamicSearchAd',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\YouTubeVideo',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/MutateJobService?wsdl')
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
     * Query the status of existing jobs, both simple and bulk API.
     * <p>Use a {@link JobSelector} to query and return a list which may
     * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\JobSelector $selector
     * @return \Google\AdsApi\AdWords\v201601\cm\Job[]
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\JobSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Query mutation results, of a {@code COMPLETED} job.
     * <p>Use a {@link JobSelector} to query and return either a
     * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
     * at a time.</p>
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\JobSelector $selector
     * @return \Google\AdsApi\AdWords\v201601\cm\JobResult
     */
    public function getResult(\Google\AdsApi\AdWords\v201601\cm\JobSelector $selector)
    {
      return $this->__soapCall('getResult', array(array('selector' => $selector)))->rval;
    }

    /**
     * Simplified way of submitting a mutation job. The provided list of
     * operations, if valid, will create a new job with a unique id, which will
     * be returned. This id can later be used in invocations of
     * {@link #get} and {@link #getResult}. Policy can optionally be specified.
     *
     * <p>When this method returns with success, the job will be in
     * {@code PROCESSING} or {@code PENDING} state and no further action is
     * needed for the job to get executed.</p>
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Operation[] $operations
     * @param \Google\AdsApi\AdWords\v201601\cm\BulkMutateJobPolicy $policy
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateJob
     */
    public function mutate(array $operations, \Google\AdsApi\AdWords\v201601\cm\BulkMutateJobPolicy $policy)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations, 'policy' => $policy)))->rval;
    }

}
