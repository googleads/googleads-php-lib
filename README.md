## Google Ads API PHP Client Library (BETA)

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords and DFP) at Google.

> **Here be dragons**

> This branch of the ads PHP client library is in BETA and rapidly changing.
> This means that we may make backwards-incompatible changes. Feedback from the
> community is welcome while we are actively developing this branch.

### Getting started

1. Install the latest BETA version using [Composer](https://getcomposer.org/).

  ```
  $ php composer.phar require googleads/googleads-php-lib:dev-experimental
  ```

1. Copy the sample **adsapi_php.ini** for your product to your home directory
and fill out the required properties.

  * [AdWords adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/AdWords/adsapi_php.ini)
  * [DFP adsapi_php.ini](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/Dfp/adsapi_php.ini)

1. Setup your OAuth2 credentials.

  The AdWords and DoubleClick for Publishers APIs use
[OAuth2](http://oauth.net/2/) as the authentication mechanism. Follow the
appropriate guide below based on your use case.

  **If you're accessing an API using your own credentials...**

  * [Using AdWords](https://github.com/googleads/googleads-php-lib/wiki/%5BEXPERIMENTAL-BRANCH%5D-API-access-using-own-credentials-(installed-application-flow))
  * [Using DFP](https://github.com/googleads/googleads-php-lib/wiki/%5BEXPERIMENTAL-BRANCH%5D-API-access-using-own-credentials-(server-to-server-flow))

  **If you're accessing an API on behalf of clients...**

  * [Using AdWords or DFP](https://github.com/googleads/googleads-php-lib/wiki/%5BEXPERIMENTAL-BRANCH%5D-API-access-on-behalf-of-your-clients-(web-flow))

### Basic usage

The best way to learn how to use this library is to review the examples for your
product.

* [AdWords examples](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/AdWords)
* [DFP examples](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/Dfp)

> All our examples are meant to be run via the command line and not as a
> webpage.

The following snippet of code from the
**BasicOperations/GetCampaigns.php** example for AdWords gives you an idea of
how to use this library. The usage pattern is similar for DFP.

```php
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201605\cm\OrderBy;
use Google\AdsApi\AdWords\v201605\cm\Paging;
use Google\AdsApi\AdWords\v201605\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

$oAuth2Credential = (new OAuth2TokenBuilder())
    ->fromFile()
    ->build();

$session = (new AdWordsSessionBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

$adWordsServices = new AdWordsServices();

$campaignService =
    $adWordsServices->get($session, 'CampaignService', 'v201605', 'cm');

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

The builder's `fromFile()` method looks for an **adsapi_php.ini** file in your
home directory by default. If you want to store this file in another directory,
pass the path of the file as an argument. For example:

```
fromFile('/config/myprops.ini')
```

It is highly recommended that you use an **adsapi_php.ini** file. However, if
you don't want to or can't use it, you can also use the OAuth2 token and ads
session builders to set the same information. See the builders for details:

  * [OAuth2TokenBuilder](https://github.com/googleads/googleads-php-lib/blob/experimental/src/Google/AdsApi/Common/OAuth2TokenBuilder.php)
  * [AdWordsSessionBuilder](https://github.com/googleads/googleads-php-lib/blob/experimental/src/Google/AdsApi/AdWords/AdWordsSessionBuilder.php)
  * [DfpSessionBuilder](https://github.com/googleads/googleads-php-lib/blob/experimental/src/Google/AdsApi/Dfp/DfpSessionBuilder.php)

### WSDL objects with names that are reserved PHP keywords

Note that some WSDL object types have names that are reserved PHP keywords and
need to be augmented when used as PHP class names. The following is a list of
these occurences.

 * [Function](https://developers.google.com/adwords/api/docs/reference/latest/CampaignFeedService.Function)
=> `MatchingFunction`
 * [Parent](https://developers.google.com/adwords/api/docs/reference/latest/AdGroupCriterionService.Parent)
=> `ParentCriterion`

### Configuring logging

This library conforms to [PSR-3](http://www.php-fig.org/psr/psr-3) for logging.

By default this library:

* Logs to
[STDERR](http://php.net/manual/en/features.commandline.io-streams.php).
* Logs a summary for every API call at
[INFO](http://www.php-fig.org/psr/psr-3/#5-psr-log-loglevel) level.
* Logs the raw SOAP request and response XML if an error occurs during an API
call.
* Uses [Monolog](https://github.com/Seldaek/monolog/)
[StreamHandler](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Handler/StreamHandler.php)
to handle logging.

This can be customized by building an ads session with a different
[LoggerInterface](https://github.com/php-fig/log/blob/master/Psr/Log/LoggerInterface.php).
For example:

```php
$session = (new AdWordsSessionBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->withLogger(new MyCustomLogger())
    ->build();
```

### Documentation

PHPDoc for this library can be found in the
[gh-pages](https://github.com/googleads/googleads-php-lib/tree/gh-pages) branch
of this repository and can be viewed at:

* [AdWords](http://googleads.github.io/googleads-php-lib/AdWords-beta)
* [DFP](http://googleads.github.io/googleads-php-lib/Dfp-beta)

General AdWords and DFP API documentation can be found on our Google Developers
site.

* [AdWords API documentation](https://developers.google.com/adwords/api)
* [DFP API documentation](https://developers.google.com/doubleclick-publishers)

### Getting support

For client library specific bug reports, feature requests, and patches, please
create an issue on the
[issue tracker](https://github.com/googleads/googleads-php-lib/issues) and label
it with the [beta](https://github.com/googleads/googleads-php-lib/labels/beta)
tag.

For general AdWords and DFP API questions, bug reports, or feature requests,
please post to our API forums:

* [AdWords API Forum](https://groups.google.com/group/adwords-api)
* [DoubleClick for Publishers API Forum](https://groups.google.com/forum/#!forum/google-doubleclick-for-publishers-api)

### Announcements and updates

For general ads API and client library updates and news, please follow or join
our:

* [Google+ Ads Developers page](https://plus.google.com/+GoogleAdsDevelopers/posts)
* [Google Ads Developers blog](http://googleadsdeveloper.blogspot.com)
* [AdWords API Announcements mailing list](https://groups.google.com/forum/#!forum/adwordsapi-announcements)
* [DFP API Sunset Announcements mailing list](https://groups.google.com/forum/#!forum/dfpapi-sunset-announce)

API deprecation schedules can be found at:

* [AdWords API deprecation schedule](https://developers.google.com/adwords/api/docs/sunset-dates)
* [DFP API deprecation schedule](https://developers.google.com/doubleclick-publishers/docs/deprecation)

