## Google Ads API PHP Client Library

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords and DFP) at Google.

> Welcome to the new ads API PHP client library!
>
> The ads API PHP client library has been rewritten. If you're new to this
> library, read on! If you're already using our library, you may want to take a
> look at our [Upgrading
> guide](https://github.com/googleads/googleads-php-lib/blob/master/UPGRADING.md)
> first.

[![PHP version](https://badge.fury.io/ph/googleads%2Fgoogleads-php-lib.svg)](https://badge.fury.io/ph/googleads%2Fgoogleads-php-lib) [![Build Status](https://travis-ci.org/googleads/googleads-php-lib.svg?branch=master)](https://travis-ci.org/googleads/googleads-php-lib)

### Requirements and Preparation

*   System requirements and dependencies can be found in `composer.json` of this
    library. See [this page](https://getcomposer.org/doc/01-basic-usage.md) for
    more details.
*   This library depends on [Composer](https://getcomposer.org/). If you don't
    have it installed on your computer yet, follow the
    [installation guide for Linux/Unix/OS X](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
    or [installation guide for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows).
    For the rest of this guide, we're assuming that you're using
    Linux/Unix/OS X and have Composer installed [globally](https://getcomposer.org/doc/00-intro.md#globally),
    thus, your installed Composer is available on the command line as `composer`.
*   To use this library to connect to AdWords API, you need an
    [OAuth 2 client ID and secret](https://developers.google.com/adwords/api/docs/guides/first-api-call#oauth2_client_id_and_client_secret),
    as well as a [developer token](https://developers.google.com/adwords/api/docs/guides/first-api-call#developer_token).
    Make sure you've written down these credentials in advance.

### Getting started

Copy the sample `adsapi_php.ini` for your product to your
[home directory](https://en.wikipedia.org/wiki/Home_directory#Default_home_directory_per_operating_system)
and fill out the required properties before downloading the library.
This library determines the home directory of your computer by using
[`EnvironmentalVariables::getHome()`](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/Util/EnvironmentalVariables.php#L34).

*   [AdWords
    adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/adsapi_php.ini)
*   [DFP
    adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/master/examples/Dfp/adsapi_php.ini)

### Downloading this library

There are three ways of downloading this library as described below.

| Method                                                                | Target Users                                                                                                                  |
|-----------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------|
| [Using `composer require`](#using-composer-require)                   | Those who want to **use this library as a third-party library** for their projects and thus example files are not needed.     |
| [Using `git clone`](#using-git-clone)                                 | Those who want to **alter or contribute to this library** (e.g., submitting a pull request) or want to **run example files**. |
| [Downloading a compressed tarball](#downloading-a-compressed-tarball) | Those who only want to **run example files**.                                                                                 |

#### Note

*   If you don't have OAuth2 credentials prior to using
    [installed application flow](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-(installed-application-flow)),
    you'll need [examples/Auth/GetRefreshToken.php](https://github.com/googleads/googleads-php-lib/blob/master/examples/Auth/GetRefreshToken.php).
    In this case, using `composer require` is not an option since there are no
    example files downloaded with the library.
*   **Our examples are meant to be run from the command line and not as a
    webpage.** If you run them as a webpage, results may not be shown
    properly.

### Using composer require

The steps below download this library as a third-party library for your projects.
The library will be downloaded by Composer and stored under the `vendor/` directory.
**Examples are NOT downloaded by this download method.**

1.  Install the latest version using [Composer](https://getcomposer.org/).

    ```
    $ composer require googleads/googleads-php-lib
    ```

1.  Follow [Getting started](#getting-started) if you haven't done so.
1.  Follow [Setting up your OAuth2 credentials](#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
1.  You can now use the library.

### Using git clone

This method is suitable for those who want to alter or contribute to
this library (e.g., submitting pull requests) or wish to try our examples.
**All** files in this repository will be downloaded.

1.  Run `git clone https://github.com/googleads/googleads-php-lib.git` at
    the command prompt.
1.  You'll get a **googleads-php-lib** directory. Navigate to it by running
    `cd googleads-php-lib`.
1.  Run `composer install` at the command prompt. This will install all
    dependencies needed for using the library and running examples.
1.  Follow [Getting started](#getting-started) if you haven't done so.
1.  Follow [Setting up your OAuth2 credentials](#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
1.  You can now use the library and run any examples you want. Try
    [GetCampaigns.php](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201710/BasicOperations/GetCampaigns.php)
    by executing the following command:

    ```
    $ php examples/AdWords/v201710/BasicOperations/GetCampaigns.php
    ```

### Downloading a compressed tarball

This is suitable for those who only want to try out the AdWords API with this
client library. The extracted directory of the tarball will contain only the
`examples/` directory.

1.  On the [releases page](https://github.com/googleads/googleads-php-lib/releases),
    select a version you want to try. Then, under **Download**, select the tarball
    of your choice. The name of the tarball indicates which product it belongs to,
    for example, **adwords-examples-vX.Y.Z.tar.gz**.
1.  Extract your downloaded file to any location on your computer.
1.  Navigate to the extracted directory (for example, **adwords-examples-vX.Y.Z**).
1.  Run `composer install` at the command prompt. This will install all dependencies
    needed for using the library and running examples.
1.  Follow [Getting started](#getting-started) if you haven't done so.
1.  Follow [Setting up your OAuth2 credentials](#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
1.  You can now run any examples you want. Try
    [GetCampaigns.php](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/v201710/BasicOperations/GetCampaigns.php)
    by executing the following command:

    ```
    $ php examples/AdWords/v201710/BasicOperations/GetCampaigns.php
    ```

### Setting up your OAuth2 credentials

The AdWords and DoubleClick for Publishers APIs use
[OAuth2](https://oauth.net/2/) as the authentication mechanism. Follow the
appropriate guide below based on your use case.

**If you're accessing an API using your own credentials...**

*   [Using
    AdWords](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(installed-application-flow\))
*   [Using
    DFP](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(server-to-server-flow\))

**If you're accessing an API on behalf of clients...**

*   [Using AdWords or
    DFP](https://github.com/googleads/googleads-php-lib/wiki/API-access-on-behalf-of-your-clients-\(web-flow\))

### Basic usage

The best way to learn how to use this library is to review the examples for your
product.

*   [AdWords
    examples](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords)
*   [DFP
    examples](https://github.com/googleads/googleads-php-lib/blob/master/examples/Dfp)

> All our examples are meant to be run via the command line and not through a
> webpage.
>
> If you're using 32-bit PHP, you'll need to change all instances of `intval()`
> to `floatval()` before running an example. This is due to some IDs exceeding
> the 32-bit `PHP_INT_MAX` that `intval()` changes your value to. In addition,
> when writing your own code, do _not_ apply `intval()` on any attributes that
> are explicitly an integer.

The following snippet of code from the **BasicOperations/GetCampaigns.php**
example for AdWords gives you an idea of how to use this library. The usage
pattern is similar for DFP.

```php
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\CampaignService;
use Google\AdsApi\AdWords\v201802\cm\OrderBy;
use Google\AdsApi\AdWords\v201802\cm\Paging;
use Google\AdsApi\AdWords\v201802\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

$oAuth2Credential = (new OAuth2TokenBuilder())
    ->fromFile()
    ->build();

$session = (new AdWordsSessionBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

$adWordsServices = new AdWordsServices();

$campaignService = $adWordsServices->get($session, CampaignService::class);

// Create selector.
$selector = new Selector();
$selector->setFields(array('Id', 'Name'));
$selector->setOrdering(array(new OrderBy('Name', 'ASCENDING')));

// Create paging controls.
$selector->setPaging(new Paging(0, 100));

// Make the get request.
$page = $campaignService->get($selector);

// Do something with the $page.
```

The builder's `fromFile()` method looks for an `adsapi_php.ini` file in your
home directory by default. If you want to store this file in another directory,
pass the path of the file as an argument. For example:

```
fromFile('/config/myprops.ini')
```

It is highly recommended that you use an `adsapi_php.ini` file. However, if you
don't want to or can't use one, you can use the OAuth2 token and ads session
builders instead to set the same information. See the builders for details:

*   [OAuth2TokenBuilder](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Common/OAuth2TokenBuilder.php)
*   [AdWordsSessionBuilder](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/AdWords/AdWordsSessionBuilder.php)
*   [DfpSessionBuilder](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/AdsApi/Dfp/DfpSessionBuilder.php)

### WSDL objects with names that are reserved PHP keywords

#### Class names

Note that some WSDL object types have names that are reserved PHP keywords and
need to be augmented when used as PHP class names. The following is a list of
these occurences.

*   [Function](https://developers.google.com/adwords/api/docs/reference/latest/CampaignFeedService.Function)
    => `MatchingFunction`
*   [Parent](https://developers.google.com/adwords/api/docs/reference/latest/AdGroupCriterionService.Parent)
    => `ParentCriterion`

#### Constant names

Some WSDL enum values have names that are reserved PHP keywords and need to be
modified when used as PHP constant names. For example, `AND` and `DEFAULT` are
generated as `AND_VALUE` and `DEFAULT_VALUE`.

### Logging

This library conforms to [PSR-3](http://www.php-fig.org/psr/psr-3) for logging
and provides the following loggers:

AdWords

*   SOAP logger
*   Report downloader logger
*   Batch jobs utility logger

DFP

*   SOAP logger
*   Report downloader logger

In general, each logger logs a summary and debug message for events (e.g., a
SOAP API call). The
[level](http://www.php-fig.org/psr/psr-3/#5-psr-log-loglevel) at which messages
are logged depends on whether the event succeeded.

Log message \ Event status         | Success | Failure
---------------------------------- | ------- | -------
One-line summary                   | INFO    | WARNING
Debug message (e.g., SOAP payload) | DEBUG   | NOTICE

#### Configuring logging

By default, each of the library loggers logs to
[`STDERR`](http://php.net/manual/en/features.commandline.io-streams.php) on a
separate channel using a [Monolog
StreamHandler](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Handler/StreamHandler.php).

You can configure some options for these default loggers in the `adsapi_php.ini`
file:

```ini
[LOGGING]
; Optional logging settings.
soapLogFilePath = "path/to/your/soap.log"
soapLogLevel = "NOTICE"
```

If you need to further customize logging, you can specify your own logger
entirely by providing a logger that implements
[LoggerInterface](https://github.com/php-fig/log/blob/master/Psr/Log/LoggerInterface.php)
in either the AdWords or DFP session builders:

```php
$session = (new AdWordsSessionBuilder())
    ...
    ->withSoapLogger(new MyCustomSoapLogger())
    ->withReportDownloaderLogger(new MyCustomReportDownloaderLogger())
    ->build();
```

### Utilities

We provide some utilities in this client library for helping you use features
in the AdWords and DFP API more conveniently. Check out the following wikis for
details:

*   [BatchJobs for AdWords](//github.com/googleads/googleads-php-lib/wiki/BatchJobs-for-AdWords)
*   [ProductPartitions for AdWords](//github.com/googleads/googleads-php-lib/wiki/ProductPartitions-for-AdWords)
*   [ReportDownloader Utilities](//github.com/googleads/googleads-php-lib/wiki/ReportDownloader-Utilities)

### Reporting

When downloading reports, you can set additional [stream context
options](http://php.net/manual/en/context.php) using the `stream_context` key to
suit your needs (e.g., increasing the timeout as shown below). See also [Guzzle
FAQ](http://docs.guzzlephp.org/en/latest/faq.html#how-can-i-add-custom-stream-context-options)
for details.

```php
$options = [
    'stream_context' => [
        'http' => ['timeout' => 120]
    ]
];
$requestOptionsFactory = new RequestOptionsFactory($session, $options);
$reportDownloader = new ReportDownloader($session, $requestOptionsFactory);
```

### SSL CA files

PHP >= v5.6 automatically sets
[`verify_peer`](http://php.net/manual/en/context.ssl.php) to `true` and will do
its best to find the most appropriate CA bundle on your system by default.
However, not all systems have a known CA bundle on disk (e.g. Windows). This
library tries to locate CA bundles on your system by using Guzzle
[`default_ca_bundle()`](https://github.com/guzzle/guzzle/blob/6.0.2/src/functions.php#L157).

If this library can't find a CA bundle on your system, you'll get an error
message similar to this:

```
cURL error 60: SSL certificate problem: unable to get local issuer certificate.
```

CA file issues can also cause an error like this:

```
Fatal error: Uncaught SoapFault exception: [WSDL] SOAP-ERROR: Parsing WSDL:
Couldn't load from
'https://adwords.google.com/api/adwords/cm/v201710/CampaignService?wsdl' :
failed to load external entity
"https://adwords.google.com/api/adwords/cm/v201710/CampaignService?wsdl
```

To remedy, see [Steps for troubleshooting CA file issues](https://github.com/googleads/googleads-php-lib/wiki/Steps-for-troubleshooting-CA-file-issues).

### Documentation

PHPDoc for this library can be found in the
[gh-pages](https://github.com/googleads/googleads-php-lib/tree/gh-pages) branch
of this repository and can be viewed at:

* [AdWords](http://googleads.github.io/googleads-php-lib/AdWords/)
* [DFP](http://googleads.github.io/googleads-php-lib/Dfp/)

General AdWords and DFP API documentation can be found on our Google Developers
site:

*   [AdWords API documentation](https://developers.google.com/adwords/api)
*   [DFP API
    documentation](https://developers.google.com/doubleclick-publishers)

### Coding Style

We use PSR-2 as a coding style standard. Assuming that you're at the root
directory of your project, to check for coding style violations,
run

```
vendor/bin/phpcs src --standard=phpcs_ruleset.xml -np
```

To automatically fix (fixable) coding style violations, run

```
vendor/bin/phpcbf src --standard=phpcs_ruleset.xml
```

### Getting support

For client library specific bug reports, feature requests, and patches,
create an issue on the [issue
tracker](https://github.com/googleads/googleads-php-lib/issues).

For general AdWords and DFP API questions, bug reports, or feature requests,
post to our forums:

*   [AdWords API Forum](https://groups.google.com/forum/#!forum/adwords-api)
*   [DoubleClick for Publishers API
    Forum](https://groups.google.com/forum/#!forum/google-doubleclick-for-publishers-api)

### Announcements and updates

For general ads API and client library updates and news, follow:

*   [Google Ads Developers blog](http://googleadsdeveloper.blogspot.com)
*   [AdWords API Announcements mailing
    list](https://groups.google.com/forum/#!forum/adwordsapi-announcements)
*   [DFP API Sunset Announcements mailing
    list](https://groups.google.com/forum/#!forum/dfpapi-sunset-announce)

API deprecation schedules can be found at:

*   [AdWords API deprecation
    schedule](https://developers.google.com/adwords/api/docs/sunset-dates)
*   [DFP API deprecation
    schedule](https://developers.google.com/doubleclick-publishers/docs/deprecation)
