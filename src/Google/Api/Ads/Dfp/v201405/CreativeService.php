<?php
/**
 * Contains all client objects for the CreativeService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("BaseCreativeTemplateVariableValue", false)) {
  /**
   * A base class for storing values of the {@link CreativeTemplateVariable}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseCreativeTemplateVariableValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseCreativeTemplateVariableValue";

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
    private $_parameterMap = array(
      "BaseCreativeTemplateVariableValue.Type" => "BaseCreativeTemplateVariableValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($uniqueName = null, $BaseCreativeTemplateVariableValueType = null) {
      $this->uniqueName = $uniqueName;
      $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
    }

  }
}

if (!class_exists("ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApiError";

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
    private $_parameterMap = array(
      "ApiError.Type" => "ApiErrorType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ApiVersionError", false)) {
  /**
   * Errors related to the usage of API versions.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApiVersionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApiVersionError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApplicationException";

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
    private $_parameterMap = array(
      "ApplicationException.Type" => "ApplicationExceptionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($message = null, $ApplicationExceptionType = null) {
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("AppliedLabel", false)) {
  /**
   * Represents a {@link Label} that can be applied to an entity. To negate an
   * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
   * inherited label's ID and {@code isNegated} set to true.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AppliedLabel {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AppliedLabel";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($labelId = null, $isNegated = null) {
      $this->labelId = $labelId;
      $this->isNegated = $isNegated;
    }

  }
}

if (!class_exists("AssetCreativeTemplateVariableValue", false)) {
  /**
   * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#ASSET}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AssetCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AssetCreativeTemplateVariableValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($assetId = null, $assetByteArray = null, $fileName = null, $uniqueName = null, $BaseCreativeTemplateVariableValueType = null) {
      parent::__construct();
      $this->assetId = $assetId;
      $this->assetByteArray = $assetByteArray;
      $this->fileName = $fileName;
      $this->uniqueName = $uniqueName;
      $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
    }

  }
}

if (!class_exists("Asset", false)) {
  /**
   * Base asset properties.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Asset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Asset";

    /**
     * @access public
     * @var string
     */
    public $AssetType;
    private $_parameterMap = array(
      "Asset.Type" => "AssetType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($AssetType = null) {
      $this->AssetType = $AssetType;
    }

  }
}

if (!class_exists("AssetError", false)) {
  /**
   * Lists all errors associated with assets.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AssetError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AssetError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Authentication", false)) {
  /**
   * A representation of the authentication protocols that can be used.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Authentication {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Authentication";

    /**
     * @access public
     * @var string
     */
    public $AuthenticationType;
    private $_parameterMap = array(
      "Authentication.Type" => "AuthenticationType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($AuthenticationType = null) {
      $this->AuthenticationType = $AuthenticationType;
    }

  }
}

