<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\Util\MapUtils;
use InvalidArgumentException;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use UnexpectedValueException;
use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlockFactory;

/**
 * Provides recursive normalization and denormalization for AdWords objects for
 * non-SOAP services like BatchJobService and reporting, using getters and
 * setters in a similar manner to `GetSetMethodNormalizer`. Note that, however,
 * this normalizer doesn't support attribute groups or specifying attributes to
 * ignore and doesn't support handling of circular references because AdWords
 * objects don't have any such references.
 *
 * Normalization normalizes objects recursively and adds the xsi:type
 * attribute for the objects whose class is a subclass of another.
 *
 * Denormalization uses type hint from the xsi:type attribute and PHP DocBlock
 * `@return` to instantiate objects recursively.
 *
 * `AdWordsNormalizer` can be used as an normalizer of Symfony's serializer:
 * ```
 * $this->serializer = new Serializer(
 *     [new AdWordsNormalizer(), new ArrayDenormalizer()]);
 * ```
 *
 * This normalizer accepts two named callbacks that can be used to help
 * customize how objects are normalized and denormalized - one called
 * "normalize" and one called "denormalize".
 *
 * The callbacks can be set via `setCallbacks`:
 * ```
 * $adWordsNormalizer->setCallbacks([
 *     'normalize' => $normalizeCallback,
 *     'denormalize' => $denormalizeCallback
 * ]);
 * ```
 *
 * The respective callback will be applied to each attribute during
 * normalization and denormalization.
 *
 * The expected callback signature is as follows:
 * ```
 * // @param mixed $value the value to be normalized. For denormalized, the
 * //     type of $value is string
 * // @param string $type the type of $value, which can be a PHPDoc recognized
 * //     primitive (e.g., string, int, etc.) or the FQCN for objects
 * function transform($value, $type);
 * ```
 */
final class AdWordsNormalizer extends GetSetMethodNormalizer {

  private $docBlockFactory;

  /**
   * @see GetSetMethodNormalizer::__construct()
   */
  public function __construct(
      ClassMetadataFactoryInterface $classMetadataFactory = null,
      NameConverterInterface $nameConverter = null
  ) {
    parent::__construct($classMetadataFactory, $nameConverter);
    $this->docBlockFactory = DocBlockFactory::createInstance();
  }

  /**
   * @see GetSetMethodNormalizer::normalize()
   */
  public function normalize($object, $format = null, array $context = array()) {
    $data = [];
    $reflClass = new \ReflectionClass($object);
    if ($reflClass->getParentClass() !== false) {
      // xsi:type is needed when the object is a subclass.
      $data['@xsi:type'] = 'ns1:' . $reflClass->getShortName();
    }

    foreach ($reflClass->getMethods(\ReflectionMethod::IS_PUBLIC)
        as $reflMethod) {
      if (strpos($reflMethod->name, 'get') !== 0) {
        continue;
      }

      $attributeValue = $reflMethod->invoke($object);

      if ($attributeValue !== null) {
        if (array_key_exists('normalize', $this->callbacks)) {
          $attributeValue = call_user_func(
              $this->callbacks['normalize'],
              $attributeValue,
              $this->getReturnType(
                  $this->docBlockFactory->create($reflMethod->getDocComment()))
          );
        }

        $attributeValue =
            $this->serializer->normalize($attributeValue, $format, $context);

        $attribute = lcfirst(substr($reflMethod->name, 3));
        if ($this->nameConverter) {
          $attribute = $this->nameConverter->normalize($attribute);
        }
        $data[$attribute] = $attributeValue;
      }
    }

    return $data;
  }

