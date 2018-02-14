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

use InvalidArgumentException;
use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlockFactory;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use UnexpectedValueException;

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
final class AdWordsNormalizer extends GetSetMethodNormalizer
{

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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $reflClass = new \ReflectionClass($object);
        if ($reflClass->getParentClass() !== false) {
            // xsi:type is needed when the object is a subclass.
            $data['@xsi:type'] = 'ns1:' . $reflClass->getShortName();
        }

        foreach ($reflClass->getProperties(
            \ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_PRIVATE
        ) as $reflProperty) {
            $methodName = 'get' . ucfirst($reflProperty->getName());
            if (!$reflClass->hasMethod($methodName)
                || !$reflClass->getMethod($methodName)->isPublic()) {
                continue;
            }

            $reflMethod = $reflClass->getMethod($methodName);
            $attributeValue = $reflMethod->invoke($object);

            if ($attributeValue !== null) {
                if (array_key_exists('normalize', $this->callbacks)) {
                    $attributeValue = call_user_func(
                        $this->callbacks['normalize'],
                        $attributeValue,
                        $this->getReturnType(
                            $this->docBlockFactory->create(
                                $reflMethod->getDocComment()
                            )
                        )
                    );
                }

                $attributeValue =
                    $this->serializer->normalize(
                        $attributeValue,
                        $format,
                        $context
                    );

                $attribute = $reflProperty->getName();
                if ($this->nameConverter) {
                    $attribute = $this->nameConverter->normalize($attribute);
                }
                $data[$attribute] = $attributeValue;
            }
        }

        return $data;
    }

    /**
     * Gets type from the PHP document block's `@return` tag.
     *
     * @param DocBlock $docBlock the document block to get its `@return` type
     * @return string|null the class name of the attribute or null if there
     *     exists no `@return` tag in the document block
     */
    private function getReturnType(DocBlock $docBlock)
    {
        // The @return tag will be present for each getter method of generated
        // classes. There is always only one tag for each getter.
        return ($docBlock->hasTag('return')) ?
            strval($docBlock->getTags()[0]->getType()) : null;
    }

    /**
     * @see GetSetMethodNormalizer::denormalize()
     * @throws UnexpectedValueException if the getter of an attribute is not
     *     found
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {

        // If xsi:type is present, we need to use it as the class to deserialize to,
        // since it may be a child class of the provided $class with more fields.
        if (array_key_exists('@xsi:type', $data)) {
            // All classes supported by BatchJobService are always in the "cm" group.
            $class =
                $this->getAdWordsNamespacePrefix($class) . '\\'
                . $data['@xsi:type'];
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
                throw new UnexpectedValueException(
                    sprintf(
                        'Getter for the attribute "%s" not found. Denormalization cannot'
                        . ' be completed.',
                        $attribute
                    )
                );
            }

            // Get the type of this attribute using PHP document block of its getter.
            $getter = $reflClass->getMethod('get' . ucfirst($attribute));
            $typeHint =
                $this->getReturnType(
                    $this->docBlockFactory->create($getter->getDocComment())
                );

            if (array_key_exists('denormalize', $this->callbacks)) {
                $value = call_user_func(
                    $this->callbacks['denormalize'],
                    $value,
                    $typeHint
                );
            }

            // If the type hint of this value is an array and there's only one
            // element, then we need to wrap it in an array, as the decoder would
            // not have done so.
            if (substr($typeHint, -2) === '[]'
                && (is_scalar($value) || self::isOneOrMany($value))) {
                $value = [$value];
            }

            if (self::needsRecursiveDenormalization($value)) {
                $value = $this->serializer->denormalize(
                    $value,
                    $typeHint,
                    $format,
                    $context
                );
            }

            $reflMethod = $reflClass->getMethod('set' . ucfirst($attribute));
            $reflMethod->invoke($denormalizedObject, $value);
        }

        return $denormalizedObject;
    }

    /**
     * Gets the AdWords namespace prefix of the given FQCN.
     *
     * @param string $class the FQCN of class to get its namespace prefix
     * @return string the namespace prefix of $class
     */
    private function getAdWordsNamespacePrefix($class)
    {
        // Fully qualified class name will be in the format:
        // Google\AdsApi\AdWords\{subDirectories}\{apiVersion}\{group}\
        // {className}.
        $tokens = explode('\\', $class);
        array_splice($tokens, -1, 1);

        // Retain the tokens only upto {group}.
        return implode('\\', $tokens);
    }

    /**
     * Whether the specified array represents one object or contains a list of
     * objects. This is used after deserialization as XML lists repeat elements
     * so when there is only one element in a list, deserialization doesn't
     * understand that it's a list of objects. If we know something is supposed
     * to be a list this is used to tell us that a single object needs to be
     * wrapped in an array.
     *
     * We do this by checking to see whether the specified array has only
     * sequential numeric keys. If not, then it's an object.
     *
     * @param array $array
     * @return bool true if this array represents one object, false if it's a
     *     list of objects or empty
     */
    public static function isOneOrMany(array $array)
    {
        return (count($array) === 0)
            ? false
            : array_keys($array) !== range(0, count($array) - 1);
    }

    private static function needsRecursiveDenormalization($value)
    {
        // Scalar and null values don't need more denormalization.
        if (is_scalar($value) || is_null($value)) {
            return false;
        }

        // Check if this is a representation of an object. Recursive
        // denormalization is needed in such a case.
        if (self::isOneOrMany($value)) {
            return true;
        }

        // Check if all members of the array are scalar values.
        foreach ($value as $element) {
            if (!is_scalar($element)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @see AbstractNormalizer::setCallbacks()
     */
    public function setCallbacks(array $callbacks)
    {
        if (count($callbacks) > 2) {
            throw new InvalidArgumentException(
                sprintf(
                    'More than two callbacks found. Only two callbacks, normalize and'
                    . ' denormalize are allowed.'
                )
            );
        }

        foreach ($callbacks as $attribute => $callback) {
            if (!is_callable($callback)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'The given callback for attribute "%s" is not callable.',
                        $attribute
                    )
                );
            }
            if ($attribute !== 'normalize' && $attribute !== 'denormalize') {
                throw new InvalidArgumentException(
                    sprintf(
                        'The given callback "%s" is not supported.',
                        $attribute
                    )
                );
            }
            $reflectionFunction = new \ReflectionFunction($callback);
            if ($reflectionFunction->getNumberOfRequiredParameters() !== 2) {
                throw new InvalidArgumentException(
                    sprintf(
                        'Callback "%s" does not meet the expected method signature.',
                        $attribute
                    )
                );
            }
        }
        $this->callbacks = $callbacks;

        return $this;
    }
}
