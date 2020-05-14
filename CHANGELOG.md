### 47.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v202005.
*   Added new examples for v202005: `CmsMetadataService`,
    `UpdateForecastAdjustments` and
    `GetForecastAdjustmentsForTrafficForecastSegment`.
*   Update `CreateTrafficAdjustments.php` to become `CreateForecastAdjustments`
    example for v202005.
*   Update `GetAllTrafficForecastSegments` example for v202005.
*   Removed support for v201905.
*   Removed examples for v201908.

##### Common

*   No changes.

### 46.2.1

##### AdWords

*   Updated the composer.json and composer.lock files of Laravel sample
    application to fix the repoted security issue.

##### Ad Manager

*   No changes.

##### Common

*   No changes.

### 46.2.0

##### AdWords

*   Added support for ReflectionDocBlock v5.0.

##### Ad Manager

*   No changes.

##### Common

*   Removed phpcs_ruleset.xml and .gitignore from git exports.

### 46.1.0

##### AdWords

*   Updated the Laravel sample application to use Laravel framework v5.8.

##### Ad Manager

*   No changes.

##### Common

*   No changes.

### 46.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added AdRuleError and AdRuleErrorReason for v202002.
*   Added new report columns for v202002: TOTAL_VIDEO_OPPORTUNITIES, TOTAL_VIDEO_CAPPED_OPPORTUNITIES and DP_ECPM.
*   Removed src/Google/AdsApi/AdManager/Util/v201808 folder.

##### Common

*   No changes.

### 45.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v202002.
*   Removed support for v201902.
*   Removed examples for v201905.

##### Common

