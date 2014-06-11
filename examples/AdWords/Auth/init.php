<?php
/**
 * Common init file for examples.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Auth
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

$depth = '/../../../';
define('SRC_PATH', dirname(__FILE__) . $depth . 'src/');
define('LIB_PATH', 'Google/Api/Ads/AdWords/Lib');

// Configure include path.
ini_set('include_path', implode(array(
    ini_get('include_path'), PATH_SEPARATOR, SRC_PATH
)));

// Include the AdWordsUser.
require_once LIB_PATH . '/AdWordsUser.php';
require_once dirname(__FILE__) . '/../../Common/ExampleUtils.php';

