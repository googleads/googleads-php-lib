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

use Google\AdsApi\Common\AdsServices;
use Google\AdsApi\Common\AdsSession;
use Google\AdsApi\Common\AdsSoapClientFactory;

/**
 * Entry point for accessing the AdWords API's services.
 */
final class AdWordsServices implements AdsServices
{

    private $adsSoapClientFactory;
    private $adsHeaderHandler;

    /**
     * @param AdsSoapClientFactory $adsSoapClientFactory
     * @param AdWordsHeaderHandler $adWordsHeaderHandler
     */
    public function __construct(
        AdsSoapClientFactory $adsSoapClientFactory = null,
        AdWordsHeaderHandler $adWordsHeaderHandler = null
    ) {
        $this->adsSoapClientFactory = ($adsSoapClientFactory === null)
            ? new AdsSoapClientFactory(
                (new AdWordsSoapLogMessageFormatterProvider())
                    ->getSoapLogMessageFormatter()
            )
            : $adsSoapClientFactory;
        $this->adsHeaderHandler = ($adWordsHeaderHandler === null)
            ? new AdWordsHeaderHandler()
            : $adWordsHeaderHandler;
    }

    /**
     * @see AdsServices::get()
     */
    public function get(AdsSession $session, $class)
    {
        return $this->adsSoapClientFactory->generateSoapClient(
            $session,
            $this->adsHeaderHandler,
            new AdWordsServiceDescriptor($class)
        );
    }
}
