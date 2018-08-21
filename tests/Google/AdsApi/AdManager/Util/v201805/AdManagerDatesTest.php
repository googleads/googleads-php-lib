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

namespace Google\AdsApi\AdManager\Util\v201805;

use Google\AdsApi\AdManager\v201805\Date;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdManagerDates`.
 *
 * @see AdManagerDates
 * @group small
 */
class AdManagerDatesTest extends TestCase
{

    private $adManagerDate1;
    private $adManagerDate2;
    private $adManagerDate3;

    private $stringDate1;
    private $stringDate2;
    private $stringDate3;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->stringDate1 = '1983-06-02';
        $this->stringDate2 = '2014-12-31';
        $this->stringDate3 = '1999-09-23';

        $this->adManagerDate1 = new Date(1983, 6, 2);
        $this->adManagerDate2 = new Date(2014, 12, 31);
        $this->adManagerDate3 = new Date(1999, 9, 23);
    }

    /**
     * @covers Google\AdsApi\AdManager\Util\v201805\AdManagerDates::toDateString
     */
    public function testToDateString()
    {
        $this->assertSame(
            $this->stringDate1,
            AdManagerDates::toDateString($this->adManagerDate1)
        );
        $this->assertSame(
            $this->stringDate2,
            AdManagerDates::toDateString($this->adManagerDate2)
        );
        $this->assertSame(
            $this->stringDate3,
            AdManagerDates::toDateString($this->adManagerDate3)
        );
    }
}
