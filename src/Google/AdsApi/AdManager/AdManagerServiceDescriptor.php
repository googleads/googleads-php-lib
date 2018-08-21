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

namespace Google\AdsApi\AdManager;

use Google\AdsApi\Common\AdsServiceDescriptor;
use ReflectionClass;

/**
 * Metadata for a Ad Manager API service.
 */
final class AdManagerServiceDescriptor implements AdsServiceDescriptor
{

    /**
     * @var string the SOAP namespace prefix for Ad Manager API services
     */
    const NAMESPACE_PREFIX = 'https://www.google.com/apis/ads/publisher';

    private $classReflection;

    /**
     * Creates a new instance of this service descriptor for the specified
     * class.
     *
     * @param string $class the fully qualified class name of the service
     */
    public function __construct($class)
    {
        $this->classReflection = new ReflectionClass($class);
    }

    /**
     * @see AdsServiceDescriptor::getServiceName()
     */
    public function getServiceName()
    {
        return $this->classReflection->getShortName();
    }

    /**
     * @see AdsServiceDescriptor::getServiceClass()
     */
    public function getServiceClass()
    {
        return $this->classReflection->getName();
    }

    /**
     * @see AdsServiceDescriptor::getSoapNamespace()
     */
    public function getSoapNamespace()
    {
        $namespaceParts = explode(
            '\\',
            $this->classReflection->getNamespaceName()
        );

        return self::NAMESPACE_PREFIX . '/' . array_pop($namespaceParts);
    }
}
