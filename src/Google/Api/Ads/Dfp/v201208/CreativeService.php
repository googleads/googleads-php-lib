<?php
/**
 * Contains all client objects for the CreativeService service.
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201208
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */

/** Required classes. **/
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("BaseCreativeTemplateVariableValue", FALSE)) {
/**
 * A base class for storing values of the {@link CreativeTemplateVariable}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseCreativeTemplateVariableValue {
  /**
   * @access public
   * @var string
   */
  public $uniqueName;

  /**
   * @access public
   * @var string
   */
  public $BaseCreativeTemplateVariableValueType;

  private $_parameterMap = array (
    "BaseCreativeTemplateVariableValue.Type" => "BaseCreativeTemplateVariableValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseCreativeTemplateVariableValue";
  }

  public function __construct($uniqueName = NULL, $BaseCreativeTemplateVariableValueType = NULL) {
    $this->uniqueName = $uniqueName;
    $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApiError {
  /**
   * @access public
   * @var string
   */
  public $fieldPath;

  /**
   * @access public
   * @var string
   */
  public $trigger;

  /**
   * @access public
   * @var string
   */
  public $errorString;

  /**
   * @access public
   * @var string
   */
  public $ApiErrorType;

  private $_parameterMap = array (
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApiVersionError", FALSE)) {
/**
 * Errors related to the usage of API versions.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApiVersionError extends ApiError {
  /**
   * @access public
   * @var tnsApiVersionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApplicationException {
  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * @access public
   * @var string
   */
  public $ApplicationExceptionType;

  private $_parameterMap = array (
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApplicationException";
  }

  public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AppliedLabel", FALSE)) {
/**
 * Represents a {@link Label} that can be applied to an entity. To negate an
 * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
 * inherited label's ID and {@code isNegated} set to true.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AppliedLabel {
  /**
   * @access public
   * @var integer
   */
  public $labelId;

  /**
   * @access public
   * @var boolean
   */
  public $isNegated;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AppliedLabel";
  }

  public function __construct($labelId = NULL, $isNegated = NULL) {
    $this->labelId = $labelId;
    $this->isNegated = $isNegated;
  }
}}

if (!class_exists("AssetCreativeTemplateVariableValue", FALSE)) {
/**
 * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#ASSET}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AssetCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {
  /**
   * @access public
   * @var integer
   */
  public $assetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $assetByteArray;

  /**
   * @access public
   * @var string
   */
  public $fileName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AssetCreativeTemplateVariableValue";
  }

  public function __construct($assetId = NULL, $assetByteArray = NULL, $fileName = NULL, $uniqueName = NULL, $BaseCreativeTemplateVariableValueType = NULL) {
    parent::__construct();
    $this->assetId = $assetId;
    $this->assetByteArray = $assetByteArray;
    $this->fileName = $fileName;
    $this->uniqueName = $uniqueName;
    $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
  }
}}

if (!class_exists("Asset", FALSE)) {
/**
 * Base asset properties.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Asset {
  /**
   * @access public
   * @var string
   */
  public $AssetType;

  private $_parameterMap = array (
    "Asset.Type" => "AssetType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Asset";
  }

  public function __construct($AssetType = NULL) {
    $this->AssetType = $AssetType;
  }
}}

if (!class_exists("AssetError", FALSE)) {
/**
 * Lists all errors associated with assets.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AssetError extends ApiError {
  /**
   * @access public
   * @var tnsAssetErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AssetError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Authentication", FALSE)) {
/**
 * A representation of the authentication protocols that can be used.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Authentication {
  /**
   * @access public
   * @var string
   */
  public $AuthenticationType;

  private $_parameterMap = array (
    "Authentication.Type" => "AuthenticationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Authentication";
  }

  public function __construct($AuthenticationType = NULL) {
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * An error for an exception that occurred when authenticating.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AuthenticationError extends ApiError {
  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("BaseCustomFieldValue", FALSE)) {
/**
 * The value of a {@link CustomField} for a particular entity.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseCustomFieldValue {
  /**
   * @access public
   * @var integer
   */
  public $customFieldId;

  /**
   * @access public
   * @var string
   */
  public $BaseCustomFieldValueType;

  private $_parameterMap = array (
    "BaseCustomFieldValue.Type" => "BaseCustomFieldValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseCustomFieldValue";
  }

  public function __construct($customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("ClientLogin", FALSE)) {
/**
 * The credentials for the {@code ClientLogin} API authentication protocol.
 * 
 * See {@link http://code.google.com/apis/accounts/docs/AuthForInstalledApps.html}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ClientLogin extends Authentication {
  /**
   * @access public
   * @var string
   */
  public $token;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientLogin";
  }

  public function __construct($token = NULL, $AuthenticationType = NULL) {
    parent::__construct();
    $this->token = $token;
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("CommonError", FALSE)) {
/**
 * A place for common errors that can be used across services.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CommonError extends ApiError {
  /**
   * @access public
   * @var tnsCommonErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ConversionEvent_TrackingUrlsMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type ConversionEvent
 * and value of type TrackingUrls.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ConversionEvent_TrackingUrlsMapEntry {
  /**
   * @access public
   * @var tnsConversionEvent
   */
  public $key;

  /**
   * @access public
   * @var TrackingUrls
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ConversionEvent_TrackingUrlsMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("CreativeAsset", FALSE)) {
/**
 * A {@code CreativeAsset} is an asset that can be used in creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeAsset {
  /**
   * @access public
   * @var integer
   */
  public $assetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $assetByteArray;

  /**
   * @access public
   * @var string
   */
  public $fileName;

  /**
   * @access public
   * @var integer
   */
  public $fileSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeAsset";
  }

  public function __construct($assetId = NULL, $assetByteArray = NULL, $fileName = NULL, $fileSize = NULL) {
    $this->assetId = $assetId;
    $this->assetByteArray = $assetByteArray;
    $this->fileName = $fileName;
    $this->fileSize = $fileSize;
  }
}}

if (!class_exists("CustomCreativeAsset", FALSE)) {
/**
 * A {@code CustomCreativeAsset} is an association between a
 * {@link CustomCreative} and an asset. Any assets that are associated with a
 * creative can be inserted into its HTML snippet.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CustomCreativeAsset {
  /**
   * @access public
   * @var string
   */
  public $macroName;

  /**
   * @access public
   * @var integer
   */
  public $assetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $assetByteArray;

  /**
   * @access public
   * @var string
   */
  public $fileName;

  /**
   * @access public
   * @var integer
   */
  public $fileSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreativeAsset";
  }

  public function __construct($macroName = NULL, $assetId = NULL, $assetByteArray = NULL, $fileName = NULL, $fileSize = NULL) {
    $this->macroName = $macroName;
    $this->assetId = $assetId;
    $this->assetByteArray = $assetByteArray;
    $this->fileName = $fileName;
    $this->fileSize = $fileSize;
  }
}}

if (!class_exists("CreativeAssetMacroError", FALSE)) {
/**
 * Lists all errors associated with creative asset macros.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeAssetMacroError extends ApiError {
  /**
   * @access public
   * @var tnsCreativeAssetMacroErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeAssetMacroError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Creative", FALSE)) {
/**
 * A {@code Creative} represents the media for the ad being served.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Creative {
  /**
   * @access public
   * @var integer
   */
  public $advertiserId;

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var Size
   */
  public $size;

  /**
   * @access public
   * @var string
   */
  public $previewUrl;

  /**
   * @access public
   * @var AppliedLabel[]
   */
  public $appliedLabels;

  /**
   * @access public
   * @var DateTime
   */
  public $lastModifiedDateTime;

  /**
   * @access public
   * @var BaseCustomFieldValue[]
   */
  public $customFieldValues;

  /**
   * @access public
   * @var string
   */
  public $CreativeType;

  private $_parameterMap = array (
    "Creative.Type" => "CreativeType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Creative";
  }

  public function __construct($advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("CreativeError", FALSE)) {
/**
 * Lists all errors associated with creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeError extends ApiError {
  /**
   * @access public
   * @var tnsCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CreativePage", FALSE)) {
/**
 * Captures a page of {@link Creative} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativePage {
  /**
   * @access public
   * @var integer
   */
  public $totalResultSetSize;

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var Creative[]
   */
  public $results;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativePage";
  }

  public function __construct($totalResultSetSize = NULL, $startIndex = NULL, $results = NULL) {
    $this->totalResultSetSize = $totalResultSetSize;
    $this->startIndex = $startIndex;
    $this->results = $results;
  }
}}

if (!class_exists("CreativeSetError", FALSE)) {
/**
 * Errors relating to creative sets & subclasses.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeSetError extends ApiError {
  /**
   * @access public
   * @var tnsCreativeSetErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeSetError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CustomCreativeError", FALSE)) {
/**
 * Lists all errors associated with custom creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CustomCreativeError extends ApiError {
  /**
   * @access public
   * @var tnsCustomCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CustomFieldValue", FALSE)) {
/**
 * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
 * of {@link CustomFieldDataType#DROP_DOWN}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CustomFieldValue extends BaseCustomFieldValue {
  /**
   * @access public
   * @var Value
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomFieldValue";
  }

  public function __construct($value = NULL, $customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("Date", FALSE)) {
/**
 * Represents a date.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Date {
  /**
   * @access public
   * @var integer
   */
  public $year;

  /**
   * @access public
   * @var integer
   */
  public $month;

  /**
   * @access public
   * @var integer
   */
  public $day;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Date";
  }

  public function __construct($year = NULL, $month = NULL, $day = NULL) {
    $this->year = $year;
    $this->month = $month;
    $this->day = $day;
  }
}}

