## The Google Ads APIs PHP Client Library (BETA)

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords and DFP) at Google.

> **Here be dragons**

> This branch of the ads PHP client library is in BETA and rapidly changing.
> This means that we may make backwards-incompatible changes. Feedback from the
> community is welcome while we are actively developing this branch.

### Getting started

1. Download the beta source from the
[experimental branch](https://github.com/googleads/googleads-php-lib/archive/experimental).

1. Install dependencies using [Composer](https://getcomposer.org/).

  ```
  $ php composer.phar install
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
  * [Using DFP](https://github.com/googleads/googleads-php-lib/wiki/%5BEXPERIMENTAL-BRANCH%5D-API-access-using-own-credentials-(installed-application-flow))

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
$oAuth2Credential = new SimpleGoogleCredential();
$oAuth2Credential->fromFile();

$builder = new AdWordsSessionBuilder();
$session = $builder->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

$adWordsServices = new AdWordsServices();

$campaignService =
    $adWordsServices->get($session, 'CampaignService', 'v201509', 'cm');

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
you don't want to or can't use it, you can also use the ads session builders
to set the same information. See the **CreateAdsSessionWithoutIniFile.php**
example for your product for details.

  * [AdWords CreateAdsSessionWithoutIniFile.php](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/AdWords/Auth/CreateAdsSessionWithoutIniFile.php)
  * [DFP CreateAdsSessionWithoutIniFile.php](https://github.com/googleads/googleads-php-lib/blob/experimental/examples/Dfp/Auth/CreateAdsSessionWithoutIniFile.php)

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
$builder = new AdWordsSessionBuilder();
$session = $builder->fromFile()
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

General AdWords and DFP API documentation can be found on our Developers site.

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
* [DFP API Deprecation Announcements mailing list](https://groups.google.com/forum/#!forum/dfpapi-deprecation-announce)

API deprecation schedules can be found at:

* [AdWords API deprecation schedule](https://developers.google.com/adwords/api/docs/sunset-dates)
* [DFP API deprecation schedule](https://developers.google.com/doubleclick-publishers/docs/deprecation)