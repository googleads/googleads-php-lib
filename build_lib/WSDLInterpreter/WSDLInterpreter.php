<?php
/**
 * Interprets WSDL documents for the purposes of PHP 5 object creation
 *
 * The WSDLInterpreter package is used for the interpretation of a WSDL
 * document into PHP classes that represent the messages using inheritance
 * and typing as defined by the WSDL rather than SoapClient's limited
 * interpretation.  PHP classes are also created for each service that
 * represent the methods with any appropriate overloading and strict
 * variable type checking as defined by the WSDL.
 *
 * PHP version 5
 *
 * LICENSE: This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301 USA
 *
 * @category    WebServices
 * @package     WSDLInterpreter
 * @author      Kevin Vaughan kevin@kevinvaughan.com
 * @copyright   2007 Kevin Vaughan
 * @license     http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 *
 * Modified by Adam Rogal for use with Ads APIs @ Google.
 */

/**
 * A lightweight wrapper of Exception to provide basic package specific
 * unrecoverable program states.
 *
 * @category WebServices
 * @package WSDLInterpreter
 */
class WSDLInterpreterException extends Exception { }

/**
 * The main class for handling WSDL interpretation
 *
 * The WSDLInterpreter is utilized for the parsing of a WSDL document for rapid
 * and flexible use within the context of PHP 5 scripts.
 *
 * Example Usage:
 * <code>
 * require_once 'WSDLInterpreter.php';
 * $myWSDLlocation = 'http://www.example.com/ExampleService?wsdl';
 * $wsdlInterpreter = new WSDLInterpreter($myWSDLlocation);
 * $wsdlInterpreter->savePHP('/example/output/directory/');
 * </code>
 *
 * @category WebServices
 * @package WSDLInterpreter
 */
class WSDLInterpreter
{
  /**
   * The WSDL document's URI
   * @var string
   * @access private
   */
  private $_wsdl = NULL;

  /**
   * The soap client classname
   * @var string
   * @access private
   */
  private $_soapClientClassName = NULL;

  /**
   * DOM document representation of the wsdl and its translation
   * @var DOMDocument
   * @access private
   */
  private $_dom = null;

  /**
   * Array of classes and members representing the WSDL message types
   * @var array
   * @access private
   */
  private $_classmap = array();

  /**
   * Array of types that shouldn't be checked for class name uniqueness
   * @var array
   * @access private
   */
  private $_skipClassNameCheckTypes = array();

  /**
   * Array of sources for WSDL message classes
   * @var array
   * @access private
   */
  private $_classPHPSources = array();

  /**
   * Array of sources for WSDL services
   * @var array
   * @access private
   */
  private $_servicePHPSources = array();

  /**
   * Class names.
   * @var array
   * @access private
   */
  private $_classes = array();

  /**
   * Function names.
   * @var array
   * @access private
   */
  private $_functions = array();

  /**
   * The service name.
   * @var string
   * @access private
   */
  private $_serviceName = NULL;

  /**
   * The service namespace.
   * @var string
   * @access private
   */
  private $_serviceNamespace = NULL;

  /**
   * The service version.
   * @var string
   * @access private
   */
  private $_version = NULL;

  /**
   * The service author.
   * @var string
   * @access private
   */
  private $_author = NULL;

  /**
   * The service package.
   * @var string
   * @access private
   */
  private $_package = NULL;

  /**
   * Whether or not to enable psuedo namespaces in the generated class names.
   * @var string
   * @access private
   */
  private $_enablePseudoNamespaces = NULL;

  /**
   * The class path of the SOAP client to require in the PHP file.
   * @var string
   * @access private
   */
  private $_soapClientClassPath = NULL;

  /**
   * Map of complexType name to namespace
   */
  private $_namespaceMap = NULL;