if (!class_exists("DfpDateTime", FALSE)) {
/**
 * Represents a date combined with the time of day.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class DfpDateTime {
  /**
   * @access public
   * @var Date
   */
  public $date;

  /**
   * @access public
   * @var integer
   */
  public $hour;

  /**
   * @access public
   * @var integer
   */
  public $minute;

  /**
   * @access public
   * @var integer
   */
  public $second;

  /**
   * @access public
   * @var string
   */
  public $timeZoneID;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTime";
  }

  public function __construct($date = NULL, $hour = NULL, $minute = NULL, $second = NULL, $timeZoneID = NULL) {
    $this->date = $date;
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
    $this->timeZoneID = $timeZoneID;
  }
}}

if (!class_exists("DropDownCustomFieldValue", FALSE)) {
/**
 * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
 * of {@link CustomFieldDataType#DROP_DOWN}
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class DropDownCustomFieldValue extends BaseCustomFieldValue {
  /**
   * @access public
   * @var integer
   */
  public $customFieldOptionId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DropDownCustomFieldValue";
  }

  public function __construct($customFieldOptionId = NULL, $customFieldId = NULL, $BaseCustomFieldValueType = NULL) {
    parent::__construct();
    $this->customFieldOptionId = $customFieldOptionId;
    $this->customFieldId = $customFieldId;
    $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
  }
}}

if (!class_exists("EntityLimitReachedError", FALSE)) {
/**
 * An error that occurs when creating an entity if the limit on the number of allowed entities for
 * a network has already been reached.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class EntityLimitReachedError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityLimitReachedError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FeatureError", FALSE)) {
/**
 * Errors related to feature management.  If you attempt using a feature that is not available to
 * the current network you'll receive a FeatureError with the missing feature as the trigger.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FeatureError extends ApiError {
  /**
   * @access public
   * @var tnsFeatureErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FeatureError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("FileError", FALSE)) {
/**
 * A list of all errors to be used for problems related to files.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FileError extends ApiError {
  /**
   * @access public
   * @var tnsFileErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FileError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("HasDestinationUrlCreative", FALSE)) {
/**
 * A {@code Creative} that has a destination url
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class HasDestinationUrlCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HasDestinationUrlCreative";
  }

  public function __construct($destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageError", FALSE)) {
/**
 * Lists all errors associated with images.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageError extends ApiError {
  /**
   * @access public
   * @var tnsImageErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class InternalApiError extends ApiError {
  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InternalRedirectCreative", FALSE)) {
/**
 * A {@code Creative} hosted by either DoubleClick for Advertisers (DFA) or DART
 * for Publishers.
 * <p>
 * Similar to third-party creatives, a DoubleClick tag is used to retrieve a
 * creative asset. However, DoubleClick tags are not sent to the user's browser.
 * Instead, they are processed internally within the DoubleClick system..
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class InternalRedirectCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $internalRedirectUrl;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var boolean
   */
  public $isInterstitial;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalRedirectCreative";
  }

  public function __construct($internalRedirectUrl = NULL, $overrideSize = NULL, $isInterstitial = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->internalRedirectUrl = $internalRedirectUrl;
    $this->overrideSize = $overrideSize;
    $this->isInterstitial = $isInterstitial;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("InvalidUrlError", FALSE)) {
/**
 * Lists all errors associated with URLs.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class InvalidUrlError extends ApiError {
  /**
   * @access public
   * @var tnsInvalidUrlErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LabelEntityAssociationError", FALSE)) {
/**
 * Errors specific to creating label entity associations.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LabelEntityAssociationError extends ApiError {
  /**
   * @access public
   * @var tnsLabelEntityAssociationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LegacyDfpCreative", FALSE)) {
/**
 * A {@code Creative} that isn't supported by Google DFP, but was migrated
 * from DART. Creatives of this type cannot be created or modified.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LegacyDfpCreative extends Creative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LegacyDfpCreative";
  }

  public function __construct($advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("LineItemCreativeAssociationError", FALSE)) {
/**
 * Lists all errors associated with line item-to-creative association dates.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LineItemCreativeAssociationError extends ApiError {
  /**
   * @access public
   * @var tnsLineItemCreativeAssociationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemCreativeAssociationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("LongCreativeTemplateVariableValue", FALSE)) {
/**
 * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#LONG}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LongCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {
  /**
   * @access public
   * @var integer
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongCreativeTemplateVariableValue";
  }

  public function __construct($value = NULL, $uniqueName = NULL, $BaseCreativeTemplateVariableValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->uniqueName = $uniqueName;
    $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
  }
}}

if (!class_exists("NotNullError", FALSE)) {
/**
 * Caused by supplying a null value for an attribute that cannot be null.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class NotNullError extends ApiError {
  /**
   * @access public
   * @var tnsNotNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NullError", FALSE)) {
/**
 * Errors associated with violation of a NOT NULL check.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class NullError extends ApiError {
  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DfpOAuth", FALSE)) {
/**
 * The credentials for the {@code OAuth} authentication protocol.
 * 
 * See {@link http://oauth.net/}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class DfpOAuth extends Authentication {
  /**
   * @access public
   * @var string
   */
  public $parameters;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OAuth";
  }

  public function __construct($parameters = NULL, $AuthenticationType = NULL) {
    parent::__construct();
    $this->parameters = $parameters;
    $this->AuthenticationType = $AuthenticationType;
  }
}}

if (!class_exists("ParseError", FALSE)) {
/**
 * Lists errors related to parsing.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ParseError extends ApiError {
  /**
   * @access public
   * @var tnsParseErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PermissionError", FALSE)) {
/**
 * Errors related to incorrect permission.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PermissionError extends ApiError {
  /**
   * @access public
   * @var tnsPermissionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PublisherQueryLanguageContextError", FALSE)) {
/**
 * An error that occurs while executing a PQL query contained in
 * a {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PublisherQueryLanguageContextError extends ApiError {
  /**
   * @access public
   * @var tnsPublisherQueryLanguageContextErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PublisherQueryLanguageSyntaxError", FALSE)) {
/**
 * An error that occurs while parsing a PQL query contained in a
 * {@link Statement} object.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PublisherQueryLanguageSyntaxError extends ApiError {
  /**
   * @access public
   * @var tnsPublisherQueryLanguageSyntaxErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaError", FALSE)) {
/**
 * Describes a client-side error on which a user is attempting
 * to perform an action to which they have no quota remaining.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class QuotaError extends ApiError {
  /**
   * @access public
   * @var tnsQuotaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RangeError extends ApiError {
  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RedirectAsset", FALSE)) {
/**
 * An externally hosted asset.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RedirectAsset extends Asset {
  /**
   * @access public
   * @var string
   */
  public $redirectUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RedirectAsset";
  }

  public function __construct($redirectUrl = NULL, $AssetType = NULL) {
    parent::__construct();
    $this->redirectUrl = $redirectUrl;
    $this->AssetType = $AssetType;
  }
}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredNumberError", FALSE)) {
/**
 * A list of all errors to be used in conjunction with required number
 * validators.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredNumberError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredNumberErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredSizeError", FALSE)) {
/**
 * A list of all errors to be used for validating {@link Size}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredSizeError extends ApiError {
  /**
   * @access public
   * @var tnsRequiredSizeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RichMediaStudioChildAssetProperty", FALSE)) {
/**
 * Represents a child asset in {@code RichMediaStudioCreative}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioChildAssetProperty {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsRichMediaStudioChildAssetPropertyType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $totalFileSize;

  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioChildAssetProperty";
  }

  public function __construct($name = NULL, $type = NULL, $totalFileSize = NULL, $width = NULL, $height = NULL, $url = NULL) {
    $this->name = $name;
    $this->type = $type;
    $this->totalFileSize = $totalFileSize;
    $this->width = $width;
    $this->height = $height;
    $this->url = $url;
  }
}}

if (!class_exists("RichMediaStudioCreativeError", FALSE)) {
/**
 * Lists all errors associated with Rich Media Studio creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreativeError extends ApiError {
  /**
   * @access public
   * @var tnsRichMediaStudioCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ServerError", FALSE)) {
/**
 * Errors related to the server.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ServerError extends ApiError {
  /**
   * @access public
   * @var tnsServerErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Size", FALSE)) {
/**
 * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
 * <p>
 * For interstitial size (out-of-page), {@code Size} must be 1x1.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Size {
  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * @access public
   * @var boolean
   */
  public $isAspectRatio;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Size";
  }

  public function __construct($width = NULL, $height = NULL, $isAspectRatio = NULL) {
    $this->width = $width;
    $this->height = $height;
    $this->isAspectRatio = $isAspectRatio;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API requests.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class SoapRequestHeader {
  /**
   * @access public
   * @var string
   */
  public $networkCode;

  /**
   * @access public
   * @var string
   */
  public $applicationName;

  /**
   * @access public
   * @var Authentication
   */
  public $authentication;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapRequestHeader";
  }

  public function __construct($networkCode = NULL, $applicationName = NULL, $authentication = NULL) {
    $this->networkCode = $networkCode;
    $this->applicationName = $applicationName;
    $this->authentication = $authentication;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Represents the SOAP request header used by API responses.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class SoapResponseHeader {
  /**
   * @access public
   * @var string
   */
  public $requestId;

  /**
   * @access public
   * @var integer
   */
  public $responseTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapResponseHeader";
  }

  public function __construct($requestId = NULL, $responseTime = NULL) {
    $this->requestId = $requestId;
    $this->responseTime = $responseTime;
  }
}}

