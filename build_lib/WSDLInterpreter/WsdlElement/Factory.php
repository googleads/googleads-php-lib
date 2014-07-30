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

/**
 * The factory to create wsdl objects.
 *
 * Stores handles on created objects, to ensure reuse. Offers convenience
 * methods to retrieve created object.
 */
class WsdlElement_Factory {
  /**
   * The cache of created classes
   */
  private $classCache;

  /**
   * The cache of created functions
   */
  private $functionCache;

  /**
   * The cache of created services
   */
  private $serviceCache;

  /**
   * The cache of created properties
   */
  private $propertyCache;

  /**
   * The configured WsdlElement_Utils
   */
  private $utils;

  /**
   * Constructor.
   *
   * @param WsdlElement_Utils $utils the configured utility class
   */
  public function __construct(WsdlElement_Utils $utils) {
    $this->classCache = array();
    $this->functionCache = array();
    $this->serviceCache = array();
    $this->propertyCache = array();
    $this->utils = $utils;
  }

  /**
   * Create all classes from the wsdl doc.
   *
   * @param DOMDocument $dom
   * @return array containing all the WsdlElement_Class objects
   */
  public function createClasses($dom) {
    $wsdlClasses = array();
    foreach ($dom->getElementsByTagName("class") as $element) {
      $wsdlClass = self::createClass($element);
      $wsdlClasses[$wsdlClass->getRawName()] = $wsdlClass;
    }
    return $wsdlClasses;
  }

  /**
   * Create all functions from the wsdl doc.
   *
   * @param DOMDocument $dom
   * @return array containing all the WsdlElement_Function objects
   */
  public function createFunctions($dom) {
    $wsdlFunctions = array();
    foreach ($dom->getElementsByTagName("function") as $element) {
      $wsdlFunction = self::createFunction($element);
      $wsdlFunctions[$wsdlFunction->getRawName()] = $wsdlFunction;
    }
    return $wsdlFunctions;
  }

  /**
   * Create all services from the wsdl doc.
   *
   * @param DOMDocument $dom
   * @return array containing all the WsdlElement_Service objects
   */
  public function createServices($dom) {
    $wsdlServices = array();
    foreach ($services = $dom->getElementsByTagName("service") as $element) {
      $wsdlService = self::createService($element);
      $wsdlServices[$wsdlService->getRawName()] = $wsdlService;
    }
    return $wsdlServices;
  }

  /**
   * Create a class representation.
   *
   * @param DOMElement $src the element to represent
   * @return WsdlElement_Class the representation
   */
  public function createClass(DOMElement $src) {
    $key = $this->getKey($src);
    if (!isset($this->classCache[$key])) {
      $this->classCache[$key] = new WsdlElement_Class($this, $this->utils,
          $src);
    }
    return $this->classCache[$key];
  }

  /**
   * Create a function representation.
   *
   * @param DOMElement $src the element to represent
   * @return WsdlElement_Function the representation
   */
  public function createFunction(DOMElement $src) {
    $key = $this->getKey($src);
    if (!isset($this->functionCache[$key])) {
      $this->functionCache[$key] = new WsdlElement_Function($this, $this->utils,
          $src);
    }
    return $this->functionCache[$key];
  }

  /**
   * Create a service representation.
   *
   * @param DOMElement $src the element to represent
   * @return WsdlElement_Service the representation
   */
  public function createService(DOMElement $src) {
    $key = $this->getKey($src);
    if (!isset($this->serviceCache[$key])) {
      $this->serviceCache[$key] = new WsdlElement_Service($this, $this->utils,
          $src);
    }
    return $this->serviceCache[$key];
  }

  /**
   * Create a property representation.
   *
   * @param DOMElement $src the element to represent
   * @return WsdlElement_Property the representation
   */
  public function createProperty(DOMElement $src) {
    $key = $this->getKey($src);
    if (!isset($this->propertyCache[$key])) {
      $this->propertyCache[$key] = new WsdlElement_Property($this, $this->utils,
          $src);
    }
    return $this->propertyCache[$key];
  }

  /**
   * Get a created class.
   *
   * @param string $rawName the unfiltered name of the class
   * @return WsdlElement_Class|null the WsdlElement_Class or null
   */
  public function getClass($rawName) {
    if (isset($this->classCache[$rawName])) {
      return $this->classCache[$rawName];
    }
    return null;
  }

  /**
   * Get all created services.
   *
   * @return array the created WsdlElement_Service objects.
   */
  public function getServices() {
    return $this->serviceCache;
  }

  /**
   * Get all classes in a order suitable for instantiation.
   *
   * Example:
   *   Class A extends B
   *   Class B extends C
   * Order added:
   *   C, B, A
   *
   * @param array|null $wsdlClasses the classes to reorder or null for all
   * @param array $orderedClasses the existing ordered classes
   * @return array the ordered list of WsdlClasses
   */
  public function getDependencyOrderedClasses() {
    $unorderedClasses = $this->classCache;

    $orderedClasses = array();
    while(count($unorderedClasses)) {
      $loaded = 0;
      foreach ($unorderedClasses as $name => $wsdlClass) {
        $extendsClass = $wsdlClass->getExtends();
        $extendsName = $extendsClass ? $extendsClass->getRawName() : null;
        // If $wsdlClass has no parent or the parent is already added:
        if (!$extendsName || isset($orderedClasses[$extendsName])) {
          // Add the $wsdlClass to $orderedClasses
          // and remove it from the unsorted classes.
          $orderedClasses[$name] = $wsdlClass;
          unset($unorderedClasses[$name]);
          $loaded++;
        }
      }

      // If we've got ourselves into a circular dependency loop:
      // I.e. we're not loading the items that are left
      if (!$loaded && count($unorderedClasses)) {
        // Throw an error
        throw new WSDLInterpreterException(sprintf(
            'Error loading classes: %s', implode(", ",
            array_keys($unorderedClasses))));
      }
    }

    return $orderedClasses;
  }

  /**
   * Get the key for a DOMElement.
   *
   * @param DOMElement $src the element to generate a key for
   */
  protected function getKey(DOMElement $src) {
    $key = $src->getAttribute('name');
    if ($src->hasAttribute('type')) {
      $key .= "-{$src->getAttribute('type')}";
    }
    return $key;
  }
}