if (!class_exists("AuthenticationError", false)) {
  /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AuthenticationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("BaseCustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} for a particular entity.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseCustomFieldValue";

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
    private $_parameterMap = array(
      "BaseCustomFieldValue.Type" => "BaseCustomFieldValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customFieldId = null, $BaseCustomFieldValueType = null) {
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("CommonError", false)) {
  /**
   * A place for common errors that can be used across services.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CommonError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CommonError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ConversionEvent_TrackingUrlsMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type ConversionEvent
   * and value of type TrackingUrls.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ConversionEvent_TrackingUrlsMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ConversionEvent_TrackingUrlsMapEntry";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("CreativeAsset", false)) {
  /**
   * A {@code CreativeAsset} is an asset that can be used in creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeAsset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeAsset";

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
     * @access public
     * @var string
     */
    public $assetUrl;

    /**
     * @access public
     * @var Size
     */
    public $size;

    /**
     * @access public
     * @var tnsImageDensity
     */
    public $imageDensity;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($assetId = null, $assetByteArray = null, $fileName = null, $fileSize = null, $assetUrl = null, $size = null, $imageDensity = null) {
      $this->assetId = $assetId;
      $this->assetByteArray = $assetByteArray;
      $this->fileName = $fileName;
      $this->fileSize = $fileSize;
      $this->assetUrl = $assetUrl;
      $this->size = $size;
      $this->imageDensity = $imageDensity;
    }

  }
}

if (!class_exists("CustomCreativeAsset", false)) {
  /**
   * A {@code CustomCreativeAsset} is an association between a
   * {@link CustomCreative} and an asset. Any assets that are associated with a
   * creative can be inserted into its HTML snippet.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CustomCreativeAsset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CustomCreativeAsset";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($macroName = null, $assetId = null, $assetByteArray = null, $fileName = null, $fileSize = null) {
      $this->macroName = $macroName;
      $this->assetId = $assetId;
      $this->assetByteArray = $assetByteArray;
      $this->fileName = $fileName;
      $this->fileSize = $fileSize;
    }

  }
}

if (!class_exists("CreativeAssetMacroError", false)) {
  /**
   * Lists all errors associated with creative asset macros.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeAssetMacroError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeAssetMacroError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Creative", false)) {
  /**
   * A {@code Creative} represents the media for the ad being served.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Creative";

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
    private $_parameterMap = array(
      "Creative.Type" => "CreativeType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("CreativeError", false)) {
  /**
   * Lists all errors associated with creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CreativePage", false)) {
  /**
   * Captures a page of {@link Creative} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativePage {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativePage";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($totalResultSetSize = null, $startIndex = null, $results = null) {
      $this->totalResultSetSize = $totalResultSetSize;
      $this->startIndex = $startIndex;
      $this->results = $results;
    }

  }
}

if (!class_exists("CreativeSetError", false)) {
  /**
   * Errors relating to creative sets & subclasses.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeSetError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeSetError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CustomCreativeError", false)) {
  /**
   * Lists all errors associated with custom creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CustomCreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CustomCreativeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CustomFieldValue", false)) {
  /**
   * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CustomFieldValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $customFieldId = null, $BaseCustomFieldValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("Date", false)) {
  /**
   * Represents a date.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Date {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Date";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($year = null, $month = null, $day = null) {
      $this->year = $year;
      $this->month = $month;
      $this->day = $day;
    }

  }
}

if (!class_exists("DfpDateTime", false)) {
  /**
   * Represents a date combined with the time of day.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class DfpDateTime {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "DateTime";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($date = null, $hour = null, $minute = null, $second = null, $timeZoneID = null) {
      $this->date = $date;
      $this->hour = $hour;
      $this->minute = $minute;
      $this->second = $second;
      $this->timeZoneID = $timeZoneID;
    }

  }
}

if (!class_exists("DropDownCustomFieldValue", false)) {
  /**
   * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class DropDownCustomFieldValue extends BaseCustomFieldValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "DropDownCustomFieldValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($customFieldOptionId = null, $customFieldId = null, $BaseCustomFieldValueType = null) {
      parent::__construct();
      $this->customFieldOptionId = $customFieldOptionId;
      $this->customFieldId = $customFieldId;
      $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
    }

  }
}

if (!class_exists("EntityLimitReachedError", false)) {
  /**
   * An error that occurs when creating an entity if the limit on the number of allowed entities for
   * a network has already been reached.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class EntityLimitReachedError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "EntityLimitReachedError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("FeatureError", false)) {
  /**
   * Errors related to feature management.  If you attempt using a feature that is not available to
   * the current network you'll receive a FeatureError with the missing feature as the trigger.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FeatureError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FeatureError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("FileError", false)) {
  /**
   * A list of all errors to be used for problems related to files.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FileError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FileError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("HasDestinationUrlCreative", false)) {
  /**
   * A {@code Creative} that has a destination url
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class HasDestinationUrlCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "HasDestinationUrlCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($destinationUrl = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("ImageError", false)) {
  /**
   * Lists all errors associated with images.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InternalApiError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("InternalRedirectCreative", false)) {
  /**
   * A {@code Creative} hosted by either DoubleClick for Advertisers (DFA) or DART
   * for Publishers.
   * <p>
   * Similar to third-party creatives, a DoubleClick tag is used to retrieve a
   * creative asset. However, DoubleClick tags are not sent to the user's browser.
   * Instead, they are processed internally within the DoubleClick system..
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InternalRedirectCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InternalRedirectCreative";

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * @access public
     * @var Size
     */
    public $assetSize;

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($lockedOrientation = null, $assetSize = null, $internalRedirectUrl = null, $overrideSize = null, $isInterstitial = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
      parent::__construct();
      $this->lockedOrientation = $lockedOrientation;
      $this->assetSize = $assetSize;
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

  }
}

if (!class_exists("InvalidPhoneNumberError", false)) {
  /**
   * Lists all errors associated with phone numbers.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InvalidPhoneNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InvalidPhoneNumberError";

    /**
     * @access public
     * @var tnsInvalidPhoneNumberErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("InvalidUrlError", false)) {
  /**
   * Lists all errors associated with URLs.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InvalidUrlError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InvalidUrlError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("LabelEntityAssociationError", false)) {
  /**
   * Errors specific to creating label entity associations.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LabelEntityAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LabelEntityAssociationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("LegacyDfpCreative", false)) {
  /**
   * A {@code Creative} that isn't supported by Google DFP, but was migrated
   * from DART. Creatives of this type cannot be created or modified.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LegacyDfpCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LegacyDfpCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("LineItemCreativeAssociationError", false)) {
  /**
   * Lists all errors associated with line item-to-creative association dates.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LineItemCreativeAssociationError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LineItemCreativeAssociationError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("LongCreativeTemplateVariableValue", false)) {
  /**
   * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#LONG}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LongCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LongCreativeTemplateVariableValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $uniqueName = null, $BaseCreativeTemplateVariableValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->uniqueName = $uniqueName;
      $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
    }

  }
}

if (!class_exists("NotNullError", false)) {
  /**
   * Caused by supplying a null value for an attribute that cannot be null.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class NotNullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "NotNullError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "NullError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ParseError", false)) {
  /**
   * Lists errors related to parsing.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ParseError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ParseError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("PermissionError", false)) {
  /**
   * Errors related to incorrect permission.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PermissionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PermissionError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ProgrammaticCreative", false)) {
  /**
   * A {@code Creative} used for programmatic trafficking. This creative will be auto-created with
   * the right approval from the buyer. This creative cannot be created through
   * the API. This creative can be updated.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ProgrammaticCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ProgrammaticCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("PublisherQueryLanguageContextError", false)) {
  /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PublisherQueryLanguageContextError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PublisherQueryLanguageContextError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("PublisherQueryLanguageSyntaxError", false)) {
  /**
   * An error that occurs while parsing a PQL query contained in a
   * {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PublisherQueryLanguageSyntaxError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PublisherQueryLanguageSyntaxError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("QuotaError", false)) {
  /**
   * Describes a client-side error on which a user is attempting
   * to perform an action to which they have no quota remaining.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class QuotaError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "QuotaError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RangeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RedirectAsset", false)) {
  /**
   * An externally hosted asset.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RedirectAsset extends Asset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RedirectAsset";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($redirectUrl = null, $AssetType = null) {
      parent::__construct();
      $this->redirectUrl = $redirectUrl;
      $this->AssetType = $AssetType;
    }

  }
}

if (!class_exists("RequiredCollectionError", false)) {
  /**
   * A list of all errors to be used for validating sizes of collections.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredCollectionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredCollectionError";

    /**
     * @access public
     * @var tnsRequiredCollectionErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RequiredNumberError", false)) {
  /**
   * A list of all errors to be used in conjunction with required number
   * validators.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredNumberError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredNumberError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RequiredSizeError", false)) {
  /**
   * A list of all errors to be used for validating {@link Size}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredSizeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RichMediaStudioChildAssetProperty", false)) {
  /**
   * Represents a child asset in {@code RichMediaStudioCreative}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioChildAssetProperty {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioChildAssetProperty";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($name = null, $type = null, $totalFileSize = null, $width = null, $height = null, $url = null) {
      $this->name = $name;
      $this->type = $type;
      $this->totalFileSize = $totalFileSize;
      $this->width = $width;
      $this->height = $height;
      $this->url = $url;
    }

  }
}

if (!class_exists("RichMediaStudioCreativeError", false)) {
  /**
   * Lists all errors associated with Rich Media Studio creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreativeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ServerError", false)) {
  /**
   * Errors related to the server.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ServerError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ServerError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Size", false)) {
  /**
   * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
   * <p>
   * For interstitial size (out-of-page), {@code Size} must be 1x1.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Size {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Size";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($width = null, $height = null, $isAspectRatio = null) {
      $this->width = $width;
      $this->height = $height;
      $this->isAspectRatio = $isAspectRatio;
    }

  }
}

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Represents the SOAP request header used by API requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SoapRequestHeader";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($networkCode = null, $applicationName = null, $authentication = null) {
      $this->networkCode = $networkCode;
      $this->applicationName = $applicationName;
      $this->authentication = $authentication;
    }

  }
}

if (!class_exists("SoapResponseHeader", false)) {
  /**
   * Represents the SOAP request header used by API responses.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SoapResponseHeader";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($requestId = null, $responseTime = null) {
      $this->requestId = $requestId;
      $this->responseTime = $responseTime;
    }

  }
}

if (!class_exists("Statement", false)) {
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
   * @subpackage v201405
   */
  class Statement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Statement";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($query = null, $values = null) {
      $this->query = $query;
      $this->values = $values;
    }

  }
}