if (!class_exists("Statement", FALSE)) {
/**
 * Captures the {@code WHERE}, {@code ORDER BY} and {@code LIMIT} clauses of a
 * PQL query. Statements are typically used to retrieve objects of a predefined
 * domain type, which makes SELECT clause unnecessary.
 * <p>
 * An example query text might be {@code "WHERE status = 'ACTIVE' ORDER BY id
 * LIMIT 30"}.
 * </p>
 * <p>
 * Statements support bind variables. These are substitutes for literals
 * and can be thought of as input parameters to a PQL query.
 * </p>
 * <p>
 * An example of such a query might be {@code "WHERE id = :idValue"}.
 * </p>
 * <p>
 * Statements also support use of the LIKE keyword. This provides partial and
 * wildcard string matching.
 * </p>
 * <p>
 * An example of such a query might be {@code "WHERE name LIKE 'startswith%'"}.
 * </p>
 * If using an API version newer than V201010, the value for the variable
 * idValue must then be set with an object of type {@link Value} and is one of
 * {@link NumberValue}, {@link TextValue} or {@link BooleanValue}.
 * <p>
 * If using an API version older than or equal to V201010, the value for the
 * variable idValue must then be set with an object of type {@link Param} and is
 * one of {@link DoubleParam}, {@link LongParam} or {@link StringParam}.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Statement {
  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * @access public
   * @var String_ValueMapEntry[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Statement";
  }

  public function __construct($query = NULL, $values = NULL) {
    $this->query = $query;
    $this->values = $values;
  }
}}

if (!class_exists("StatementError", FALSE)) {
/**
 * An error that occurs while parsing {@link Statement} objects.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class StatementError extends ApiError {
  /**
   * @access public
   * @var tnsStatementErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("StringCreativeTemplateVariableValue", FALSE)) {
/**
 * Stores values of {@link CreativeTemplateVariable} of
 * {@link VariableType#STRING} and {@link VariableType#LIST}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class StringCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringCreativeTemplateVariableValue";
  }

  public function __construct($value = NULL, $uniqueName = NULL, $BaseCreativeTemplateVariableValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->uniqueName = $uniqueName;
    $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
  }
}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Errors for Strings which do not meet given length constraints.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class StringLengthError extends ApiError {
  /**
   * @access public
   * @var tnsStringLengthErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("String_ValueMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type Value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class String_ValueMapEntry {
  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var Value
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_ValueMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("TemplateCreative", FALSE)) {
/**
 * A {@code Creative} that is created by the specified creative template.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TemplateCreative extends Creative {
  /**
   * @access public
   * @var integer
   */
  public $creativeTemplateId;

  /**
   * @access public
   * @var boolean
   */
  public $isInterstitial;

  /**
   * @access public
   * @var BaseCreativeTemplateVariableValue[]
   */
  public $creativeTemplateVariableValues;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateCreative";
  }

  public function __construct($creativeTemplateId = NULL, $isInterstitial = NULL, $creativeTemplateVariableValues = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->creativeTemplateId = $creativeTemplateId;
    $this->isInterstitial = $isInterstitial;
    $this->creativeTemplateVariableValues = $creativeTemplateVariableValues;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("TemplateInstantiatedCreativeError", FALSE)) {
/**
 * Lists all errors associated with template instantiated creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TemplateInstantiatedCreativeError extends ApiError {
  /**
   * @access public
   * @var tnsTemplateInstantiatedCreativeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateInstantiatedCreativeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("TextAdCreative", FALSE)) {
/**
 * A simple plain text-based {@code Creative}. This creative is only available to small business
 * networks.
 * 
 * Starting in version v201306 this will be returned as a {@link TemplateCreative}
 * identified with a {@link TemplateCreative#creativeTemplateId} of {@code 10000440}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TextAdCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $hoverText;

  /**
   * @access public
   * @var tnsTargetWindow
   */
  public $targetWindow;

  /**
   * @access public
   * @var string
   */
  public $linkColor;

  /**
   * @access public
   * @var string
   */
  public $linkTitle;

  /**
   * @access public
   * @var string
   */
  public $text;

  /**
   * @access public
   * @var string
   */
  public $textColor;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextAdCreative";
  }

  public function __construct($hoverText = NULL, $targetWindow = NULL, $linkColor = NULL, $linkTitle = NULL, $text = NULL, $textColor = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->hoverText = $hoverText;
    $this->targetWindow = $targetWindow;
    $this->linkColor = $linkColor;
    $this->linkTitle = $linkTitle;
    $this->text = $text;
    $this->textColor = $textColor;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ThirdPartyCreative", FALSE)) {
/**
 * A {@code Creative} that is served by a 3rd-party vendor.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ThirdPartyCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $snippet;

  /**
   * @access public
   * @var string
   */
  public $expandedSnippet;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ThirdPartyCreative";
  }

  public function __construct($snippet = NULL, $expandedSnippet = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->snippet = $snippet;
    $this->expandedSnippet = $expandedSnippet;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("TrackingUrls", FALSE)) {
/**
 * A list of URLs that should be pinged for a conversion event.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TrackingUrls {
  /**
   * @access public
   * @var string[]
   */
  public $urls;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TrackingUrls";
  }

  public function __construct($urls = NULL) {
    $this->urls = $urls;
  }
}}

