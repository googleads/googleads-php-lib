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

namespace Google\AdsApi\Examples\AdWords\v201806\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\ApiError;
use Google\AdsApi\AdWords\v201806\cm\Money;
use Google\AdsApi\AdWords\v201806\cm\Operator;
use Google\AdsApi\AdWords\v201806\rm\FirstPartyUploadMetadata;
use Google\AdsApi\AdWords\v201806\rm\MoneyWithCurrency;
use Google\AdsApi\AdWords\v201806\rm\OfflineData;
use Google\AdsApi\AdWords\v201806\rm\OfflineDataUpload;
use Google\AdsApi\AdWords\v201806\rm\OfflineDataUploadOperation;
use Google\AdsApi\AdWords\v201806\rm\OfflineDataUploadService;
use Google\AdsApi\AdWords\v201806\rm\OfflineDataUploadType;
use Google\AdsApi\AdWords\v201806\rm\OfflineDataUploadUserIdentifierType;
use Google\AdsApi\AdWords\v201806\rm\StoreSalesTransaction;
use Google\AdsApi\AdWords\v201806\rm\ThirdPartyUploadMetadata;
use Google\AdsApi\AdWords\v201806\rm\UploadMetadata;
use Google\AdsApi\AdWords\v201806\rm\UserIdentifier;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example shows how to upload offline data for store sales
 * transactions.
 */
class UploadOfflineData
{

    // The external upload ID can be any number that you use to keep track of
    // your uploads.
    const EXTERNAL_UPLOAD_ID = 'INSERT_EXTERNAL_UPLOAD_ID';

    // Insert the conversion type name that you'd like to attribute this upload
    // to.
    const CONVERSION_NAME = 'INSERT_CONVERSION_NAME';

    // Change the below constant to ThirdPartyUploadMetadata::class if uploading
    // third party data.
    const STORE_SALES_UPLOAD_COMMON_METADATA_TYPE =
        FirstPartyUploadMetadata::class;

    // The three constants below are needed when uploading third party data.
    // You can safely ignore them if you are uploading first party data.
    // For times, use the format yyyyMMdd HHmmss tz. For more details on formats,
    // see:
    // https://developers.google.com/adwords/api/docs/appendix/codes-formats#date-and-time-formats
    // For time zones, see:
    // https://developers.google.com/adwords/api/docs/appendix/codes-formats#timezone-ids
    const ADVERTISER_UPLOAD_TIME = 'INSERT_ADVERTISER_UPLOAD_TIME';
    const BRIDGE_MAP_VERSION_ID = 'INSERT_BRIDGE_MAP_VERSION_ID';
    const PARTNER_ID = 'INSERT_PARTNER_ID';

