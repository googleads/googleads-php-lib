<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v201808\CustomTargetingService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201808\CustomTargetingKey;
use Google\AdsApi\AdManager\v201808\CustomTargetingKeyType;
use Google\AdsApi\AdManager\v201808\CustomTargetingValue;
use Google\AdsApi\AdManager\v201808\CustomTargetingValueMatchType;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates custom targeting keys and values.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateCustomTargetingKeysAndValues
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $customTargetingService = $serviceFactory->createCustomTargetingService(
            $session
        );

        // Create a predefined key.
        $genderKey = new CustomTargetingKey();
        $genderKey->setDisplayName('gender');
        $genderKey->setName('g');
        $genderKey->setType(CustomTargetingKeyType::PREDEFINED);

        // Create predefined key that may be used for content targeting.
        $genreKey = new CustomTargetingKey();
        $genreKey->setDisplayName('genre');
        $genreKey->setName('genre');
        $genreKey->setType(CustomTargetingKeyType::PREDEFINED);

        // Create free-form key.
        $carModelKey = new CustomTargetingKey();
        $carModelKey->setDisplayName('car model');
        $carModelKey->setName('c');
        $carModelKey->setType(CustomTargetingKeyType::FREEFORM);

        // Create the custom targeting keys on the server.
        $keys = $customTargetingService->createCustomTargetingKeys(
            [$genderKey, $genreKey, $carModelKey]
        );

        foreach ($keys as $key) {
            printf(
                "A custom targeting key with ID '%s', name '%s', and display"
                . " name '%s' was created.%s",
                $key->getId(),
                $key->getName(),
                $key->getDisplayName(),
                PHP_EOL
            );
        }

        // Create custom targeting values for the predefined gender key.
        // Name is set to 1 so that the actual name can be hidden from website
        // users.
        $genderMaleValue = new CustomTargetingValue();
        $genderMaleValue->setCustomTargetingKeyId($keys[0]->getId());
        $genderMaleValue->setDisplayName('male');
        $genderMaleValue->setName('1');
        $genderMaleValue->setMatchType(CustomTargetingValueMatchType::EXACT);

        // Name is set to 2 so that the actual name can be hidden from website
        // users.
        $genderFemaleValue = new CustomTargetingValue();
        $genderFemaleValue->setCustomTargetingKeyId($keys[0]->getId());
        $genderFemaleValue->setDisplayName('female');
        $genderFemaleValue->setName('2');
        $genderFemaleValue->setMatchType(CustomTargetingValueMatchType::EXACT);

        // Create custom targeting values for the predefined genre key.
        $genreComedyValue = new CustomTargetingValue();
        $genreComedyValue->setCustomTargetingKeyId($keys[1]->getId());
        $genreComedyValue->setDisplayName('comedy');
        $genreComedyValue->setName('comedy');
        $genreComedyValue->setMatchType(CustomTargetingValueMatchType::EXACT);

        $genreDramaValue = new CustomTargetingValue();
        $genreDramaValue->setCustomTargetingKeyId($keys[1]->getId());
        $genreDramaValue->setDisplayName('drama');
        $genreDramaValue->setName('drama');
        $genreDramaValue->setMatchType(CustomTargetingValueMatchType::EXACT);

        // Create custom targeting value for the free-form age key. These are
        // values that would be suggested in the UI or can be used when
        // targeting with a free-form custom criterion.
        $carModelHondaCivicValue = new CustomTargetingValue();
        $carModelHondaCivicValue->setCustomTargetingKeyId($keys[2]->getId());
        $carModelHondaCivicValue->setDisplayName('honda civic');
        $carModelHondaCivicValue->setName('honda civic');
        // Setting match type to exact will match exactly 'honda civic'.
        $carModelHondaCivicValue->setMatchType(
            CustomTargetingValueMatchType::EXACT
        );

        // Create the custom targeting values on the server.
        $values = $customTargetingService->createCustomTargetingValues(
            [
                $genderMaleValue,
                $genderFemaleValue,
                $genreComedyValue,
                $genreDramaValue,
                $carModelHondaCivicValue
            ]
        );

        // Print out some information for each created custom targeting value.
        foreach ($values as $value) {
            printf(
                "A custom targeting value with ID %d, belonging to key with ID "
                . "%d, name '%s', and display name '%s' was created.%s",
                $value->getId(),
                $value->getCustomTargetingKeyId(),
                $value->getName(),
                $value->getDisplayName(),
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new ServiceFactory(), $session);
    }
}

CreateCustomTargetingKeysAndValues::main();