if (!class_exists("TypeError", FALSE)) {
/**
 * An error for a field which is an invalid type.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TypeError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TypeError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("UniqueError", FALSE)) {
/**
 * An error for a field which must satisfy a uniqueness constraint
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class UniqueError extends ApiError {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UniqueError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("UnsupportedCreative", FALSE)) {
/**
 * A {@code Creative} that isn't supported by this version of the API.
 * This object is readonly and when encountered should be reported
 * on the DFP API forum.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class UnsupportedCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $unsupportedCreativeType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UnsupportedCreative";
  }

  public function __construct($unsupportedCreativeType = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->unsupportedCreativeType = $unsupportedCreativeType;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("UrlCreativeTemplateVariableValue", FALSE)) {
/**
 * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#URL}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class UrlCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UrlCreativeTemplateVariableValue";
  }

  public function __construct($value = NULL, $uniqueName = NULL, $BaseCreativeTemplateVariableValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->uniqueName = $uniqueName;
    $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
  }
}}

if (!class_exists("Value", FALSE)) {
/**
 * {@code Value} represents a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class Value {
  /**
   * @access public
   * @var string
   */
  public $ValueType;

  private $_parameterMap = array (
    "Value.Type" => "ValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
    }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Value";
  }

  public function __construct($ValueType = NULL) {
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("VastRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that points to an externally hosted VAST ad and is
 * served via VAST 2.0 XML as a VAST Wrapper.  This creative is read only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VastRedirectCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $vastXmlUrl;

  /**
   * @access public
   * @var tnsVastRedirectType
   */
  public $vastRedirectType;

  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VastRedirectCreative";
  }

  public function __construct($vastXmlUrl = NULL, $vastRedirectType = NULL, $companionCreativeIds = NULL, $trackingUrls = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->vastXmlUrl = $vastXmlUrl;
    $this->vastRedirectType = $vastRedirectType;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("VideoRedirectAsset", FALSE)) {
/**
 * An externally-hosted video asset.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VideoRedirectAsset extends RedirectAsset {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoRedirectAsset";
  }

  public function __construct($redirectUrl = NULL, $AssetType = NULL) {
    parent::__construct();
    $this->redirectUrl = $redirectUrl;
    $this->AssetType = $AssetType;
  }
}}

if (!class_exists("VpaidLinearCreative", FALSE)) {
/**
 * A {@code Creative} that displays a DFP-hosted Flash-based ad
 * and is served via VAST 2.0 XML.  It is displayed in a linear fashion
 * with a video (before, after, interrupting).  This creative is read only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VpaidLinearCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashName;

  /**
   * @access public
   * @var base64Binary
   */
  public $flashByteArray;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var Size
   */
  public $flashAssetSize;

  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VpaidLinearCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $overrideSize = NULL, $flashAssetSize = NULL, $companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $duration = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->overrideSize = $overrideSize;
    $this->flashAssetSize = $flashAssetSize;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->duration = $duration;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("VpaidLinearRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that displays an externally hosted Flash-based ad
 * and is served via VAST 2.0 XML.  It is displayed in a linear fashion
 * with a video (before, after, interrupting).  This creative is read only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VpaidLinearRedirectCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var string
   */
  public $flashUrl;

  /**
   * @access public
   * @var Size
   */
  public $flashAssetSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VpaidLinearRedirectCreative";
  }

  public function __construct($companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $duration = NULL, $flashUrl = NULL, $flashAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->duration = $duration;
    $this->flashUrl = $flashUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ApiFramework", FALSE)) {
/**
 * The various ApiFramework types.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApiFramework {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiFramework";
  }

  public function __construct() {
  }
}}

if (!class_exists("ApiVersionErrorReason", FALSE)) {
/**
 * Indicates that the operation is not allowed in the version the request
 * was made in.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApiVersionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiVersionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AssetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AssetErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AssetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The SOAP message contains a request header with an ambiguous definition
 * of the authentication header fields. This means either the {@code
 * authToken} and {@code oAuthToken} fields were both null or both were
 * specified. Exactly one value should be specified with each request.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CommonErrorReason", FALSE)) {
/**
 * Describes reasons for common errors
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CommonErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CommonError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ConversionEvent", FALSE)) {
/**
 * All possible tracking event types.  Not all events are supported by every
 * kind of creative.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ConversionEvent {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ConversionEvent";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativeAssetMacroErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeAssetMacroErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeAssetMacroError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CreativeSetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CreativeSetErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CreativeSetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CustomCreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CustomCreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreativeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("FeatureErrorReason", FALSE)) {
/**
 * A feature is being used that is not enabled on the current network.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FeatureErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FeatureError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("FileErrorReason", FALSE)) {
/**
 * The provided byte array is empty.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FileErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FileError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("FlashExpandableCreativeExpandDirection", FALSE)) {
/**
 * The possible expand directions
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashExpandableCreativeExpandDirection {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashExpandableCreative.ExpandDirection";
  }

  public function __construct() {
  }
}}

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InvalidUrlErrorReason", FALSE)) {
/**
 * The URL contains invalid characters.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class InvalidUrlErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InvalidUrlError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LabelEntityAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LabelEntityAssociationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LabelEntityAssociationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("LineItemCreativeAssociationErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LineItemCreativeAssociationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LineItemCreativeAssociationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotNullErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class NotNullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotNullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ParseErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ParseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ParseError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PermissionErrorReason", FALSE)) {
/**
 * Describes reasons for permission errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PermissionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PermissionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PublisherQueryLanguageContextErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PublisherQueryLanguageContextErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageContextError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PublisherQueryLanguageSyntaxErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class PublisherQueryLanguageSyntaxErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PublisherQueryLanguageSyntaxError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The number of requests made per second is too high and has exceeded the
 * allowable limit. The recommended approach to handle this error is to wait
 * about 5 seconds and then retry the request. Note that this does not
 * guarantee the request will succeed. If it fails again, try increasing the
 * wait time.
 * <p>
 * Another way to mitigate this error is to limit requests to 2 per second.
 * Once again this does not guarantee that every request will succeed, but
 * may help reduce the number of times you receive this error.
 * </p>
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class QuotaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredNumberErrorReason", FALSE)) {
/**
 * Describes reasons for a number to be invalid.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredNumberErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredNumberError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredSizeErrorReason", FALSE)) {
/**
 * {@link Creative#size} or {@link LineItem#creativeSizes} is
 * missing.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RequiredSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredSizeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaStudioChildAssetPropertyType", FALSE)) {
/**
 * Type of {@code RichMediaStudioChildAssetProperty}
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioChildAssetPropertyType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioChildAssetProperty.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaStudioCreativeArtworkType", FALSE)) {
/**
 * Rich Media Studio creative artwork types.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreativeArtworkType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreativeArtworkType";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaStudioCreativeBillingAttribute", FALSE)) {
/**
 * Rich Media Studio creative supported billing attributes.
 * <p>
 * This is determined by Rich Media Studio based on the content
 * of the creative and is not updateable.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreativeBillingAttribute {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreativeBillingAttribute";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaStudioCreativeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreativeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RichMediaStudioCreativeFormat", FALSE)) {
/**
 * Different creative format supported by Rich Media Studio creative.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreativeFormat {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreativeFormat";
  }

  public function __construct() {
  }
}}

if (!class_exists("ServerErrorReason", FALSE)) {
/**
 * Describes reasons for server errors
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ServerErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ServerError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StatementErrorReason", FALSE)) {
/**
 * A bind variable has not been bound to a value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class StatementErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatementError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The value returned if the actual value is not exposed by the requested API version.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetWindow", FALSE)) {
/**
 * The different values for target window, corresponds to an HTML link's
 * {@code target} attribute.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TargetWindow {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetWindow";
  }

  public function __construct() {
  }
}}

if (!class_exists("TemplateInstantiatedCreativeErrorReason", FALSE)) {
/**
 * The reason for the error
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TemplateInstantiatedCreativeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TemplateInstantiatedCreativeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VastRedirectType", FALSE)) {
/**
 * The types of VAST ads that a {@link VastRedirectCreative} can point to.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VastRedirectType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VastRedirectType";
  }

  public function __construct() {
  }
}}

if (!class_exists("createCreative", FALSE)) {
/**
 * Creates a new {@link Creative}.
 * 
 * The following fields are required along with the required fields of the
 * sub-class:
 * <ul>
 * <li>{@link Creative#advertiserId}</li>
 * <li>{@link Creative#name}</li>
 * <li>{@link Creative#size}</li>
 * </ul>
 * 
 * @param creative the creative to create
 * @return the new creative with its ID set
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class createCreative {
  /**
   * @access public
   * @var Creative
   */
  public $creative;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creative = NULL) {
    $this->creative = $creative;
  }
}}

if (!class_exists("createCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class createCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("createCreatives", FALSE)) {
/**
 * Creates new {@link Creative} objects.
 * 
 * @param creatives the creatives to create
 * @return the created creatives with their IDs filled in
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class createCreatives {
  /**
   * @access public
   * @var Creative[]
   */
  public $creatives;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creatives = NULL) {
    $this->creatives = $creatives;
  }
}}

if (!class_exists("createCreativesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class createCreativesResponse {
  /**
   * @access public
   * @var Creative[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("getCreative", FALSE)) {
/**
 * Returns the {@link Creative} uniquely identified by the given ID.
 * 
 * @param creativeId the ID of the creative, which must already exist
 * @return the {@code Creative} uniquely identified by the given ID
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class getCreative {
  /**
   * @access public
   * @var integer
   */
  public $creativeId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creativeId = NULL) {
    $this->creativeId = $creativeId;
  }
}}

if (!class_exists("getCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class getCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("getCreativesByStatement", FALSE)) {
/**
 * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
 * given {@link Statement#query}. The following fields are supported for
 * filtering:
 * 
 * <table>
 * <tr>
 * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
 * </tr>
 * <tr>
 * <td>{@code id}</td>
 * <td>{@link Creative#id}</td>
 * </tr>
 * <tr>
 * <td>{@code name}</td>
 * <td>{@link Creative#name}</td>
 * </tr>
 * <tr>
 * <td>{@code advertiserId}</td>
 * <td>{@link Creative#advertiserId}</td>
 * </tr>
 * <tr>
 * <td>{@code width}</td>
 * <td>{@link Creative#size}</td>
 * </tr>
 * <tr>
 * <td>{@code height}</td>
 * <td>{@link Creative#size}</td>
 * </tr>
 * <tr>
 * <td>{@code lastModifiedDateTime}</td>
 * <td>{@link Creative#lastModifiedDateTime}</td>
 * </tr>
 * </table>
 * 
 * @param filterStatement a Publisher Query Language statement used to filter
 * a set of creatives
 * @return the creatives that match the given filter
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class getCreativesByStatement {
  /**
   * @access public
   * @var Statement
   */
  public $filterStatement;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($filterStatement = NULL) {
    $this->filterStatement = $filterStatement;
  }
}}

if (!class_exists("getCreativesByStatementResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class getCreativesByStatementResponse {
  /**
   * @access public
   * @var CreativePage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCreative", FALSE)) {
/**
 * Updates the specified {@link Creative}.
 * 
 * @param creative the creative to update
 * @return the updated creative
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class updateCreative {
  /**
   * @access public
   * @var Creative
   */
  public $creative;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creative = NULL) {
    $this->creative = $creative;
  }
}}

if (!class_exists("updateCreativeResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class updateCreativeResponse {
  /**
   * @access public
   * @var Creative
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("updateCreatives", FALSE)) {
/**
 * Updates the specified {@link Creative} objects.
 * 
 * @param creatives the creatives to update
 * @return the updated creatives
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class updateCreatives {
  /**
   * @access public
   * @var Creative[]
   */
  public $creatives;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($creatives = NULL) {
    $this->creatives = $creatives;
  }
}}