*   Fixed [issue #640](https://github.com/googleads/googleads-php-lib/issues/640).
*   Fixed [issue #637](https://github.com/googleads/googleads-php-lib/issues/637).

### 44.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v201911.
*   Updated v201911/ReportService/RunReportWithCustomFields.php example to use a
reportable custom targeting key as a dimension.
*   Updated v201911/ReportService/RunReachReport.php example to use replacement
metrics and compatible dimensions.
*   Updated v201911/ReportService/RunInventoryReport.php example to remove no-op
PQL statements.
*   Removed support for v201811.
*   Removed examples for v201902.

##### Common

*   No changes.

### 43.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v201908.
*   Removed support for v201808.
*   Removed examples for v201811.

*   Removed examples from all versions for Sales Management:
    - BaseRateService/GetAllBaseRates
    - BaseRateService/GetBaseRatesForRateCard
    - ExchangeRateService/GetAllExchangeRates
    - ExchangeRateService/GetExchangeRatesForCurrencyCode
    - PackageService/GetAllPackages
    - PackageService/GetInProgressPackages
    - PremiumRateService/GetAllPremiumRates
    - PremiumRateService/GetPremiumRatesForRateCard
    - ProductPackageItemService/GetAllProductPackageItems
    - ProductPackageItemService/GetProductPackageItemsForProductPackage
    - ProductPackageService/GetActiveProductPackages
    - ProductPackageService/GetAllProductPackages
    - ProductService/GetAllProducts
    - ProductService/GetProductsForProductTemplate
    - ProductTemplateService/ActivateProductTemplates
    - ProductTemplateService/CreateProductTemplates
    - ProductTemplateService/CreateProgrammaticProductTemplates
    - ProductTemplateService/GetAllProductTemplates
    - ProductTemplateService/GetSponsorshipProductTemplates
    - ProposalService/CreateProgrammaticProposals
    - ProposalLineItemService/CreateProgrammaticProposalLineItems
    - RateCardService/GetAllRateCards
    - RateCardService/GetMarketplaceRateCards
    - ReconciliationLineItemReportService/GetReconciliationLineItemReportsForReconciliationReport
    - ReconciliationLineItemReportService/UpdateReconciliationLineItemReports
    - ReconciliationOrderReportService/GetReconciliationOrderReportsForReconciliationReport
    - ReconciliationOrderReportService/SubmitReconciliationOrderReports
    - ReconciliationReportRowService/GetReconciliationReportRowsForReconciliationReport
    - ReconciliationReportRowService/UpdateReconciliationReportRows
    - ReconciliationReportService/GetAllReconciliationReports
    - ReconciliationReportService/GetReconciliationReportForLastBillingPeriod
    - WorkflowRequestService/ApproveWorkflowApprovalRequests
    - WorkflowRequestService/GetWorkflowApprovalRequests
    - WorkflowRequestService/GetWorkflowExternalConditionRequests
    - WorkflowRequestService/TriggerWorkflowExternalConditionRequests

*   Converted ProposalService examples:
    - GetProposalsPendingApproval to GetProposalsAwaitingSellerReview
    - CreateProgrammaticProposalsForNonSalesManagement to CreateProposals

*   Converted ProposalLineItemService example:
    - CreateProgrammaticProposalLineItemsForNonSalesManagement to
    CreateProposalLineItems

##### Common

*   No changes.

### 42.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v201905.
*   Removed support for v201805.
*   Removed examples for v201808.

##### Common

*   No changes.

### 41.0.0

##### AdWords

*   Removed support and examples for v201806. See deprecation
    schedule at: https://developers.google.com/adwords/api/docs/sunset-dates

##### Ad Manager

*   Fixed [issue #538](https://github.com/googleads/googleads-php-lib/issues/538).

##### Common

*   Updated `composer.json` to require the minimum PHP version of 7.1.

### 40.0.0

##### AdWords

*   No changes.

##### Ad Manager

*   Added support for v201902.
*   Updated RunInventoryReport example to replace deprecated metrics.
*   Added examples for AdjustmentService and CmsMetadataService.
*   Removed support for v201802.
*   Removed examples for v201805.

##### Common

*   Refactored `GuzzleLogMessageHandler` and `GuzzleLogMessageFormatter` so
    tests can be added to cover the cases when a response body is logged.

### 39.0.0

##### AdWords

*   Removed support and examples for v201802. See deprecation
    schedule at: https://developers.google.com/adwords/api/docs/sunset-dates

##### Ad Manager

*   Added CreateVideoLineItems example for v201811.
*   Fixed null pointer exception when the `getAllNetworks` function returns
    null in the `GetAllNetworks` examples for v201811, v201808 and v201805.

##### Common

*   Updated GuzzleLogMessageHandler to support both logging response body.
*   Updated `composer.json` to require the minimum PHP version of 5.6.

### 38.0.0

##### AdWords

*   Added Smart Shopping ad example (v201809).
*   Fixed [issue #541](https://github.com/googleads/googleads-php-lib/issues/541).

##### Ad Manager

*   Added support for v201811.
*   Removed support for v201711.
*   Removed examples for v201802.
*   Updated the `Util/v201811/AdManagerDateTimes.php` class for renaming the
function `setTimeZoneID` to `setTimeZoneId`.
*   Discontinue the `GetAllContentMetadataKeyHierarchies.php` example.

### 37.1.0

##### AdWords

*   Added support and examples for v201809.
*   Fixed [issue #527](https://github.com/googleads/googleads-php-lib/issues/527).

### 37.0.0

##### AdWords

*   Added a sample application to demonstrate how to use the AdWords API with
    the Laravel framework. The location of the sample application is
    [`examples/AdWords/LaravelSampleApp/`](https://github.com/googleads/googleads-php-lib/tree/master/examples/AdWords/LaravelSampleApp).

##### Ad Manager

*   Rename files, classes and variables to replace DFP with Ad Manager. For detailed changes, please refer to the [migration guide](https://github.com/googleads/googleads-php-lib/wiki/AdManager-migration).
*   Added support and examples for v201808.
*   Removed examples for v201711.
*   Removed support for v201708.

##### Common

*   No changes.

### 36.0.0

##### AdWords

*   Removed support and examples for v201710. See deprecation
    schedule at: https://developers.google.com/adwords/api/docs/sunset-dates

##### DFP (currently Ad Manager)

*   Added `ServiceFactory` classes for v201708, v201711, v201802 and v201805.
*   Updated examples to use the new `ServiceFactory` classes.

### 35.2.0

##### AdWords

*   Added support and examples for v201806.

### 35.1.0

##### DFP (currently Ad Manager)

*   Added `ContentFilterError`, `ContentFilterErrorReason` for all versions.
    These classes are for deserializing server errors.
*   Added `UserConsentEligibility` and updated `LineItem`, `LineItemSummary`
    for v201805 to make line items ineligible for non-personalized ad requests.

### 35.0.0

##### AdWords

*   Added `QueryValidator` for v201802 to validate parts of an AWQL string.
*   Added unit tests for `ServiceQueryBuilder`, `ReportQueryBuilder` and
    supporting classes for v201802.
*   Fixed
    [issue #473](https://github.com/googleads/googleads-php-lib/issues/473).

##### DFP (currently Ad Manager)

*   Added `DaiAuthenticationKeyService` for creating, updating and retrieving
    `DaiAuthenticationKey` objects.
*   Added support and examples for v201805.
*   Removed support for v201705.
*   Removed examples for v201708.

### 34.0.0

##### AdWords

*   Removed support and examples for v201705 and v201708. See deprecation
    schedule at: https://developers.google.com/adwords/api/docs/sunset-dates
*   Added `ServiceQueryBuilder` for v201802 to support
    building AWQL strings for querying AdWords API services.
*   Added `ReportQueryBuilder` for v201802 to support
    building AWQL strings for downloading AdWords API reports.

##### DFP (currently Ad Manager)

*   Added new examples for managing user-team associations:
    `CreateUserTeamAssociations`, `UpdateUserTeamAssociations`
    and `DeleteUserTeamAssociations`.

### 33.1.0

##### AdWords

*   Added support and examples for v201802.

### 33.0.1

##### Common

*   Fixed
    [issue #447](https://github.com/googleads/googleads-php-lib/issues/447).

### 33.0.0

##### AdWords

*   Accepted [PR #429](https://github.com/googleads/googleads-php-lib/pull/429).
*   Removed support and examples for v201702. See deprecation schedule at:
    https://developers.google.com/adwords/api/docs/sunset-dates

##### DFP (currently Ad Manager)

*   Accepted [PR #438](https://github.com/googleads/googleads-php-lib/pull/438).
*   Added support and examples for v201802.
*   Removed support for v201702.
*   Removed examples for v201705.

##### Common

*   Fixed [issue
    #194](https://github.com/googleads/googleads-php-lib/issues/194).
*   Accepted [PR #396](https://github.com/googleads/googleads-php-lib/pull/396).
*   Accepted [PR #415](https://github.com/googleads/googleads-php-lib/pull/415).
*   Accepted [PR #421](https://github.com/googleads/googleads-php-lib/pull/421).
*   Accepted [PR #422](https://github.com/googleads/googleads-php-lib/pull/422).
*   Fixed
    [issue #426](https://github.com/googleads/googleads-php-lib/issues/426).

### 32.1.0

##### DFP (currently Ad Manager)

*   Added examples for v201711:
    *   InventoryService\GetAdUnitHierarchy
    *   InventoryService\GetTopLevelAdUnits
    *   LineItemService\CreateLineItemsWithCustomCriteria
    *   NetworkService\GetCurrentNetwork
    *   NetworkService\MakeTestNetwork
    *   PublisherQueryLanguageService\GetAllLineItems
    *   PublisherQueryLanguageService\GetAllProgrammaticBuyers
    *   PublisherQueryLanguageService\GetGeoTargets
    *   ReportService\RunReachReport
    *   ReportService\RunReportWithCustomFields
    *   TeamService\UpdateTeams
    *   UserService\GetCurrentUser
    *   UserService\UpdateUsers

*   Added utility class `CsvFiles` for v201711.

##### Common

*   Fixed
    [issue #399](https://github.com/googleads/googleads-php-lib/issues/399).
*   Fixed the issue that a wrong path to local WSDL files was specified in
    `AdsSoapClient`.
*   Accepted [PR #401](https://github.com/googleads/googleads-php-lib/pull/401).

### 32.0.0

##### AdWords

*   Fixed
    [issue #378](https://github.com/googleads/googleads-php-lib/issues/378).

##### DFP (currently Ad Manager)

*   Added support and examples for v201711.
*   Added CdnConfigurationService and examples.
*   Removed support for v201611.
*   Removed examples for v201702.

##### Common

*   Included WSDL files for all SOAP services and they're now used for making
    SOAP calls instead of live WSDLs. Therefore, the WSDL caching feature is
    deprecated (`wsdlCache` in `adsapi_php.ini` is now ignored). The feature
    will be removed completely in the next major release.

### 31.0.0

##### AdWords

*   Added support and examples for v201710.
*   Added an option for setting transparent HTTP gzip compression for reporting
    in `adsapi_php.ini`.

##### DFP (currently Ad Manager)

*   Added UpdateLineItems and UpdateOrders examples.

##### Common

*   Removed the PROXY section in `adsapi_php.ini`. Use "proxy" under CONNECTION
    instead.
*   Added proxy support for non-SOAP utilities and OAuth authentication. See
    the CONNECTION section in `adsapi_php.ini` for details.

### 30.0.0

##### AdWords

*   Removed support and examples for v201609. See deprecation schedule at:
    https://developers.google.com/adwords/api/docs/sunset-dates
*   Fixed
    [issue #349](https://github.com/googleads/googleads-php-lib/issues/349).

### 29.0.0

##### DFP (currently Ad Manager)

*   Added support and examples for v201708.
*   Removed examples for v201611.

##### Common

*   Fixed
    [issue #320](https://github.com/googleads/googleads-php-lib/issues/320).

### 28.1.0

##### AdWords

*   Added support and examples for v201708.
*   Fixed
    [issue #331](https://github.com/googleads/googleads-php-lib/issues/331).

##### Common

*   Added a getter for SOAP response header values and SOAP fault message.

### 28.0.0

##### AdWords

*   Added support for redacting access tokens in SOAP body.
*   Added support for overriding report settings in each report download
    request.
*   Fixed
    [issue #247](https://github.com/googleads/googleads-php-lib/issues/247).

##### Common

*   Fixed
    [issue #226](https://github.com/googleads/googleads-php-lib/issues/226).
*   Fixed
    [issue #244](https://github.com/googleads/googleads-php-lib/issues/244).
*   Fixed
    [issue #254](https://github.com/googleads/googleads-php-lib/issues/254).
*   Fixed
    [issue #261](https://github.com/googleads/googleads-php-lib/issues/261).
*   Fixed
    [issue #292](https://github.com/googleads/googleads-php-lib/issues/292).
*   Fixed
    [issue #306](https://github.com/googleads/googleads-php-lib/issues/306).

### 27.1.0

##### AdWords

*   Added support and examples for v201705.
*   Removed support for AdWords Express (AWX) API.
*   Updated AddShoppingCampaign.php to include an option of creating an optional
    default partition.

##### Common

*   Fixed issues #287 and #298 related to too many open file descriptors.

### 27.0.0

##### DFP (currently Ad Manager)

*   Added support and examples for v201705.

##### Common

*   Added GuzzleLogMessageFormatter and refactored the Guzzle logging handler.
*   Made user agents sent by non-SOAP utilities more informative.

### 26.0.0

##### AdWords

*   Added support for specifying addtional request options for reporting.
*   Fixed
    [issue #246](https://github.com/googleads/googleads-php-lib/issues/246).
*   Accepted [PR #251](https://github.com/googleads/googleads-php-lib/pull/251).
*   Accepted [PR #253](https://github.com/googleads/googleads-php-lib/pull/253).
*   Accepted [PR #256](https://github.com/googleads/googleads-php-lib/pull/256).
*   Updated AddSiteLinksUsingFeeds examples to use field and constant names
    that are consistent with the field names of SitelinkFeedItem.

##### Common

*   Added `AdsGuzzleHttpClientFactory` to create Guzzle HTTP clients for
    non-SOAP calls.

### 25.4.0

##### DFP (currently Ad Manager)

*   Added `perform action` examples for core services.
*   Added `CreateNativeCreatives` example.
*   Fixed the `CreateProposals` example.
*   Added some `update` examples for reconciliation services.

### 25.3.0

##### AdWords

*   Added support and examples for v201702.
*   Fixed
    [issue #236](https://github.com/googleads/googleads-php-lib/issues/236).
*   Accepted [PR #196](https://github.com/googleads/googleads-php-lib/pull/196).

##### DFP (currently Ad Manager)

*   Fixed [issue #238]
    (https://github.com/googleads/googleads-php-lib/issues/238).
*   Fixed an unmarshalling issue with `ApiError`.
*   Added `create` examples for core services.

##### Common

*   Added support for impersonation when using service accounts.

### 25.2.0

##### DFP (currently Ad Manager)

*   Added support and examples for v201702.

##### Common

*   Accepted [PR #217](https://github.com/googleads/googleads-php-lib/pull/217).

### 25.1.0

##### AdWords

*   Fixed
    [issue #197](https://github.com/googleads/googleads-php-lib/issues/197).
*   Accepted [PR #203](https://github.com/googleads/googleads-php-lib/pull/203).
*   Fixed
    [issue #206](https://github.com/googleads/googleads-php-lib/issues/206).
*   Fixed some examples that had issues with printing results.

##### DFP (currently Ad Manager)

*   Accepted [PR #195](https://github.com/googleads/googleads-php-lib/pull/195).
*   Added RunSavedQuery.php reporting example.
*   Added RunDeliveryReportForOrder.php reporting example.
*   Added forecast service examples.

##### Common

*   Fixed
    [issue #200](https://github.com/googleads/googleads-php-lib/issues/200).
*   Fixed
    [issue #210](https://github.com/googleads/googleads-php-lib/issues/210).

### 25.0.0

##### AdWords

*   Added support and examples for v201609.
*   Removed support and examples for v201607.
*   Fixed
    [issue #168](https://github.com/googleads/googleads-php-lib/issues/168).
*   Fixed [issue #175](https://github.com/googleads/googleads-php-lib/pull/175).
*   Fixed [issue #181](https://github.com/googleads/googleads-php-lib/pull/181).
*   Refactored how to specify what format a report is downloaded in
    `ReportDownloader` by introducing `ReportDownloadResult`.
*   Added support for including utility usage in the user agent header.

##### DFP (currently Ad Manager)

*   Added support and examples for v201611.
*   Removed support and examples for v201608.
*   Renamed `DateTimeUtils` to `DfpDateTimes` and refactored some of its methods
    to make it easier to understand and use.

##### Common

*   Library is now stable and no longer in beta. See the [Upgrading
    guide](https://github.com/googleads/googleads-php-lib/blob/master/UPGRADING.md)
    for details on how to upgrade.
*   Fixed the issue that some enum values whose names conflict with PHP reserved
    keywords were generated by prepending "a", e.g., "aDEFAULT". They are now
    generated by appending "VALUE", e.g., "DEFAULT_VALUE".
*   Removed `__default` const from all generated pseudo-enum classes as it's not
    necessary.
*   Fixed
    [issue #173](https://github.com/googleads/googleads-php-lib/issues/173).
*   Refactored logging to support logging to different channels. There is now a
    SOAP logger, as well as other product-specific loggers.
*   Added convenience config options for core AdWords and DFP loggers to setup
    logging to a specified file.
*   Fixed [issue #187](https://github.com/googleads/googleads-php-lib/pull/187).
*   Relaxed all library dependencies to use ^ instead of ~.
*   Various internal utility refactoring to make utilities clearer in what they
    do and easier to understand.

### 1.4.0-beta

##### AdWords

*   Added support and examples for v201607.
*   Removed support and examples for v201605.
*   User agent is now optional. If no user agent is specified, 'unknown' will be
    passed instead. If provided, user agent must contain US-ASCII characters
    only.
*   Added BatchJobs to support batch processing using BatchJobService
    ([issue #145](https://github.com/googleads/googleads-php-lib/issues/145)).
*   Added some examples for v201607.

##### DFP (currently Ad Manager)

*   Added support and examples for v201608.
*   Removed support and examples for v201602.

### 1.3.1-beta

##### DFP (currently Ad Manager)

*   Added v201602 retrieval examples.

##### Common

*   Fixed
    [issue #143](https://github.com/googleads/googleads-php-lib/issues/143) and
    [issue #144](https://github.com/googleads/googleads-php-lib/issues/144).

### 1.3.0-beta

##### AdWords

*   Added report downloader utility.
*   Added support and examples for v201605.
*   Removed support and examples for v201603.
*   Added support for reporting request header
    [`useRawEnumValues`](https://developers.google.com/adwords/api/docs/guides/reporting#request-headers).

### 1.2.0-beta

##### Common

*   Added a GetRefreshToken.php example that helps you generate an OAuth2
    offline refresh token for installed application flows.

### 1.1.0-beta

##### AdWords

*   Added support for v201603.
*   Removed support for v201601.

##### DFP (currently Ad Manager)

*   Added support for v201602.
*   Removed support for v201511.
*   The report downloader utility now uses Guzzle, instead of Curl, to make HTTP
    requests.

##### Common

*   OAuth2 is now handled by the [Google PHP Auth
    Library](https://github.com/google/google-auth-library-php).
*   [OAuth2 service
    accounts](https://developers.google.com/identity/protocols/OAuth2ServiceAccount)
    are now supported and JSON key credentials can be loaded from the
    adsapi_php.ini file.
*   SSL peer verification is now enabled by default for SOAP requests.
*   Instances of ApiException are now thrown from services if there was a SOAP
    fault, instead of PHP's generic SoapFault.

### 1.0.0-beta

##### Common

*   Initial release.