if (!class_exists("StatementError", false)) {
  /**
   * An error that occurs while parsing {@link Statement} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class StatementError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "StatementError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("StringCreativeTemplateVariableValue", false)) {
  /**
   * Stores values of {@link CreativeTemplateVariable} of
   * {@link VariableType#STRING} and {@link VariableType#LIST}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class StringCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "StringCreativeTemplateVariableValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $uniqueName = null, $BaseCreativeTemplateVariableValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->uniqueName = $uniqueName;
      $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
    }

  }
}

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors for Strings which do not meet given length constraints.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "StringLengthError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("String_ValueMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type String
   * and value of type Value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class String_ValueMapEntry {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "String_ValueMapEntry";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("SwiffyConversionError", false)) {
  /**
   * Error for converting flash to swiffy asset.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SwiffyConversionError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SwiffyConversionError";

    /**
     * @access public
     * @var tnsSwiffyConversionErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("SwiffyFallbackAsset", false)) {
  /**
   * A fallback swiffy asset used for flash creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SwiffyFallbackAsset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SwiffyFallbackAsset";

    /**
     * @access public
     * @var CreativeAsset
     */
    public $asset;

    /**
     * @access public
     * @var tnsHtml5Feature[]
     */
    public $html5Features;

    /**
     * @access public
     * @var string[]
     */
    public $localizedInfoMessages;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($asset = null, $html5Features = null, $localizedInfoMessages = null) {
      $this->asset = $asset;
      $this->html5Features = $html5Features;
      $this->localizedInfoMessages = $localizedInfoMessages;
    }

  }
}

if (!class_exists("TemplateCreative", false)) {
  /**
   * A {@code Creative} that is created by the specified creative template.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TemplateCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TemplateCreative";

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
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var BaseCreativeTemplateVariableValue[]
     */
    public $creativeTemplateVariableValues;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($creativeTemplateId = null, $isInterstitial = null, $destinationUrl = null, $creativeTemplateVariableValues = null, $lockedOrientation = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
      parent::__construct();
      $this->creativeTemplateId = $creativeTemplateId;
      $this->isInterstitial = $isInterstitial;
      $this->destinationUrl = $destinationUrl;
      $this->creativeTemplateVariableValues = $creativeTemplateVariableValues;
      $this->lockedOrientation = $lockedOrientation;
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

  }
}

