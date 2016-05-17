## Google Ads API PHP Client Library

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords and DFP) at Google.

### Requirements

PHP

* [PHP 5.3 and higher](http://php.net/supported-versions.php)
* Required PHP extensions:
 * [SoapClient](http://us3.php.net/manual/en/book.soap.php) (`--enable-soap`)
 * [OpenSSL](http://php.net/manual/en/book.openssl.php) (`--with-ssl`)
 * [cURL](http://php.net/manual/en/book.curl.php) (`--with-curl`)

Testing

* [PHPUnit](http://www.phpunit.de)

### Getting started

1. Download and install the client library.

  Download the latest examples and lib tarball distribution from the
[releases section](https://github.com/googleads/googleads-php-lib/releases). To
install the client library, either copy the contents of the `lib/` folder into a
location on your PHP include path, or add the current directory path of the
`lib/` folder to your PHP include path.

1. **[Alternative]** install via Composer.

  You may also install this library via [Composer](https://getcomposer.org).

  ```
  $ php composer.phar require googleads/googleads-php-lib
  ```

 > **Caveats with using Composer**

 > Because this library isn't namespaced (see
 > [issue #4](https://github.com/googleads/googleads-php-lib/issues/4)), there
 > are some class naming conflicts with versioned utilities. E.g.,
 > [src/Google/Api/Ads/AdWords/Util]
 > (https://github.com/googleads/googleads-php-lib/tree/master/src/Google/Api/Ads/AdWords/Util).
 > Thus, these versioned utility src paths aren't included in the `classmap` of
 > [composer.json](https://github.com/googleads/googleads-php-lib/blob/master/composer.json).
 > So if you use composer, you will need to manually specify the version of the
 > utility files you're using. E.g., if you're using AdWords v201603, then in
 > your project's `composer.json` file, you can add those utility files to your
 > `classmap`:

 > ```json
 > "classmap": [
 >   "vendor/googleads/googleads-php-lib/src/Google/Api/Ads/AdWords/Util/v201603"
 > ]
 > ```

1. Copy the sample **auth.ini** and **settings.ini** for your product to your
home directory and fill out the required properties.

  * AdWords - [auth.ini](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/Api/Ads/AdWords/auth.ini),
[settings.ini](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/Api/Ads/AdWords/settings.ini)
  * DFP - [auth.ini](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/Api/Ads/Dfp/auth.ini),
[settings.ini](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/Api/Ads/Dfp/settings.ini)

1. Setup your OAuth2 credentials.

  The AdWords and DoubleClick for Publishers APIs use
[OAuth2](http://oauth.net/2/) as the authentication mechanism. Follow the
appropriate guide below based on your use case.

  **If you're accessing an API using your own credentials...**

  * [Using AdWords](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-(installed-application-flow))
  * [Using DFP](https://github.com/googleads/googleads-php-lib/wiki/API-access-using-own-credentials-(installed-application-flow))

### Basic usage

The best way to learn how to use this library is to review the examples for your
product.

* [AdWords examples](https://github.com/googleads/googleads-php-lib/tree/master/examples/AdWords)
* [DFP examples](https://github.com/googleads/googleads-php-lib/tree/master/examples/Dfp)

> All our examples are meant to be run via the command line and not as a
> webpage.

The following snippet of code from the **BasicOperations/GetCampaigns.php**
example for AdWords gives you an idea of how to use this library. The usage
pattern is similar for DFP.

```php
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';

$user = new AdWordsUser();

$campaignService = $user->GetService('CampaignService', 'v201603');

// Create selector.
$selector = new Selector();
$selector->fields = array('Id', 'Name');
$selector->ordering[] = new OrderBy('Name', 'ASCENDING');

// Create paging controls.
$selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

// Make the get request.
$page = $campaignService->get($selector);

// Do something with the $page.
```

The `AdWordsUser` constructor method looks for an **auth.ini** file in your home
directory by default. If you want to store this file in another directory, pass
the path of the file as an argument. For example:

```
$user = new AdWordsUser('/config/myprops.ini');
```

It is highly recommended that you use an **auth.ini** file. However, if you
don't want to or can't use it, you can also set the same information using the
`AdWordsUser` or `DfpUser` constructor. See the example for your product for
details.

  * AdWords - [CreateAdWordsUserWithoutIniFile.php](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/Auth/CreateAdWordsUserWithoutIniFile.php)
  * DFP - [CreateDfpUserWithoutIniFile.php](https://github.com/googleads/googleads-php-lib/blob/master/examples/Dfp/Auth/CreateDfpUserWithoutIniFile.php)


### How do I set different client customer IDs than specified in auth.ini?

You can do this by calling `SetClientCustomerId()` on an `AdWordsUser`:

```php
// Create an AdWordsUser instance using the default constructor, which will load
// information from the auth.ini file as described above.
$user = new AdWordsUser();
$user->SetClientCustomerId('INSERT_CLIENT_CUSTOMER_ID_HERE');
```

### Configuring logging

The client library uses a custom class for all logging purposes that is exposed
through the [Logger.php](https://github.com/googleads/googleads-php-lib/blob/master/src/Google/Api/Ads/Common/Util/Logger.php)
file. There are two loggers within this class described
below.

  - REQUEST_INFO_LOG: Logs all requests from the client library along with
    information such as the timestamp, email, service, method, request ID,
    response time and which server was used. The default behavior is to log this
    information to "request_info.log" relative to your project's home directory.

  - SOAP_XML_LOG: Logs all incoming and outgoing SOAP requests/responses. The
    default behavior is to log this information to "soap_xml.log" relative to
    your project's home directory. Sensitive information, such as authentication
    tokens, will be stripped.

Logging can be enabled using the following methods.

  - $user->LogDefaults(): Logs request information for all requests, but only
    logs SOAP XML for requests that resulted in an error.

  - $user->LogErrors(): Only logs request information and SOAP XML for requests
    that resulted in an error.

  - $user->LogAll(): Logs request information and SOAP XML for all requests.

You can use the methods of the Logger class directly for even more control over
how requests are logged.

### Documentation

PHPDoc for this library can be found in the
[gh-pages](https://github.com/googleads/googleads-php-lib/tree/gh-pages) branch
of this repository and can be viewed at:

* [AdWords](http://googleads.github.io/googleads-php-lib/AdWords)
* [DFP](http://googleads.github.io/googleads-php-lib/Dfp)

General AdWords and DFP API documentation can be found on our Developers site.

* [AdWords API documentation](https://developers.google.com/adwords/api)
* [DFP API documentation](https://developers.google.com/doubleclick-publishers)

### Getting support

For client library specific bug reports, feature requests, and patches, please
create an issue on the
[issue tracker](https://github.com/googleads/googleads-php-lib/issues).

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

