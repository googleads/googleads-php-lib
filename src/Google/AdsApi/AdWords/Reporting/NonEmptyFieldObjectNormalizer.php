<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\AdWords\Reporting;

use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * A normalizer converts objects to arrays by filtering null and empty fields.
 */
class NonEmptyFieldObjectNormalizer extends ObjectNormalizer {

  /**
   * Creates a normalizer with the specified parameters.
   *
   * @param ClassMetadataFactoryInterface $classMetadataFactory metadata needed
   *     for serializing and deserializing objects of specific class
   * @param NameConverterInterface $nameConverter the name converter
   * @param PropertyAccessorInterface $propertyAccessor the property accessor
   */
  public function __construct(
      ClassMetadataFactoryInterface $classMetadataFactory = null,
      NameConverterInterface $nameConverter = null,
      PropertyAccessorInterface $propertyAccessor = null
  ) {
    parent::__construct($classMetadataFactory, $nameConverter,
        $propertyAccessor);
  }

  /**
   * @see NormalizerInterface::normalize()
   */
  public function normalize($object, $format = null, array $context = array()) {
    return array_filter(parent::normalize($object, $format, $context),
        function ($value) {
          return ($value !== null && $value !== '');
        }
    );
  }
}
