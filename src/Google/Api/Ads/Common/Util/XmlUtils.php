<?php
/**
 * A collection of utility methods for working with XML.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

/**
 * A collection of utility methods for working with XML.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class XmlUtils {

  /**
   * Gets the DOMDocument of the <var>$xml</var>.
   * @param string $xml the XML to create a DOMDocument from
   * @return DOMDocument the DOMDocument of the XML
   * @throws DOMException if the DOM could not be loaded
   */
  public static function GetDomFromXml($xml) {
    set_error_handler(array('XmlUtils', 'HandleXmlError'));
    $dom = new DOMDocument();
    $dom->loadXML($xml,
        LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_NOENT | LIBXML_XINCLUDE);
    restore_error_handler();
    return $dom;
  }

  /**
   * Gets the XML represenation of the document.
   * @param DOMDocument $document the document to convert
   * @return string the XML represenation of the document
   */
  public static function GetXmlFromDom($document) {
    return trim($document->saveXml());
  }

  /**
   * Returns a pretty printed XML. If the XML cannot be loaded a string
   * stripped of any newlines is returned.
   * @param string $xml the XML to pretty print
   * @return string a pretty printed string
   */
  public static function PrettyPrint($xml) {
    try {
      $dom = self::GetDomFromXml($xml);
      $dom->formatOutput = true;
      return self::GetXmlFromDom($dom);
    } catch (DOMException $e) {
      restore_error_handler();
      return str_replace(array("\r\n", "\n", "\r"), '', $xml);
    }
  }

  /**
   * Converts a DOMDocument to a stdClass object, where each element under
   * the root node is a field. Atribute values are ignored.
   * @param DOMDocument $document the document to convert
   * @returns Object the converted object
   */
  public static function ConvertDocumentToObject($document) {
    return self::ConvertElementToObject($document->documentElement);
  }

  /**
   * Converts a DOMElement to a stdClass object, where each child element is
   * a field. Attribute values are ignored.
   * @param DOMElement $element the element to convert
   * @returns Object the converted object
   */
  private static function ConvertElementToObject($element) {
    $result = array();
    if ($element->hasChildNodes()) {
      $numChildNodes = $element->childNodes->length;
      for ($i = 0; $i < $numChildNodes; $i++) {
        $childNode = $element->childNodes->item($i);
        if ($childNode instanceof DOMElement) {
          $name = $childNode->tagName;
          $value = self::ConvertElementToObject($childNode);
          if (isset($result[$name])) {
            if (!is_array($result[$name])) {
              $result[$name] = array($result[$name]);
            }
            $result[$name][] = $value;
          } else {
            $result[$name] = $value;
          }
        }
      }
    }
    if (sizeof($result) > 0) {
      return (Object) $result;
    } else {
      return self::ConvertNodeValueToObject($element->nodeValue);
    }
  }

  /**
   * Converts a node value to a PHP value of the appropriate type.
   * @param string $value the value of the node
   * @return mixed the PHP value as the appropriate type
   */
  private static function ConvertNodeValueToObject($value) {
    if (is_numeric($value)) {
      if (strcmp(strval(intval($value)), $value) === 0) {
        return intval($value);
      } elseif (strcmp(sprintf('%.0f', floatval($value)), $value) === 0) {
        return floatval($value);
      } else {
        return $value;
      }
    } else if (strtolower($value) == 'true' || strtolower($value) == 'false') {
      return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    } else {
      return $value;
    }
  }

  /**
   * Converts an object to a DOMDocument. The root element name is passed in as
   * a parameter, and each field of the object becomes a child element. Array
   * values are represented by multiples instances of that element. Methods on
   * the object are ignored. There is no support for XML attributes.
   * @param Object $object the object to serialize
   * @param string $rootElementName the name of the root element
   * @return DOMDocument the document representing the object
   */
  public static function ConvertObjectToDocument($object, $rootElementName) {
    $document = new DOMDocument();
    $document->appendChild(
        self::ConvertObjectToElement($object, $rootElementName, $document));
    return $document;
  }

  /**
   * Converts an object to an DOMElement.
   * @param Object $object the object to serialize
   * @param string $elementName the name of the element to serialize
   * @param DOMDocument $document the document that the element will be added to
   * @return DOMElement the element representing the object
   */
  private static function ConvertObjectToElement($object, $elementName,
      $document) {
    if (!isset($object)) {
      return NULL;
    }
    $element = $document->createElement($elementName);
    $children = array();
    if (is_array($object) && MapUtils::IsMap($object)) {
      $object = (Object) $object;
    }
    if (is_object($object)) {
      foreach(get_object_vars($object) as $field => $value) {
        if (is_array($value) && !MapUtils::IsMap($value)) {
          foreach($value as $item) {
            $children[] =
                self::ConvertObjectToElement($item, $field, $document);
          }
        } else {
          $children[] =
              self::ConvertObjectToElement($value, $field, $document);
        }
      }
      foreach ($children as $child) {
        if (isset($child)) {
          $element->appendChild($child);
        }
      }
    } else {
      $element->nodeValue = self::ConvertObjectToNodeValue($object);
    }
    return $element;
  }

  /**
   * Converts a PHP value to a string for use in an XML node value.
   * @param mixed $object the PHP value
   * @returns string the string value of the object
   */
  private static function ConvertObjectToNodeValue($object) {
    if (is_float($object)) {
      if (floatval(strval($object)) == $object) {
        return strval($object);
      } else {
        return sprintf('%.0f', $object);
      }
    } else if (is_bool($object)) {
      return $object ? 'true': 'false';
    } else {
      return strval($object);
    }
  }

  /**
   * Caputures the warnings thrown by the loadXML function to create a proper
   * DOMException.
   * @param string $errno contains the level of the error raised, as an integer
   * @param string $errstr contains the error message, as a string
   * @param string $errfile contains the filename that the error was raised in,
   *     as a string
   * @param integer $errline contains the line number the error was raised at,
   *     as an integer
   * @return boolean <var>FALSE</var> if the normal error handler should
   *     continue
   */
  public static function HandleXmlError($errno, $errstr, $errfile, $errline) {
    if ($errno == E_WARNING
        && substr_count($errstr, 'DOMDocument::loadXML()') > 0) {
      throw new DOMException($errstr);
    } else {
      return FALSE;
    }
  }
}

