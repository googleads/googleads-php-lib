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
 * A serializer for converting an object to an XML representation.
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class XmlSerializer {

  const ADWORDS_NS_ATTR_PREFIX = 'xmlns:ns1="';
  const XSI_ATTRIBUTE = 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';

  /**
   * Converts an object to an XML string. The root element name is passed in as
   * a parameter, and each field of the object becomes a child element. Array
   * values are represented by multiples instances of that element. Methods on
   * the object are ignored.
   *
   * @param mixed $object the object to serialize
   * @param string $rootElementName the name of the root element
   * @param bool $useXsiType whether the xsi:type will be added into XML tags
   *     when available
   * @return string the XML serialized string of the object
   */
  public function ConvertObjectToXml($object, $rootElementName, $useXsiType) {
    $document = new DOMDocument('1.0', 'UTF-8');
    $document->appendChild(
        self::ConvertObjectToElement($object, $rootElementName, $document,
            $useXsiType));
    $xml = XmlUtils::GetXmlFromDom($document);

    if ($useXsiType) {
      // Insert links to definitions of the ns1 and xsi namespaces.
      $xml = preg_replace('/<ns1:mutate/',
          '<ns1:mutate ' . self::ADWORDS_NS_ATTR_PREFIX
              . $object::WSDL_NAMESPACE . '"', $xml);
      $xml = preg_replace('/<operations/',
          '<operations ' . self::XSI_ATTRIBUTE, $xml);
    }
    return $xml;
  }

  /**
   * Converts an object to a DOMElement.
   * @param mixed $object the object to serialize
   * @param string $elementName the name of the element to serialize
   * @param DOMDocument $document the document that the element will be added to
   * @param bool $useXsiType whether the xsi:type will be added into XML tags
   *     when available
   * @return DOMElement the element representing the object
   */
  private function ConvertObjectToElement($object, $elementName,
      DOMDocument $document, $useXsiType) {
    $element = $document->createElement($elementName);
    // Call ConvertObjectToNodeValue for primitive values.
    if (!is_array($object) && !is_object($object)) {
      $element->nodeValue = self::ConvertObjectToNodeValue($object);
      return $element;
    }

    // If $object is an ordered array, convert each of its child nodes.
    // If it's an associative array, treat it as if it were object.
    if (is_array($object) && (!MapUtils::IsMap($object))) {
      $children = $this->CreateChildListForOrderedArrays($object, $document,
          $useXsiType);
    } else {
      $object = (object) $object;
      // Set xsi:type when the object contains it. This is required for some
      // services to make XML tag contain more specific type information needed
      // for executing operations.
      if ($useXsiType && $object->getXsiTypeName() !== null
          && $object->getXsiTypeName() !== '') {
        $element->setAttribute('xsi:type', 'ns1:' . $object->getXsiTypeName());
      }
      $children = $this->CreateChildListForObjects($object, $document,
          $useXsiType);
    }

    foreach ($children as $child) {
      if (!empty($child->nodeValue) || is_numeric($child->nodeValue)) {
        $element->appendChild($child);
      }
    }
    return $element;
  }

  /**
   * Converts a PHP value to a string for use in an XML node value.
   * @param mixed $object the PHP value
   * @returns string the string value of the object
   */
  private function ConvertObjectToNodeValue($object) {
    if (is_float($object)) {
      return strval($object);
    } else if (is_bool($object)) {
      return $object ? 'true': 'false';
    } else {
      return strval(htmlspecialchars($object));
    }
  }

  /**
   * Creates an array of child elements for ordered arrays.
   * @param array $orderedArray the array whose elements will be serialized
   * @param DOMDocument $document the document being constructed
   * @param bool $useXsiType whether the xsi:type will be added into XML tags
   *     when available
   * @return array an array of child elements created from the specified array
   */
  private function CreateChildListForOrderedArrays(array $orderedArray,
      DOMDocument $document, $useXsiType) {
    $children = array();
    foreach ($orderedArray as $value) {
      $children[] =
        self::ConvertObjectToElement($value, get_class($value), $document,
            $useXsiType);
    }
    return $children;
  }

  /**
   * Creates an array of child elements for objects.
   * @param object $object the object whose properties will be serialized
   * @param DOMDocument $document the document being constructed
   * @param bool $useXsiType whether the xsi:type will be added into XML tags
   *     when available
   * @return array an array of child elements created from the specified object
   */
  private function CreateChildListForObjects($object,
      DOMDocument $document, $useXsiType) {
    $children = array();
    foreach (get_object_vars($object) as $field => $value) {
      if (is_array($value) && !MapUtils::IsMap($value)) {
        foreach ($value as $item) {
          $children[] =
              self::ConvertObjectToElement($item, $field, $document,
                  $useXsiType);
        }
      } else {
        $children[] =
            self::ConvertObjectToElement($value, $field, $document,
                $useXsiType);
      }
    }
    return $children;
  }
}