if (!class_exists("updateCreativesResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class updateCreativesResponse {
  /**
   * @access public
   * @var Creative[]
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("BaseDynamicAllocationCreative", FALSE)) {
/**
 * A base class for dynamic allocation creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseDynamicAllocationCreative extends Creative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseDynamicAllocationCreative";
  }

  public function __construct($advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ApiException extends ApplicationException {
  /**
   * @access public
   * @var ApiError[]
   */
  public $errors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiException";
  }

  public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AspectRatioImageCreative", FALSE)) {
/**
 * A {@code Creative} intended for mobile platforms that displays an image,
 * whose {@link LineItem#creativePlaceholders size} is defined as an
 * {@link CreativeSizeType#ASPECT_RATIO aspect ratio}, i.e.
 * {@link Size#isAspectRatio}. It can have multiple images whose dimensions
 * conform to that aspect ratio.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AspectRatioImageCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var CreativeAsset[]
   */
  public $imageAssets;

  /**
   * @access public
   * @var string
   */
  public $fallbackText;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AspectRatioImageCreative";
  }

  public function __construct($imageAssets = NULL, $fallbackText = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->imageAssets = $imageAssets;
    $this->fallbackText = $fallbackText;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseFlashCreative", FALSE)) {
/**
 * A base type for creatives that display a Flash-based ad. If the Flash ad
 * cannot load, a fallback image is displayed instead.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseFlashCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashName;

  /**
   * @access public
   * @var base64Binary
   */
  public $flashByteArray;

  /**
   * @access public
   * @var string
   */
  public $fallbackImageName;

  /**
   * @access public
   * @var base64Binary
   */
  public $fallbackImageByteArray;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var boolean
   */
  public $clickTagRequired;

  /**
   * @access public
   * @var string
   */
  public $fallbackPreviewUrl;

  /**
   * @access public
   * @var Size
   */
  public $flashAssetSize;

  /**
   * @access public
   * @var Size
   */
  public $fallbackAssetSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseFlashCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $overrideSize = NULL, $clickTagRequired = NULL, $fallbackPreviewUrl = NULL, $flashAssetSize = NULL, $fallbackAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->overrideSize = $overrideSize;
    $this->clickTagRequired = $clickTagRequired;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->fallbackAssetSize = $fallbackAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseFlashRedirectCreative", FALSE)) {
/**
 * The base type for creatives that load a Flash asset from a specified URL.
 * If the remote flash asset cannot be served, a fallback image is used at an
 * alternate URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseFlashRedirectCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashUrl;

  /**
   * @access public
   * @var string
   */
  public $fallbackUrl;

  /**
   * @access public
   * @var string
   */
  public $fallbackPreviewUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseFlashRedirectCreative";
  }

  public function __construct($flashUrl = NULL, $fallbackUrl = NULL, $fallbackPreviewUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashUrl = $flashUrl;
    $this->fallbackUrl = $fallbackUrl;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseImageCreative", FALSE)) {
/**
 * The base type for creatives that display an image.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseImageCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $imageName;

  /**
   * @access public
   * @var base64Binary
   */
  public $imageByteArray;

  /**
   * @access public
   * @var boolean
   */
  public $overrideSize;

  /**
   * @access public
   * @var Size
   */
  public $assetSize;

  /**
   * @access public
   * @var string
   */
  public $imageUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseImageCreative";
  }

  public function __construct($imageName = NULL, $imageByteArray = NULL, $overrideSize = NULL, $assetSize = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->imageName = $imageName;
    $this->imageByteArray = $imageByteArray;
    $this->overrideSize = $overrideSize;
    $this->assetSize = $assetSize;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseImageRedirectCreative", FALSE)) {
/**
 * The base type for creatives that load an image asset from a specified URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseImageRedirectCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $imageUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseImageRedirectCreative";
  }

  public function __construct($imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseRichMediaStudioCreative", FALSE)) {
/**
 * A {@code Creative} that is created by a Rich Media Studio.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseRichMediaStudioCreative extends Creative {
  /**
   * @access public
   * @var integer
   */
  public $studioCreativeId;

  /**
   * @access public
   * @var tnsRichMediaStudioCreativeFormat
   */
  public $creativeFormat;

  /**
   * @access public
   * @var tnsRichMediaStudioCreativeArtworkType
   */
  public $artworkType;

  /**
   * @access public
   * @var integer
   */
  public $totalFileSize;

  /**
   * @access public
   * @var string[]
   */
  public $adTagKeys;

  /**
   * @access public
   * @var string[]
   */
  public $customKeyValues;

  /**
   * @access public
   * @var string
   */
  public $surveyUrl;

  /**
   * @access public
   * @var string
   */
  public $allImpressionsUrl;

  /**
   * @access public
   * @var string
   */
  public $richMediaImpressionsUrl;

  /**
   * @access public
   * @var string
   */
  public $backupImageImpressionsUrl;

  /**
   * @access public
   * @var string
   */
  public $overrideCss;

  /**
   * @access public
   * @var string
   */
  public $requiredFlashPluginVersion;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var tnsRichMediaStudioCreativeBillingAttribute
   */
  public $billingAttribute;

  /**
   * @access public
   * @var RichMediaStudioChildAssetProperty[]
   */
  public $richMediaStudioChildAssetProperties;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseRichMediaStudioCreative";
  }

  public function __construct($studioCreativeId = NULL, $creativeFormat = NULL, $artworkType = NULL, $totalFileSize = NULL, $adTagKeys = NULL, $customKeyValues = NULL, $surveyUrl = NULL, $allImpressionsUrl = NULL, $richMediaImpressionsUrl = NULL, $backupImageImpressionsUrl = NULL, $overrideCss = NULL, $requiredFlashPluginVersion = NULL, $duration = NULL, $billingAttribute = NULL, $richMediaStudioChildAssetProperties = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->studioCreativeId = $studioCreativeId;
    $this->creativeFormat = $creativeFormat;
    $this->artworkType = $artworkType;
    $this->totalFileSize = $totalFileSize;
    $this->adTagKeys = $adTagKeys;
    $this->customKeyValues = $customKeyValues;
    $this->surveyUrl = $surveyUrl;
    $this->allImpressionsUrl = $allImpressionsUrl;
    $this->richMediaImpressionsUrl = $richMediaImpressionsUrl;
    $this->backupImageImpressionsUrl = $backupImageImpressionsUrl;
    $this->overrideCss = $overrideCss;
    $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
    $this->duration = $duration;
    $this->billingAttribute = $billingAttribute;
    $this->richMediaStudioChildAssetProperties = $richMediaStudioChildAssetProperties;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BaseVideoCreative", FALSE)) {
/**
 * A base type for video creatives.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BaseVideoCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var boolean
   */
  public $allowDurationOverride;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseVideoCreative";
  }

  public function __construct($duration = NULL, $allowDurationOverride = NULL, $trackingUrls = NULL, $companionCreativeIds = NULL, $customParameters = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->duration = $duration;
    $this->allowDurationOverride = $allowDurationOverride;
    $this->trackingUrls = $trackingUrls;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->customParameters = $customParameters;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("BooleanValue", FALSE)) {
/**
 * Contains a boolean value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class BooleanValue extends Value {
  /**
   * @access public
   * @var boolean
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BooleanValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("ClickTrackingCreative", FALSE)) {
/**
 * A creative that is used for tracking clicks on ads that are served directly
 * from the customers' web servers or media servers.
 * NOTE: The size attribute is not used for click tracking creative and it will
 * not be persisted upon save.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ClickTrackingCreative extends Creative {
  /**
   * @access public
   * @var string
   */
  public $clickTrackingUrl;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClickTrackingCreative";
  }

  public function __construct($clickTrackingUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->clickTrackingUrl = $clickTrackingUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("CustomCreative", FALSE)) {
/**
 * A {@code Creative} that contains an arbitrary HTML snippet and file assets.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class CustomCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $htmlSnippet;

  /**
   * @access public
   * @var CustomCreativeAsset[]
   */
  public $customCreativeAssets;

  /**
   * @access public
   * @var boolean
   */
  public $isInterstitial;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CustomCreative";
  }

  public function __construct($htmlSnippet = NULL, $customCreativeAssets = NULL, $isInterstitial = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->htmlSnippet = $htmlSnippet;
    $this->customCreativeAssets = $customCreativeAssets;
    $this->isInterstitial = $isInterstitial;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("DateTimeValue", FALSE)) {
/**
 * Contains a date-time value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class DateTimeValue extends Value {
  /**
   * @access public
   * @var DateTime
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateTimeValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("LegacyDfpMobileCreative", FALSE)) {
/**
 * A mobile {@code Creative} that isn't supported by Google DFP, but was
 * migrated from DART. Creatives of this type cannot be created or modified.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class LegacyDfpMobileCreative extends HasDestinationUrlCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LegacyDfpMobileCreative";
  }

  public function __construct($destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashCreative", FALSE)) {
/**
 * A {@code Creative} that displays a Flash-based ad. If the Flash ad cannot
 * load, a fallback image is displayed instead.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashCreative extends BaseFlashCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $overrideSize = NULL, $clickTagRequired = NULL, $fallbackPreviewUrl = NULL, $flashAssetSize = NULL, $fallbackAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->overrideSize = $overrideSize;
    $this->clickTagRequired = $clickTagRequired;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->fallbackAssetSize = $fallbackAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashExpandableCreative", FALSE)) {
/**
 * An expandable {@code Creative} where the collapsed size is a Flash SWF file and
 * the expanded size is another Flash SWF file. If Flash isn't supported in the browser,
 * the fallback image will be used.
 * <p>
 * This creative will not work with iframe ad tags.
 * <p>
 * This creative is only available to small business networks.
 * 
 * Starting in version v201306 this will be returned as a {@link TemplateCreative}
 * identified with a {@link TemplateCreative#creativeTemplateId} of {@code 10001160}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashExpandableCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var integer
   */
  public $collapsedFlashAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $collapsedFlashAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $collapsedFlashFileName;

  /**
   * @access public
   * @var integer
   */
  public $collapsedFallbackImageAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $collapsedFallbackImageAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $collapsedFallbackImageFileName;

  /**
   * @access public
   * @var integer
   */
  public $expandedFlashAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $expandedFlashAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $expandedFlashFileName;

  /**
   * @access public
   * @var integer
   */
  public $requiredFlashVersion;

  /**
   * @access public
   * @var integer
   */
  public $collapsedWidth;

  /**
   * @access public
   * @var integer
   */
  public $collapsedHeight;

  /**
   * @access public
   * @var integer
   */
  public $expandedWidth;

  /**
   * @access public
   * @var integer
   */
  public $expandedHeight;

  /**
   * @access public
   * @var tnsFlashExpandableCreativeExpandDirection
   */
  public $expandDirection;

  /**
   * @access public
   * @var boolean
   */
  public $expandOnMouseOver;

  /**
   * @access public
   * @var string
   */
  public $javascriptFunctionForExpand;

  /**
   * @access public
   * @var boolean
   */
  public $collapseOnMouseOut;

  /**
   * @access public
   * @var string
   */
  public $javascriptFunctionForCollapse;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashExpandableCreative";
  }

  public function __construct($collapsedFlashAssetId = NULL, $collapsedFlashAssetByteArray = NULL, $collapsedFlashFileName = NULL, $collapsedFallbackImageAssetId = NULL, $collapsedFallbackImageAssetByteArray = NULL, $collapsedFallbackImageFileName = NULL, $expandedFlashAssetId = NULL, $expandedFlashAssetByteArray = NULL, $expandedFlashFileName = NULL, $requiredFlashVersion = NULL, $collapsedWidth = NULL, $collapsedHeight = NULL, $expandedWidth = NULL, $expandedHeight = NULL, $expandDirection = NULL, $expandOnMouseOver = NULL, $javascriptFunctionForExpand = NULL, $collapseOnMouseOut = NULL, $javascriptFunctionForCollapse = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->collapsedFlashAssetId = $collapsedFlashAssetId;
    $this->collapsedFlashAssetByteArray = $collapsedFlashAssetByteArray;
    $this->collapsedFlashFileName = $collapsedFlashFileName;
    $this->collapsedFallbackImageAssetId = $collapsedFallbackImageAssetId;
    $this->collapsedFallbackImageAssetByteArray = $collapsedFallbackImageAssetByteArray;
    $this->collapsedFallbackImageFileName = $collapsedFallbackImageFileName;
    $this->expandedFlashAssetId = $expandedFlashAssetId;
    $this->expandedFlashAssetByteArray = $expandedFlashAssetByteArray;
    $this->expandedFlashFileName = $expandedFlashFileName;
    $this->requiredFlashVersion = $requiredFlashVersion;
    $this->collapsedWidth = $collapsedWidth;
    $this->collapsedHeight = $collapsedHeight;
    $this->expandedWidth = $expandedWidth;
    $this->expandedHeight = $expandedHeight;
    $this->expandDirection = $expandDirection;
    $this->expandOnMouseOver = $expandOnMouseOver;
    $this->javascriptFunctionForExpand = $javascriptFunctionForExpand;
    $this->collapseOnMouseOut = $collapseOnMouseOut;
    $this->javascriptFunctionForCollapse = $javascriptFunctionForCollapse;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashOverlayCreative", FALSE)) {
/**
 * An overlay {@code Creative} that displays a Flash-based ad and is
 * served via VAST 2.0 XML. Overlays cover part of the video content
 * they are displayed on top of.  This creative is read-only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashOverlayCreative extends BaseFlashCreative {
  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * @access public
   * @var tnsApiFramework
   */
  public $apiFramework;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashOverlayCreative";
  }

  public function __construct($companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $apiFramework = NULL, $duration = NULL, $flashName = NULL, $flashByteArray = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $overrideSize = NULL, $clickTagRequired = NULL, $fallbackPreviewUrl = NULL, $flashAssetSize = NULL, $fallbackAssetSize = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->apiFramework = $apiFramework;
    $this->duration = $duration;
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->overrideSize = $overrideSize;
    $this->clickTagRequired = $clickTagRequired;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->flashAssetSize = $flashAssetSize;
    $this->fallbackAssetSize = $fallbackAssetSize;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashPushdownCreative", FALSE)) {
/**
 * {@code Creative} that pushes page content down when the creative expands.
 * The collapsed size is one Flash SWF file and the expanded size is another Flash SWF file.
 * <p>
 * This creative will not work with iframe ad tags.
 * <p>
 * This creative is only available to small business networks.
 * 
 * Starting in version v201306 this will be returned as a {@link TemplateCreative}
 * identified with a {@link TemplateCreative#creativeTemplateId} of {@code 10001400}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashPushdownCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var integer
   */
  public $collapsedFlashAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $collapsedFlashAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $collapsedFlashFileName;

  /**
   * @access public
   * @var integer
   */
  public $collapsedFallbackImageAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $collapsedFallbackImageAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $collapsedFallbackImageFileName;

  /**
   * @access public
   * @var integer
   */
  public $expandedFlashAssetId;

  /**
   * @access public
   * @var base64Binary
   */
  public $expandedFlashAssetByteArray;

  /**
   * @access public
   * @var string
   */
  public $expandedFlashFileName;

  /**
   * @access public
   * @var integer
   */
  public $requiredFlashVersion;

  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $collapsedHeight;

  /**
   * @access public
   * @var integer
   */
  public $expandedHeight;

  /**
   * @access public
   * @var boolean
   */
  public $pushdownOnMouseOver;

  /**
   * @access public
   * @var string
   */
  public $javascriptFunctionForPushdown;

  /**
   * @access public
   * @var boolean
   */
  public $collapseOnMouseOut;

  /**
   * @access public
   * @var string
   */
  public $javascriptFunctionForCollapse;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashPushdownCreative";
  }

  public function __construct($collapsedFlashAssetId = NULL, $collapsedFlashAssetByteArray = NULL, $collapsedFlashFileName = NULL, $collapsedFallbackImageAssetId = NULL, $collapsedFallbackImageAssetByteArray = NULL, $collapsedFallbackImageFileName = NULL, $expandedFlashAssetId = NULL, $expandedFlashAssetByteArray = NULL, $expandedFlashFileName = NULL, $requiredFlashVersion = NULL, $width = NULL, $collapsedHeight = NULL, $expandedHeight = NULL, $pushdownOnMouseOver = NULL, $javascriptFunctionForPushdown = NULL, $collapseOnMouseOut = NULL, $javascriptFunctionForCollapse = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->collapsedFlashAssetId = $collapsedFlashAssetId;
    $this->collapsedFlashAssetByteArray = $collapsedFlashAssetByteArray;
    $this->collapsedFlashFileName = $collapsedFlashFileName;
    $this->collapsedFallbackImageAssetId = $collapsedFallbackImageAssetId;
    $this->collapsedFallbackImageAssetByteArray = $collapsedFallbackImageAssetByteArray;
    $this->collapsedFallbackImageFileName = $collapsedFallbackImageFileName;
    $this->expandedFlashAssetId = $expandedFlashAssetId;
    $this->expandedFlashAssetByteArray = $expandedFlashAssetByteArray;
    $this->expandedFlashFileName = $expandedFlashFileName;
    $this->requiredFlashVersion = $requiredFlashVersion;
    $this->width = $width;
    $this->collapsedHeight = $collapsedHeight;
    $this->expandedHeight = $expandedHeight;
    $this->pushdownOnMouseOver = $pushdownOnMouseOver;
    $this->javascriptFunctionForPushdown = $javascriptFunctionForPushdown;
    $this->collapseOnMouseOut = $collapseOnMouseOut;
    $this->javascriptFunctionForCollapse = $javascriptFunctionForCollapse;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that loads a Flash asset from a specified URL. If the
 * remote flash asset cannot be served, a fallback image is used at an
 * alternate URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashRedirectCreative extends BaseFlashRedirectCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashRedirectCreative";
  }

  public function __construct($flashUrl = NULL, $fallbackUrl = NULL, $fallbackPreviewUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashUrl = $flashUrl;
    $this->fallbackUrl = $fallbackUrl;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FlashRedirectOverlayCreative", FALSE)) {
/**
 * An overlay {@code Creative} that loads a Flash asset from a specified URL
 * and is served via VAST 2.0 XML. Overlays cover part of the video content
 * they are displayed on top of.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FlashRedirectOverlayCreative extends BaseFlashRedirectCreative {
  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * @access public
   * @var tnsApiFramework
   */
  public $apiFramework;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var Size
   */
  public $flashAssetSize;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FlashRedirectOverlayCreative";
  }

  public function __construct($companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $apiFramework = NULL, $duration = NULL, $flashAssetSize = NULL, $flashUrl = NULL, $fallbackUrl = NULL, $fallbackPreviewUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->apiFramework = $apiFramework;
    $this->duration = $duration;
    $this->flashAssetSize = $flashAssetSize;
    $this->flashUrl = $flashUrl;
    $this->fallbackUrl = $fallbackUrl;
    $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("FloatingFlashCreative", FALSE)) {
/**
 * A floating flash creative. This creative is an interstitial creative,
 * and its {@link #size} must be 1x1.
 * <p>
 * This creative will not work with iframe ad tags.
 * <p>
 * This creative is only available to small business networks.
 * 
 * Starting in version v201306 this will be returned as a {@link TemplateCreative}
 * identified with a {@link TemplateCreative#creativeTemplateId} of {@code 10000560}.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class FloatingFlashCreative extends HasDestinationUrlCreative {
  /**
   * @access public
   * @var string
   */
  public $flashName;

  /**
   * @access public
   * @var base64Binary
   */
  public $flashByteArray;

  /**
   * @access public
   * @var integer
   */
  public $flashAssetId;

  /**
   * @access public
   * @var string
   */
  public $fallbackImageName;

  /**
   * @access public
   * @var base64Binary
   */
  public $fallbackImageByteArray;

  /**
   * @access public
   * @var integer
   */
  public $fallbackImageAssetId;

  /**
   * @access public
   * @var integer
   */
  public $requiredFlashVersion;

  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * @access public
   * @var string
   */
  public $topPosition;

  /**
   * @access public
   * @var string
   */
  public $leftPosition;

  /**
   * @access public
   * @var integer
   */
  public $displayTimeInSecond;

  /**
   * @access public
   * @var string
   */
  public $thirdPartyImpressionTracker;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "FloatingFlashCreative";
  }

  public function __construct($flashName = NULL, $flashByteArray = NULL, $flashAssetId = NULL, $fallbackImageName = NULL, $fallbackImageByteArray = NULL, $fallbackImageAssetId = NULL, $requiredFlashVersion = NULL, $width = NULL, $height = NULL, $topPosition = NULL, $leftPosition = NULL, $displayTimeInSecond = NULL, $thirdPartyImpressionTracker = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->flashName = $flashName;
    $this->flashByteArray = $flashByteArray;
    $this->flashAssetId = $flashAssetId;
    $this->fallbackImageName = $fallbackImageName;
    $this->fallbackImageByteArray = $fallbackImageByteArray;
    $this->fallbackImageAssetId = $fallbackImageAssetId;
    $this->requiredFlashVersion = $requiredFlashVersion;
    $this->width = $width;
    $this->height = $height;
    $this->topPosition = $topPosition;
    $this->leftPosition = $leftPosition;
    $this->displayTimeInSecond = $displayTimeInSecond;
    $this->thirdPartyImpressionTracker = $thirdPartyImpressionTracker;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("HasHtmlSnippetDynamicAllocationCreative", FALSE)) {
/**
 * Dynamic allocation creative with a backfill code snippet.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class HasHtmlSnippetDynamicAllocationCreative extends BaseDynamicAllocationCreative {
  /**
   * @access public
   * @var string
   */
  public $codeSnippet;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HasHtmlSnippetDynamicAllocationCreative";
  }

  public function __construct($codeSnippet = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->codeSnippet = $codeSnippet;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageCreative", FALSE)) {
/**
 * A {@code Creative} that displays an image.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageCreative extends BaseImageCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageCreative";
  }

  public function __construct($imageName = NULL, $imageByteArray = NULL, $overrideSize = NULL, $assetSize = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->imageName = $imageName;
    $this->imageByteArray = $imageByteArray;
    $this->overrideSize = $overrideSize;
    $this->assetSize = $assetSize;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageOverlayCreative", FALSE)) {
/**
 * An overlay {@code Creative} that displays an image and is served via VAST
 * 2.0 XML. Overlays cover part of the video content they are displayed on
 * top of. This creative is read only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageOverlayCreative extends BaseImageCreative {
  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageOverlayCreative";
  }

  public function __construct($companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $duration = NULL, $imageName = NULL, $imageByteArray = NULL, $overrideSize = NULL, $assetSize = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->duration = $duration;
    $this->imageName = $imageName;
    $this->imageByteArray = $imageByteArray;
    $this->overrideSize = $overrideSize;
    $this->assetSize = $assetSize;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that loads an image asset from a specified URL.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageRedirectCreative extends BaseImageRedirectCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageRedirectCreative";
  }

  public function __construct($imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("ImageRedirectOverlayCreative", FALSE)) {
/**
 * An overlay {@code Creative} that loads an image asset from a specified URL
 * and is served via VAST 2.0 XML. Overlays cover part of the video content
 * they are displayed on top of.  This creative is read only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class ImageRedirectOverlayCreative extends BaseImageRedirectCreative {
  /**
   * @access public
   * @var Size
   */
  public $assetSize;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var integer[]
   */
  public $companionCreativeIds;

  /**
   * @access public
   * @var ConversionEvent_TrackingUrlsMapEntry[]
   */
  public $trackingUrls;

  /**
   * @access public
   * @var string
   */
  public $customParameters;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ImageRedirectOverlayCreative";
  }

  public function __construct($assetSize = NULL, $duration = NULL, $companionCreativeIds = NULL, $trackingUrls = NULL, $customParameters = NULL, $imageUrl = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->assetSize = $assetSize;
    $this->duration = $duration;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->trackingUrls = $trackingUrls;
    $this->customParameters = $customParameters;
    $this->imageUrl = $imageUrl;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * Contains a numeric value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class NumberValue extends Value {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NumberValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("RichMediaStudioCreative", FALSE)) {
/**
 * A {@code Creative} that is created by a Rich Media Studio. You cannot create this creative,
 * but you can update some fields of this creative.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class RichMediaStudioCreative extends BaseRichMediaStudioCreative {
  /**
   * @access public
   * @var boolean
   */
  public $isInterstitial;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RichMediaStudioCreative";
  }

  public function __construct($isInterstitial = NULL, $studioCreativeId = NULL, $creativeFormat = NULL, $artworkType = NULL, $totalFileSize = NULL, $adTagKeys = NULL, $customKeyValues = NULL, $surveyUrl = NULL, $allImpressionsUrl = NULL, $richMediaImpressionsUrl = NULL, $backupImageImpressionsUrl = NULL, $overrideCss = NULL, $requiredFlashPluginVersion = NULL, $duration = NULL, $billingAttribute = NULL, $richMediaStudioChildAssetProperties = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->isInterstitial = $isInterstitial;
    $this->studioCreativeId = $studioCreativeId;
    $this->creativeFormat = $creativeFormat;
    $this->artworkType = $artworkType;
    $this->totalFileSize = $totalFileSize;
    $this->adTagKeys = $adTagKeys;
    $this->customKeyValues = $customKeyValues;
    $this->surveyUrl = $surveyUrl;
    $this->allImpressionsUrl = $allImpressionsUrl;
    $this->richMediaImpressionsUrl = $richMediaImpressionsUrl;
    $this->backupImageImpressionsUrl = $backupImageImpressionsUrl;
    $this->overrideCss = $overrideCss;
    $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
    $this->duration = $duration;
    $this->billingAttribute = $billingAttribute;
    $this->richMediaStudioChildAssetProperties = $richMediaStudioChildAssetProperties;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("TextValue", FALSE)) {
/**
 * Contains a string value.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class TextValue extends Value {
  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TextValue";
  }

  public function __construct($value = NULL, $ValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ValueType = $ValueType;
  }
}}

if (!class_exists("VideoCreative", FALSE)) {
/**
 * A {@code Creative} that contains DFP-hosted video ads and is served
 * via VAST 2.0 XML.  This creative is read-only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VideoCreative extends BaseVideoCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCreative";
  }

  public function __construct($duration = NULL, $allowDurationOverride = NULL, $trackingUrls = NULL, $companionCreativeIds = NULL, $customParameters = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->duration = $duration;
    $this->allowDurationOverride = $allowDurationOverride;
    $this->trackingUrls = $trackingUrls;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->customParameters = $customParameters;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("VideoRedirectCreative", FALSE)) {
/**
 * A {@code Creative} that contains externally hosted video ads and
 * is served via VAST 2.0 XML.  This creative is read-only.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class VideoRedirectCreative extends BaseVideoCreative {
  /**
   * @access public
   * @var VideoRedirectAsset[]
   */
  public $videoAssets;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoRedirectCreative";
  }

  public function __construct($videoAssets = NULL, $duration = NULL, $allowDurationOverride = NULL, $trackingUrls = NULL, $companionCreativeIds = NULL, $customParameters = NULL, $destinationUrl = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->videoAssets = $videoAssets;
    $this->duration = $duration;
    $this->allowDurationOverride = $allowDurationOverride;
    $this->trackingUrls = $trackingUrls;
    $this->companionCreativeIds = $companionCreativeIds;
    $this->customParameters = $customParameters;
    $this->destinationUrl = $destinationUrl;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("AdExchangeCreative", FALSE)) {
/**
 * An Ad Exchange dynamic allocation creative.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AdExchangeCreative extends HasHtmlSnippetDynamicAllocationCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdExchangeCreative";
  }

  public function __construct($codeSnippet = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->codeSnippet = $codeSnippet;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("AdSenseCreative", FALSE)) {
/**
 * An AdSense dynamic allocation creative.
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 */
class AdSenseCreative extends HasHtmlSnippetDynamicAllocationCreative {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://www.google.com/apis/ads/publisher/v201208";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSenseCreative";
  }

  public function __construct($codeSnippet = NULL, $advertiserId = NULL, $id = NULL, $name = NULL, $size = NULL, $previewUrl = NULL, $appliedLabels = NULL, $lastModifiedDateTime = NULL, $customFieldValues = NULL, $CreativeType = NULL) {
    parent::__construct();
    $this->codeSnippet = $codeSnippet;
    $this->advertiserId = $advertiserId;
    $this->id = $id;
    $this->name = $name;
    $this->size = $size;
    $this->previewUrl = $previewUrl;
    $this->appliedLabels = $appliedLabels;
    $this->lastModifiedDateTime = $lastModifiedDateTime;
    $this->customFieldValues = $customFieldValues;
    $this->CreativeType = $CreativeType;
  }
}}

