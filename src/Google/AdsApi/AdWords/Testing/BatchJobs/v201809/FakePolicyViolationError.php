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

namespace Google\AdsApi\AdWords\Testing\BatchJobs\v201809;

/**
 * A fake policy violation error class for testing purpose.
 */
class FakePolicyViolationError extends FakeApiError
{

    protected $key;
    protected $isExemptable;

    /**
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param int $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return bool
     */
    public function getIsExemptable()
    {
        return $this->isExemptable;
    }

    /**
     * @param bool $isExemptable
     */
    public function setIsExemptable($isExemptable)
    {
        $this->isExemptable = $isExemptable;
    }
}
