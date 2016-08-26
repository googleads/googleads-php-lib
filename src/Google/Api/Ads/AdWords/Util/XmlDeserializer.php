<?php
/**
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * A deserializer for converting an XML representation to an object.
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class XmlDeserializer {

  /**
   * A mapping from XML tag names and element names in XSD to PHP classes.
   */
  private $classmap;

  /**
   * Creates a new XML deserializer using the specified classmap, which provides
   * information about the hand-written PHP stubs for the types defined outside
   * WSDLs.
   *
   * @param array $classmap a mapping from XML tag names and element names in
   *     XSD to PHP classes. It helps include the hand-written PHP stubs for the
   *     types defined outside WSDLs.
   */
  public function __construct(array $classmap) {
    $this->classmap = $classmap;
  }

  /**
   * Converts an XML representation to objects of proper classes using many
   * types of information, e.g., the xsi:type attribute.
   *
   * @param string $xml the XML representation to be deserialized
   * @return mixed the converted object
   */
  public function ConvertXmlToObject($xml) {
    return self::ConvertElementToObject(
        XmlUtils::GetDomFromXml($xml)->documentElement);
  }

  /**
   * Converts a DOMElement to an object of appropriate class where each child
   * element is converted to be a class property.
   *
   * @param DOMElement $element the element to convert
   * @param string $className suggested class name for this element
   * @return mixed the converted object of appropriate class
   */
  private function ConvertElementToObject(DOMElement $element,
      $className = null) {
    $result = array();
    $elementClass = self::GetTypeReflectionClass($element, $className);
    $elementObject =
        ($elementClass !== null) ? $elementClass->newInstance() : null;

    // Create child nodes and attach them to the element recursively.
    if ($element->hasChildNodes()) {
      for ($i = 0; $i < $element->childNodes->length; $i++) {
        $childNode = $element->childNodes->item($i);
        if ($childNode instanceof DOMElement) {
          $childName = $childNode->tagName;
          // Determine the type hint of the child node.
          $typeHint = ($elementObject !== null)
              ? self::GetTypeHint(get_class($elementObject), $childName)
              : null;

          // Type hint is sometimes suffixed by [] to indicate that the member
          // variable is supposed to be an array.
          if (substr($typeHint, -strlen('[]')) === '[]') {
            if (array_key_exists($childName, $result) === false) {
              $result[$childName] = array();
            }
            $typeHint = substr($typeHint, 0, -strlen('[]'));
          }
          // Call this function recursively on the child node.
          $value = self::ConvertElementToObject($childNode, $typeHint);
          if (!isset($result[$childName])) {
            $result[$childName] = $value;
          } else {
            $result[$childName][] = $value;
          }
        }
      }
    }

    // If $result contains no members, $element is a leaf node.
    if (count($result) === 0) {
      return self::ConvertNodeValueToObject($element->nodeValue);
    }

    // If no relevant class information about $element is found and thus an
    // $elementObject can't be created, cast $result into an stdClass object
    // and return it as a result.
    if ($elementObject === null) {
      return (object) $result;
    }
    // In case $elementObject is created, populate its properties with values
    // from $result.
    foreach ($result as $name => $value) {
      // In case the property doesn't exist in the current class, look up in
      // _parameterMap, which should be available in the class or its ancestor
      // class.
      // e.g., Subclasses of Operation have Operation.Type as their property
      // in WSDL, but it is generated as OperationType in PHP. _parameterMap
      // tells what the property is generated as.
      if (!$elementClass->hasProperty($name)) {
        $parameterMapProp = null;
        $iteratorClass = $elementClass;
        do {
          if ($iteratorClass->hasProperty('_parameterMap')) {
            $parameterMapProp = $iteratorClass->getProperty('_parameterMap');
          }
          $iteratorClass = $iteratorClass->getParentClass();
        } while ($parameterMapProp === null && $iteratorClass !== false);
        $parameterMapProp->setAccessible(true);
        $parameterMap = $parameterMapProp->getValue($elementObject);
        $name = $parameterMap[$name];
      }
      $nameProperty = $elementClass->getProperty($name);
      $nameProperty->setAccessible(true);
      $nameProperty->setValue($elementObject, $value);
    }

    return $elementObject;
  }

  /**
   * Converts a node value to a PHP value of the appropriate type.
   *
   * @param string $value the value of the node
   * @return mixed the PHP value as the appropriate type
   */
  private function ConvertNodeValueToObject($value) {
    if (is_numeric(trim($value))) {
      if (filter_var($value, FILTER_VALIDATE_INT)) {
        return intval($value);
      } else if (filter_var($value, FILTER_VALIDATE_FLOAT)) {
        return floatval($value);
      } else {
        return $value;
      }
    } else if (strtolower(trim($value)) === 'true'
        || strtolower(trim($value)) === 'false') {
      // Check if the value equals to a string 'true' or 'false' here instead of
      // using filter_var with FILTER_VALIDATE_BOOLEAN. This is because the
      // function returns true for strings like "yes" and "on", and false for
      // "no" and "off", which is unwanted here.
      return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    } else {
      return $value;
    }
  }

  /**
   * Gets a relevant RefelectionClass object of the specified DOMElement object.
   * This is determined by an attribute xsi:type of the DOMElement object, by a
   * suggested class name, or by the classmap.
   *
   * @param DOMElement $element the element to get its ReflectionClass object
   * @param string $className suggested class name for this element
   * @return null|ReflectionClass the ReflectionClass object of the specified
   *     DOMElement
   */
  private function GetTypeReflectionClass(DOMElement $element,
      $className = null) {
    $resultClass = null;
    // If the 'xsi:type' attribute is not empty string, use it as a class name.
    // If it's not found, use $className as a class name when it's not null.
    // Finally, look up the tag name of $element in $this->classmap.
    if ($element->getAttribute('xsi:type') !== '') {
      // Strip off the prefix if exists, e.g., ns1:, to make the name a valid
      // PHP class name.
      $typeHint =
          preg_replace('/^[A-Za-z0-9_.-]+:/', '',
              $element->getAttribute('xsi:type'));
      $resultClass = new ReflectionClass($typeHint);
    } else if ($className !== null && class_exists($className)) {
      $resultClass = new ReflectionClass($className);
    } else {
      // Strip off the prefix if exists, e.g., ns1:, to make the name a valid
      // PHP class name.
      $elementName =
          preg_replace('/^[A-Za-z0-9_.-]+:/', '', $element->tagName);
      if (array_key_exists($elementName, $this->classmap)) {
        $resultClass = new ReflectionClass(
            $this->classmap[$elementName]);
      }
    }
    return $resultClass;
  }

  /**
   * Determines the type hint of the specified property of the given class.
   *
   * @param string $className the class name whose the given property's type
   *     will be determined
   * @param string $propertyName the property name whose type will be determined
   * @return null|string the type hint of the property
   */
  private function GetTypeHint($className, $propertyName) {
    $typeHint = null;
    $clazz = new ReflectionClass($className);
    // Use reflection to get a property of the class whose name is the
    // same as the property's tag name.
    // Then extract the type hint from the annotation of the property.
    if ($clazz->hasProperty($propertyName)) {
      $prop = $clazz->getProperty($propertyName);
      if (preg_match('/@var\s*(.+)\s/', $prop->getDocComment(),
          $annotations)) {
        // The type hints are sometimes prefixed with "tns", which is stripped
        // here to extract only the type names.
        $typeHint = preg_replace('/^tns/', '', $annotations[1]);
      }
    }
    return $typeHint;
  }
}