if (!class_exists("CreativeService", FALSE)) {
/**
 * CreativeService
 * @package GoogleApiAdsDfp
 * @subpackage v201208
 * @author WSDLInterpreter
 */
class CreativeService extends DfpSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "DateTime" => "DfpDateTime",
    "Location" => "DfpLocation",
    "OAuth" => "DfpOAuth",
    "BaseDynamicAllocationCreative" => "BaseDynamicAllocationCreative",
    "Creative" => "Creative",
    "BaseCreativeTemplateVariableValue" => "BaseCreativeTemplateVariableValue",
    "AdExchangeCreative" => "AdExchangeCreative",
    "HasHtmlSnippetDynamicAllocationCreative" => "HasHtmlSnippetDynamicAllocationCreative",
    "AdSenseCreative" => "AdSenseCreative",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "ApiVersionError" => "ApiVersionError",
    "AppliedLabel" => "AppliedLabel",
    "AspectRatioImageCreative" => "AspectRatioImageCreative",
    "HasDestinationUrlCreative" => "HasDestinationUrlCreative",
    "AssetCreativeTemplateVariableValue" => "AssetCreativeTemplateVariableValue",
    "Asset" => "Asset",
    "AssetError" => "AssetError",
    "Authentication" => "Authentication",
    "AuthenticationError" => "AuthenticationError",
    "BaseCustomFieldValue" => "BaseCustomFieldValue",
    "BaseFlashCreative" => "BaseFlashCreative",
    "BaseFlashRedirectCreative" => "BaseFlashRedirectCreative",
    "BaseImageCreative" => "BaseImageCreative",
    "BaseImageRedirectCreative" => "BaseImageRedirectCreative",
    "BaseRichMediaStudioCreative" => "BaseRichMediaStudioCreative",
    "BaseVideoCreative" => "BaseVideoCreative",
    "BooleanValue" => "BooleanValue",
    "Value" => "Value",
    "ClickTrackingCreative" => "ClickTrackingCreative",
    "ClientLogin" => "ClientLogin",
    "CommonError" => "CommonError",
    "ConversionEvent_TrackingUrlsMapEntry" => "ConversionEvent_TrackingUrlsMapEntry",
    "CreativeAsset" => "CreativeAsset",
    "CustomCreativeAsset" => "CustomCreativeAsset",
    "CreativeAssetMacroError" => "CreativeAssetMacroError",
    "CreativeError" => "CreativeError",
    "CreativePage" => "CreativePage",
    "CreativeSetError" => "CreativeSetError",
    "CustomCreative" => "CustomCreative",
    "CustomCreativeError" => "CustomCreativeError",
    "CustomFieldValue" => "CustomFieldValue",
    "Date" => "Date",
    "DateTimeValue" => "DateTimeValue",
    "LegacyDfpMobileCreative" => "LegacyDfpMobileCreative",
    "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
    "EntityLimitReachedError" => "EntityLimitReachedError",
    "FeatureError" => "FeatureError",
    "FileError" => "FileError",
    "FlashCreative" => "FlashCreative",
    "FlashExpandableCreative" => "FlashExpandableCreative",
    "FlashOverlayCreative" => "FlashOverlayCreative",
    "FlashPushdownCreative" => "FlashPushdownCreative",
    "FlashRedirectCreative" => "FlashRedirectCreative",
    "FlashRedirectOverlayCreative" => "FlashRedirectOverlayCreative",
    "FloatingFlashCreative" => "FloatingFlashCreative",
    "ImageCreative" => "ImageCreative",
    "ImageError" => "ImageError",
    "ImageOverlayCreative" => "ImageOverlayCreative",
    "ImageRedirectCreative" => "ImageRedirectCreative",
    "ImageRedirectOverlayCreative" => "ImageRedirectOverlayCreative",
    "InternalApiError" => "InternalApiError",
    "InternalRedirectCreative" => "InternalRedirectCreative",
    "InvalidUrlError" => "InvalidUrlError",
    "LabelEntityAssociationError" => "LabelEntityAssociationError",
    "LegacyDfpCreative" => "LegacyDfpCreative",
    "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
    "LongCreativeTemplateVariableValue" => "LongCreativeTemplateVariableValue",
    "NotNullError" => "NotNullError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "ParseError" => "ParseError",
    "PermissionError" => "PermissionError",
    "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
    "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RedirectAsset" => "RedirectAsset",
    "RequiredError" => "RequiredError",
    "RequiredNumberError" => "RequiredNumberError",
    "RequiredSizeError" => "RequiredSizeError",
    "RichMediaStudioChildAssetProperty" => "RichMediaStudioChildAssetProperty",
    "RichMediaStudioCreative" => "RichMediaStudioCreative",
    "RichMediaStudioCreativeError" => "RichMediaStudioCreativeError",
    "ServerError" => "ServerError",
    "Size" => "Size",
    "SoapRequestHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "Statement" => "Statement",
    "StatementError" => "StatementError",
    "StringCreativeTemplateVariableValue" => "StringCreativeTemplateVariableValue",
    "StringLengthError" => "StringLengthError",
    "String_ValueMapEntry" => "String_ValueMapEntry",
    "TemplateCreative" => "TemplateCreative",
    "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
    "TextAdCreative" => "TextAdCreative",
    "TextValue" => "TextValue",
    "ThirdPartyCreative" => "ThirdPartyCreative",
    "TrackingUrls" => "TrackingUrls",
    "TypeError" => "TypeError",
    "UniqueError" => "UniqueError",
    "UnsupportedCreative" => "UnsupportedCreative",
    "UrlCreativeTemplateVariableValue" => "UrlCreativeTemplateVariableValue",
    "VastRedirectCreative" => "VastRedirectCreative",
    "VideoCreative" => "VideoCreative",
    "VideoRedirectAsset" => "VideoRedirectAsset",
    "VideoRedirectCreative" => "VideoRedirectCreative",
    "VpaidLinearCreative" => "VpaidLinearCreative",
    "VpaidLinearRedirectCreative" => "VpaidLinearRedirectCreative",
    "ApiFramework" => "ApiFramework",
    "ApiVersionError.Reason" => "ApiVersionErrorReason",
    "AssetError.Reason" => "AssetErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "CommonError.Reason" => "CommonErrorReason",
    "ConversionEvent" => "ConversionEvent",
    "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
    "CreativeError.Reason" => "CreativeErrorReason",
    "CreativeSetError.Reason" => "CreativeSetErrorReason",
    "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
    "FeatureError.Reason" => "FeatureErrorReason",
    "FileError.Reason" => "FileErrorReason",
    "FlashExpandableCreative.ExpandDirection" => "FlashExpandableCreativeExpandDirection",
    "ImageError.Reason" => "ImageErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
    "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
    "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
    "NotNullError.Reason" => "NotNullErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "ParseError.Reason" => "ParseErrorReason",
    "PermissionError.Reason" => "PermissionErrorReason",
    "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
    "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
    "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
    "RichMediaStudioChildAssetProperty.Type" => "RichMediaStudioChildAssetPropertyType",
    "RichMediaStudioCreativeArtworkType" => "RichMediaStudioCreativeArtworkType",
    "RichMediaStudioCreativeBillingAttribute" => "RichMediaStudioCreativeBillingAttribute",
    "RichMediaStudioCreativeError.Reason" => "RichMediaStudioCreativeErrorReason",
    "RichMediaStudioCreativeFormat" => "RichMediaStudioCreativeFormat",
    "ServerError.Reason" => "ServerErrorReason",
    "StatementError.Reason" => "StatementErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TargetWindow" => "TargetWindow",
    "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
    "VastRedirectType" => "VastRedirectType",
    "createCreative" => "createCreative",
    "createCreativeResponse" => "createCreativeResponse",
    "createCreatives" => "createCreatives",
    "createCreativesResponse" => "createCreativesResponse",
    "getCreative" => "getCreative",
    "getCreativeResponse" => "getCreativeResponse",
    "getCreativesByStatement" => "getCreativesByStatement",
    "getCreativesByStatementResponse" => "getCreativesByStatementResponse",
    "updateCreative" => "updateCreative",
    "updateCreativeResponse" => "updateCreativeResponse",
    "updateCreatives" => "updateCreatives",
    "updateCreativesResponse" => "updateCreativesResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://www.google.com/apis/ads/publisher/v201208/CreativeService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CreativeService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CreativeService', 'https://www.google.com/apis/ads/publisher/v201208');
  }

  /**
   * Creates a new {@link Creative}.
   * 
   * The following fields are required along with the required fields of the
   * sub-class:
   * <ul>
   * <li>{@link Creative#advertiserId}</li>
   * <li>{@link Creative#name}</li>
   * <li>{@link Creative#size}</li>
   * </ul>
   * 
   * @param creative the creative to create
   * @return the new creative with its ID set
   */
  public function createCreative($creative) {
    $arg = new createCreative($creative);
    $result = $this->__soapCall("createCreative", array($arg));
    return $result->rval;
  }


  /**
   * Creates new {@link Creative} objects.
   * 
   * @param creatives the creatives to create
   * @return the created creatives with their IDs filled in
   */
  public function createCreatives($creatives) {
    $arg = new createCreatives($creatives);
    $result = $this->__soapCall("createCreatives", array($arg));
    return $result->rval;
  }


  /**
   * Returns the {@link Creative} uniquely identified by the given ID.
   * 
   * @param creativeId the ID of the creative, which must already exist
   * @return the {@code Creative} uniquely identified by the given ID
   */
  public function getCreative($creativeId) {
    $arg = new getCreative($creativeId);
    $result = $this->__soapCall("getCreative", array($arg));
    return $result->rval;
  }


  /**
   * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
   * given {@link Statement#query}. The following fields are supported for
   * filtering:
   * 
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link Creative#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link Creative#name}</td>
   * </tr>
   * <tr>
   * <td>{@code advertiserId}</td>
   * <td>{@link Creative#advertiserId}</td>
   * </tr>
   * <tr>
   * <td>{@code width}</td>
   * <td>{@link Creative#size}</td>
   * </tr>
   * <tr>
   * <td>{@code height}</td>
   * <td>{@link Creative#size}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link Creative#lastModifiedDateTime}</td>
   * </tr>
   * </table>
   * 
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of creatives
   * @return the creatives that match the given filter
   */
  public function getCreativesByStatement($filterStatement) {
    $arg = new getCreativesByStatement($filterStatement);
    $result = $this->__soapCall("getCreativesByStatement", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link Creative}.
   * 
   * @param creative the creative to update
   * @return the updated creative
   */
  public function updateCreative($creative) {
    $arg = new updateCreative($creative);
    $result = $this->__soapCall("updateCreative", array($arg));
    return $result->rval;
  }


  /**
   * Updates the specified {@link Creative} objects.
   * 
   * @param creatives the creatives to update
   * @return the updated creatives
   */
  public function updateCreatives($creatives) {
    $arg = new updateCreatives($creatives);
    $result = $this->__soapCall("updateCreatives", array($arg));
    return $result->rval;
  }


}}