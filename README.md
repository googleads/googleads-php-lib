## Google Ads API PHP Client Library

go/ads-client-lib-php

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords and DFP) at Google.

> Welcome to the new ads API PHP client library!
>
> The ads API PHP client library has been rewritten. If you're new to this
> library, read on! If you're already using our library, you may want to take a
> look at our [Upgrading
> guide](https://github.com/googleads/googleads-php-lib/blob/master/UPGRADING.md)
> first.

### Getting started

1.  Install the latest version using [Composer](https://getcomposer.org/).

    ```
    $ php composer.phar require googleads/googleads-php-lib
    ```

1.  Copy the sample `adsapi_php.ini` for your product to your home directory and
    fill out the required properties.

    *   [AdWords
        adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/adsapi_php.ini)
    *   [DFP
        adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/master/examples/Dfp/adsapi_php.ini)

1.  Setup your OAuth2 credentials.

    The AdWords and DoubleClick for Publishers APIs use
    [OAuth2](http://oauth.net/2/) as the authentication mechanism. Follow the
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

> All our examples are meant to be run via the command line and not as a
> webpage.

> If you're using 32-bit PHP, you may need to change `intval()` of any examples
> to `floatval()` when running them. This is because some IDs would be larger
> than 32-bit `PHP_INT_MAX`. In that case, `intval()` would return incorrect
> values.

The following snippet of code from the **BasicOperations/GetCampaigns.php**
example for AdWords gives you an idea of how to use this library. The usage
pattern is similar for DFP.

```php
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;
use Google\AdsApi\AdWords\v201609\cm\OrderBy;
use Google\AdsApi\AdWords\v201609\cm\Paging;
use Google\AdsApi\AdWords\v201609\cm\Selector;
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
don't want to or can't use it, you can also use the OAuth2 token and ads session
builders to set the same information. See the builders for details:

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
modified when used as PHP constant names. For examples, `AND` and `DEFAULT` are
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
separate channel using a [Monolog](https://github.com/Seldaek/monolog/)
[StreamHandler](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Handler/StreamHandler.php).

You may configure some options for these default loggers in the `adsapi_php.ini`
file. E.g.,

```ini
[LOGGING]
; Optional logging settings.
soapLogFilePath = "path/to/your/soap.log"
soapLogLevel = "NOTICE"
```

If you need to further customize logging, you may specify your own logger
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

### Reporting
When downloading reports, you can set additional
[stream context options](http://php.net/manual/en/context.php) using the
`stream_context` key to suit your needs, e.g., increasing the timeout, as shown
below. See also
[Guzzle FAQ](http://docs.guzzlephp.org/en/latest/faq.html#how-can-i-add-custom-stream-context-options)
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

### Documentation

> PHPDoc is not yet available for the new ads API PHP library. Please follow the
> [PHPDoc issue](https://github.com/googleads/googleads-php-lib/issues/194) for
> updates.

General AdWords and DFP API documentation can be found on our Google Developers
site.

*   [AdWords API documentation](https://developers.google.com/adwords/api)
*   [DFP API
    documentation](https://developers.google.com/doubleclick-publishers)

### Getting support

For client library specific bug reports, feature requests, and patches, please
create an issue on the [issue
tracker](https://github.com/googleads/googleads-php-lib/issues).

For general AdWords and DFP API questions, bug reports, or feature requests,
please post to our API forums:

*   [AdWords API Forum](https://groups.google.com/group/adwords-api)
*   [DoubleClick for Publishers API
    Forum](https://groups.google.com/forum/#!forum/google-doubleclick-for-publishers-api)

### Announcements and updates

For general ads API and client library updates and news, please follow or join
our:

*   [Google+ Ads Developers
    page](https://plus.google.com/+GoogleAdsDevelopers/posts)
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
