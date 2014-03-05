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
 * The representation of the service
 */
class WsdlElement_Service extends WsdlElement_NamedClass {
  /**
   * The array of WsdlElement_Function objects
   */
  private $wsdlFunctions;

  /**
   * The constructor that configures more service properties.
   *
   * @param WsdlElement_Factory $factory for creating elements
   * @param WsdlElement_Utils $utils for providing utility functionality
   * @param DOMElement $src the element to represent
   */
  public function __construct(WsdlElement_Factory $factory,
      WsdlElement_Utils $utils, DOMElement $src) {
    parent::__construct($factory, $utils, $src);
    $this->initFunctions();
  }

  /**
   * Get the service functions.
   *
   * @return array containing WsdlElement_Function object
   */
  public function getFunctions() {
    return $this->wsdlFunctions;
  }

  /**
   * Get the endpoint for the service.
   *
   * @return string the service endpoint.
   */
  public function getEndpoint() {
    return $this->src->getAttribute('endpoint');
  }

  /**
   * Configure the functions for the service.
   *
   * @return WsdlElement_Service this object for chaining.
   */
  private function initFunctions() {
    $this->wsdlFunctions = array();
    foreach ($this->src->getElementsByTagName("function") as $entity) {
      $wsdlFunction = $this->factory->createFunction($entity);
      $this->wsdlFunctions[$wsdlFunction->getRawName()] = $wsdlFunction;
    }
    return $this;
  }
}
