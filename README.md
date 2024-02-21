## Google Ad Manager SOAP API Client Library for PHP

This repository hosts the PHP client library for the Google Ad Manager SOAP API.

> **The AdWords API is [sunset](https://ads-developers.googleblog.com/2022/04/reminder-requests-to-adwords-api-will.html).
> You can use the new client library [google-ads-php](https://github.com/googleads/google-ads-php) to access the new [Google Ads API](https://developers.google.com/google-ads/api/docs/start) instead.**

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%208.0-8892BF.svg)](https://www.php.net/supported-versions.php)
[![Latest Stable
Version](https://img.shields.io/packagist/v/googleads/googleads-php-lib.svg)](https://packagist.org/packages/googleads/googleads-php-lib)
[![Total Downloads](https://poser.pugx.org/googleads/googleads-php-lib/downloads.svg)](https://packagist.org/packages/googleads/googleads-php-lib)
[![License](https://poser.pugx.org/googleads/googleads-php-lib/license.svg)](https://packagist.org/packages/googleads/googleads-php-lib)

**IMPORTANT** This client library has been updated to require PHP version 8.0 as the minimum version, as announced in [#777](https://github.com/googleads/googleads-php-lib/issues/777).
This means that the final version of the library that supports PHP 7 is [v61.0.0](https://github.com/googleads/googleads-php-lib/releases/tag/v61.0.0), which supports Google Ad Manager API v202208, v202211, v202302, and v202305.

Google Ad Manager API v202305 is [scheduled to be sunset in May 2024](https://developers.google.com/ad-manager/api/deprecation). Therefore, PHP 7 users have about a year to migrate to the version 8.0 or higher of PHP to avoid disruption.

### Requirements and Preparation

*   System requirements and dependencies can be found in `composer.json` of this
    library. See [this page](https://getcomposer.org/doc/01-basic-usage.md) for
    more details.
*   From version 62.0.0, this library requires the minimum PHP version to be
    8.0. If you have an older version of PHP, `composer` command will
    download an older version of the `googleads/googleads-php-lib` library.
*   This library depends on [Composer](https://getcomposer.org/). If you don't
    have it installed on your computer yet, follow the
    [installation guide for Linux/Unix/OS X](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
    or [installation guide for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows).
    For the rest of this guide, we're assuming that you're using
    Linux/Unix/OS X and have Composer installed [globally](https://getcomposer.org/doc/00-intro.md#globally),
    thus, your installed Composer is available on the command line as `composer`.

### Getting started

Copy the sample [Ad Manager
adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/HEAD/examples/AdManager/adsapi_php.ini)
to your
[home directory](https://en.wikipedia.org/wiki/Home_directory#Default_home_directory_per_operating_system)
and fill out the required properties before downloading the library.
This library determines the home directory of your computer by using
[`EnvironmentalVariables::getHome()`](https://github.com/googleads/googleads-php-lib/blob/HEAD/src/Google/AdsApi/Common/Util/EnvironmentalVariables.php#L34).

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
    you'll need [examples/Auth/GetRefreshToken.php](https://github.com/googleads/googleads-php-lib/blob/HEAD/examples/Auth/GetRefreshToken.php).
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

2.  Follow [Getting started](#getting-started) if you haven't done so.
3.  Follow [Setting up your OAuth2 credentials](#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
4.  You can now use the library.

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
    [GetAllNetworks.php](https://github.com/googleads/googleads-php-lib/blob/HEAD/examples/AdManager/v202211/NetworkService/GetAllNetworks.php)
    by executing the following command:

    ```
    $ php examples/AdManager/v202211/NetworkService/GetAllNetworks.php
    ```

### Downloading a compressed tarball

This is suitable for those who only want to try out the Ad Manager API with this
client library. The extracted directory of the tarball will contain only the
`examples/` directory.

1.  On the [releases page](https://github.com/googleads/googleads-php-lib/releases),
    select a version you want to try. Then, under **Download**, select the tarball
    of your choice. The name of the tarball indicates which product it belongs to,
    for example, **admanager-examples-vX.Y.Z.tar.gz**.
1.  Extract your downloaded file to any location on your computer.
1.  Navigate to the extracted directory (for example, **admanager-examples-vX.Y.Z**).
1.  Run `composer install` at the command prompt. This will install all dependencies
    needed for using the library and running examples.
1.  Follow [Getting started](#getting-started) if you haven't done so.
1.  Follow [Setting up your OAuth2 credentials](#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
1.  You can now run any examples you want. Try
    [GetAllNetworks.php](https://github.com/googleads/googleads-php-lib/blob/HEAD/examples/AdManager/v202211/NetworkService/GetAllNetworks.php)
    by executing the following command:

    ```
    $ php examples/AdManager/v202211/NetworkService/GetAllNetworks.php
    ```

### Setting up your OAuth2 credentials

The Ad Manager API uses [OAuth2](https://oauth.net/2/) as the authentication
mechanism. Follow the appropriate guide below based on your use case:

*   [Using your own
    credentials](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-\(server-to-server-flow\))
*   [Acting on behalf of
    clients](https://github.com/googleads/googleads-php-lib/wiki/API-access-on-behalf-of-your-clients-\(web-flow\))

### Basic usage

The best way to learn how to use this library is to review the
[examples](https://github.com/googleads/googleads-php-lib/blob/HEAD/examples/AdManager).

> All our examples are meant to be run via the command line and not through a
> webpage.
>
> If you're using 32-bit PHP, you'll need to change all instances of `intval()`
> to `floatval()` before running an example. This is due to some IDs exceeding
> the 32-bit `PHP_INT_MAX` that `intval()` changes your value to. In addition,
> when writing your own code, do _not_ apply `intval()` on any attributes that
> are explicitly an integer.

The following snippet of code from the **GetAllNetworks.php** example gives you
an idea of how to use this library.

```php
$oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
    ->build();

$session = (new AdManagerSessionBuilder())->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

$adManagerServices = new ServiceFactory();

$networkService = $adManagerServices->createNetworkService($session);

$networks = $networkService->getAllNetworks();

// Do something with the $networks.
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

*   [OAuth2TokenBuilder](https://github.com/googleads/googleads-php-lib/blob/HEAD/src/Google/AdsApi/Common/OAuth2TokenBuilder.php)
*   [AdManagerSessionBuilder](https://github.com/googleads/googleads-php-lib/blob/HEAD/src/Google/AdsApi/AdManager/AdManagerSessionBuilder.php)

### WSDL objects with names that are reserved PHP keywords

Some WSDL enum values have names that are reserved PHP keywords and need to be
modified when used as PHP constant names. For example, `AND` and `DEFAULT` are
generated as `AND_VALUE` and `DEFAULT_VALUE`.

### Logging

This library conforms to [PSR-3](http://www.php-fig.org/psr/psr-3) for logging
and provides the following loggers for Ad Manager:

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
in the Ad Manager session builder:

```php
$session = (new AdManagerSessionBuilder())
    ...
    ->withSoapLogger(new MyCustomSoapLogger())
    ->withReportDownloaderLogger(new MyCustomReportDownloaderLogger())
    ->build();
```

### Utilities

We provide some
[utilities](//github.com/googleads/googleads-php-lib/wiki/ReportDownloader-Utilities)
in this client library for helping you use features in the Ad Manager API more
conveniently.

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

PHP automatically sets
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
'https://ads.google.com/apis/ads/publisher/v202211/ActivityService?wsdl' :
failed to load external entity
"https://ads.google.com/apis/ads/publisher/v202211/ActivityService?wsdl
```

To remedy, see [Steps for troubleshooting CA file issues](https://github.com/googleads/googleads-php-lib/wiki/Steps-for-troubleshooting-CA-file-issues).

### Documentation

PHPDoc for this library can be found in the
[gh-pages](https://github.com/googleads/googleads-php-lib/tree/gh-pages) branch
of this repository. You can view the Ad Manager API site
[here](http://googleads.github.io/googleads-php-lib/AdManager/).

General Ad Manager API documentation can be found on our [Google Developers
site](https://developers.google.com/ad-manager).

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

For general Ad Manager API questions, bug reports, or feature requests, post to
the [Ad Manager API
Forum](https://groups.google.com/forum/#!forum/google-doubleclick-for-publishers-api).

### Announcements and updates

For general Ad Manager API and client library updates and news, you can follow
the [Sunset Announcements mailing
list](https://groups.google.com/forum/#!forum/dfpapi-sunset-announce)
and rely on the [deprecation
schedule](https://developers.google.com/ad-manager/docs/deprecation).
