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
 * The representation of the wsdl class like object.
 */
class WsdlElement_Class extends WsdlElement_NamedClass {
  /**
   * The name of the class this class extends.
   */
  protected $extendsName;

  /**
   * The class that this class extends.
   */
  protected $extends;

  /**
   * The array of properties.
   */
  protected $properties;

  /**
   * The namespace of the element from the wsdl.
   */
  protected $wsdlNamespace;

  /**
   * The constructor that configures more properties.
   *
   * @param WsdlElement_Factory $factory for creating elements
   * @param WsdlElement_Utils $utils for providing utility functionality
   * @param DOMElement $src the element to represent
   */
  public function __construct(WsdlElement_Factory $factory,
      WsdlElement_Utils $utils, DOMElement $src) {
    parent::__construct($factory, $utils, $src);
    $this->initExtendsName()
         ->initProperties()
         ->initWsdlNamespace();
  }

  /**
   * Get the parent class.
   *
   * @return WsdlElement_Class|null the parent class or null if none specified
   */
  public function getExtends() {
    if (!$this->extends && $this->extendsName) {
      $this->extends = $this->factory->getClass($this->extendsName);
    }
    return $this->extends;
  }

  /**
   * Test if this class has a parent.
   *
   * @return boolean true if it has a parent
   */
  public function hasParent() {
    return (boolean) $this->getExtends();
  }

  /**
   * Get the properties used in the class.
   *
   * @return array containing WsdlProperties
   */
  public function getProperties() {
    return $this->properties;
  }

  /**
   * Get all properties including inherited properties from the parent class
   * if it has one.
   *
   * @return array containing WsdlProperties
   */
  public function getAllProperties() {
    $properties = $this->getProperties();
    if ($extends = $this->getExtends()) {
      $properties = array_merge($properties, $extends->getProperties());
    }
    return $properties;
  }

  /**
   * Get the XsiType for the class.
   *
   * @return string the XsiType
   */
  public function getXsiTypeName() {
    return $this->src->getAttribute('xsiTypeName');
  }

  /**
   * Get the namespace of the class within the wsdl.
   *
   * @return string the namespace
   */
  public function getWsdlNamespace() {
    return $this->wsdlNamespace;
  }

  /**
   * Set the parent name.
   *
   * @return WsdlElement_Class this object for chaining.
   */
  private function initExtendsName() {
    $extends = $this->src->getElementsByTagName("extends");
    if ($extends->length) {
      $this->extendsName = $extends->item(0)->nodeValue;
    }
    return $this;
  }

  /**
   * Set the properties.
   *
   * @return WsdlElement_Class this object for chaining.
   */
  private function initProperties() {
    $this->properties = array();
    foreach ($this->src->getElementsByTagName("entry") as $entity) {
      $wsdlProperty = $this->factory->createProperty($entity);
      $this->properties[$wsdlProperty->getRawName()] = $wsdlProperty;
    }
    return $this;
  }

  /**
   * Set the wsdl namespace.
   */
  private function initWsdlNamespace() {
    $this->wsdlNamespace = $this->utils->getWsdlNamespace($this->getRawName());
  }
}