    // Insert email addresses below for creating user identifiers.
    private static $EMAIL_ADDRESSES = ['EMAIL_ADDRESS_1', 'EMAIL_ADDRESS_2'];

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $conversionName,
        $externalUploadId,
        $storeSalesUploadCommonMetadataType,
        array $emailAddresses,
        $advertiserUploadTime,
        $bridgeMapVersionId,
        $partnerId
    ) {
        $session->setPartialFailure(true);
        $offlineDataUploadService =
            $adWordsServices->get($session, OfflineDataUploadService::class);

        // Create the first offline data for upload.
        // This transaction occurred 7 days ago with amount of 200 USD.
        $transactionTime1 = new \DateTime('-7d');
        $transactionAmount1 = 200000000;
        $transactionCurrencyCode1 = 'USD';
        $userIdentifierList1 = [
            self::createUserIdentifier(
                OfflineDataUploadUserIdentifierType::HASHED_EMAIL,
                $emailAddresses[0]
            ),
            self::createUserIdentifier(
                OfflineDataUploadUserIdentifierType::STATE,
                'New York'
            )
        ];
        $offlineData1 = self::createOfflineData(
            $transactionTime1,
            $transactionAmount1,
            $transactionCurrencyCode1,
            $conversionName,
            $userIdentifierList1
        );

        // Create the second offline data for upload.
        // This transaction occurred 14 days ago with amount of 450 EUR.
        $transactionTime2 = new \DateTime('-14d');
        $transactionAmount2 = 450000000;
        $transactionCurrencyCode2 = 'EUR';
        $userIdentifierList2 = [
            self::createUserIdentifier(
                OfflineDataUploadUserIdentifierType::HASHED_EMAIL,
                $emailAddresses[1]
            ),
            self::createUserIdentifier(
                OfflineDataUploadUserIdentifierType::STATE,
                'California'
            )
        ];
        $offlineData2 = self::createOfflineData(
            $transactionTime2,
            $transactionAmount2,
            $transactionCurrencyCode2,
            $conversionName,
            $userIdentifierList2
        );

        // Create offline data upload object.
        $offlineDataUpload = new OfflineDataUpload();
        $offlineDataUpload->setExternalUploadId($externalUploadId);
        $offlineDataUpload->setOfflineDataList([$offlineData1, $offlineData2]);

        // Set the type and metadata of this upload.
        $reflectionClass =
            new \ReflectionClass($storeSalesUploadCommonMetadataType);
        $storeSalesUploadCommonMetadata = $reflectionClass->newInstance();
        $storeSalesUploadCommonMetadata->setLoyaltyRate(1.0);
        $storeSalesUploadCommonMetadata->setTransactionUploadRate(1.0);

        if ($storeSalesUploadCommonMetadataType
            === FirstPartyUploadMetadata::class) {
            $offlineDataUpload->setUploadType(
                OfflineDataUploadType::STORE_SALES_UPLOAD_FIRST_PARTY
            );
        } elseif ($storeSalesUploadCommonMetadataType
            === ThirdPartyUploadMetadata::class) {
            $offlineDataUpload->setUploadType(
                OfflineDataUploadType::STORE_SALES_UPLOAD_THIRD_PARTY
            );
            $storeSalesUploadCommonMetadata->setAdvertiserUploadTime(
                $advertiserUploadTime
            );
            $storeSalesUploadCommonMetadata->setValidTransactionRate(1.0);
            $storeSalesUploadCommonMetadata->setPartnerMatchRate(1.0);
            $storeSalesUploadCommonMetadata->setPartnerUploadRate(1.0);
            $storeSalesUploadCommonMetadata->setBridgeMapVersionId(
                $bridgeMapVersionId
            );
            $storeSalesUploadCommonMetadata->setPartnerId($partnerId);
        }

        $uploadMetadata = new UploadMetadata();
        $uploadMetadata->setStoreSalesUploadCommonMetadata(
            $storeSalesUploadCommonMetadata
        );
        $offlineDataUpload->setUploadMetadata($uploadMetadata);

        // Create an offline data upload operation.
        $offlineDataUploadOperation = new OfflineDataUploadOperation();
        $offlineDataUploadOperation->setOperator(Operator::ADD);
        $offlineDataUploadOperation->setOperand($offlineDataUpload);

        $operations = [];
        $operations[] = $offlineDataUploadOperation;
        // Upload offline data on the server and print some information.
        $result =
            $offlineDataUploadService->mutate($operations);
        $offlineDataUpload = $result->getValue()[0];
        printf(
            "Uploaded offline data with external upload ID %d and upload"
            . " status %s\n",
            $offlineDataUpload->getExternalUploadId(),
            $offlineDataUpload->getUploadStatus()
        );

        // Print any partial failure errors from the response.
        if (empty($result->getPartialFailureErrors())) {
            return;
        }
        foreach ($result->getPartialFailureErrors() as $apiError) {
            // Gets the index of the failed operation from the error's field
            // path elements.
            $operationIndex =
                self::getFieldPathElementIndex($apiError, 'operations');

            if (!is_null($operationIndex)) {
                $failedOfflineDataUpload =
                    $operations[$operationIndex]->getOperand();
                // Gets the index of the entry in the offline data list from the
                // error's field path elements.
                $offlineDataListIndex = self::getFieldPathElementIndex(
                    $apiError,
                    'offlineDataList'
                );

                printf(
                    "Offline data list entry %d in operation %d with "
                    . "external upload ID %d and type '%s' has triggered a "
                    . "failure for the following reason: '%s'.\n",
                    $offlineDataListIndex,
                    $operationIndex,
                    $failedOfflineDataUpload->getExternalUploadId(),
                    $failedOfflineDataUpload->getUploadType(),
                    $apiError->getErrorString()
                );
            } else {
                printf(
                    "A failure for the following reason: '%s' has "
                    . "occurred.\n",
                    $apiError->getErrorString()
                );
            }
        }
    }

    /**
     * Creates the offline data from the specified transaction time, transaction
     * micro amount, transaction currency, conversion name and user identifier
     * list.
     */
    private static function createOfflineData(
        \DateTime $transactionTime,
        $transactionMicroAmount,
        $transactionCurrency,
        $conversionName,
        array $userIdentifierList
    ) {
        $storeSalesTransaction = new StoreSalesTransaction();

        // For times use the format yyyyMMdd HHmmss [tz].
        // For details, see
        // https://developers.google.com/adwords/api/docs/appendix/codes-formats#date-and-time-formats
        $storeSalesTransaction->setTransactionTime(
            $transactionTime->format('Ymd His')
        );
        $storeSalesTransaction->setConversionName($conversionName);
        $storeSalesTransaction->setUserIdentifiers($userIdentifierList);

        $money = new Money();
        $money->setMicroAmount($transactionMicroAmount);
        $moneyWithCurrency = new MoneyWithCurrency();
        $moneyWithCurrency->setMoney($money);
        $moneyWithCurrency->setCurrencyCode($transactionCurrency);
        $storeSalesTransaction->setTransactionAmount($moneyWithCurrency);

        $offlineData = new OfflineData();
        $offlineData->setStoreSalesTransaction($storeSalesTransaction);

        return $offlineData;
    }

    /**
     * Creates a user identifier from the specified type and value.
     */
    private static function createUserIdentifier($type, $value)
    {
        // If the user identifier type is a hashed type, normalize and hash the
        // value.
        if (0 === strpos($type, 'HASHED_')) {
            $value = hash('sha256', strtolower(trim($value)));
        }
        $userIdentifier = new UserIdentifier();
        $userIdentifier->setUserIdentifierType($type);
        $userIdentifier->setValue($value);

        return $userIdentifier;
    }

    /**
     * Returns the FieldPathElement#getIndex() for the specified field name, if
     * present in the error's field path elements. If not, returns null.
     */
    private static function getFieldPathElementIndex(ApiError $apiError, $field)
    {
        $fieldPathElements = $apiError->getFieldPathElements();
        if (is_null($fieldPathElements) || count($fieldPathElements) === 0) {
            return null;
        }
        for ($i = 0; $i < count($fieldPathElements); $i++) {
            $fieldPathElement = $fieldPathElements[$i];
            if ($field === $fieldPathElement->getField()) {
                return $fieldPathElement->getIndex();
            }
        }
        return null;
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            self::CONVERSION_NAME,
            intval(self::EXTERNAL_UPLOAD_ID),
            self::STORE_SALES_UPLOAD_COMMON_METADATA_TYPE,
            self::$EMAIL_ADDRESSES,
            self::ADVERTISER_UPLOAD_TIME,
            self::BRIDGE_MAP_VERSION_ID,
            intval(self::PARTNER_ID)
        );
    }
}

UploadOfflineData::main();
