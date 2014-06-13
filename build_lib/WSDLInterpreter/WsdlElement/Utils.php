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
 * Offers a set of utility functions to manipulate data
 */
class WsdlElement_Utils
{
  /**
   * The rename map for renaming classes
   *
   * Structure:
   * array(
   *   '<old name>' => '<new name>',
   *   ...
   * );
   */
  private $renameMap;

  /**
   * The namespace to use if any
   */
  private $namespace;

  /**
   * The classes to skip checking name
   */
  private $skipClassList;

  /**
   * The namespaces for the classes indexed by the unfiltered name
   */
  protected $namespaceMap;

  /**
   * The constructor to setup the object.
   */
  public function __construct() {
    $this->renameMap = array();
    $this->skipClassList = array();
  }

  /**
   * Set the rename class map.
   *
   * Structure:
   * array(
   *   '<old name>' => '<new name>',
   *   ...
   * );
   *
   * @param array $map structure as defined before
   */
  public function setRenameClassMap($map) {
    $this->renameMap = $map;
  }

  /**
   * Set the list of unfiltered class names to skip checking names.
   *
   * @param array of names of unfiltered classes
   */
  public function setSkipClassNameCheck($nameList) {
    $this->skipClassList = $nameList;
  }

  /**
   * Set the namespace to use for renaming classes.
   *
   * @param string the namespace
   */
  public function setPhpNamespace($namespace) {
    $this->namespace = $namespace;
  }

  /**
   * Set the wsdl namespace map.
   *
   * Mapping the unfiltered name to the namespace to use.
   *
   * @param array $namespaceMap the name => namespace map
   */
  public function setWsdlNamespaceMap($namespaceMap) {
    $this->namespaceMap = $namespaceMap;
  }

  /**
   * Filter a class name.
   *
   * Adds namespaces, uses rename map and checks the name won't collide.
   *
   * @param string $name the original name of the class
   * @return string the filtered name
   */
  public function filterClassName($name) {
    $filteredName = $name;
    if (isset($this->renameMap[$name])) {
      $filteredName = $this->renameMap[$name];
    }
    $filteredName = ucfirst($this->getSafePhpName($filteredName));

    if (!in_array($filteredName, $this->skipClassList)
        && class_exists($filteredName, false)) {
      throw new Exception("Class $filteredName already defined.".
                " Cannot redefine class with class loaded.");
    }
    return $filteredName;
  }

  /**
   * Get the namespaced version of a name, if a namespace is configured.
   *
   * @param string the name
   * @return string the namespaced name
   */
  public function namespaceName($name) {
    if ($this->namespace) {
      return sprintf('%s\\%s', $this->namespace, $name);
    }
    return $name;
  }

  /**
   * Get the current namespace) {
   */
  public function getNamespace() {
    return $this->namespace;
  }

  public function getWsdlNamespace($name) {
    return isset($this->namespaceMap[$name]) ? $this->namespaceMap[$name] :
        null;
  }

  /**
   * Converts the name to conform to PHP naming conventions.
   *
   * Example:
   * AdXError.Reason => AdXErrorReason
   * String_StringMapEntry => String_StringMapEntry
   * 12Foo3.4Bar5 => Foo34Bar5
   *
   * @param string $name the name to convert
   * @return string the PHP safe version of the submitted name
   */
  public function getSafePhpName($name)
  {
    return preg_replace('#[^a-zA-Z0-9_\x7f-\xff]*#', '',
        preg_replace('#^[^a-zA-Z_\x7f-\xff]*#', '', $name));
  }

  /**
   * Converts a wsdl type against known PHP primitive types, or otherwise
   * converts the namespace of conform to PHP type naming conventions.
   *
   * @param string $type the type to test
   * @return string the PHP safe version of the submitted type
   */
  public function getSafePhpType($type)
  {
    $array = false;
    if (substr($type, -2) == "[]") {
      $array = true;
      $type = substr($type, 0, -2);
    }
    switch (strtolower($type)) {
      case "int":
      case "integer":
      case "long":
      case "byte":
      case "short":
      case "negativeInteger":
      case "nonNegativeInteger":
      case "nonPositiveInteger":
      case "positiveInteger":
      case "unsignedByte":
      case "unsignevnt":
      case "unsignedLong":
      case "unsignedShort":
        $validType = "integer";
        break;
      case "float":
      case "long":
      case "double":
      case "decimal":
        $validType = "double";
        break;
      case "string":
      case "token":
      case "normalizedString":
      case "hexBinary":
        $validType = "string";
        break;
      default:
        $validType = $this->getSafePhpName($type);
        break;
    }
    if ($array) {
      $validType .= "[]";
    }
    return $validType;
  }

  public function filterDocLine($line) {
    return sprintf(" * %s", trim($line));
  }

  public function padDocs($docs, $pad = 2) {
    $paddedDocs = array();
    foreach ($docs as $line) {
      $paddedDocs[] = str_pad(' ', $pad) . $line;
    }
    return $paddedDocs;
  }
}
