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

namespace Google\AdsApi\AdWords\Reporting\v201710;

use Google\AdsApi\AdWords\v201710\cm\ApiError;

/**
 * Describes what went wrong for a report that failed to download.
 */
final class ReportDownloadError extends ApiError
{

    /**
     * Creates a report download error instance with the specified properties.
     *
     * @param string|null $fieldPath the OGNL field path to identify error
     *     cause
     * @param string|null $trigger the data that caused the error
     * @param string|null $errorString a simple string representation of the
     *     error
     * @param string|null $apiErrorType a string indicating that this instance
     *     is a subtype of ApiError
     */
    public function __construct(
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $apiErrorType = null
    ) {
        parent::__construct(
            $fieldPath,
            null,
            $trigger,
            $errorString,
            $apiErrorType
        );
    }

    /**
     * @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
     */
    public function __toString()
    {
        return sprintf(
            'fieldPath: %s; trigger: %s; errorString: %s',
            $this->getFieldPath(),
            $this->getTrigger(),
            $this->getErrorString()
        );
    }
}
