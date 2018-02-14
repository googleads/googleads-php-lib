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
 * A fake Budget class for testing purpose.
 */
final class FakeBudget
{

    const TYPE = 'ADWORDS_OBJECT';

    protected $budgetId = null;
    protected $name = null;
    protected $amount = null;

    /**
     * @return int
     */
    public function getBudgetId()
    {
        return $this->budgetId;
    }

    /**
     * @param int $budgetId
     */
    public function setBudgetId($budgetId)
    {
        $this->budgetId = $budgetId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \Google\AdsApi\AdWords\Testing\FakeMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \Google\AdsApi\AdWords\Testing\FakeMoney $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