if (!class_exists("TemplateInstantiatedCreativeError", false)) {
  /**
   * Lists all errors associated with template instantiated creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TemplateInstantiatedCreativeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TemplateInstantiatedCreativeError";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ThirdPartyCreative", false)) {
  /**
   * A {@code Creative} that is served by a 3rd-party vendor.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ThirdPartyCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ThirdPartyCreative";

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
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($snippet = null, $expandedSnippet = null, $lockedOrientation = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
      parent::__construct();
      $this->snippet = $snippet;
      $this->expandedSnippet = $expandedSnippet;
      $this->lockedOrientation = $lockedOrientation;
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

  }
}

if (!class_exists("TrackingUrls", false)) {
  /**
   * A list of URLs that should be pinged for a conversion event.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TrackingUrls {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TrackingUrls";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($urls = null) {
      $this->urls = $urls;
    }

  }
}

if (!class_exists("TypeError", false)) {
  /**
   * An error for a field which is an invalid type.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TypeError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TypeError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("UniqueError", false)) {
  /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class UniqueError extends ApiError {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "UniqueError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("UnsupportedCreative", false)) {
  /**
   * A {@code Creative} that isn't supported by this version of the API.
   * This object is readonly and when encountered should be reported
   * on the DFP API forum.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class UnsupportedCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "UnsupportedCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($unsupportedCreativeType = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("UrlCreativeTemplateVariableValue", false)) {
  /**
   * Stores values of {@link CreativeTemplateVariable} of {@link VariableType#URL}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class UrlCreativeTemplateVariableValue extends BaseCreativeTemplateVariableValue {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "UrlCreativeTemplateVariableValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $uniqueName = null, $BaseCreativeTemplateVariableValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->uniqueName = $uniqueName;
      $this->BaseCreativeTemplateVariableValueType = $BaseCreativeTemplateVariableValueType;
    }

  }
}

if (!class_exists("Value", false)) {
  /**
   * {@code Value} represents a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Value";

    /**
     * @access public
     * @var string
     */
    public $ValueType;
    private $_parameterMap = array(
      "Value.Type" => "ValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ValueType = null) {
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("VastRedirectCreative", false)) {
  /**
   * A {@code Creative} that points to an externally hosted VAST ad and is
   * served via VAST XML as a VAST Wrapper.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VastRedirectCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VastRedirectCreative";

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
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($vastXmlUrl = null, $vastRedirectType = null, $duration = null, $companionCreativeIds = null, $trackingUrls = null, $vastPreviewUrl = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
      parent::__construct();
      $this->vastXmlUrl = $vastXmlUrl;
      $this->vastRedirectType = $vastRedirectType;
      $this->duration = $duration;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->vastPreviewUrl = $vastPreviewUrl;
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

  }
}

if (!class_exists("VideoRedirectAsset", false)) {
  /**
   * An externally-hosted video asset.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VideoRedirectAsset extends RedirectAsset {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VideoRedirectAsset";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($redirectUrl = null) {
      parent::__construct();
      $this->redirectUrl = $redirectUrl;
    }

  }
}

if (!class_exists("VpaidLinearCreative", false)) {
  /**
   * A {@code Creative} that displays a DFP-hosted Flash-based ad
   * and is served via VAST 2.0 XML.  It is displayed in a linear fashion
   * with a video (before, after, interrupting).  This creative is read only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VpaidLinearCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VpaidLinearCreative";

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
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($flashName = null, $flashByteArray = null, $overrideSize = null, $flashAssetSize = null, $companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $duration = null, $vastPreviewUrl = null, $destinationUrl = null) {
      parent::__construct();
      $this->flashName = $flashName;
      $this->flashByteArray = $flashByteArray;
      $this->overrideSize = $overrideSize;
      $this->flashAssetSize = $flashAssetSize;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->duration = $duration;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("VpaidLinearRedirectCreative", false)) {
  /**
   * A {@code Creative} that displays an externally hosted Flash-based ad
   * and is served via VAST 2.0 XML.  It is displayed in a linear fashion
   * with a video (before, after, interrupting).  This creative is read only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VpaidLinearRedirectCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VpaidLinearRedirectCreative";

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
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $duration = null, $flashUrl = null, $flashAssetSize = null, $vastPreviewUrl = null, $destinationUrl = null) {
      parent::__construct();
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->duration = $duration;
      $this->flashUrl = $flashUrl;
      $this->flashAssetSize = $flashAssetSize;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("ApiFramework", false)) {
  /**
   * The various ApiFramework types.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApiFramework {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApiFramework";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ApiVersionErrorReason", false)) {
  /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApiVersionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApiVersionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AssetErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AssetErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AssetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The SOAP message contains a request header with an ambiguous definition
   * of the authentication header fields. This means either the {@code
   * authToken} and {@code oAuthToken} fields were both null or both were
   * specified. Exactly one value should be specified with each request.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AuthenticationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CommonErrorReason", false)) {
  /**
   * Describes reasons for common errors
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CommonErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CommonError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ConversionEvent", false)) {
  /**
   * All possible tracking event types.  Not all events are supported by every
   * kind of creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ConversionEvent {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ConversionEvent";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CreativeAssetMacroErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeAssetMacroErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeAssetMacroError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CreativeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CreativeSetErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeSetErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CreativeSetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CustomCreativeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CustomCreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CustomCreativeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("FeatureErrorReason", false)) {
  /**
   * A feature is being used that is not enabled on the current network.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FeatureErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FeatureError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("FileErrorReason", false)) {
  /**
   * The provided byte array is empty.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FileErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FileError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("Html5Feature", false)) {
  /**
   * An HTML5 features required by HTML5 assets.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class Html5Feature {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "Html5Feature";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ImageDensity", false)) {
  /**
   * Image densities.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageDensity {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageDensity";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ImageErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InternalApiError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InvalidPhoneNumberErrorReason", false)) {
  /**
   * The phone number is invalid.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InvalidPhoneNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InvalidPhoneNumberError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InvalidUrlErrorReason", false)) {
  /**
   * The URL contains invalid characters.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class InvalidUrlErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "InvalidUrlError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("LabelEntityAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LabelEntityAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LabelEntityAssociationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("LineItemCreativeAssociationErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LineItemCreativeAssociationErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LineItemCreativeAssociationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("LockedOrientation", false)) {
  /**
   * Describes the orientation that a creative should be served with.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LockedOrientation {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LockedOrientation";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NotNullErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class NotNullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "NotNullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "NullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ParseErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ParseErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ParseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("PermissionErrorReason", false)) {
  /**
   * Describes reasons for permission errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PermissionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PermissionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("PublisherQueryLanguageContextErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PublisherQueryLanguageContextErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PublisherQueryLanguageContextError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("PublisherQueryLanguageSyntaxErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class PublisherQueryLanguageSyntaxErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "PublisherQueryLanguageSyntaxError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("QuotaErrorReason", false)) {
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
   * @subpackage v201405
   */
  class QuotaErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "QuotaError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RangeErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredCollectionErrorReason", false)) {
  /**
   * A required collection is missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredCollectionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredCollectionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredNumberErrorReason", false)) {
  /**
   * Describes reasons for a number to be invalid.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredNumberErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredNumberError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredSizeErrorReason", false)) {
  /**
   * {@link Creative#size} or {@link LineItem#creativeSizes} is
   * missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RequiredSizeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RequiredSizeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RichMediaStudioChildAssetPropertyType", false)) {
  /**
   * Type of {@code RichMediaStudioChildAssetProperty}
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioChildAssetPropertyType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioChildAssetProperty.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RichMediaStudioCreativeArtworkType", false)) {
  /**
   * Rich Media Studio creative artwork types.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreativeArtworkType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreativeArtworkType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RichMediaStudioCreativeBillingAttribute", false)) {
  /**
   * Rich Media Studio creative supported billing attributes.
   * <p>
   * This is determined by Rich Media Studio based on the content
   * of the creative and is not updateable.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreativeBillingAttribute {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreativeBillingAttribute";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RichMediaStudioCreativeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreativeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RichMediaStudioCreativeFormat", false)) {
  /**
   * Different creative format supported by Rich Media Studio creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreativeFormat {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreativeFormat";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ServerErrorReason", false)) {
  /**
   * Describes reasons for server errors
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ServerErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ServerError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StatementErrorReason", false)) {
  /**
   * A bind variable has not been bound to a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class StatementErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "StatementError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "StringLengthError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("SwiffyConversionErrorReason", false)) {
  /**
   * Error reason for {@link SwiffyConversionError}.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SwiffyConversionErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SwiffyConversionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TemplateInstantiatedCreativeErrorReason", false)) {
  /**
   * The reason for the error
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TemplateInstantiatedCreativeErrorReason {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TemplateInstantiatedCreativeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("VastRedirectType", false)) {
  /**
   * The types of VAST ads that a {@link VastRedirectCreative} can point to.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VastRedirectType {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VastRedirectType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CreateCreatives", false)) {
  /**
   * Creates new {@link Creative} objects.
   * 
   * @param creatives the creatives to create
   * @return the created creatives with their IDs filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreateCreatives {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($creatives = null) {
      $this->creatives = $creatives;
    }

  }
}

if (!class_exists("CreateCreativesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreateCreativesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("GetCreativesByStatement", false)) {
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
   * @subpackage v201405
   */
  class GetCreativesByStatement {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($filterStatement = null) {
      $this->filterStatement = $filterStatement;
    }

  }
}

