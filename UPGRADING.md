## New ads PHP client library upgrade guide

Welcome to the new ads PHP client library! This upgrade guide will help you
migrate your code from the old ads PHP client library to the new one.

The new library resides in the [master
branch](https://github.com/googleads/googleads-php-lib/) of the same GitHub
repository as the old one and is versioned starting at
[25.0.0](https://github.com/googleads/googleads-php-lib/releases/tag/25.0.0).
This allows for releases of the old version of the library to still be made
until it is end of life (EOL). See [issue
193](https://github.com/googleads/googleads-php-lib/issues/193) for more
information on old library support. The old library has been moved to the
[deprecated
branch](https://github.com/googleads/googleads-php-lib/tree/deprecated).

The new ads PHP client library has these notable upgrades:

*   Uses namespaces and conforms to [PSR-4](http://www.php-fig.org/psr/psr-4/)
    autoloading.
*   Conforms to [PSR-3](http://www.php-fig.org/psr/psr-3/) for logging.
*   Supports installation via [Composer](https://getcomposer.org/).
*   Uses the [Google PHP auth
    library](https://github.com/google/google-auth-library-php) for OAuth2,
    offering more features, flexibility, and [service account
    support](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(server-to-server-flow\)).
*   Uses [Guzzle](https://github.com/guzzle/guzzle) for non-SOAP HTTP calls,
    conforming to [PSR-7](http://www.php-fig.org/psr/psr-7/).
*   Contains better object-oriented library design and stub interfaces,
    including builders to configure settings.
*   Contains upgraded and easier to use utilities for AdWords reporting, AdWords
    batch jobs, and DFP reporting.
*   Enables SSL by default for SOAP API calls and non-SOAP HTTP API calls.

The following are differences at a high-level.

|                        | Old library                                                                                                                                                        | New library
------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | -----------
GitHub location          | [Deprecated branch](https://github.com/googleads/googleads-php-lib/tree/deprecated)                                                                                | [Master branch](https://github.com/googleads/googleads-php-lib/)
Packagist                | [googleads/googleads-php-lib](https://packagist.org/packages/googleads/googleads-php-lib)                                                                          | [googleads/googleads-php-lib](https://packagist.org/packages/googleads/googleads-php-lib) (unchanged)
Requirements             | PHP 5.3 and higher, SOAP ext, OpenSSL ext, Curl ext.                                                                                                               | PHP 5.5.9 and higher, SOAP ext, OpenSSL ext. No longer requires Curl ext (uses Guzzle library instead). Requirements are also better defined by Composer.
Installation             | Composer (with [caveats](https://github.com/googleads/googleads-php-lib/blob/deprecated/README.md#getting-started)), or copy/add library to your PHP include path. | Full Composer support. See the README's [Getting started](https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started) for details.
PSR                      | None.                                                                                                                                                              | PSR-3, PSR-4, PSR-7 (for non-SOAP HTTP).
SOAP API calls           | PHP SOAP ext.                                                                                                                                                      | PHP SOAP ext.
Non-SOAP HTTP API calls. | Curl ext.                                                                                                                                                          | Guzzle
SSL                      | Disabled by default and required you to manually specify `CA_PATH` or `CA_FILE` for SOAP and non-SOAP HTTP calls.                                                  | Enabled by default for SOAP and non-SOAP HTTP calls. The library will try to automatically find your system's certs file.

## Configuration

The configuration settings in the new library have been consolidated into one
file called `adsapi_php.ini`. The recommended location for this file is your
home directory because the settings builders in the new library all have a
[fromFile()](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/AdsBuilder.php#L44)
method that, by default, looks for this file in your home directory.

For example:

```php
$adWordsSession = (new AdWordsSessionBuilder())->fromFile();
```

|                                   | Old library                                                                                                                                                                               | New library
----------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----------
AdWords sample config file location | `auth.ini` and `settings.ini` in [src/Google/Api/Ads/AdWords](https://github.com/googleads/googleads-php-lib/tree/deprecated/src/Google/Api/Ads/AdWords)                                  | `adsapi_php.ini` in [examples/AdWords](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/adsapi_php.ini)
DFP sample config file location     | `auth.ini` and `settings.ini` in [src/Google/Api/Ads/Dfp](https://github.com/googleads/googleads-php-lib/tree/deprecated/src/Google/Api/Ads/Dfp)                                          | `adsapi_php.ini` in [examples/Dfp](https://github.com/googleads/googleads-php-lib/blob/master/examples/Dfp/adsapi_php.ini)
Recommended location of config file | Leave it under `src/`, creating an [AdsUser](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/Common/Lib/AdsUser.php) will look for it there by default. | Copy it to your home directory and use `fromFile()` on builders to load config file from home directory.

If you don't want to use the INI file to configure the new library, all settings
can be programmatically configured using builders. The following table outlines
where you can configure each of the available settings in the old library versus
the new one.

|                                                                        | Old library                                                                                                                                | New library
------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | -----------
**Logging**                                                              |                                                                                                                                            |
Logging settings - see [Logging](#logging) for more details              | `settings.ini` or `AdsUser`                                                                                                                | `adsapi_php.ini` or [AdsSession](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/AdsSession.php) using an AdWords or DFP `SessionBuilder`
**Auth**                                                                 |                                                                                                                                            |
OAuth2 settings - see [Authentication](#authentication) for more details | `auth.ini` or `AdsUser`                                                                                                                    | `adsapi_php.ini` or `AdsSession` using [OAuth2TokenBuilder.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/OAuth2TokenBuilder.php)
**SOAP**                                                                 |                                                                                                                                            |
SOAP settings (e.g., compression, WSDL caching)                          | `settings.ini`                                                                                                                             | `adsapi_php.ini` or `AdsSession` using [SoapSettingsBuilder.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/SoapSettingsBuilder.php)
Proxy settings                                                           | `settings.ini`                                                                                                                             | `adsapi_php.ini` or `AdsSession` using `SoapSettingsBuilder.php`
SSL settings                                                             | `settings.ini`                                                                                                                             | `adsapi_php.ini` or `AdsSession` using `SoapSettingsBuilder.php`
**AdWords**                                                              |                                                                                                                                            |
AdWords settings (e.g., client customer ID, dev token)                   | `auth.ini` or [AdWordsUser](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/AdWords/Lib/AdWordsUser.php) | `adsapi_php.ini` or `AdsSession` using [AdWordsSessionBuilder.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/AdWords/AdWordsSessionBuilder.php)
AdWords reporting settings                                               | `ReportUtils`                                                                                                                              | `adsapi_php.ini` or `AdsSession` using [ReportSettingsBuilder.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/AdWords/ReportSettingsBuilder.php)
**DFP**                                                                  |                                                                                                                                            |
DFP settings (e.g., network code)                                        | `auth.ini` or [DfpUser](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/Dfp/Lib/DfpUser.php)             | `adsapi_php.ini` or `AdsSession` using [DfpSessionBuilder.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Dfp/DfpSessionBuilder.php)

For a more detailed example of how you can configure settings in the new
library, see the [Basic
usage](https://github.com/googleads/googleads-php-lib/blob/master/README.md#basic-usage)
section in the README.

## Authentication

The new library uses the PHP Google Auth Library for OAuth2 calls. This allows
the new library to support features such as OAuth2 service accounts and more.

|                                                | Old library                                                                                                                                                                                                                     | New library
------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----------
OAuth2 library                                   | [OAuth2Handler.php](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/Common/Util/OAuth2Handler.php)                                                                                            | PHP Google Auth Library
Supported OAuth2 flows                           | [Installed application flow](https://github.com/googleads/googleads-php-lib/wiki/%5BDeprecated,-old-library%5D-API-access-using-own-credentials-\(installed-application-flow\)).                                                | [Installed application flow](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(installed-application-flow\)), [web flow](https://github.com/googleads/googleads-php-lib/wiki/API-access-on-behalf-of-your-clients-\(web-flow\)), [service account flow](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(server-to-server-flow\)).
Installed application flow refresh token utility | In examples `Auth` folder under [AdWords](https://github.com/googleads/googleads-php-lib/tree/deprecated/examples/AdWords/Auth) or [DFP](https://github.com/googleads/googleads-php-lib/tree/deprecated/examples/Dfp/Auth).     | Consolidated into one [auth example](https://github.com/googleads/googleads-php-lib/blob/master/examples/Auth/GetRefreshToken.php).

## Logging

The new library conforms to PSR-3 for logging and uses
[Monolog](https://github.com/Seldaek/monolog) by default. It uses different
logging channels when appropriate, offers better logging customization, and has
convenience logging configuration in the `adsapi_php.ini` file for log levels.
See our README's [logging
section](https://github.com/googleads/googleads-php-lib/blob/master/README.md#configuring-logging)
for detailed examples on how to set up logging in the new library.

|                      | Old library                                                                | New library
---------------------- | -------------------------------------------------------------------------- | -----------
Using a custom logger  | Not possible.                                                              | Build an ads session with a logger that conforms to PSR-3 (implements [LoggerInterface](https://github.com/php-fig/log/blob/master/Psr/Log/LoggerInterface.php)).
Logging to a file      | Can be specified in `settings.ini` or programmatically in the library.     | Can be specified in `adsapi_php.ini` or by setting your own PSR-3 compatible logger.
Configuring log levels | Can only be done programmatically and did not conform to PSR-3 log levels. | Can be done either in `adsapi_php.ini` or programmatically. Supports PSR-3 log levels.
Log channels           | No separate channels.                                                      | Different channels used for different parts of the library.

## Basic usage

The new library conforms to better object-oriented design than the old one. This
is noticeable mostly when creating and configuring the library entry point. The
new library utilizes builders for a cleaner configuration. The other noticeable
change is when accessing object fields, the new library uses getters and setters
rather than allowing you to access member variables directly. Otherwise the
basic usages of both libraries are very similar. See the [Basic
usage](https://github.com/googleads/googleads-php-lib/tree/master#basic-usage)
section of our README for a detailed example.

|                              | Old library                                                                                                    | New library
------------------------------ | -------------------------------------------------------------------------------------------------------------- | -----------
Library configuration          | Create a new ads user (AW or DFP) with all configuration set in the constructor, including OAuth2 credentials. | Build an ads session with only the settings you want to specify. Building an OAuth2 credential is separate from building the library's settings.
Obtaining a service            | Obtain it from the ads user, specifying the class name and version as strings.                                 | Obtain it from the ads services factory, specifying the service class using [::class](http://php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class) after it has been imported.
Making API calls with services | Call a PHP method on the service.                                                                              | Call a PHP method on the service, this remains the same as the old library.
Accessing fields of an object  | Access object member variables directly.                                                                       | Accessed using getters and setters.
Importing classes              | Not required as classes aren't namespaced.                                                                     | [use](http://php.net/manual/en/language.namespaces.importing.php) statements to import classes are required before they can be referenced, unless the FQCN is specified.

## Utilities

The new library has improved a number of library utilities, particularly for
making non-SOAP API calls such as to AdWords reporting and certain parts of the
`BatchJobService` workflow.

### Common utility changes

Most common utilities are for the internal infrastructure of the library. Many
obsolete utilities have been removed in the new library. But one that is still
useful to users is the map entries utility.

|                   | Old library                                                                                                                    | New library
------------------- | ------------------------------------------------------------------------------------------------------------------------------ | -----------
Map entries utility | Called [MapUtils](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/Common/Util/MapUtils.php). | Called [MapEntries](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/Util/MapEntries.php) and methods have been renamed to better reflect what they do.

### AdWords utility changes

There are two major utilities for AdWords to help with the non-SOAP API calls to
reporting and parts of batch processing. These utilities have significant
improvements in their design from the old library.

|                 | Old library                                                                                                                                                                                                                                                      | New library
----------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----------
Batch job utility | Called [BatchJobUtils](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/AdWords/Util/v201609/BatchJobUtils.php). Used custom XML serialization and deserialization logic.                                                       | Called [BatchJobs](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/AdWords/BatchJobs/v201609/BatchJobs.php) and deals with incremental uploading better using an intermediary batch jobs upload status object. Also uses the [Symfony Serializer component](http://symfony.com/doc/current/components/serializer.html) for XML serialization and deserialization.
Report downloader | Called [ReportUtils](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/AdWords/Util/v201609/ReportUtils.php). Used Curl ext. Did not provide ability to stream reports. Used custom XML serialization and deserialization logic. | Called [ReportDownloader](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/AdWords/Reporting/v201609/ReportDownloader.php). Uses Guzzle, conforming to PSR-7, thus having the ability to stream reports. Also uses the Symfony Serializer for XML serialization and deserialization.

Usages of both these upgraded utilities can be found in examples.

*   Batch job examples:
    *   [AddCompleteCampaignsUsingBatchJob](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201609/CampaignManagement/AddCompleteCampaignsUsingBatchJob.php)
    *   [AddKeywordsUsingIncrementalBatchJob](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201609/CampaignManagement/AddKeywordsUsingIncrementalBatchJob.php)
*   Reporting examples:
    *   [DownloadCriteriaReportWithAwql](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201609/Reporting/DownloadCriteriaReportWithAwql.php)
    *   [DownloadCriteriaReportWithSelector](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201609/Reporting/DownloadCriteriaReportWithSelector.php)

### DFP utility changes

DFP utilities have minor changes, most remain the same.

|                  | Old library                                                                                                                                   | New library
------------------ | --------------------------------------------------------------------------------------------------------------------------------------------- | -----------
Date times utility | Called [DateTimeUtils](https://github.com/googleads/googleads-php-lib/blob/deprecated/src/Google/Api/Ads/Dfp/Util/v201611/DateTimeUtils.php). | Split and renamed to [DfpDateTimes](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Dfp/Util/v201611/DfpDateTimes.php) and [DfpDates](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Dfp/Util/v201611/DfpDates.php), some obsolete methods removed.
Report downloader  | Uses Curl ext.                                                                                                                                | Uses Guzzle.

## Examples

Most of the examples in the old library have already been ported to the new
library, with the remainder coming soon. The examples themselves have not
changed much and have been updated to use the new library instead of the old
one. If an example you want is not available, please reference the old library
for now.

|                         | Old library                                                                                 | New library
------------------------- | ------------------------------------------------------------------------------------------- | -----------
AdWords examples location | [Examples](https://github.com/googleads/googleads-php-lib/tree/deprecated/examples/AdWords) | [Examples](https://github.com/googleads/googleads-php-lib/tree/master/examples/AdWords)
DFP examples location     | [Examples](https://github.com/googleads/googleads-php-lib/tree/deprecated/examples/Dfp)     | [Examples](https://github.com/googleads/googleads-php-lib/tree/master/examples/Dfp)

## PHPDoc

The old library provided PHPDoc pages under
[gh-pages](https://github.com/googleads/googleads-php-lib/tree/gh-pages) on
GitHub. The new library does not provide these yet. See
[issue #194](https://github.com/googleads/googleads-php-lib/issues/194) to track
progress on this.

|              | Old library                                                                                          | New library
-------------- | ---------------------------------------------------------------------------------------------------- | -----------
AdWords PHPDoc | [PHPDoc](http://googleads.github.io/googleads-php-lib/\(Deprecated%20-%20old%20library\)%20AdWords/) | TBD
DFP PHPDoc     | [PHPDoc](http://googleads.github.io/googleads-php-lib/\(Deprecated%20-%20old%20library\)%20Dfp/)     | TBD

## Questions?

If you need help with upgrading your library, please see our [support
channels](https://github.com/googleads/googleads-php-lib/tree/master#getting-support)
for how to reach out to us.
