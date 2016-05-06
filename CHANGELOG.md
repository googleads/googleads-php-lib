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