if (!class_exists("GetCreativesByStatementResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class GetCreativesByStatementResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("UpdateCreatives", false)) {
  /**
   * Updates the specified {@link Creative} objects.
   * 
   * @param creatives the creatives to update
   * @return the updated creatives
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class UpdateCreatives {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($creatives = null) {
      $this->creatives = $creatives;
    }

  }
}

if (!class_exists("UpdateCreativesResponse", false)) {
  /**
   * 
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class UpdateCreativesResponse {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("BaseDynamicAllocationCreative", false)) {
  /**
   * A base class for dynamic allocation creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseDynamicAllocationCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseDynamicAllocationCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("AdMobBackfillCreative", false)) {
  /**
   * An AdMob backfill creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AdMobBackfillCreative extends BaseDynamicAllocationCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AdMobBackfillCreative";

    /**
     * @access public
     * @var string
     */
    public $additionalParameters;

    /**
     * @access public
     * @var string
     */
    public $publisherId;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($additionalParameters = null, $publisherId = null, $lockedOrientation = null) {
      parent::__construct();
      $this->additionalParameters = $additionalParameters;
      $this->publisherId = $publisherId;
      $this->lockedOrientation = $lockedOrientation;
    }

  }
}

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ApiException";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($errors = null, $message = null, $ApplicationExceptionType = null) {
      parent::__construct();
      $this->errors = $errors;
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("AspectRatioImageCreative", false)) {
  /**
   * A {@code Creative} intended for mobile platforms that displays an image,
   * whose {@link LineItem#creativePlaceholders size} is defined as an
   * {@link CreativeSizeType#ASPECT_RATIO aspect ratio}, i.e.
   * {@link Size#isAspectRatio}. It can have multiple images whose dimensions
   * conform to that aspect ratio.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AspectRatioImageCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AspectRatioImageCreative";

    /**
     * @access public
     * @var CreativeAsset[]
     */
    public $imageAssets;

    /**
     * @access public
     * @var string
     */
    public $altText;

    /**
     * @access public
     * @var string
     */
    public $thirdPartyImpressionUrl;

    /**
     * @access public
     * @var boolean
     */
    public $overrideSize;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($imageAssets = null, $altText = null, $thirdPartyImpressionUrl = null, $overrideSize = null, $destinationUrl = null) {
      parent::__construct();
      $this->imageAssets = $imageAssets;
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      $this->overrideSize = $overrideSize;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("BaseFlashCreative", false)) {
  /**
   * A base type for creatives that display a Flash-based ad. If the Flash ad
   * cannot load, a fallback image is displayed instead.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseFlashCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseFlashCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($flashName = null, $flashByteArray = null, $fallbackImageName = null, $fallbackImageByteArray = null, $overrideSize = null, $clickTagRequired = null, $fallbackPreviewUrl = null, $flashAssetSize = null, $fallbackAssetSize = null, $destinationUrl = null) {
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
    }

  }
}

if (!class_exists("BaseFlashRedirectCreative", false)) {
  /**
   * The base type for creatives that load a Flash asset from a specified URL.
   * If the remote flash asset cannot be served, a fallback image is used at an
   * alternate URL.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseFlashRedirectCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseFlashRedirectCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null, $destinationUrl = null) {
      parent::__construct();
      $this->flashUrl = $flashUrl;
      $this->fallbackUrl = $fallbackUrl;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("BaseImageCreative", false)) {
  /**
   * The base type for creatives that display an image.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseImageCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseImageCreative";

    /**
     * @access public
     * @var boolean
     */
    public $overrideSize;

    /**
     * @access public
     * @var CreativeAsset
     */
    public $primaryImageAsset;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($overrideSize = null, $primaryImageAsset = null, $destinationUrl = null) {
      parent::__construct();
      $this->overrideSize = $overrideSize;
      $this->primaryImageAsset = $primaryImageAsset;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("BaseImageRedirectCreative", false)) {
  /**
   * The base type for creatives that load an image asset from a specified URL.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseImageRedirectCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseImageRedirectCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($imageUrl = null, $destinationUrl = null) {
      parent::__construct();
      $this->imageUrl = $imageUrl;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("BaseRichMediaStudioCreative", false)) {
  /**
   * A {@code Creative} that is created by a Rich Media Studio.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseRichMediaStudioCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseRichMediaStudioCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, $adTagKeys = null, $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, $richMediaStudioChildAssetProperties = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("BaseVideoCreative", false)) {
  /**
   * A base type for video creatives.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BaseVideoCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BaseVideoCreative";

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
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($duration = null, $allowDurationOverride = null, $trackingUrls = null, $companionCreativeIds = null, $customParameters = null, $vastPreviewUrl = null, $destinationUrl = null) {
      parent::__construct();
      $this->duration = $duration;
      $this->allowDurationOverride = $allowDurationOverride;
      $this->trackingUrls = $trackingUrls;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->customParameters = $customParameters;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("BooleanValue", false)) {
  /**
   * Contains a boolean value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class BooleanValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "BooleanValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $ValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("ClickTrackingCreative", false)) {
  /**
   * A creative that is used for tracking clicks on ads that are served directly
   * from the customers' web servers or media servers.
   * NOTE: The size attribute is not used for click tracking creative and it will
   * not be persisted upon save.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ClickTrackingCreative extends Creative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ClickTrackingCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($clickTrackingUrl = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null) {
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

  }
}

if (!class_exists("CustomCreative", false)) {
  /**
   * A {@code Creative} that contains an arbitrary HTML snippet and file assets.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CustomCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "CustomCreative";

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
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($htmlSnippet = null, $customCreativeAssets = null, $isInterstitial = null, $lockedOrientation = null, $destinationUrl = null) {
      parent::__construct();
      $this->htmlSnippet = $htmlSnippet;
      $this->customCreativeAssets = $customCreativeAssets;
      $this->isInterstitial = $isInterstitial;
      $this->lockedOrientation = $lockedOrientation;
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("DateTimeValue", false)) {
  /**
   * Contains a date-time value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class DateTimeValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "DateTimeValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $ValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("DateValue", false)) {
  /**
   * Contains a date value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class DateValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "DateValue";

    /**
     * @access public
     * @var Date
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $ValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("LegacyDfpMobileCreative", false)) {
  /**
   * A mobile {@code Creative} that isn't supported by Google DFP, but was
   * migrated from DART. Creatives of this type cannot be created or modified.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class LegacyDfpMobileCreative extends HasDestinationUrlCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "LegacyDfpMobileCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($destinationUrl = null) {
      parent::__construct();
      $this->destinationUrl = $destinationUrl;
    }

  }
}

if (!class_exists("FlashCreative", false)) {
  /**
   * A {@code Creative} that displays a Flash-based ad. If the Flash ad cannot
   * load, a fallback image is displayed instead.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FlashCreative extends BaseFlashCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FlashCreative";

    /**
     * @access public
     * @var SwiffyFallbackAsset
     */
    public $swiffyAsset;

    /**
     * @access public
     * @var boolean
     */
    public $createSwiffyAsset;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * @access public
     * @var boolean
     */
    public $clickTagOverlayEnabled;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($swiffyAsset = null, $createSwiffyAsset = null, $lockedOrientation = null, $clickTagOverlayEnabled = null, $flashName = null, $flashByteArray = null, $fallbackImageName = null, $fallbackImageByteArray = null, $overrideSize = null, $clickTagRequired = null, $fallbackPreviewUrl = null, $flashAssetSize = null, $fallbackAssetSize = null) {
      parent::__construct();
      $this->swiffyAsset = $swiffyAsset;
      $this->createSwiffyAsset = $createSwiffyAsset;
      $this->lockedOrientation = $lockedOrientation;
      $this->clickTagOverlayEnabled = $clickTagOverlayEnabled;
      $this->flashName = $flashName;
      $this->flashByteArray = $flashByteArray;
      $this->fallbackImageName = $fallbackImageName;
      $this->fallbackImageByteArray = $fallbackImageByteArray;
      $this->overrideSize = $overrideSize;
      $this->clickTagRequired = $clickTagRequired;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
      $this->flashAssetSize = $flashAssetSize;
      $this->fallbackAssetSize = $fallbackAssetSize;
    }

  }
}

if (!class_exists("FlashOverlayCreative", false)) {
  /**
   * An overlay {@code Creative} that displays a Flash-based ad and is
   * served via VAST 2.0 XML. Overlays cover part of the video content
   * they are displayed on top of.  This creative is read-only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FlashOverlayCreative extends BaseFlashCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FlashOverlayCreative";

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
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $apiFramework = null, $duration = null, $vastPreviewUrl = null, $lockedOrientation = null, $flashName = null, $flashByteArray = null, $fallbackImageName = null, $fallbackImageByteArray = null, $overrideSize = null, $clickTagRequired = null, $fallbackPreviewUrl = null, $flashAssetSize = null, $fallbackAssetSize = null) {
      parent::__construct();
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->apiFramework = $apiFramework;
      $this->duration = $duration;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->lockedOrientation = $lockedOrientation;
      $this->flashName = $flashName;
      $this->flashByteArray = $flashByteArray;
      $this->fallbackImageName = $fallbackImageName;
      $this->fallbackImageByteArray = $fallbackImageByteArray;
      $this->overrideSize = $overrideSize;
      $this->clickTagRequired = $clickTagRequired;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
      $this->flashAssetSize = $flashAssetSize;
      $this->fallbackAssetSize = $fallbackAssetSize;
    }

  }
}

if (!class_exists("FlashRedirectCreative", false)) {
  /**
   * A {@code Creative} that loads a Flash asset from a specified URL. If the
   * remote flash asset cannot be served, a fallback image is used at an
   * alternate URL.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FlashRedirectCreative extends BaseFlashRedirectCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FlashRedirectCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null) {
      parent::__construct();
      $this->flashUrl = $flashUrl;
      $this->fallbackUrl = $fallbackUrl;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    }

  }
}

if (!class_exists("FlashRedirectOverlayCreative", false)) {
  /**
   * An overlay {@code Creative} that loads a Flash asset from a specified URL
   * and is served via VAST 2.0 XML. Overlays cover part of the video content
   * they are displayed on top of.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class FlashRedirectOverlayCreative extends BaseFlashRedirectCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "FlashRedirectOverlayCreative";

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
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $apiFramework = null, $duration = null, $flashAssetSize = null, $vastPreviewUrl = null, $flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null) {
      parent::__construct();
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->apiFramework = $apiFramework;
      $this->duration = $duration;
      $this->flashAssetSize = $flashAssetSize;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->flashUrl = $flashUrl;
      $this->fallbackUrl = $fallbackUrl;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
    }

  }
}

if (!class_exists("HasHtmlSnippetDynamicAllocationCreative", false)) {
  /**
   * Dynamic allocation creative with a backfill code snippet.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class HasHtmlSnippetDynamicAllocationCreative extends BaseDynamicAllocationCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "HasHtmlSnippetDynamicAllocationCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($codeSnippet = null) {
      parent::__construct();
      $this->codeSnippet = $codeSnippet;
    }

  }
}

if (!class_exists("ImageCreative", false)) {
  /**
   * A {@code Creative} that displays an image.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageCreative extends BaseImageCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageCreative";

    /**
     * @access public
     * @var string
     */
    public $altText;

    /**
     * @access public
     * @var string
     */
    public $thirdPartyImpressionUrl;

    /**
     * @access public
     * @var CreativeAsset[]
     */
    public $secondaryImageAssets;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($altText = null, $thirdPartyImpressionUrl = null, $secondaryImageAssets = null, $lockedOrientation = null, $overrideSize = null, $primaryImageAsset = null) {
      parent::__construct();
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      $this->secondaryImageAssets = $secondaryImageAssets;
      $this->lockedOrientation = $lockedOrientation;
      $this->overrideSize = $overrideSize;
      $this->primaryImageAsset = $primaryImageAsset;
    }

  }
}

