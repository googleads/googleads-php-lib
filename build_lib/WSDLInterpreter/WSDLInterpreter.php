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
 * Modified by Adam Rogal &
 * Paul Matthews for use with Ads APIs @ Google.
 */

require_once 'TemplateHelper.php';
require_once 'WsdlElement/Utils.php';
require_once 'WsdlElement/Factory.php';
require_once 'WsdlElement/Named.php';
require_once 'WsdlElement/NamedClass.php';
require_once 'WsdlElement/Class.php';
require_once 'WsdlElement/Service.php';
require_once 'WsdlElement/Function.php';
require_once 'WsdlElement/Property.php';

/**
 * A lightweight wrapper of Exception to provide basic package specific
 * unrecoverable program states.
 *
 * @category WebServices
 * @package WSDLInterpreter
 */
class WSDLInterpreterException extends Exception { }

/**
 * The main class for handling WSDL interpretation.
 *
 * The WSDLInterpreter is utilized for the parsing of a WSDL document for rapid
 * and flexible use within the context of PHP 5 scripts.
 *
 * Example Usage:
 * <code>
 * require_once 'WSDLInterpreter.php';
 * $wsdlUri = 'https://adwords.google.com/api/adwords/'
 *    . 'cm/v201309/CampaignService?wsdl';
 * $wsdlInterpreter = new WSDLInterpreter($wsdlUri, "AdWordsSoapClient",
 *    null, null, "CampaignService", "v201309", "Ads_Google",
 *        "../adsapi/src/Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php",
 *            null, true, null);
 * $wsdlInterpreter->savePHP('/tmp/test.php');
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
  private $wsdlUri = null;

  /**
   * The WSDL document's XPath handle
   * @var DOMXPath
   * @access private
   */
  private $xpath = null;

  /**
   * The soap client classname
   * @var string
   * @access private
   */
  private $soapClientClassName = null;

  /**
   * DOM document representation of the wsdl and its translation
   * @var DOMDocument
   * @access private
   */
  private $dom = null;

  /**
   * Array of classes and members representing the WSDL message types
   * @var array
   * @access private
   */
  private $classmap = array();

  /**
   * Array of types that shouldn't be checked for class name uniqueness
   * @var array
   * @access private
   */
  private $skipClassNameCheckTypes = array();

  /**
   * Array of sources for WSDL message classes
   * @var array
   * @access private
   */
  private $classPHPSources = array();

  /**
   * Array of sources for WSDL services
   * @var array
   * @access private
   */
  private $servicePHPSources = array();

  /**
   * Class names.
   * @var array
   * @access private
   */
  private $classes = array();

  /**
   * Function names.
   * @var array
   * @access private
   */
  private $functions = array();

  /**
   * The service name.
   * @var string
   * @access private
   */
  private $serviceName = null;

  /**
   * The service namespace.
   * @var string
   * @access private
   */
  private $serviceNamespace = null;

  /**
   * The service version.
   * @var string
   * @access private
   */
  private $version = null;

  /**
   * The service package.
   * @var string
   * @access private
   */
  private $package = null;

  /**
   * Whether or not to enable namespaces in the generated class names.
   * @var string
   * @access private
   */
  private $enableNamespaces = null;

  /**
   * The class path of the SOAP client to require in the PHP file.
   * @var string
   * @access private
   */
  private $soapClientClassPath = null;

  /**
   * Map of complexType name to namespace
   */
  private $namespaceMap = null;

  /**
   * The wsdl object factory
   */
  private $factory;

  /**
   * The utils class
   */
  private $utils;

  /**
   * The created wsdl class objects
   */
  private $wsdlClasses = array();

  /**
   * The created wsdl functon objects
   */
  private $wsdlFunctions = array();

  /**
   * The created wsdl service objects
   */
  private $wsdlServices = array();

  /**
   * Parses the target wsdl and loads the interpretation into object members
   *
   * Steps involved:
   * 1) Configure the wsdl interpreter
   * 2) Get the wsdl (download)
   * 3) Load any imports in the wsdl
   * 4) Load namespaces
   * 5) Apply the xsl transform
   * 6) Load and configure the utils & factories
   * 7) Load all elements from the wsdl
   * 8) Generate the source code and store for writing
   *
   * @param string $wsdlUri the URI of the wsdl to interpret
   * @param string $soapClientClassName the class name which the generated
   *     client will extend
   * @param array $classmap the class map to use when generating classes
   * @param array $conflictClassmap the class name to compatible name map
   * @param string $serviceName the name of the service being worked on
   * @param string $version the version of the service
   * @param string $package the package to be placed in the file header
   * @param string $soapClientClassPath the class path to require for the
   *     SOAP client
   * @param string $proxy the proxy URL to use when downloading WSDLs
   * @param boolean $enableNamespaces to enable the namespaces
   * @param array $skipClassNameCheckTypes ignore class name checking list
   * @throws WSDLInterpreterException container for all WSDL interpretation
   *     problems
   */
  public function __construct($wsdlUri, $soapClientClassName, $classmap,
      $conflictClassmap, $serviceName, $version, $package, $soapClientClassPath,
      $proxy, $enableNamespaces, $skipClassNameCheckTypes)
  {
    // Configure the interpreter
    $this->wsdlUri = $wsdlUri;
    $this->soapClientClassName = $soapClientClassName;

    $this->serviceName = $serviceName;
    $this->version = $version;
    $this->package = $package;
    $this->classmap = $classmap ?: $this->classmap;
    $this->enableNamespaces = $enableNamespaces ?: false;

    $conflictClassmap = $conflictClassmap ?: array();
    $this->classmap = array_merge($this->classmap, $conflictClassmap);

    if ($skipClassNameCheckTypes) {
      $this->skipClassNameCheckTypes = $skipClassNameCheckTypes;
    }

    $this->soapClientClassPath = $soapClientClassPath;

    // Start loading and processing the wsdl
    try {
      $this->loadWsdl($this->wsdlUri, $proxy);
      $this->loadWsdlXpath();

      // Modify the wsdl dom
      $this->loadWsdlImports($this->wsdlUri);
      $this->loadNamespaces();
    } catch (Exception $e) {
      throw new WSDLInterpreterException(sprintf("Error loading WSDL document "
          . "(%s)", $e->getMessage()));
    }
    // Apply the XSL transform
    $this->transformWsdl(dirname(__FILE__) . "/wsdl2php.xsl");

    // Load the helpers
    $this->utils = new WsdlElement_Utils();
    $this->factory = new WsdlElement_Factory($this->utils);
    $this->template = new TemplateHelper('templates');

    // Prepare wsdl utility with the loaded settings
    $this->utils->setRenameClassMap($this->classmap);
    $this->utils->setSkipClassNameCheck($this->skipClassNameCheckTypes);
    if ($this->enableNamespaces) {
      $this->utils->setPhpNamespace($this->package);
    }
    $this->utils->setWsdlNamespaceMap($this->namespaceMap);

    // Load the elements from the wsdl
    $this->loadWsdlElements($this->factory, $this->dom);

    // Generate the sources
    $this->generateSources($this->factory->getDependencyOrderedClasses(),
          $this->factory->getServices());
  }

  /**
   * Get the number of loaded classes.
   *
   * @return int the number of loaded classes
   */
  public function getLoadedClassesCount() {
    return count($this->wsdlClasses);
  }

  /**
   * Get the number of loaded services.
   *
   * @return int the number of loaded classes
   */
  public function getLoadedServicesCount() {
    return count($this->wsdlServices);
  }

  /**
   * Get the number of loaded functions.
   *
   * @return int the number of loaded classes
   */
  public function getLoadedFunctionsCount() {
    return count($this->wsdlFunctions);
  }

  /**
   * Get the wsdl (download it).
   *
   * @param string $wsdlUri the wsdl URL
   * @param null|string $proxy the proxy string if required, null otherwise
   */
  protected function loadWsdl($wsdlUri, $proxy = null) {
    // Set proxy.
    if ($proxy) {
      $opts = array(
          'http' => array(
              'proxy' => $proxy,
              'request_fulluri' => true
          )
      );
      $context = stream_context_get_default($opts);
      libxml_set_streams_context($context);
    }

    $this->dom = new DOMDocument();
    $this->dom->load($wsdlUri,
        LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);

    $this->serviceNamespace =
        $this->dom->documentElement->getAttribute('targetNamespace');
  }

  /**
   * Load the DOMXPath object for the Wsdl.
   */
  protected function loadWsdlXpath() {
    $this->xpath = new DOMXPath($this->dom);
    $this->xpath->registerNamespace('wsdl',
        'http://schemas.xmlsoap.org/wsdl/');
    $this->xpath->registerNamespace('xmlns',
        'http://www.w3.org/2001/XMLSchema');
  }

  /**
   * Load any imports including external WSDL and external Schema definitions.
   *
   * @param string $wsdlUri the wsdl location
   */
  protected function loadWsdlImports($wsdlUri) {
    $importQueryFormat = "//*[local-name()='import' and namespace-uri()='%s']";
    $wsdlImportQuery = sprintf($importQueryFormat,
        'http://schemas.xmlsoap.org/wsdl/');
    $xmlImportQuery = sprintf($importQueryFormat,
        'http://www.w3.org/2001/XMLSchema');
    $wsdlRoot = dirname($wsdlUri);

    // Loads WSDL Imports.
    foreach ($this->xpath->query($wsdlImportQuery) as $entry) {
      $parent = $entry->parentNode;
      $wsdlDoc = new DOMDocument();
      $wsdlDoc->load($entry->getAttribute("location"),
          LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
      foreach ($wsdlDoc->documentElement->childNodes as $node) {
        $newNode = $this->dom->importNode($node, true);
        $parent->insertBefore($newNode, $entry);
      }
      $parent->removeChild($entry);
    }

    // Loads Schema Imports.
    foreach ($this->xpath->query($xmlImportQuery) as $entry) {
      $parent = $entry->parentNode;
      $xsd = new DOMDocument();
      $result = @$xsd->load(
          sprintf("%s/%s", $wsdlRoot, $entry->getAttribute("schemaLocation")),
              LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
      if ($result) {
        foreach ($xsd->documentElement->childNodes as $node) {
          $newNode = $this->dom->importNode($node, true);
          $parent->insertBefore($newNode, $entry);
        }
        $parent->removeChild($entry);
      }
    }
  }

  /**
   * Loads a map of complexType to namespace.
   */
  protected function loadNamespaces() {
    $schemas = $this->xpath->document->getElementsByTagName('schema');
    $i = 1;
    foreach ($schemas as $schema) {
      $namespace = $schema->getAttribute('targetNamespace');
      $query = sprintf('//wsdl:definitions/wsdl:types/xmlns:schema[%1$d]' .
          '//xmlns:complexType | //wsdl:definitions/wsdl:types' .
              '/xmlns:schema[%1$d]//xmlns:simpleType', $i);
      foreach ($this->xpath->query($query) as $type) {
        $typeName = ($type->getAttribute('name')
            ? $type->getAttribute('name')
            : $type->parentNode->getAttribute('name'));
        $this->namespaceMap[$typeName] = $namespace;
      }
      $i++;
    }
  }

  /**
   * Load all the elements from the wsdl.
   *
   * @param WsdlElement_Factory the elements factory
   * @param DOMDocument $dom the dom
   */
  protected function loadWsdlElements(WsdlElement_Factory $factory) {
    $this->wsdlClasses = $factory->createClasses($this->dom);
    $this->wsdlFunctions = $factory->createFunctions($this->dom);
    $this->wsdlServices = $factory->createServices($this->dom);
  }

  /**
   * Transform the wsdl document using XSL.
   *
   * The result is a DOMDocument containing transformed WSDL elements for
   * generating class files.
   *
   * @param DOMNode $dom the dom document
   * @param string $xslFilePath the file path of the xsl to apply
   * @param string|null $saveOutputTo the output file to save the result to
   */
  protected function transformWsdl($xslFilePath, $saveOutputTo = null) {
    $transformedDom = null;
    $xsl = new XSLTProcessor();
    $xslDom = new DOMDocument();
    try {
      $xslDom->load($xslFilePath);
      $xsl->registerPHPFunctions();
      $xsl->importStyleSheet($xslDom);
      $transformedDom = $xsl->transformToDoc($this->dom);

      if ($saveOutputTo) {
        $transformedDom->formatOutput = true;
        $transformedDom->save($saveOutputTo);
      }
    } catch (Exception $e) {
      throw new WSDLInterpreterException(sprintf("Error interpreting WSDL "
          . "document (%s)", $e->getMessage()));
    }
    $this->dom = $transformedDom;
  }

  /**
   * Generate the php source code for the classes and services
   *
   * @param array $wsdlClasses containing the ordered WsdlClasses to be
   *        generated
   * @param array $wsdlServices containing the ordered WsdlServices to be
   *        generated
   */
  protected function generateSources($wsdlClasses, $wsdlServices) {
    $this->classPHPSources = array();
    $this->servicePHPSources = array();

    foreach ($wsdlClasses as $wsdlClass) {
      $this->classPHPSources[$wsdlClass->getRawName()] =
          $this->generateClassPHP($wsdlClass);
    }

    foreach ($wsdlServices as $wsdlService) {
      $this->servicePHPSources[$wsdlService->getRawName()] =
          $this->generateServicePHP($wsdlService);
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
   * @param WsdlElement_Class $class the wsdl class representing the class
   * @return string the php source code for the message type class
   */
  private function generateClassPHP(WsdlElement_Class $class) {
    $paddedDocs = implode("\n", $this->utils->padDocs($class->getDocs(), 2));
    $extends = "";
    $ext = $class->getExtends();
    if ($extendsClass = $class->getExtends()) {
      $extends = sprintf(' extends %s', $extendsClass->getName());
    }
    $properties = $this->generatePropertiesPHP($class->getProperties());

    $constructor = $this->generateConstructorPHP($class);

    return <<<EOF
if (!class_exists("{$class->getQuotedFqn()}", false)) {
  /**
{$paddedDocs}
   * @package {$this->package}
   * @subpackage {$this->version}
   */
  class {$class->getName()}{$extends} {

    const WSDL_NAMESPACE = "{$class->getWsdlNamespace()}";
    const XSI_TYPE = "{$class->getXsiTypeName()}";
{$properties}
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

{$constructor}
  }
}
EOF;
  }

  /**
   * Generate the code for the php properties.
   *
   * @param array $properties is the array of WsdlElement_Property objects
   * @return string the constructed code
   */
  private function generatePropertiesPHP($properties) {
    $return = "";
    foreach ($properties as $property) {
      $return .= $this->generatePropertyPHP($property);
    }

    $changedProperties = array();
    foreach ($properties as $property) {
      if ($property->hasChangedName()) {
        $changedProperties[] = $property;
      }
    }
    if (!count($changedProperties)) {
      return $return;
    }
    $return .= "    private \$_parameterMap = array(\n";
    foreach ($changedProperties as $property) {
      $return .= sprintf("      \"%s\" => \"%s\",\n", $property->getRawName(),
          $property->getName());
    }
    return $return . <<<EOF
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param \$var Variable name to set
     * @param \$value Value to set
     */
    public function __set(\$var, \$value) {
      \$this->{\$this->_parameterMap[\$var]} = \$value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param \$var Variable name to get
     * @return mixed Variable value
     */
    public function __get(\$var) {
      if (!isset(\$this->_parameterMap[\$var])) {
        return null;
      }
      return \$this->{\$this->_parameterMap[\$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return \$this->_parameterMap;
    }

EOF;
  }

  /**
   * Generate the class constructor code
   *
   * @param WsdlElement_Class $class the wsdl class
   * @return string the generated code
   */
  private function generateConstructorPHP(WsdlElement_Class $class) {
    $allProperties = $class->getAllProperties();

    $argNames = array();
    foreach ($allProperties as $property) {
      $argNames[] = "{$property->getVarName()} = null";
    }
    $args = implode(", ", $argNames);
    $constructor = "    public function __construct($args) {\n";

    if ($class->hasParent()) {
      $constructor .= "      parent::__construct();\n";
    }
    foreach ($class->getAllProperties() as $property) {
      $constructor .= "      \$this->{$property->getName()} = "
          . "{$property->getVarName()};\n";
    }
    return $constructor . "    }\n";
  }

  /**
   * Generate the php property
   *
   * @param WsdlElement_Property $property the property to describe.
   * @return string the generated code
   */
  private function generatePropertyPHP(WsdlElement_Property $property) {
    return <<<EOF

    /**
     * @access public
     * @var {$property->getType()}
     */
    public {$property->getVarName()};

EOF;
  }

  /**
   * Generates the PHP code for a WSDL service class representation
   *
   * This method, in combination with generateServiceFunctionPHP, create a PHP
   * class representation capable of handling overloaded methods with strict
   * parameter type checking.
   *
   * @param WsdlElement_Service $service the service description
   * @return string the php source code for the service class
   */
  private function generateServicePHP(WsdlElement_Service $service) {
    $return = <<<EOF
if (!class_exists("{$service->getName()}", false)) {
  /**
   * {$service->getName()}
   * @package {$this->package}
   * @subpackage {$this->version}
   */
  class {$service->getName()} extends {$this->soapClientClassName} {

    const SERVICE_NAME = "{$service->getRawName()}";
    const WSDL_NAMESPACE = "{$this->serviceNamespace}";
    const ENDPOINT = "{$service->getEndpoint()}";

    /**
     * The endpoint of the service
     * @var string
     */
    public static \$endpoint = "{$service->getEndpoint()}";

EOF;
    $return .= $this->generateServiceClassmapPHP($service);

    $return .= <<<EOF

    /**
     * Constructor using wsdl location and options array
     * @param string \$wsdl WSDL location for this service
     * @param array \$options Options for the SoapClient
     */
    public function __construct(\$wsdl, \$options, \$user) {
      \$options["classmap"] = self::\$classmap;
      parent::__construct(\$wsdl, \$options, \$user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }

EOF;

    foreach ($service->getFunctions() as $wsdlFunction) {
      $return .= $this->generateServiceFunctionPHP($wsdlFunction);
    }
    $return .= "  }\n}";
    return $return;
  }

  /**
   * Generate the service classmap.
   *
   * @param WsdlElement_Service $service the service
   * @return string the generated code.
   */
  private function generateServiceClassmapPHP(WsdlElement_Service $service) {
    $return = "";
    if (!$this->wsdlClasses) {
      return $return;
    }
    $return .= <<<EOF
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static \$classmap = array(

EOF;
    foreach ($this->wsdlClasses as $wsdlClass) {
      $return .= sprintf("      \"%s\" => \"%s\",\n", $wsdlClass->getRawName(),
          addslashes($wsdlClass->getFqn()));
    }
    $return .= "    );\n\n";

    return $return;
  }

  /**
   * Generates the PHP code for a WSDL service operation function representation
   *
   * The function code that is generated examines the arguments that are passed
   * and performs strict type checking against valid argument combinations for
   * the given function name, to allow for overloading.
   *
   * @param WsdlElement_Function $wsdlFunction the function
   * @return string the php source code for the function
   */
  private function generateServiceFunctionPHP(
      WsdlElement_Function $wsdlFunction) {
    $funcDocs = implode("\n", $this->utils->padDocs(
        $wsdlFunction->getDocs(), 4));

    $functionArgs = array();
    foreach ($wsdlFunction->getProperties() as $property) {
      $functionArgs[] = $property->getVarName();
    }
    $functionArgString = implode(', ', $functionArgs);

    $rawName = $wsdlFunction->getRawName();
    return <<<EOF
    /**
{$funcDocs}
     */
    public function {$rawName}({$functionArgString}) {
      \$args = new {$wsdlFunction->getName()}({$functionArgString});
      \$result = \$this->__soapCall("{$rawName}", array(\$args));
      return \$result->rval;
    }

EOF;
  }

  /**
   * Saves the PHP source code that has been loaded to a target directory.
   *
   * Services will be saved by their validated name, and classes will be
   * included with each service file so that they can be utilized independently.
   *
   * @param string $outputDirectory the destination directory for the source
   *    code
   * @return array array of source code files that were written out
   * @throws WSDLInterpreterException problem in writing out service sources
   */
  public function savePHP($outputDirectory) {
    if (!count($this->servicePHPSources)) {
      throw new WSDLInterpreterException("No services loaded");
    }
    $namespace = $this->enableNamespaces ? sprintf("namespace %s;\n\n",
        $this->utils->getNamespace()) : '';
    $require = sprintf("require_once \"%s\";\n\n", $this->soapClientClassPath);
    $classSource = join("\n\n", $this->classPHPSources);
    $outputFiles = array();
    foreach ($this->servicePHPSources as $serviceName => $serviceCode) {
      $filename = sprintf('%s/%s.php', $outputDirectory, $serviceName);
      $success = file_put_contents($filename, sprintf(
          "<?php\n%s%s%s%s\n\n%s\n\n", $this->getFileHeader(), $namespace,
              $require, $classSource, $serviceCode));
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
   * Gets the file header to put at the top of each PHP file.
   *
   * @return string the file header to put at the top of each PHP file
   */
  private function getFileHeader() {
    return $this->template->generate('file_header', array(
      'package' => $this->package,
      'version' => $this->version,
      'serviceName' => $this->serviceName,
    ));
  }
}