  /**
   * Parses the target wsdl and loads the interpretation into object members
   *
   * @param string $wsdl the URI of the wsdl to interpret
   * @param string $soapClientClassName the class name which the generated
   *     client will extend
   * @param array $classmap the class map to use when generating classes
   * @param string $serviceName the name of the service being worked on
   * @param string $version the version of the service
   * @param string $author the author to be placed in the file header
   * @param string $package the package to be placed in the file header
   * @param string $soapClientClassPath the class path to require for the
   *     SOAP client
   * @param string $proxy the proxy URL to use when downloading WSDLs
   * @throws WSDLInterpreterException container for all WSDL interpretation
   *     problems
   * @todo Create plug in model to handle extendability of WSDL files
   */
  public function __construct($wsdl, $soapClientClassName, $classmap,
      $conflictClassmap, $serviceName, $version, $author, $package,
      $soapClientClassPath, $proxy, $enablePseudoNamespaces,
      $skipClassNameCheckTypes)
  {
    try {
      $this->_wsdl = $wsdl;
      $this->_soapClientClassName = $soapClientClassName;

      $this->_serviceName = $serviceName;
      $this->_version = $version;
      $this->_author = $author;
      $this->_package = $package;
      if (isset($classmap)) {
        $this->_classmap = $classmap;
      }
      $this->_enablePseudoNamespaces = isset($enablePseudoNamespaces) ?
          $enablePseudoNamespaces : false;
      if (!$this->_enablePseudoNamespaces) {
        // Only use if pseudo-namespaces aren't enabled.
        if (isset($conflictClassmap)) {
          $this->_classmap = array_merge($this->_classmap, $conflictClassmap);
        }
        if (isset($skipClassNameCheckTypes)) {
          $this->_skipClassNameCheckTypes = $skipClassNameCheckTypes;
        }
      }
      $this->_soapClientClassPath = $soapClientClassPath;

      // Set proxy.
      if (!empty($proxy)) {
        $opts = array(
            'http' => array(
                'proxy' => $proxy,
                'request_fulluri' => TRUE
            )
        );
        $context = stream_context_get_default($opts);
        libxml_set_streams_context($context);
      }

      $this->_dom = new DOMDocument();
      $this->_dom->load($wsdl, LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);

      $xpath = new DOMXPath($this->_dom);

      // Service namespace.
      $this->_serviceNamespace =
          $this->_dom->documentElement->getAttribute('targetNamespace');

      /**
       * wsdl:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry) {
        $parent = $entry->parentNode;
        $wsdl = new DOMDocument();
        $wsdl->load($entry->getAttribute("location"), LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        foreach ($wsdl->documentElement->childNodes as $node) {
          $newNode = $this->_dom->importNode($node, true);
          $parent->insertBefore($newNode, $entry);
        }
        $parent->removeChild($entry);
      }

      /**
       * xsd:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://www.w3.org/2001/XMLSchema']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry) {
        $parent = $entry->parentNode;
        $xsd = new DOMDocument();
        $result = @$xsd->load(dirname($this->_wsdl) . "/" . $entry->getAttribute("schemaLocation"),
        LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        if ($result) {
          foreach ($xsd->documentElement->childNodes as $node) {
            $newNode = $this->_dom->importNode($node, true);
            $parent->insertBefore($newNode, $entry);
          }
          $parent->removeChild($entry);
        }
      }

      $this->_loadNamespaces($xpath);

      $this->_dom->formatOutput = true;
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error loading WSDL document (".$e->getMessage().")");
    }

    try {
      $xsl = new XSLTProcessor();
      $xslDom = new DOMDocument();
      $xslDom->load(dirname(__FILE__)."/wsdl2php.xsl");
      $xsl->registerPHPFunctions();
      $xsl->importStyleSheet($xslDom);
      $this->_dom = $xsl->transformToDoc($this->_dom);
      $this->_dom->formatOutput = true;
      //$this->_dom->save("dom.xml");
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error interpreting WSDL document (".$e->getMessage().")");
    }
    $this->_loadClassAndFunctionNames();
    $this->_loadClasses();
    $this->_loadServices();
  }

  /**
   * Validates a name against standard PHP naming conventions
   *
   * @param string $name the name to validate
   *
   * @return string the validated version of the submitted name
   *
   * @access private
   */
  private function _validateNamingConvention($name)
  {
    return preg_replace('#[^a-zA-Z0-9_\x7f-\xff]*#', '',
    preg_replace('#^[^a-zA-Z_\x7f-\xff]*#', '', $name));
  }

  /**
   * Validates a class name against PHP naming conventions and already defined
   * classes, and optionally stores the class as a member of the interpreted classmap.
   *
   * @param string $className the name of the class to test
   * @param boolean $addToClassMap whether to add this class name to the classmap
   * @param boolean $preventPseudoNamespaces whether to prevent
   *     pseudo-namespaces from being used
   *
   * @return string the validated version of the submitted class name
   *
   * @access private
   * @todo Add reserved keyword checks
   */
  private function _validateClassName($className, $addToClassMap = true,
      $preventPseudoNamespaces = false)
  {
    if (!array_key_exists($className, $this->_classmap)) {
      $validClassName = $this->_validateNamingConvention($className);
      if ($this->_enablePseudoNamespaces && !$preventPseudoNamespaces) {
        $validClassName = $this->_package . '_' . $validClassName;
      }

      if (!in_array($validClassName, $this->_skipClassNameCheckTypes)
          && class_exists($validClassName)) {
        throw new Exception("Class ".$validClassName." already defined.".
                  " Cannot redefine class with class loaded.");
      }

      if ($addToClassMap) {
        $this->_classmap[$className] = $validClassName;
      }
    } else {
      $validClassName = $this->_classmap[$className];
    }

    return $validClassName;
  }


  /**
   * Validates a wsdl type against known PHP primitive types, or otherwise
   * validates the namespace of the type to PHP naming conventions
   *
   * @param string $type the type to test
   *
   * @return string the validated version of the submitted type
   *
   * @access private
   * @todo Extend type handling to gracefully manage extendability of wsdl definitions, add reserved keyword checking
   */
  private function _validateType($type)
  {
    $array = false;
    if (substr($type, -2) == "[]") {
      $array = true;
      $type = substr($type, 0, -2);
    }
    switch (strtolower($type)) {
      case "int": case "integer": case "long": case "byte": case "short":
      case "negativeInteger": case "nonNegativeInteger":
      case "nonPositiveInteger": case "positiveInteger":
      case "unsignedByte": case "unsignedInt": case "unsignedLong": case "unsignedShort":
        $validType = "integer";
        break;

      case "float": case "long": case "double": case "decimal":
        $validType = "double";
        break;

      case "string": case "token": case "normalizedString": case "hexBinary":
        $validType = "string";
        break;

      default:
        $validType = $this->_validateNamingConvention($type);
        break;
    }
    if ($array) {
      $validType .= "[]";
    }
    return $validType;
  }

  /**
   * Loads a map of complexType to namespace.
   * @param DOMXPath $xpath the DOMXPath representing the wsdl
   * @access private
   */
  private function _loadNamespaces(DOMXPath $wsdlXPath) {
    $wsdlXPath->registerNamespace('wsdl', 'http://schemas.xmlsoap.org/wsdl/');
    $wsdlXPath->registerNamespace('xmlns', 'http://www.w3.org/2001/XMLSchema');
    $schemas = $wsdlXPath->document->getElementsByTagName('schema');
    $i = 1;
    foreach ($schemas as $schema) {
      $namespace = $schema->getAttribute('targetNamespace');
      $types = $wsdlXPath->query('//wsdl:definitions/wsdl:types/xmlns:schema['
          . $i . ']//xmlns:complexType'
          . ' | //wsdl:definitions/wsdl:types/xmlns:schema[' . $i
          . ']//xmlns:simpleType');
      foreach ($types as $type) {
        $typeName = ($type->getAttribute('name')
            ? $type->getAttribute('name')
            : $type->parentNode->getAttribute('name'));
        $this->_namespaceMap[$typeName] = $namespace;
      }
      $i++;
    }
  }

  /**
   * Loads the names for all of the classes and functions.
   *
   * @access private
   */
  private function _loadClassAndFunctionNames() {
    $classes = $this->_dom->getElementsByTagName("class");
    foreach ($classes as $class) {
      $this->_classes[$class->getAttribute("name")] = $class;
      if (array_key_exists($class->getAttribute("name"), $this->_classmap)) {
        $this->_classes[$this->_classmap[$class->getAttribute("name")]] = $class;
      }
    }

    $functions = $this->_dom->getElementsByTagName("function");
    foreach ($functions as $function) {
      $this->_functions[$function->getAttribute("name")] = $function;
    }
  }

  /**
   * Loads classes from the translated wsdl document's message types
   *
   * @access private
   */
  private function _loadClasses()
  {
    $classes = $this->_dom->getElementsByTagName("class");
    foreach ($classes as $class) {
      $class->setAttribute("validatedName",
      $this->_validateClassName($class->getAttribute("name")));
      $extends = $class->getElementsByTagName("extends");
      if ($extends->length > 0) {
        $extends->item(0)->setAttribute("validatedName",
            $this->_validateClassName($extends->item(0)->nodeValue));
        $classExtension = $extends->item(0)->getAttribute("validatedName");
      } else {
        $classExtension = false;
      }
      $properties = $class->getElementsByTagName("entry");
      foreach ($properties as $property) {
        $property->setAttribute("validatedName",
        $this->_validateNamingConvention($property->getAttribute("name")));
        $property->setAttribute("type",
        $this->_validateType($property->getAttribute("type")));
      }

      $sources[$class->getAttribute("validatedName")] = array(
                "extends" => $classExtension,
                "source" => $this->_generateClassPHP($class)
      );
    }

    while (sizeof($sources) > 0)
    {
      $classesLoaded = 0;
      foreach ($sources as $className => $classInfo) {
        if (!$classInfo["extends"] || (isset($this->_classPHPSources[$classInfo["extends"]]))) {
          $this->_classPHPSources[$className] = $classInfo["source"];
          unset($sources[$className]);
          $classesLoaded++;
        }
      }
      if (($classesLoaded == 0) && (sizeof($sources) > 0)) {
        throw new WSDLInterpreterException("Error loading PHP classes: ".join(", ", array_keys($sources)));
      }
    }
  }

  /**
   * Generates the PHP code for a WSDL message type class representation
   *
   * This gets a little bit fancy as the magic methods __get and __set in
   * the generated classes are used for properties that are not named
   * according to PHP naming conventions (e.g., "MY-VARIABLE").  These
   * variables are set directly by SoapClient within the target class,
   * and could normally be retrieved by $myClass->{"MY-VARIABLE"}.  For
   * convenience, however, this will be available as $myClass->MYVARIABLE.
   *
   * @param DOMElement $class the interpreted WSDL message type node
   * @return string the php source code for the message type class
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateClassPHP($class) {
    $return = "";
    $return .= 'if (!class_exists("'.$class->getAttribute("validatedName").'", FALSE)) {'."\n";
    $return .= '/**'."\n";
    $return .= $this->_generateInnerDoc(
    $class->getElementsByTagName("documentation")->item(0)->nodeValue);
    $return .= ' * @package '.$this->_package."\n";
    $return .= ' * @subpackage '.$this->_version."\n";
    $return .= ' */'."\n";
    $return .= "class ".$class->getAttribute("validatedName");
    $extends = $class->getElementsByTagName("extends");
    $hasExtend = false;
    if ($extends->length > 0) {
      $return .= " extends ".$extends->item(0)->getAttribute("validatedName");
      $hasExtend = true;
    }
    $return .= " {\n";

    $properties = $class->getElementsByTagName("entry");
    foreach ($properties as $property) {
      $return .= "  /**\n"
      . "   * @access public\n"
      . "   * @var ".$property->getAttribute("type")."\n"
      . "   */\n"
      . "  ".'public $'.$property->getAttribute("validatedName").";\n\n";
    }

    $extraParams = false;
    $paramMapReturn = "  ".'private $_parameterMap = array ('."\n";
    $properties = $class->getElementsByTagName("entry");
    foreach ($properties as $property) {
      if ($property->getAttribute("name") != $property->getAttribute("validatedName")) {
        $extraParams = true;
        $paramMapReturn .= "    ".'"'.$property->getAttribute("name").
                    '" => "'.$property->getAttribute("validatedName").'",'."\n";
      }
    }
    $paramMapReturn .= "  ".');'."\n\n";
    $paramMapReturn .= "  ".'/**'."\n";
    $paramMapReturn .= "  ".' * Provided for setting non-php-standard named variables'."\n";
    $paramMapReturn .= "  ".' * @param $var Variable name to set'."\n";
    $paramMapReturn .= "  ".' * @param $value Value to set'."\n";
    $paramMapReturn .= "  ".' */'."\n";
    $paramMapReturn .= "  ".'public function __set($var, $value) '.
            '{ $this->{$this->_parameterMap[$var]} = $value; }'."\n\n";
    $paramMapReturn .= "  ".'/**'."\n";
    $paramMapReturn .= "  ".' * Provided for getting non-php-standard named variables'."\n";
    $paramMapReturn .= "  ".' * @param $var Variable name to get.'."\n";
    $paramMapReturn .= "  ".' * @return mixed Variable value'."\n";
    $paramMapReturn .= "  ".' */'."\n";
    $paramMapReturn .= "  ".'public function __get($var) {'."\n";
    $paramMapReturn .= "    ".'if (!array_key_exists($var, $this->_parameterMap)) {'."\n";
    $paramMapReturn .= "      ".'return NULL;'."\n";
    $paramMapReturn .= "    ".'} else {'."\n";
    $paramMapReturn .= "      ".'return $this->{$this->_parameterMap[$var]};'."\n";
    $paramMapReturn .= "    ".'}'."\n";
    $paramMapReturn .= "  ".'}'."\n\n";

    $paramMapReturn .= "  ".'/**'."\n";
    $paramMapReturn .= "  ".' * Provided for getting non-php-standard named variables'."\n";
    $paramMapReturn .= "  ".' * @return array parameter map'."\n";
    $paramMapReturn .= "  ".' */'."\n";
    $paramMapReturn .= "  ".'protected function getParameterMap() {'."\n";
    $paramMapReturn .= "    ".'return $this->_parameterMap;'."\n    }\n\n";

    if ($extraParams) {
      $return .= $paramMapReturn;
    }

    $return .= "  /**\n"
        . "   * Gets the namesapce of this class\n"
        . "   * @return the namespace of this class\n"
        . "   */\n"
        . "  public function getNamespace() {\n"
        . "    return \"" . $this->_namespaceMap[$class->getAttribute('name')]
        . "\";\n  }\n\n";

    $return .= "  /**\n"
        . "   * Gets the xsi:type name of this class\n"
        . "   * @return the xsi:type name of this class\n"
        . "   */\n"
        . "  public function getXsiTypeName() {\n"
        . "    return \"" . $class->getAttribute('xsiTypeName') . "\";\n  }\n\n";

    $params = $this->_getTopDownConstructorArguments($class);

    $constructor = "  ".'public function __construct(';

    if (sizeof($params) > 0) {
      $constructor .= "$";
    }
    $constructor .= implode(" = NULL, $", $params);
    if (sizeof($params) > 0) {
      $constructor .= " = NULL";
    }
    $constructor .= ") {\n";
    if ($extends->length > 0) {
        $constructor .= "    parent::__construct();"."\n";
    }
    foreach($params as $param) {
      $constructor .= "    " . '$this->' . $param . " = $" . $param . ";\n";
    }
    $constructor .= "  }\n";
    $return .= $constructor;
    $return .= "}}";
    return $return;
  }

  /**
   * Loads services from the translated wsdl document
   *
   * @access private
   */
  private function _loadServices()
  {
    $services = $this->_dom->getElementsByTagName("service");
    foreach ($services as $service) {
      $service->setAttribute("validatedName",
          $this->_validateClassName(
              $service->getAttribute("name"), false, true));
      $functions = $service->getElementsByTagName("function");
      foreach ($functions as $function) {
        $function->setAttribute("validatedName",
        $this->_validateNamingConvention($function->getAttribute("name")));
        $parameters = $function->getElementsByTagName("parameters");
        if ($parameters->length > 0) {
          $parameterList = $parameters->item(0)->getElementsByTagName("entry");
          foreach ($parameterList as $variable) {
            $variable->setAttribute("validatedName",
            $this->_validateNamingConvention($variable->getAttribute("name")));
            $variable->setAttribute("type",
            $this->_validateType($variable->getAttribute("type")));
          }
        }
      }

      $this->_servicePHPSources[$service->getAttribute("validatedName")] =
      $this->_generateServicePHP($service);
    }
  }

  /**
   * Generates the PHP code for a WSDL service class representation
   *
   * This method, in combination with generateServiceFunctionPHP, create a PHP class
   * representation capable of handling overloaded methods with strict parameter
   * type checking.
   *
   * @param DOMElement $service the interpreted WSDL service node
   * @return string the php source code for the service class
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateServicePHP($service) {
    $return = "";
    $return .= 'if (!class_exists("'.$service->getAttribute("validatedName").'", FALSE)) {'."\n";
    $return .= '/**'."\n";
    $return .= ' * '.$service->getAttribute("validatedName")."\n";
    $return .= ' * @package '.$this->_package."\n";
    $return .= ' * @subpackage '.$this->_version."\n";
    $return .= ' * @author WSDLInterpreter'."\n";
    $return .= ' */'."\n";
    $return .= "class ".$service->getAttribute("validatedName")." extends " .
    $this->_soapClientClassName . " {\n";

    if (sizeof($this->_classmap) > 0) {
      $return .= "  ".'/**'."\n";
      $return .= "  ".' * Default class map for wsdl=>php'."\n";
      $return .= "  ".' * @access private'."\n";
      $return .= "  ".' * @var array'."\n";
      $return .= "  ".' */'."\n";
      $return .= "  ".'public static $classmap = array('."\n";
      foreach ($this->_classmap as $className => $validClassName)    {
        $return .= "    ".'"'.$className.'" => "'.$validClassName.'",'."\n";
      }
      $return .= "  );\n\n";
    }

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * The endpoint of the service'."\n";
    $return .= "  ".' * @var string'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'public static $endpoint = "'.$service->getAttribute('endpoint').'";'."\n\n";

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Constructor using wsdl location and options array'."\n";
    $return .= "  ".' * @param string $wsdl WSDL location for this service'."\n";
    $return .= "  ".' * @param array $options Options for the SoapClient'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'public function __construct($wsdl=null, $options, $user) {'."\n";
    $return .= "    ".'$options["classmap"] = ' . $service->getAttribute("validatedName") . '::$classmap;' . "\n";
    $return .= "    ".'parent::__construct($wsdl, $options, $user, '. "'"
        . $service->getAttribute("validatedName") . "', '" . $this->_serviceNamespace
        .  "');"."\n";
    $return .= "  }\n\n";

    $functionMap = array();
    $functions = $service->getElementsByTagName("function");
    foreach ($functions as $function) {
      if (!isset($functionMap[$function->getAttribute("validatedName")])) {
        $functionMap[$function->getAttribute("validatedName")] = array();
      }
      $functionMap[$function->getAttribute("validatedName")][] = $function;
    }
    foreach ($functionMap as $functionName => $functionNodeList) {
      $return .= $this->_generateServiceFunctionPHP($functionName, $functionNodeList)."\n\n";
    }

    $return .= "}}";
    return $return;
  }

