### 1.3.1-beta

DFP:
 - Added v201602 retrieval examples.

Common:
 - Fixed [issue #143](https://github.com/googleads/googleads-php-lib/issues/143)
   and [issue #144](https://github.com/googleads/googleads-php-lib/issues/144).

### 1.3.0-beta

AdWords:
 - Added report downloader utility.
 - Added support and examples for v201605.
 - Removed support and examples for v201603.
 - Added support for reporting request header [`useRawEnumValues`]
   (https://developers.google.com/adwords/api/docs/guides/reporting#request-headers).

### 1.2.0-beta

Common:
 - Added a GetRefreshToken.php example that helps you generate an OAuth2 offline
   refresh token for installed application flows.

### 1.1.0-beta

AdWords:
 - Added support for v201603.
 - Removed support for v201601.

DFP:
 - Added support for v201602.
 - Removed support for v201511.
 - The report downloader utility now uses Guzzle, instead of Curl, to make HTTP
   requests.

Common:
 - OAuth2 is now handled by the [Google PHP Auth Library]
   (https://github.com/google/google-auth-library-php).
 - [OAuth2 service accounts]
   (https://developers.google.com/identity/protocols/OAuth2ServiceAccount)
   are now supported and JSON key credentials can be loaded from the
   adsapi_php.ini file.
 - SSL peer verification is now enabled by default for SOAP requests.
 - Instances of ApiException are now thrown from services if there was a SOAP
   fault, instead of PHP's generic SoapFault.

### 1.0.0-beta

Common:
 - Initial release.
