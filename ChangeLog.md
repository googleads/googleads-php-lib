### 5.3.0

AdWords:
  - Fixed [pull request #40](https://github.com/googleads/googleads-php-lib/pull/40).
  - Fixed [pull request #39](https://github.com/googleads/googleads-php-lib/pull/39).

DFP:
  - Deprecated ServiceUtils.php.
  - Added support and examples for v201405.

Common:
  - OAuth2 credentials are now passed via HTTP headers.

### 5.2.3

AdWords:
  - Added support for new AdWords Express ProductServiceService.
  - Fixed [issue #2](https://github.com/googleads/googleads-php-lib/issues/2).

DFP:
  - Fixed [issue #32](https://github.com/googleads/googleads-php-lib/issues/32).

### 5.2.2

AdWords:
  - Fixed [issue #21](https://github.com/googleads/googleads-php-lib/issues/21).
  - Fixed [issue #19](https://github.com/googleads/googleads-php-lib/issues/19).

DFP:
  - Fixed [pull request #18](https://github.com/googleads/googleads-php-lib/pull/18).

Common:
  - Fixed [issue #24](https://github.com/googleads/googleads-php-lib/issues/24).
  - Fixed [issue #10](https://github.com/googleads/googleads-php-lib/issues/10).
  - Fixed [pull request #11](https://github.com/googleads/googleads-php-lib/pull/11).

### 5.2.1

AdWords:
  - Added support and examples for v201402.
  - Added exception being thrown if a service is requested with ClientLogin as
    the authentication mechanism for an unsupported version.
  - Removed support for v201306.
  - Added examples to get refresh token and create AdWordsSession without
    using auth.ini file.

DFP:
  - Added examples to get refresh token and create AdWordsSession without
    using auth.ini file.

Common:
  - No changes.

### 5.2.0

AdWords:
  - No changes.

DFP:
  - Added support for v201403.
  - Added exception being thrown if a service is requested with ClientLogin as
    the authentication mechanism for an unsupported version.
  - Refactored all examples to use bulk service methods.
  - Added examples for ContentMetadataKeyHierarchyService.

Common:
  - No changes.

### 5.1.0

AdWords:
  - Fixed [issue #9](https://github.com/googleads/googleads-php-lib/issues/9).
  - Added support for AdWords Express for v201309 (invite-only feature).

DFP:
  - No changes.

Common:
  - No changes.

### 5.0.0

AdWords:
  - No changes.

DFP:
  - No changes.

Common:
  - Library is now hosted on GitHub in a single project for all ads products.
    Each release will still have separate downloadable tarballs for each
    product.
  - Bumped library version to a common version.

---

### Previous change logs by product.

#### AdWords

4.7.0:
- Fixed bug #115.
- Removed support for v201302.
- Added UpdateSiteLinks example.

4.6.1:
- Fixed bug #112

4.6.0:
- Added support and examples for v201309.

4.5.1:
- Reintroduced WSDL Interpreter for generating PHP stubs from WSDLS.

4.5.0:
- AdWords for Video API v201302 examples (beta feature).
- Fixed Feed Function naming to FeedFunction (Issue #101).
- Removed support for v201209.

4.4.0:
- Added support and examples for v201306.

4.3.0:
- Removed support for OAuth 1. Use OAuth 2 instead.
- OAuth 2 is now the preferred authentication method as ClientLogin is
  deprecated. Warnings will be logged if ClientLogin is used.
- The OAuth 2 example has been renamed to GetRefreshToken.php (previously
  UseOAuth2.php) and will read OAuth 2 client ID and secret credentials from
  the auth.ini file.
- Access tokens are now automatically refreshed when they are close to
  expiring (within 60 seconds) if a refreshable token has been provided. This
  allows PHP scripts to be long lived without issues.
- The authentication key "clientId" in auth.ini has been renamed to
  "clientCustomerId".
- Examples now capture OAuth2 errors and inform users how best to resolve
    them.
- Added support for AdWords for Video v201302.

4.2.5:
- Added example for upgrading legacy sitelinks.
- Moved the SetCampaignEnhanced example to the Migration directory.

4.2.4:
- Added support and examples for AdGroupBidModifierService.

4.2.3:
- AdWords for Video API support and examples (beta feature).

4.2.2:
- Bug fix for PHP < 5.3.0 undefined function parse_ini_string (Issue #91).

4.2.1:
- Fixed "cvc-elt" error with resolving Selector.
- Removed v201206 src.
- Removed v201206 AdWords and Adx examples.
- Improved examples dependency include (init.php).

4.2.0:
- Removed AndySmithOAuthHandler. Use PECL OAuth extension instead for OAuth 1.

4.1.1:
- Improved support of reporting for v201302.

4.1.0:
- Added support and examples for v201302.

4.0.1:
- Added example for Setting a campaign to enhanced.
- Added example for Setting a bid modifier.

4.0.0:
- Correcting user agent.

3.3.0:
- Removing support for sunset Sandbox environment

3.2.3:
- Bug fix for PHP 5.4.0 to 5.4.4 SOAP flag name change (Issue #81).

3.2.0:
- Added support and examples for v201209.
- Added support in ReportUtils for apiMode error messages.

3.1.1:
- Fixed call to missing method in OAuthHandler (Issue #74).
- Added support and examples for v201206.

3.1.0:
- Added support, examples, and tests for v201109_1.
- Added support for OAuth2.

3.0.3:
- Fixed issue with improper loading of settings and added tests. (Issue #68)
- Fixed invalid date range issue with GetClientCustomerId example. (Issue #74)
- Small updates and enhancements to tests.

3.0.2:
- Added support for the whitelist-only BudgetOrderService.

3.0.1:
- Removed support and examples for the sunset BulkOpportunityService.
- Regenerated service stub classes.
- Added validation tests for the example code.
- Updated examples to include optional fields and multiple items.
- Added an example demonstrating how to get stats.
- Updated and refactored the AdX-specific tests.

3.0.0:
- Removed support, examples, and tests for API versions v200909, v201003,
  v201008, and v201101.
- Reorganized and updated the v201109 examples.
- Added support for SSL host verification and added SSL verification to OAuth
  flow.
- Updated auth files to remove application token and client email.
- Fix for issue #67. Ensuring the request wrapper object has a unique name
  per-service, even though other class renaming rules should be ignored,
  when psuedo-namespaces are enabled.
- Fixed WSDL interpretter to handle missing class map correctly.
- Fixed include path in AdWordsTestSuite.php.

2.7.2:
- Added support and example for CreateAccountService.
- Fixed issue with incorrect exception variable name.
- Fixed issue with GetAccountHeirarchy.php when used in the sandbox.
- Fixed issue with lingering "id" attribute after reference replacement. Added
  tests for SoapXmlFixer.

2.7.1:
- Added developer token to report download requests and updated error handling.

2.7.0:
- Added support and examples for v201109.
- Added support and example for downloading ad hoc reports.
- Deprecated support for clientEmail in v201109.
- Added operation index parsing for OGNL expressions.
- Improved type handling during XML serialization and deserialization.
- Added option for HTTP method to OAuth handlers.

2.6.4:
- Fixed long type conversion issue with 32-bit machines. (Issue #55)
- Fixed 1.0a support in AndySmithOAuthHandler.
- Replaced AdWordsUser Get*Service() methods with a single GetService() method.
  Backwards compatability maintained using __call(). All examples and tests
  updated to use the new method.
- Fixed capitalization of TRUE and FALSE in various files.
- Added support for pseudo-namespaces on generated classes. (Issue #4)
- Changed WSDL2PHP to ignore classmap when pseudonamespaces are enabled.
- Moved header generation to API-specific SOAP client classes.
- Made AdWordsUser->__call() method case insensitive when matching for
  Get*Service() method calls.
- Added logic to pass ID values as strings to avoid any precision issues.
  (Issue #62)
- Fixed long field conversion code and added tests.
- Fixed issue with missing xsi namespace declaration when adding xsi types.
- Removed option to redeclare namespace definitions, as the API was updated to
  no longer require this.
- Improved error handling when DOM fails to load.
- Enabled gzip compression of inbound non-SOAP HTTP requests.
- Added XML serializtion functionality to XmlUtils, and various cleanup.
- Fixed build file, specifing class map as JSON.

2.6.3:
- Updated OAuth implementation to allow for alternative OAuth libraries,
  including the bundled Andy Smith library. Updated to use OAuth version 1.0a.
- Updated the logging functionality to support filtering for levels. Changed the
  default logging behavior to only log SOAP XML if an error occurred. Added new
  methods to AdWordsUser for additional logging configuration.
- Fixed issue with cross-client report download. (Issue #59)
- Updated and added functional tests for v201008 and v201101.

2.6.2:
- Made v201101 the default version.
- Small documentation fixes.
- Fixed issue with small reports being interpretted incorrectly. [Issue #58]

2.6.1:
- Fixed build script to include build.properties for source distributions.

2.6.0:
- Added support for asyncronous (cross-client) report downloads.
- Merged with the Ad Exchange Buyer client library.
- Refactored build system to use properties file.
- All generated service for a version are now stored in the same folder.

2.5.1:
- Added support for the ConversionTrackerService and BulkOpportunityService,
  including examples.
- Updated the AddUserList.php example to include retrieving the conversion
  tracker snippet.

2.5.0:
- Added support for v201101, including examples.
- Fixed bug where constants were being redefined.
- Added support for SSL peer validation.
- Removed name field from image upload examples.
- Added example for CAPTCHA handling in auth token errors.
- Prevent whole file from being read in when checking for errors in report
  download (Issue #51).
- Enhanced auth token error handling to support 2-step errors.
- Fixed bug in SoapRequestXmlFixer that lead to duplicate xsi:types in some
  environments (Issue #50).
- Added new tests for v201003 and updated some v200909 tests.
-  Updated examples to ensure proper string formatting for long types.

2.4.1:
- Added support for the returnMoneyInMicros header in ReportUtils.
- Added an example for handling partial failures.
- Fixed small typo in GetAccountHierarchy example.

2.4.0:
- Added support and examples for additional v201008 services.
- Made v201008 the default version.
- Updated OAuth parameter to use standard method.
- Updated conversion optimizer example to use new campaign field.
- Added additional BulkMutateJobService examples.
- Added new utility to work with choice classes.
- Fixed GetAllAdGroups examples (Issue #44).
- Removed CSV and other data files.

2.3.0:
- Added support for v201008, with examples.
- Changed error handling in examples to avoid authTokens and developer tokens
  appearing in stack traces.
- Added AuthToken unit test.
- Added XSI type fix for OSX.
- Ensured correct argument separator for ClientLogin requests.
- Added ability to download reports to memory.
- Updated ReportUtils error regex.
- Added OAuth support.
- Added ability to reuse authToken without first creating new one.
- Added new test framework and utils.
- Added and updated v200909 tests.
- Added the ability to load authToken or OAuth info from the auth.ini file.

2.2.0:
- Added support for v201003, with examples and tests.
- Removed API dependency from ErrorUtils.
- Added MapUtils for converting between maps and map entry arrays.
- Updated TargetingIdeaService examples to use MapUtils.
- Updated AddAds examples to include video template ad.
- Added ReportUtils for downloading reports.
- Improved error handling for AuthToken requests.
- Added proxy support to wsdl2php library.

2.1.0:
- Corrected typo in settings file.
- Addition to README, unicode characters and escaping.
- Added PHP 5.3 support.
- HTTP proxy and WSDL caching settings.
- Changed copyright date to 2010.
- Casting ids to floats in examples.
- Updated CSV data files.
- Added utility classes for working with Errors and Ognl paths.
- Added new examples for deleting items and handling policy violation errors.

2.0.1:
- Bug fix for custom class loaders (Issue #15).
- Bug fix for XML validation in PHP 5.2.6 and below (Issue #16).
- Updated user agent format.

2.0.0:
- Removed support for v200906, which has been sunset.
- Made application tokens optional.
- Added support for gzip compression of SOAP requests and responses (Issue #14).

1.2.2:
- Added namespace declaration workaround for bug in server side XML validation.
- Changed tests to pull server from test_settings.ini.
- Removed usage of deprecated split() method (Issue #6).
- Prevented multiple appenders from being added for the same file (Issue #9).
- Prevented autoloading of AdWords API classes (Issue #11).

1.2.1:
- Added new examples and rewrote existing ones for consistency.
- Fixed incorrect method and service name for GetAdExtensionOverrideService in
  class AdWordsUser.

1.2.0:
- Added support AdParamService.
- Added support for validateOnly header.
- Added new examples.

1.1.0:
- Added support for all v5.2.x versions of PHP.

1.0.0:
- Initial release of library.

---

#### DFP

2.19.0:
- Added support for v201311.
- A valid application name is now required and must not be the default. Set it
  in your auth.ini file using the applicationName key.

2.18.0:
- Added support for v201308.
- Removed deprecated versions v201203, v201204, and v201206.
- Added ToString and ToStringWithTimeZone functions in date utils to stringify
  DfpDateTimes.
- Pql utilities will now convert DfpDateTime and Date values into machine
  readable strings. DfpDateTimes will be in ISO-8061 format, while Dates will be
  in yyyy-MM-dd format.
- Added result set combiner function in Pql utilities to easily combine result
  sets from paged statements.

2.17.1:
- Reintroduced WSDL Interpreter for generating PHP stubs from WSDLS.

2.17.0:
- Added support for v201306.
- Removed support for OAuth 1. Use OAuth 2 instead.
- OAuth 2 is now the preferred authentication method as ClientLogin is
  deprecated. Warnings will be logged if ClientLogin is used.
- The OAuth 2 example has been renamed to GetRefreshToken.php (previously
  UseOAuth2.php) and will read OAuth 2 client ID and secret credentials from
  the auth.ini file.
- Access tokens are now automatically refreshed when they are close to
  expiring (within 60 seconds) if a refreshable token has been provided. This
  allows PHP scripts to be long lived without issues.
- Examples now capture OAuth2 errors and inform users how best to resolve
  them.

2.16.0:
- Added support for v201302.
- Removed AndySmithOAuthHandler. Use PECL OAuth extension instead for OAuth 1.
- Removed standalone playground web app sample, please use the hosted version at
  https://dfp-playground.appspot.com instead.

2.15.0:
- Added support for v201211.
- Updated existing generated code for UnsupportedCreative and UNKNOWN enum
  choices.
- Removed support for v201108, v201111, and v201201.

2.14.1:
- Added link to the DFP developer site in auth.ini that explains property
  values.
- Updated comments for example for MakeTestNetworkExample.php.
- Updated GetAdUnitSizesExample.php, CreateMobileAdUnitExample.php, and
  GetAllLicasExample.php.
- Added new examples AssociateCreativeSetToLineItemExample.php and
  RunReportWithCustomFields.php.

2.14.0:
- Added support for v201208.

2.13.1:
- Changed formatting of client library user agent.
- Fixed unit tests that were previously not working.
- Refactored some unit tests to use mocks and not contact the actual DFP
  service.
- Refactored CurlUtils.php so that it can be tested.
- Fixed Issue #44

2.13.0:
- Added support for v201206.
- Added examples for CreativeSetService.
- Added support and samples for OAuth2.0.

2.12.1:
- Bug fix for DfpUser abstract method not implemented exception (Issue #37).

2.12.0:
- Added support for v201204.
- Added examples for TeamUserAssociationService.
- Added examples for CustomFieldService.
- Updated examples for TeamService and PlacementService.

2.11.0:
- Removed support for deprecated versions v201103, v201104, and v201107.
- Added support for v201203.
- Library will no longer default to the sandbox environment.

2.10.0:
- Added support for v201201.
- Added examples for TeamService.
- Adjusted some examples for new v201201 features.
- Removed non-essential PQL examples.

2.9.1:
- Added examples for the ThirdPartySlotService.
- Added support for CreativeTemplates in the sample web application.
- Updated pseudo-namespace functionality to handle conflicts better.

2.9.0:
- Added support and examples for v201111.
- Fixed issue with lingering "id" attribute after reference replacement.  Added
  tests for SoapXmlFixer.
- Fixed bug with wrong exception name (Issue #27).
- Added support for general PQL Service in webapp.
- Updated to using new DfpUser->GetService() method in webapp.
- Added local storage to save filter text in webapp.
- Bug fix for snippet not being escaped in webapp (Issue #25).
- Bug fix for out of memory exception when there were too many results in webapp
  (Issue #23).

2.8.1:
- Added and updated examples to support postal codes.
- Added operation index parsing for OGNL expressions.
- Added option for HTTP method to OAuth handlers.
- Improved type handling during XML serialization and deserialization.
- Added the ability to ignore duplicate class names when generating classes
  from the WSDL.

2.8.0:
- Added support, tests, and examples for v201108.
- Added support for Date conversions in DateTimeUtils.
- Made DfpDateTime conversions timezone aware.
- Fixed tests so that they work correctly against production.

2.7.0:
- Added support, tests, and examples for v201107.
- Replaced Get*Servce() methods with a single GetService() method. Maintained
  backwards compatibility using the magic method __call.
- Updated the logging functionality to support filtering for levels. Changed the
  default logging behavior to only log SOAP XML if an error occurred. Added new
  methods to DfpUser for additional logging configuration.
- Updated OAuth mechanism, allowing for different OAuth libraries to be used.
- Updated OAuth implementation to version 1.0a.
- Moved WSDL2PHP settings into build.properties.
- Added pseudo-namespace support for generated classes.
- Added better support for long value serialization and deserialization.
- Added features and fixed bugs for the sample webapp. Fixes for issues #9, #10,
  #11, and #13.

2.6.0:
- Added support, examples, and tests for v201104.
- Updated build system and endpoint URL handling.

2.5.1:
- Fixed xsi:types in headers for some versions of PHP.  Issue #7.

2.5.0:
- Added support for v201103, including examples and tests.
- Fixed bug in webapp that resulted in duplicate HTML ids.
- Updated code generation script for better documentation.
- Changed documentation format to use frames.

2.4.0:
- Added support for version v201101, including examples and tests.
- Added support for SSL peer validation.
- Updated auth token and report utilities to use common cURL utility.
- Fixed problem of duplicate xsi:type attributes in some environments.

2.3.0:
- Added support for version v201010, including examples and tests.
- Updated CreateLineItemsExample.php to include geographical targeting.
- Removed v201004 dependency from DateTimeUtils.php.

2.2.0:
- Added support for the NetworkService, with examples.
- Added tests for ForecastService, NetworkService, and ReportService.
- Updated tests and examples for compatiblity with DFP Small Business.

2.1.0:
- Added support for ForecastService and ReportService, with examples.
- Removed API dependency from ErrorUtils.
- Added MapUtils for converting between maps and map entry arrays.
- Added ReportUtils for downloading reports.
- Improved error handling for AuthToken requests.
- Added proxy support to wsdl2php library.

2.0.0:
- Add support for v201004
  - Filter replaced by Statement
- Removed support for v201002
- Added utility classes for working with Errors and OGNL paths.

1.1.0:
- Addition to README, unicode characters and escaping.
- Added PHP 5.3 support.
- HTTP proxy and WSDL caching settings.
- Bug fix for custom class loaders.
- Casting ids to floats in examples.

1.0.0:
- Initial release of library.
