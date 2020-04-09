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
 * A fake Operand class for testing purpose.
 */
final class FakeOperand
{

    protected $FakeBudget = null;
    protected $type = null;

    /**
     * @return \Google\AdsApi\AdWords\Testing\FakeBudget
     */
    public function getFakeBudget()
    {
        return $this->FakeBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\Testing\FakeBudget $FakeBudget
     */
    public function setFakeBudget($FakeBudget)
    {
        $this->FakeBudget = $FakeBudget;
    }

    /**
     * @return string
     */
    private function getType()
    {
        return $this->type;
    }

    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
