## The Google Ads APIs PHP Client Library

This project hosts the PHP client library for the various SOAP-based Ads APIs
(AdWords, AdExchange Buyer, and DFP) at Google.


### Features

* Provides easy SOAP logging of API calls.
* Automatic handling of SOAP headers.
* Easy management of credentials, authentication, and session information.
* Examples to that show how to access API services.
* PHPDoc - [AdWords](http://googleads.github.io/googleads-php-lib/AdWords/),
  [DFP](http://googleads.github.io/googleads-php-lib/Dfp/)


### Requirements

PHP
  - [PHP 5.2.x - 5.4.x](http://php.net)
    - [PHP 5.2 support will be deprecated](http://googleadsdeveloper.blogspot.com/2014/07/deprecating-php-52-support-for-ads-php.html) on January 1st, 2015.
  - Required PHP extensions:
    - [SoapClient](http://us3.php.net/manual/en/book.soap.php) (--enable-soap)
    - [OpenSSL](http://php.net/manual/en/book.openssl.php) (--with-ssl)
    - [cURL](http://php.net/manual/en/book.curl.php) (--with-curl)

Build environment
  - [PHPUnit](http://www.phpunit.de)
  - [Phing](http://phing.info)
  - Modified wsdl2php-interpreter (included in this project)
    - Original: http://code.google.com/p/wsdl2php-interpreter
  - Required PHP extensions:
    - [XSLTProcessor](http://php.net/manual/en/class.xsltprocessor.php)
        (--with-xsl)


### Announcements and updates

For API and client library updates and news, please follow our [Google+ Ads
Developers page](https://plus.google.com/+GoogleAdsDevelopers/posts) and our
[Google Ads Developers blog](http://googleadsdeveloper.blogspot.com).


### Support forum

If you have questions about the client library or the APIs, you can ask them on our forums:
  * [AdWords API Forum](https://groups.google.com/group/adwords-api)
  * [DoubleClick for Publishers API Forum](https://groups.google.com/forum/#!forum/google-doubleclick-for-publishers-api)
  * [DoubleClick Ad Exchange Buyer API Forum](https://groups.google.com/forum/#!forum/google-doubleclick-ad-exchange-buyer-api)

### Getting started

1\. Register an OAuth 2 application.

You will need to register an OAuth2 application to get a valid client ID and
secret. See the [Using OAuth 2 wiki page]
(https://github.com/googleads/googleads-php-lib/wiki/Using-OAuth-2.0) for more information.

2\. Download the client library.

The client library source can be found with the example distributions in the
[releases section](https://github.com/googleads/googleads-php-lib/releases) of
this GitHub project. Download the examples for the product you are working with
and untar it.

3\. Enter your OAuth 2 and account credentials.

In the distribution you will find a lib folder. Under
lib/Google/Api/Ads/[PRODUCT]/ you will find an auth.ini file. Open the auth.ini
file and enter your OAuth 2 client ID and secret that you generated in step 1.
Also enter the required product specific credentials, such as network code for
DFP and developer token for AdWords.

> It is recommended that during development of your library, you use a test
> network/account. For DFP, you can follow instructions for how to obtain a
> test network here:
> https://developers.google.com/doubleclick-publishers/docs/start
> For AdWords, you can follow instructions here:
> https://developers.google.com/adwords/api/docs/test-accounts

Now in your distribution, navigate to examples/[PRODUCT]/Auth and run the
GetRefreshToken.php example. Copy the refresh token the example produces into
the auth.ini file mentioned above.

4\. Run an example.

To ensure you have setup credentials properly, run the GetAllCompanies.php
example located in examples/Dfp/v201311/CompanyService/ if you're using DFP.

If you're using AdWords, run the GetCampaigns.php example located in
examples/AdWords/v201309/BasicOperations/.

5\. Install the client library.

To install the client library, either copy the lib/ folder into where you store
your PHP source files that is on your PHP include path, or add the current
directory path of the lib/ folder to your PHP include path.


### Basic usage

The following example is for AdWords, but the general code applies to all
products.


```php

// Set the include path and the require the folowing PHP file.
//
// You can set the include path to src directory or reference
// AdWordsUser.php directly via require_once.
// $path = '/path/to/pda_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';

// Create an AdWordsUser instance using the default constructor, which will load
// information from the auth.ini file as described above.
$user = new AdWordsUser();

// Optionally, enable logging to capture the content of SOAP requests and
// responses.
$user->LogDefaults();

// Instantiate the desired service class by calling the get***Service method on
// the AdWordsUser instance.
$campaignService = $user->GetService('CampaignService', 'v201309');

// Create data objects and invoke methods on the service class instance. The
// data objects and methods map directly to the data objects and requests for
// the corresponding web service.

// Create new campaign structure.
$campaign = new Campaign();
$campaign->name = 'Campaign #' . time();
$campaign->status = 'ACTIVE';
$campaign->biddingStrategyConfiguration = new BiddingStrategyConfiguration();
$campaign->biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';
$campaign->budget = new Budget('DAILY', new Money(50000000), 'STANDARD');

$operation = new CampaignOperation();
$operation->operand = $campaign;
$operation->operator = 'ADD';
$operations[] = $operation;

// Add campaign.
$campaignReturnValue = $campaignService->mutate($operations);
```


### How do I enable logging?

The client library uses a custom class for all logging purposes and is exposed
through the Logger.php file. There are two loggers within this class described
below.

  - REQUEST_INFO_LOG: Logs all requests from the client library along
    with information such as the timestamp, email, service, method,
    request Id, response time and which server was used. The default
    behavior is to log this information to "logs/request_info.log" relative to
    your project's home directory.

  - SOAP_XML_LOG: Logs all incoming and outgoing SOAP requests/responses. The
    default behavior is to log this information to "logs/soap_xml.log" relative
    to your project's home directory. Sensitive information, such as
    authentication tokens, will be stripped.

Logging can be enabled using the following methods.

  - $user->LogDefaults(): Logs request information for all requests, but only
    logs SOAP XML for requests that resulted in an error.

  - $user->LogErrors(): Only logs request information and SOAP XML for requests
    that resulted in an error.

  - $user->LogAll(): Logs request information and SOAP XML for all requests.

You can use the methods of the Logger class directly for even more control over
how requests are logged.


### Where do I submit client library bug reports, feature requests, and patches?

All of these can be submitted through the
[issue tracker](https://github.com/googleads/googleads-php-lib/issues) in this
GitHub project.

