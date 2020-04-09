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

namespace Google\AdsApi\AdWords\Testing;

/**
 * A fake Money class for testing purpose.
 */
final class FakeMoney extends FakeComparableValue
{

    protected $microAmount = null;
    protected $type = null;

    /**
     * @return int
     */
    public function getMicroAmount()
    {
        return $this->microAmount;
    }

    /**
     * @param int $microAmount
     */
    public function setMicroAmount($microAmount)
    {
        $this->microAmount = $microAmount;
    }

    /**
     * @return string
     */
    private function getType()
    {
        return $this->type;
    }
}
