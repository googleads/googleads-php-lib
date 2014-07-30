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
 * The representation of functions from the wsdl
 */
class WsdlElement_Function extends WsdlElement_Named {
  /**
   * The properties for the function
   */
  protected $properties;

  /**
   * The name of the function
   */
  protected $name;

  /**
   * The docs for the function
   */
  protected $docs;

  /**
   * The constructor that configures more properties for the function.
   *
   * @param WsdlElement_Factory $factory for creating elements
   * @param WsdlElement_Utils $utils for providing utility functionality
   * @param DOMElement $src the element to represent
   */
  public function __construct(WsdlElement_Factory $factory,
      WsdlElement_Utils $utils, DOMElement $src) {
    parent::__construct($factory, $utils, $src);
    $this->initProperties()
         ->initDocs();
  }

  /**
   * Get the function filtered name.
   *
   * Use getRawName() for the unfiltered name
   *
   * @return string the name
   */
  public function getName() {
    if (!$this->name) {
      $this->initName();
    }
    return $this->name;
  }

  /**
   * Get the properties of the function.
   *
   * @return array containing WsdlElement_Property objects
   */
  public function getProperties() {
    return $this->properties;
  }

  /**
   * Get the docs for the function.
   *
   * @return array containing strings, the lines of doc
   */
  public function getDocs() {
    return $this->docs;
  }

  /**
   * Process the name of the class.
   *
   * @return WsdlElement_Function this object for chaining.
   */
  private function initName() {
    if ($functionClass = $this->getFunctionClass()) {
      $this->name = $functionClass->getName();
    }
    return $this;
  }

  /**
   * Set the properties of the function.
   *
   * @return WsdlElement_Function this object for chaining.
   */
  private function initProperties() {
    $this->properties = array();
    if ($functionClass = $this->getFunctionClass()) {
      $this->properties = $functionClass->getProperties();
    }
    return $this;
  }

  /**
   * Set the docs for the function.
   *
   * @return WsdlElement_Function this object for chaining.
   */
  private function initDocs() {
    $this->docs = array();
    if ($functionClass = $this->getFunctionClass()) {
      $this->docs = $functionClass->getDocs();
    }
    return $this;
  }

  /**
   * Get the class representing the function.
   *
   * @return WsdlElement_Class|null the class representation of the function
   */
  private function getFunctionClass() {
    return $this->factory->getClass($this->getRawName());
  }
}
