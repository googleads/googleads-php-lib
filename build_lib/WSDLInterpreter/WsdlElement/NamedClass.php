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
 * A representation of a named class like wsdl object
 *
 * Provides utility methods for interacting with the element.
 */
abstract class WsdlElement_NamedClass extends WsdlElement_Named {
  /**
   * Store the processed name
   */
  protected $name;

  /**
   * An overridden constructor.
   *
   * Calls the parent constructor.
   *
   * @param WsdlElement_Factory $factory for creating elements
   * @param WsdlElement_Utils $utils for providing utility functionality
   * @param DOMElement $src the element to represent
   */
  public function __construct(WsdlElement_Factory $factory,
      WsdlElement_Utils $utils, DOMElement $src) {
    parent::__construct($factory, $utils, $src);
    $this->initName()
         ->initDocs();
  }

  /**
   * Overrides the default name getter to use the processed name.
   *
   * @return string the name of the element
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Get the array of doc lines.
   *
   * @return array the doc lines
   */
  public function getDocs() {
    return $this->docs;
  }

  /**
   * Set the processed name.
   *
   * Used to do some processing once the name is set.
   *
   * @return WsdlElement_NamedClass this object for chaining.
   */
  protected function initName() {
    $name = $this->getRawName();
    $this->name = $this->utils->filterClassName($name);

    return $this;
  }

  /**
   * Set the processed docs.
   *
   * Used to do some processing on creation.
   *
   * @return WsdlElement_NamedClass this object for chaining.
   */
  protected function initDocs() {
    $docElements = $this->src->getElementsByTagName("documentation");
    $docs = $docElements->item(0)->nodeValue;
    $docLines = explode("\n", trim($docs));
    $this->docs = array_map(
        array($this->utils, 'filterDocLine'), $docLines);
    return $this;
  }
}
