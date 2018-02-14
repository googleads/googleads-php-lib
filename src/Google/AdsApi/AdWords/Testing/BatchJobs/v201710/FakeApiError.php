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

namespace Google\AdsApi\AdWords\Testing\BatchJobs\v201710;

/**
 * A fake API error class for testing purpose.
 */
class FakeApiError
{

    protected $fieldPath;
    protected $trigger;
    protected $errorString;

    /**
     * @return string
     */
    public function getFieldPath()
    {
        return $this->fieldPath;
    }

    /**
     * @param string $fieldPath
     */
    public function setFieldPath($fieldPath)
    {
        $this->fieldPath = $fieldPath;
    }

    /**
     * @return string
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * @param string $trigger
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;
    }

    /**
     * @return string
     */
    public function getErrorString()
    {
        return $this->errorString;
    }

    /**
     * @param string $errorString
     */
    public function setErrorString($errorString)
    {
        $this->errorString = $errorString;
    }
}
