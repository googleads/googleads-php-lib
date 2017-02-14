<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\Examples\Dfp\v201702\NativeStyleService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201702\NativeStyle;
use Google\AdsApi\Dfp\v201702\NativeStyleService;
use Google\AdsApi\Dfp\v201702\Size;

/**
 * Creates a native app install ad.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateNativeStyles {

  private static $HTML_SNIPPET = <<<HTML
<div id="adunit" style="overflow: hidden;">
  <img src="[%Thirdpartyimpressiontracker%]" style="display:none">
  <div class="attribution">Ad</div>
  <div class="image">
    <a class="image-link"
        href="%%CLICK_URL_UNESC%%[%Thirdpartyclicktracker%]%%DEST_URL%%"
        target="_top">
      <img src="[%Image%]">
    </a>
  </div>
  <div class="app-icon"><img src="[%Appicon%]"/></div>
  <div class="title">
    <a class="title-link"
        href="%%CLICK_URL_UNESC%%[%Thirdpartyclicktracker%]%%DEST_URL%%"
        target="_top">[%Headline%]</a>
  </div>
  <div class="reviews"></div>
  <div class="body">
    <a class="body-link"
        href="%%CLICK_URL_UNESC%%[%Thirdpartyclicktracker%]%%DEST_URL%%"
        target="_top">[%Body%]</a>
  </div>
  <div class="price">[%Price%]</div>
  <div class="button">
    <a class="button-link"
        href="%%CLICK_URL_UNESC%%[%Thirdpartyclicktracker%]%%DEST_URL%%"
        target="_top">[%Calltoaction%]</a>
  </div>
</div>
HTML;

  private static $CSS_SNIPPET = <<<CSS
body {
    background-color: rgba(255, 255, 255, 1);
    font-family: "Roboto-Regular", sans-serif;
    font-weight: normal;
    font-size: 12px;
    line-height: 14px;
}
.attribution {
    background-color: rgba(236, 182, 0, 1);
    color: rgba(255, 255, 255, 1);
    font-size: 13px;
    display: table;
    margin: 4px 8px;
    padding: 0 3px;
    border-radius: 2px;
}
.image {
    text-align: center;
    margin: 8px;
}
.image img,
.image-link {
    width: 100%;
}
.app-icon {
    float: left;
    margin: 0 8px 4px 8px;
    height: 40px;
    width: 40px;
    background-color: transparent;
}
.app-icon img {
    height: 100%;
    width: 100%;
    border-radius: 20%;
}
.title,
.promo-headline {
    font-weight: bold;
    font-size: 14px;
    line-height: 20px;
    margin: 8px 8px 4px 8px;
}
.title a,
.promo-headline {
    color: rgba(112, 112, 112, 1);
    text-decoration: none;
}
.reviews {
    float: left;
}
.reviews svg {
    fill: rgba(0, 0, 0, 0.7);
}
.body {
    clear: left;
    margin: 8px;
}
.body a {
    color: rgba(110, 110, 110, 1);
    text-decoration: none;
}
.price {
    display: none;
}
.button {
    font-size: 14px;
    font-weight: bold;
    float: right;
    margin: 0px 16px 16px 0px;
    white-space: nowrap;
}
.button a {
    color: #2196F3;
    text-decoration: none;
}
.button svg {
    display: none;
}
CSS;

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $nativeStyleService =
        $dfpServices->get($session, NativeStyleService::class);

    $nativeStyle = new NativeStyle();
    $nativeStyle->setName('Native style #'. uniqid());
    $nativeStyle->setHtmlSnippet(self::$HTML_SNIPPET);
    $nativeStyle->setCssSnippet(self::$CSS_SNIPPET);

    // This is the creative template ID for the system-defined native app
    // install ad format, which we will create the native style from. Use
    // CreativeTemplateService.getCreativeTemplatesByStatement() and
    // CreativeTemplate.isNativeEligible to get other native ad formats
    // availablein your network.
    $nativeStyle->setCreativeTemplateId(10004400);

    // Set the size of the native style.
    $size = new Size();
    $size->setWidth(300);
    $size->setHeight(345);
    $size->setIsAspectRatio(false);
    $nativeStyle->setSize($size);

    // Create the native styles on the server.
    $results = $nativeStyleService->createNativeStyles([$nativeStyle]);

    // Print out some information for each created native style.
    foreach ($results as $i => $nativeStyle) {
      printf(
          "%d) Native style with ID %d, " .
              "name '%s', " .
              "and creative template ID %d was created.\n",
          $i,
          $nativeStyle->getId(),
          $nativeStyle->getName(),
          $nativeStyle->getCreativeTemplateId()
      );
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session);
  }
}

CreateNativeStyles::main();
