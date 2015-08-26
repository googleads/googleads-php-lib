<?php
/**
 * The SOAP XML request fixer used to fix some inconsistencies among the
 * different versions of the PHP SoapClient.
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
 */
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * The SOAP XML request fixer used to fix some inconsistencies among the
 * different versions of the PHP SoapClient.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class SoapRequestXmlFixer {

  private static $XSI_NAMESPACE = 'http://www.w3.org/2001/XMLSchema-instance';

  private $addXsiTypes;
  private $removeEmptyElements;
  private $replaceReferences;

  /**
   * Constructor to determine how the XML should be fixed.
   * @param boolean $addXsiTypes <var>true</var> if xsi:types should be added
   *     to all complex type elements
   * @param boolean $removeEmptyElements <var>true</var> if all empty elements
   *     should be removed from the XML request
   * @param boolean $replaceReferences <var>true</var> if element references
   *     should be replaced with a copy of the element.
   */
  public function __construct($addXsiTypes, $removeEmptyElements,
      $replaceReferences) {
    $this->addXsiTypes = $addXsiTypes;
    $this->removeEmptyElements = $removeEmptyElements;
    $this->replaceReferences = $replaceReferences;
  }

  /**
   * Fixes the XML based on the parameters specified in the constructor.
   * @param string $request the raw request produced by the SOAP client
   * @param array $arguments the arguments passed to the SOAP method
   * @param array $headers the headers used in the request
   * @return string the prepared request ready to be sent to the server
   */
  public function FixXml($request, array $arguments, array $headers) {
    $requestDom = XmlUtils::GetDomFromXml($request);
    $xpath = new DOMXPath($requestDom);

    // Fix headers.
    $headersDomNodes = $xpath->query(
        "//*[local-name()='Envelope']/*[local-name()='Header']/*");
    $this->FixXmlNodes($headersDomNodes, $headers, $xpath);

    // Fix body.
    $argumentsDomNodes = $xpath->query(
        "//*[local-name()='Envelope']/*[local-name()='Body']/*");
    $this->FixXmlNodes($argumentsDomNodes, $arguments, $xpath);

    // Remove empty headers.
    if ($this->removeEmptyElements) {
      $this->RemoveEmptyHeaderElements($xpath);
    }

    // Remove id attributes.
    if ($this->replaceReferences) {
      $this->RemoveIdAttributes($xpath);
    }

    return $requestDom->saveXML();
  }

  /**
   * Fix a list of nodes corresponding to an array of objects.
   * @param DOMNodeList $nodeList the node list matching <var>$objects</var>
   * @param array $objects the objects array matching <var>$nodeList</var>
   * @param DOMXPath $xpath the xpath object representing the DOM
   */
  private function FixXmlNodes(DOMNodeList $nodeList, array $objects,
      DOMXPath $xpath) {
    if ($nodeList->length == sizeof($objects)) {
      $i = 0;
      foreach ($objects as $object) {
        $this->FixXmlNode($nodeList->item($i), $object, $xpath);
        $i++;
      }
    }
  }

  /**
   * Fix a node corresponding to an objects.
   * @param DOMNode $node the node matching <var>$object</var>
   * @param mixed $object the object matching <var>$node</var>
   * @param DOMXPath $xpath the xpath object representing the DOM
   */
  private function FixXmlNode(DOMNode $node, $object, DOMXPath $xpath) {
    if ($object instanceof SoapHeader) {
      $this->FixXmlNode($node, $object->data, $xpath);
    } elseif ($object instanceof SoapVar) {
      $this->FixXmlNode($node, $object->enc_value, $xpath);
    } else {
      if ($this->addXsiTypes && is_object($object)) {
        $this->AddXsiType($node, $object);
      }

      // Remove empty elements.
      if ($this->removeEmptyElements && !isset($object)) {
        $node->parentNode->removeChild($node);
      }

      // Replace element references.
      if ($this->replaceReferences && $node->hasAttribute('href')) {
        $this->ReplaceElementReference($node, $xpath);
      }

      if (is_object($object)) {
        foreach (get_object_vars($object) as $varName => $varValue) {
          $nodeList =
              $xpath->query("*[local-name() = '" . $varName . "']", $node);

          if (is_array($varValue)) {
            $this->FixXmlNodes($nodeList, $varValue, $xpath);
          } else if ($nodeList->length == 1) {
            $this->FixXmlNode($nodeList->item(0), $varValue, $xpath);
          }
        }
      }
    }
  }

  /**
   * Adds the xsi:type to the DOMNode generated from the corresponding object.
   * @param DOMNode $domNode the DOM node corresponding to the object
   * @param $object the object used to determine the xsi:type
   */
  private function AddXsiType(DOMNode $domNode, $object) {
    $xsiType = $domNode->getAttributeNS(self::$XSI_NAMESPACE, 'xsi:type');
    if (method_exists($object, 'getXsiTypeName')
        && method_exists($object, 'getNamespace')
        && empty($xsiType)) {
      $xsiTypeName = $object->getXsiTypeName();
      if (isset($xsiTypeName) && $xsiTypeName != '') {
        $prefix = $domNode->lookupPrefix($object->getNamespace());
        $domNode->setAttributeNS(self::$XSI_NAMESPACE, 'xsi:type',
            (isset($prefix) ? $prefix . ':' : '') . $xsiTypeName);
      }
    }
  }

  /**
   * Replaces an element reference with a copy of the element it references.
   * @param DOMElement $elementReference the element reference to replace
   * @param DOMXPath $xpath the xpath object representing the DOM
   */
  private function ReplaceElementReference(DOMElement $elementReference,
      DOMXPath $xpath) {
    $href = $elementReference->getAttribute('href');
    $id = substr($href, 1);
    $referencedElements = $xpath->query('//*[@id="' . $id . '"]');
    if ($referencedElements->length > 0) {
      $referencedElement = $referencedElements->item(0);
      for ($i = 0; $i < $referencedElement->childNodes->length; $i++) {
        $childNode = $referencedElement->childNodes->item($i);
        $elementReference->appendChild($childNode->cloneNode(true));
      }
      $elementReference->removeAttribute('href');
    }
  }

  /**
   * Removed id attributes leftover after reference replacement.
   * @param DOMXPath $xpath the xpath object representing the DOM
   */
  private function RemoveIdAttributes(DOMXPath $xpath) {
    $elements = $xpath->query('//*[@id]');
    for ($i = 0; $i < $elements->length; $i++) {
      $element = $elements->item($i);
      $element->removeAttribute('id');
    }
  }

  /**
   * Removes empty header elements from the request.
   * @param DOMXPath $xpath the xpath object representing the DOM
   */
  private function RemoveEmptyHeaderElements(DOMXPath $xpath) {
    $requestHeaderDom = $xpath->query(
        "//*[local-name()='Envelope']/*[local-name()='Header']"
            . "/*[local-name()='RequestHeader']")->item(0);

    $childNodes = $requestHeaderDom->childNodes;

    foreach ($childNodes as $childNode) {
      if ($childNode->nodeValue == null) {
        $requestHeaderDom->removeChild($childNode);
      }
    }
  }
}

