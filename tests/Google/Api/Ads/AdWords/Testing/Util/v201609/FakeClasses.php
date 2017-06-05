<?php
/**
 * Created based on ApiError, which is the API error base class that provides
 * details about an error that occurred while processing a service request, for
 * a testing purpose.
 */
class FakeApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201609";
  const XSI_TYPE = "FakeApiError";

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
   * @return string the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return string the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct(
      $fieldPath = null,
      $trigger = null,
      $errorString = null,
      $ApiErrorType = null
  ) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}

/**
 * Created based on PolicyViolationError, which represents violations of a
 * single policy by some text in a field, for a testing purpose.
 */
class FakePolicyViolationError extends FakeApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201609";
  const XSI_TYPE = "FakePolicyViolationError";

  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyName;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyUrl;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyDescription;

  /**
   * @access public
   * @var boolean
   */
  public $isExemptable;

  /**
   * @access public
   * @var PolicyViolationErrorPart[]
   */
  public $violatingParts;

  /**
   * Gets the namesapce of this class
   * @return string the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return string the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct(
      $key = null,
      $externalPolicyName = null,
      $externalPolicyUrl = null,
      $externalPolicyDescription = null,
      $isExemptable = null,
      $violatingParts = null,
      $fieldPath = null,
      $trigger = null,
      $errorString = null,
      $ApiErrorType = null
  ) {
    parent::__construct();
    $this->key = $key;
    $this->externalPolicyName = $externalPolicyName;
    $this->externalPolicyUrl = $externalPolicyUrl;
    $this->externalPolicyDescription = $externalPolicyDescription;
    $this->isExemptable = $isExemptable;
    $this->violatingParts = $violatingParts;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}

/**
 * Created based on CriterionPolicyError, which contains the policy violations
 * for a single BiddableAdGroupCriterion, for a testing purpose.
 */
class FakeCriterionPolicyError extends FakePolicyViolationError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201609";
  const XSI_TYPE = "FakeCriterionPolicyError";

  /**
   * Gets the namesapce of this class
   * @return string the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return string the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct(
      $key = null,
      $externalPolicyName = null,
      $externalPolicyUrl = null,
      $externalPolicyDescription = null,
      $isExemptable = null,
      $violatingParts = null
  ) {
    parent::__construct();
    $this->key = $key;
    $this->externalPolicyName = $externalPolicyName;
    $this->externalPolicyUrl = $externalPolicyUrl;
    $this->externalPolicyDescription = $externalPolicyDescription;
    $this->isExemptable = $isExemptable;
    $this->violatingParts = $violatingParts;
  }
}