if (!class_exists("ImageOverlayCreative", false)) {
  /**
   * An overlay {@code Creative} that displays an image and is served via VAST
   * 2.0 XML. Overlays cover part of the video content they are displayed on
   * top of. This creative is read only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageOverlayCreative extends BaseImageCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageOverlayCreative";

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
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

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
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($companionCreativeIds = null, $trackingUrls = null, $lockedOrientation = null, $customParameters = null, $duration = null, $vastPreviewUrl = null, $overrideSize = null, $primaryImageAsset = null) {
      parent::__construct();
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->lockedOrientation = $lockedOrientation;
      $this->customParameters = $customParameters;
      $this->duration = $duration;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->overrideSize = $overrideSize;
      $this->primaryImageAsset = $primaryImageAsset;
    }

  }
}

if (!class_exists("ImageRedirectCreative", false)) {
  /**
   * A {@code Creative} that loads an image asset from a specified URL.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageRedirectCreative extends BaseImageRedirectCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageRedirectCreative";

    /**
     * @access public
     * @var string
     */
    public $altText;

    /**
     * @access public
     * @var string
     */
    public $thirdPartyImpressionUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($altText = null, $thirdPartyImpressionUrl = null, $imageUrl = null) {
      parent::__construct();
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      $this->imageUrl = $imageUrl;
    }

  }
}

