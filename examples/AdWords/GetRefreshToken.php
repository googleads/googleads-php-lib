<?php

use Google\AdsApi\Common\Util\SimpleGoogleCredential;

require_once __DIR__.'/../../src/Google/AdsApi/Common/Util/CurlUtils.php';
require_once __DIR__.'/../../src/Google/AdsApi/Common/Util/GoogleCredential.php';
require_once __DIR__.'/../../src/Google/AdsApi/Common/Util/SimpleGoogleCredential.php';

$config = parse_ini_file(__DIR__.'/adsapi_php.ini');

$credential = new SimpleGoogleCredential();
$credential->setCredentials([
    'client_id' => $config['client_id'],
    'client_secret' => $config['client_secret'],
]);
$credential->setScope('https://www.googleapis.com/auth/adwords');

printf("Visit %s\n", $credential->getAuthorizationUrl(null, true));

print "After approving the token enter the authorization code here: ";
$stdin = fopen('php://stdin', 'r');
$code = trim(fgets($stdin));
fclose($stdin);
print "\n";

$token = $credential->getAccessToken($code);
printf("Your refresh token is: %s\n", $token['refresh_token']);