  /**
   * @see GetSetMethodNormalizer::denormalize()
   * @throws UnexpectedValueException if the getter of an attribute is not found
   */
  public function denormalize($data, $class, $format = null,
      array $context = array()) {

    // If xsi:type is present, we need to use it as the class to deserialize to,
    // since it may be a child class of the provided $class with more fields.
    if (array_key_exists('@xsi:type', $data)) {
      // All classes supported by BatchJobService are always in the "cm" group.
      $class =
          $this->getAdWordsNamespacePrefix($class) . '\\' . $data['@xsi:type'];
    }

    $reflClass = new \ReflectionClass($class);
    $denormalizedObject = $reflClass->newInstance();

    foreach ($data as $attribute => $value) {
      // Exclude attributes starting with '@', which indicates that their
      // values are to be used as the XML attribute in the encoding step.
      if (substr($attribute, 0, 1) === '@') {
        continue;
      }

      if ($this->nameConverter) {
        $attribute = $this->nameConverter->denormalize($attribute);
      }

      if (!$reflClass->hasMethod('get' . ucfirst($attribute))) {
        throw new UnexpectedValueException(sprintf(
            'Getter for the attribute "%s" not found. Denormalization cannot'
                . ' be completed.',
            $attribute
        ));
      }

      // Get the type of this attribute using PHP document block of its getter.
      $getter = $reflClass->getMethod('get' . ucfirst($attribute));
      $typeHint =
          $this->getReturnType(
              $this->docBlockFactory->create($getter->getDocComment()));

      if (array_key_exists('denormalize', $this->callbacks)) {
        $value = call_user_func($this->callbacks['denormalize'], $value,
            $typeHint);
      }

      $needsRecursiveDenormalization = !is_scalar($value);
      // If the type hint of this value is an array and there's only one
      // element, then we need to wrap it in an array, as the decoder would
      // not have done so.
      if (substr($typeHint, -2) === '[]'
          && (is_scalar($value) || MapUtils::isMap($value))) {
        $value = [$value];
      }

      if ($needsRecursiveDenormalization === true) {
        $value = $this->serializer->denormalize(
            $value, $typeHint, $format, $context);
      }

      $reflMethod = $reflClass->getMethod('set' . ucfirst($attribute));
      $reflMethod->invoke($denormalizedObject, $value);
    }

    return $denormalizedObject;
  }

  /**
   * Gets type from the PHP document block's `@return` tag.
   *
   * @param DocBlock $docBlock the document block to get its @return type
   * @return string|null the class name of the attribute or null if there
   *     exists no @return tag in the document block
   */
  private function getReturnType(DocBlock $docBlock) {
    // The @return tag will be present for each getter method of generated
    // classes. There is always only one tag for each getter.
    return ($docBlock->hasTag('return')) ?
        strval($docBlock->getTags()[0]->getType()) : null;
  }

  /**
   * Gets the AdWords namespace prefix of the given FQCN.
   *
   * @param string $class the FQCN of class to get its namespace prefix
   * @return string the namespace prefix of $class
   */
  private function getAdWordsNamespacePrefix($class) {
    // Fully qualified class name will be in the format:
    // Google\AdsApi\AdWords\{subDirectories}\{apiVersion}\{group}\
    // {className}.
    $tokens = explode('\\', $class);
    array_splice($tokens , -1, 1);
    // Retain the tokens only upto {group}.
    return implode('\\', $tokens);
  }

  /**
   * @see AbstractNormalizer::setCallbacks()
   */
  public function setCallbacks(array $callbacks) {
    if (count($callbacks) > 2) {
      throw new InvalidArgumentException(sprintf(
          'More than two callbacks found. Only two callbacks, normalize and'
              . ' denormalize are allowed.'
      ));
    }

    foreach ($callbacks as $attribute => $callback) {
      if (!is_callable($callback)) {
        throw new InvalidArgumentException(sprintf(
            'The given callback for attribute "%s" is not callable.',
            $attribute
        ));
      }
      if ($attribute !== 'normalize' && $attribute !== 'denormalize') {
        throw new InvalidArgumentException(sprintf(
            'The given callback "%s" is not supported.',
            $attribute
        ));
      }
      $reflectionFunction = new \ReflectionFunction($callback);
      if ($reflectionFunction->getNumberOfRequiredParameters() !== 2) {
        throw new InvalidArgumentException(sprintf(
            'Callback "%s" does not meet the expected method signature.',
            $attribute
        ));
      }
    }
    $this->callbacks = $callbacks;

    return $this;
  }
}