if (!class_exists("ImageRedirectOverlayCreative", false)) {
  /**
   * An overlay {@code Creative} that loads an image asset from a specified URL
   * and is served via VAST 2.0 XML. Overlays cover part of the video content
   * they are displayed on top of.  This creative is read only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class ImageRedirectOverlayCreative extends BaseImageRedirectCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "ImageRedirectOverlayCreative";

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
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($assetSize = null, $duration = null, $companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $vastPreviewUrl = null, $imageUrl = null) {
      parent::__construct();
      $this->assetSize = $assetSize;
      $this->duration = $duration;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->imageUrl = $imageUrl;
    }

  }
}

if (!class_exists("NumberValue", false)) {
  /**
   * Contains a numeric value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class NumberValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "NumberValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $ValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("RichMediaStudioCreative", false)) {
  /**
   * A {@code Creative} that is created by a Rich Media Studio. You cannot create this creative,
   * but you can update some fields of this creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class RichMediaStudioCreative extends BaseRichMediaStudioCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "RichMediaStudioCreative";

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($lockedOrientation = null, $isInterstitial = null, $studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, $adTagKeys = null, $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, $richMediaStudioChildAssetProperties = null) {
      parent::__construct();
      $this->lockedOrientation = $lockedOrientation;
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
    }

  }
}

if (!class_exists("SetValue", false)) {
  /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class SetValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "SetValue";

    /**
     * @access public
     * @var Value[]
     */
    public $values;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($values = null, $ValueType = null) {
      parent::__construct();
      $this->values = $values;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("TextValue", false)) {
  /**
   * Contains a string value.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class TextValue extends Value {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "TextValue";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $ValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ValueType = $ValueType;
    }

  }
}

if (!class_exists("VideoCreative", false)) {
  /**
   * A {@code Creative} that contains DFP-hosted video ads and is served
   * via VAST 2.0 XML.  This creative is read-only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VideoCreative extends BaseVideoCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VideoCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($duration = null, $allowDurationOverride = null, $trackingUrls = null, $companionCreativeIds = null, $customParameters = null, $vastPreviewUrl = null) {
      parent::__construct();
      $this->duration = $duration;
      $this->allowDurationOverride = $allowDurationOverride;
      $this->trackingUrls = $trackingUrls;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->customParameters = $customParameters;
      $this->vastPreviewUrl = $vastPreviewUrl;
    }

  }
}

if (!class_exists("VideoRedirectCreative", false)) {
  /**
   * A {@code Creative} that contains externally hosted video ads and
   * is served via VAST 2.0 XML.  This creative is read-only.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class VideoRedirectCreative extends BaseVideoCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "VideoRedirectCreative";

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
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($videoAssets = null, $duration = null, $allowDurationOverride = null, $trackingUrls = null, $companionCreativeIds = null, $customParameters = null, $vastPreviewUrl = null) {
      parent::__construct();
      $this->videoAssets = $videoAssets;
      $this->duration = $duration;
      $this->allowDurationOverride = $allowDurationOverride;
      $this->trackingUrls = $trackingUrls;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->customParameters = $customParameters;
      $this->vastPreviewUrl = $vastPreviewUrl;
    }

  }
}

if (!class_exists("AdExchangeCreative", false)) {
  /**
   * An Ad Exchange dynamic allocation creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AdExchangeCreative extends HasHtmlSnippetDynamicAllocationCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AdExchangeCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($codeSnippet = null) {
      parent::__construct();
      $this->codeSnippet = $codeSnippet;
    }

  }
}

if (!class_exists("AdSenseCreative", false)) {
  /**
   * An AdSense dynamic allocation creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class AdSenseCreative extends HasHtmlSnippetDynamicAllocationCreative {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const XSI_TYPE = "AdSenseCreative";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($codeSnippet = null) {
      parent::__construct();
      $this->codeSnippet = $codeSnippet;
    }

  }
}

if (!class_exists("CreativeService", false)) {
  /**
   * CreativeService
   * @package GoogleApiAdsDfp
   * @subpackage v201405
   */
  class CreativeService extends DfpSoapClient {

    const SERVICE_NAME = "CreativeService";
    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201405";
    const ENDPOINT = "https://www.google.com/apis/ads/publisher/v201405/CreativeService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://www.google.com/apis/ads/publisher/v201405/CreativeService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "BaseDynamicAllocationCreative" => "BaseDynamicAllocationCreative",
      "BaseCreativeTemplateVariableValue" => "BaseCreativeTemplateVariableValue",
      "AdExchangeCreative" => "AdExchangeCreative",
      "AdMobBackfillCreative" => "AdMobBackfillCreative",
      "AdSenseCreative" => "AdSenseCreative",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "AspectRatioImageCreative" => "AspectRatioImageCreative",
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
      "ClickTrackingCreative" => "ClickTrackingCreative",
      "CommonError" => "CommonError",
      "ConversionEvent_TrackingUrlsMapEntry" => "ConversionEvent_TrackingUrlsMapEntry",
      "CreativeAsset" => "CreativeAsset",
      "CustomCreativeAsset" => "CustomCreativeAsset",
      "CreativeAssetMacroError" => "CreativeAssetMacroError",
      "Creative" => "Creative",
      "CreativeError" => "CreativeError",
      "CreativePage" => "CreativePage",
      "CreativeSetError" => "CreativeSetError",
      "CustomCreative" => "CustomCreative",
      "CustomCreativeError" => "CustomCreativeError",
      "CustomFieldValue" => "CustomFieldValue",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "LegacyDfpMobileCreative" => "LegacyDfpMobileCreative",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "FileError" => "FileError",
      "FlashCreative" => "FlashCreative",
      "FlashOverlayCreative" => "FlashOverlayCreative",
      "FlashRedirectCreative" => "FlashRedirectCreative",
      "FlashRedirectOverlayCreative" => "FlashRedirectOverlayCreative",
      "HasDestinationUrlCreative" => "HasDestinationUrlCreative",
      "HasHtmlSnippetDynamicAllocationCreative" => "HasHtmlSnippetDynamicAllocationCreative",
      "ImageCreative" => "ImageCreative",
      "ImageError" => "ImageError",
      "ImageOverlayCreative" => "ImageOverlayCreative",
      "ImageRedirectCreative" => "ImageRedirectCreative",
      "ImageRedirectOverlayCreative" => "ImageRedirectOverlayCreative",
      "InternalApiError" => "InternalApiError",
      "InternalRedirectCreative" => "InternalRedirectCreative",
      "InvalidPhoneNumberError" => "InvalidPhoneNumberError",
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
      "ProgrammaticCreative" => "ProgrammaticCreative",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RedirectAsset" => "RedirectAsset",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "RichMediaStudioChildAssetProperty" => "RichMediaStudioChildAssetProperty",
      "RichMediaStudioCreative" => "RichMediaStudioCreative",
      "RichMediaStudioCreativeError" => "RichMediaStudioCreativeError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringCreativeTemplateVariableValue" => "StringCreativeTemplateVariableValue",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SwiffyConversionError" => "SwiffyConversionError",
      "SwiffyFallbackAsset" => "SwiffyFallbackAsset",
      "TemplateCreative" => "TemplateCreative",
      "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
      "TextValue" => "TextValue",
      "ThirdPartyCreative" => "ThirdPartyCreative",
      "TrackingUrls" => "TrackingUrls",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UnsupportedCreative" => "UnsupportedCreative",
      "UrlCreativeTemplateVariableValue" => "UrlCreativeTemplateVariableValue",
      "Value" => "Value",
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
      "Html5Feature" => "Html5Feature",
      "ImageDensity" => "ImageDensity",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidPhoneNumberError.Reason" => "InvalidPhoneNumberErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LockedOrientation" => "LockedOrientation",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
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
      "SwiffyConversionError.Reason" => "SwiffyConversionErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
      "VastRedirectType" => "VastRedirectType",
      "createCreatives" => "CreateCreatives",
      "createCreativesResponse" => "CreateCreativesResponse",
      "getCreativesByStatement" => "GetCreativesByStatement",
      "getCreativesByStatementResponse" => "GetCreativesByStatementResponse",
      "updateCreatives" => "UpdateCreatives",
      "updateCreativesResponse" => "UpdateCreativesResponse",
    );


    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user) {
      $options["classmap"] = self::$classmap;
      parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * Creates new {@link Creative} objects.
     * 
     * @param creatives the creatives to create
     * @return the created creatives with their IDs filled in
     */
    public function createCreatives($creatives) {
      $args = new CreateCreatives($creatives);
      $result = $this->__soapCall("createCreatives", array($args));
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
      $args = new GetCreativesByStatement($filterStatement);
      $result = $this->__soapCall("getCreativesByStatement", array($args));
      return $result->rval;
    }
    /**
     * Updates the specified {@link Creative} objects.
     * 
     * @param creatives the creatives to update
     * @return the updated creatives
     */
    public function updateCreatives($creatives) {
      $args = new UpdateCreatives($creatives);
      $result = $this->__soapCall("updateCreatives", array($args));
      return $result->rval;
    }
  }
}

