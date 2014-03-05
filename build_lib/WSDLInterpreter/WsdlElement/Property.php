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
 * The representation of a property from the wsdl
 */
class WsdlElement_Property extends WsdlElement_Named {
  /**
   * The type of the property
   */
  private $type;

  /**
   * Configure more attributes for the property.
   *
   * @param WsdlElement_Factory $factory for creating elements
   * @param WsdlElement_Utils $utils for providing utility functionality
   * @param DOMElement $src the element to represent
   */
  public function __construct(WsdlElement_Factory $factory,
      WsdlElement_Utils $utils, DOMElement $src) {
    parent::__construct($factory, $utils, $src);
    $this->initType($src)
         ->initName();
  }

  /**
   * Get the filtered name.
   *
   * Use getRawName() for the unfiltered name
   *
   * @return string the filtered name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Get the property type.
   *
   * @return string the type
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Get the name for a variable.
   *
   * @return string the var name
   */
  public function getVarName() {
    return sprintf("$%s", $this->getName());
  }

  /**
   * Test if the object has changed name through filtering.
   *
   * @return boolean true if the name has changed
   */
  public function hasChangedName() {
    return ($this->getName() !== $this->getRawName());
  }

  /**
   * Process the name.
   *
   * @return WsdlElement_Property this object for chaining.
   */
  protected function initName() {
    $this->name = $this->utils->getSafePhpName($this->getRawName());
    return $this;
  }

  /**
   * Process the type.
   *
   * @param DOMElement $src the element to represent
   * @return WsdlElement_Property this object for chaining.
   */
  protected function initType($src) {
    $this->type = $this->utils->getSafePhpType($src->getAttribute("type"));
    return $this;
  }
}