  /**
   * Generates the PHP code for a WSDL service operation function representation
   *
   * The function code that is generated examines the arguments that are passed and
   * performs strict type checking against valid argument combinations for the given
   * function name, to allow for overloading.
   *
   * @param string $functionName the php function name
   * @param array $functionNodeList array of DOMElement interpreted WSDL function nodes
   * @return string the php source code for the function
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateServiceFunctionPHP($functionName, $functionNodeList = null) {
    $return = "";
    $return .= "  ".'/**'."\n";

    $documentation =
    $this->_classes[$functionName]->getElementsByTagName("documentation")->item(0)->nodeValue;
    $return .= $this->_generateInnerDoc($documentation, "  ");

    $return .= "  ".' */'."\n";
    $return .= "  ".'public function '.$functionName . "(" . $this->_getFunctionArgs($functionName) . ") {\n";
    $return .= "    ".'$arg = new ' . $this->_classmap[$functionName] . "(" . $this->_getFunctionArgs($functionName) . ");\n";
    $return .= "    ".'$result = $this->__soapCall("'.$functionName.'", array($arg));'."\n";
    $return .= "    ".'return $result->rval;'."\n";
    $return .= "  ".'}'."\n";

    return $return;
  }

  /**
   * Saves the PHP source code that has been loaded to a target directory.
   *
   * Services will be saved by their validated name, and classes will be included
   * with each service file so that they can be utilized independently.
   *
   * @param string $outputDirectory the destination directory for the source code
   * @return array array of source code files that were written out
   * @throws WSDLInterpreterException problem in writing out service sources
   * @access public
   * @todo Add split file options for more efficient output
   */
  public function savePHP($outputDirectory)
  {
    if (!count($this->_servicePHPSources)) {
      throw new WSDLInterpreterException("No services loaded");
    }
    $require = sprintf(
        "/** Required classes. **/\nrequire_once \"%s\";\n\n",
        $this->_soapClientClassPath
    );
    $classSource = join("\n\n", $this->_classPHPSources);
    $outputFiles = array();
    foreach ($this->_servicePHPSources as $serviceName => $serviceCode) {
      $filename = sprintf('%s/%s.php', $outputDirectory, $serviceName);
      $success = file_put_contents($filename, sprintf(
          "<?php\n%s\n%s%s\n\n%s",
          $this->_getFileHeader(), $require, $classSource, $serviceCode
      ));
      if ($success) {
        $outputFiles[] = $filename;
      }
    }
    if (!count($outputFiles)) {
      throw new WSDLInterpreterException("Error writing PHP source files.");
    }
    return $outputFiles;
  }

  /**
   * Gets a string equivalent of the array which can be evaled.
   *
   * @param $array the string serialization of the array
   * @return a string equivalent of the array which can be evaled
   */
  private function _getArrayStr($array) {
    $result = "array(";
    $resultArray = array();
    foreach ($array as $key => $value) {
      if (is_array($value)) {
        $value = $this->_getArrayStr($value);
        array_push($resultArray, '"' . $key . '" => ' . $value);
      } else {
        array_push($resultArray, '"' . $key . '" => "' . $value . '"');
      }
    }

    return $result . implode(", ", $resultArray) . ")";
  }

  /**
   * Generates a valid documentation inner block indented correctly.
   *
   * @param $documetation the documentation string
   * @param $padding the padding before each '*'
   * @return string the inner block of the documentation
   */
  private function _generateInnerDoc($documetation, $padding = "") {
    $result = "";
    $docLines = explode("\n", trim($documetation));
    foreach($docLines as $docLine) {
      $line = trim($docLine);
      $result .= $padding . " * " . $line . "\n";
    }
    return $result;
  }

  /**
   * Gets the true function agruments for the function.
   *
   * @param $functionName the function name
   * @return string the comma seperated string of function arguments
   */
  private function _getFunctionArgs($functionName) {
    $resultArray = array();
    $class = $this->_classes[$functionName];

    $entries = $class->getElementsByTagName("entry");
    foreach($entries as $entry) {
      array_push($resultArray, "$" . $entry->getAttribute("name"));
    }
    return implode(", ", $resultArray);
  }

  /**
   * Gets the constructor arguments for the class
   *
   * @param $class the class
   * @return array an array of constructor agruments
   */
  private function _getConstructorArguments($class) {
    $properties = $class->getElementsByTagName("entry");
    $params = array();
    foreach ($properties as $property) {
      array_push($params,
          $this->_validateNamingConvention($property->getAttribute("name")));
    }
    return $params;
  }

  /**
   * Gets all parameters by traversing all sub-classes.
   *
   * @param $class the current class
   * @return array an array of all parameters
   */
  private function _getTopDownConstructorArguments($class) {
    $params = $this->_getConstructorArguments($class);

    if ($class->getElementsByTagName("extends")->length > 0) {
      $extends = $class->getElementsByTagName("extends");
      $parentClassName = $extends->item(0)->nodeValue;
      $params = array_merge($params,
          $this->_getTopDownConstructorArguments(
              $this->_classes[$parentClassName]));
    }

    return $params;
  }

  /**
   * Gets the file header to put at the top of each PHP file.
   *
   * @return string the file header to put at the top of each PHP file
   */
  private function _getFileHeader() {
    $template = file_get_contents(dirname(__FILE__) . '/file_header.tmpl');

    $template = preg_replace('/_author/i', $this->_author, $template);
    $template = preg_replace('/_package/i', $this->_package, $template);
    $template = preg_replace('/_version/i', $this->_version, $template);
    $template = preg_replace('/_serviceName/i', $this->_serviceName, $template);

    return $template;
  }
}
