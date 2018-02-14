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

namespace Google\AdsApi\Dfp\Util\v201711;

use Google\AdsApi\Dfp\v201711\AdUnitTargeting;
use Google\AdsApi\Dfp\v201711\BooleanValue;
use Google\AdsApi\Dfp\v201711\ColumnType;
use Google\AdsApi\Dfp\v201711\Date;
use Google\AdsApi\Dfp\v201711\DateTime as DfpDateTime;
use Google\AdsApi\Dfp\v201711\DateTimeValue;
use Google\AdsApi\Dfp\v201711\DateValue;
use Google\AdsApi\Dfp\v201711\InventoryTargeting;
use Google\AdsApi\Dfp\v201711\NumberValue;
use Google\AdsApi\Dfp\v201711\ResultSet;
use Google\AdsApi\Dfp\v201711\Row;
use Google\AdsApi\Dfp\v201711\SetValue;
use Google\AdsApi\Dfp\v201711\Targeting;
use Google\AdsApi\Dfp\v201711\TargetingValue;
use Google\AdsApi\Dfp\v201711\TextValue;
use Google\AdsApi\Dfp\v201711\Value;
use PHPUnit\Framework\TestCase;

/**
 * Tests for `Pql`.
 *
 * @see Pql
 * @small
 */
class PqlTest extends TestCase
{

    const TIME_ZONE_ID1 = 'Asia/Shanghai';

    private $column1;
    private $column2;
    private $column3;

    private $textValue1;
    private $textValue2;
    private $textValue3;
    private $booleanValue1;
    private $booleanValue2;
    private $booleanValue3;
    private $numberValue1;
    private $numberValue2;
    private $numberValue3;
    private $dateValue1;
    private $dateTimeValue1;

    private $dateTime1;
    private $date1;

    private $setValue1;

    private $targeting1;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->column1 = new ColumnType('Id');
        $this->column2 = new ColumnType('Name');
        $this->column3 = new ColumnType('Status');
        $this->textValue1 = new TextValue('hello world');
        $this->textValue2 = new TextValue('description');
        $this->textValue3 = new TextValue('rawr');
        $this->booleanValue1 = new BooleanValue(false);
        $this->booleanValue2 = new BooleanValue(true);
        $this->booleanValue3 = new BooleanValue(false);
        $this->numberValue1 = new NumberValue('2');
        $this->numberValue2 = new NumberValue('7.999');
        $this->numberValue3 = new NumberValue('-8');
        $this->date1 = new Date(2012, 12, 2);
        $this->dateTime1 =
            new DfpDateTime($this->date1, 12, 45, 0, self::TIME_ZONE_ID1);
        $this->dateValue1 = new DateValue($this->date1);
        $this->dateTimeValue1 = new DateTimeValue($this->dateTime1);

        $values = [
            new NumberValue('23'),
            new NumberValue('42'),
            new NumberValue('5'),
            new NumberValue('10'),
            new NumberValue('1')
        ];
        $this->setValue1 = new SetValue($values);

        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId('100');
        $inventoryTargeting = new InventoryTargeting();
        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);
        $this->targeting1 = new Targeting();
        $this->targeting1->setInventoryTargeting($inventoryTargeting);
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::createValue
     */
    public function testCreateValue()
    {
        $this->assertSame(
            'hello',
            Pql::createValue(new TextValue('hello'))->getValue()
        );
        $this->assertSame('value1', Pql::createValue('value1')->getValue());
        $this->assertSame(false, Pql::createValue(false)->getValue());
        $this->assertSame('1', Pql::createValue(1)->getValue());
        $this->assertSame('1.02', Pql::createValue(1.02)->getValue());
        $this->assertSame(
            '2012-12-02T12:45:00+08:00',
            DfpDateTimes::toDateTimeString(
                Pql::createValue($this->dateTime1)->getValue()
            )
        );
        $this->assertSame(
            '2012-12-02',
            DfpDates::toDateString(
                Pql::createValue($this->dateTime1->getDate())->getValue()
            )
        );

        $values = Pql::createValue([23, 42, 5, 10, 1])->getValues();
        $this->assertCount(5, $values);
        $this->assertSame('23', $values[0]->getValue());
        $this->assertSame('42', $values[1]->getValue());
        $this->assertSame('5', $values[2]->getValue());
        $this->assertSame('10', $values[3]->getValue());
        $this->assertSame('1', $values[4]->getValue());

        $this->assertSame(
            '100',
            Pql::createValue($this->targeting1)->getValue()
                ->getInventoryTargeting()->getTargetedAdUnits()[0]->getAdUnitId(
                )
        );
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::createValue
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Unsupported value type
     *     [Google\AdsApi\Dfp\Util\v201711\MyObject]
     */
    public function testCreateValueWithInvalidTypeThrowsException()
    {
        Pql::createValue(new MyObject());
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::createValue
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Unsupported value type [NULL]
     */
    public function testCreateValueWithNullThrowsException()
    {
        Pql::createValue(null);
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::toString
     */
    public function testToString()
    {
        $this->assertSame('hello world', Pql::toString($this->textValue1));
        $this->assertSame('false', Pql::toString($this->booleanValue1));
        $this->assertSame('2', Pql::toString($this->numberValue1));
        $this->assertSame('2012-12-02', Pql::toString($this->dateValue1));
        $this->assertSame(
            '2012-12-02T12:45:00+08:00',
            Pql::toString($this->dateTimeValue1)
        );
        $this->assertSame('23,42,5,10,1', Pql::toString($this->setValue1));
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::toString
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Unsupported value type
     *     [Google\AdsApi\Dfp\Util\v201711\MyValue]
     */
    public function testToStringWithUnsupportedValueTypeThrowsException()
    {
        Pql::toString(new MyValue());
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::toString
     * @expectedException InvalidArgumentException
     */
    public function testToStringWithTargetingValueTypeThrowsException()
    {
        Pql::toString(new TargetingValue());
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::getColumnLabels
     */
    public function testGetColumnLabels()
    {
        $resultSet = new ResultSet(
            [
                $this->column1,
                $this->column2,
                $this->column3
            ]
        );
        $this->assertSame(
            ['Id', 'Name', 'Status'],
            Pql::getColumnLabels($resultSet)
        );
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::getRowStringValues
     */
    public function testGetRowStringValues()
    {
        $row = new Row(
            [
                $this->textValue1,
                $this->booleanValue1,
                $this->numberValue1
            ]
        );
        $this->assertSame(
            ['hello world', 'false', '2'],
            Pql::getRowStringValues($row)
        );
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::combineResultSets
     */
    public function testCombineResultSet()
    {
        $row1 = new Row(
            [
                $this->textValue1,
                $this->booleanValue1,
                $this->numberValue1
            ]
        );
        $row2 = new Row(
            [
                $this->textValue2,
                $this->booleanValue2,
                $this->numberValue2
            ]
        );
        $row3 = new Row(
            [
                $this->textValue3,
                $this->booleanValue3,
                $this->numberValue3
            ]
        );

        $resultSet1 = new ResultSet(
            [
                $this->column1,
                $this->column2,
                $this->column3
            ],
            [
                $row1,
                $row2
            ]
        );
        $resultSet2 = new ResultSet(
            [
                $this->column1,
                $this->column2,
                $this->column3
            ],
            [
                $row3
            ]
        );

        $combinedResultSet = Pql::combineResultSets($resultSet1, $resultSet2);

        // Compare column headers.
        $this->assertCount(3, $combinedResultSet->getColumnTypes());
        $this->assertSame(
            'Id',
            $combinedResultSet->getColumnTypes()[0]->getLabelName()
        );
        $this->assertSame(
            'Name',
            $combinedResultSet->getColumnTypes()[1]->getLabelName()
        );
        $this->assertSame(
            'Status',
            $combinedResultSet->getColumnTypes()[2]->getLabelName()
        );

        // Compare row contents.
        $this->assertCount(3, $combinedResultSet->getRows());
        // Compare row 0.
        $this->assertInstanceOf(
            TextValue::class,
            $combinedResultSet->getRows()[0]->getValues()[0]
        );
        $this->assertSame(
            'hello world',
            $combinedResultSet->getRows()[0]->getValues()[0]->getValue()
        );
        $this->assertInstanceOf(
            BooleanValue::class,
            $combinedResultSet->getRows()[0]->getValues()[1]
        );
        $this->assertSame(
            false,
            $combinedResultSet->getRows()[0]->getValues()[1]->getValue()
        );
        $this->assertInstanceOf(
            NumberValue::class,
            $combinedResultSet->getRows()[0]->getValues()[2]
        );
        $this->assertSame(
            '2',
            $combinedResultSet->getRows()[0]->getValues()[2]->getValue()
        );
        // Compare row 1.
        $this->assertInstanceOf(
            TextValue::class,
            $combinedResultSet->getRows()[1]->getValues()[0]
        );
        $this->assertSame(
            'description',
            $combinedResultSet->getRows()[1]->getValues()[0]->getValue()
        );
        $this->assertInstanceOf(
            BooleanValue::class,
            $combinedResultSet->getRows()[1]->getValues()[1]
        );
        $this->assertSame(
            true,
            $combinedResultSet->getRows()[1]->getValues()[1]->getValue()
        );
        $this->assertInstanceOf(
            NumberValue::class,
            $combinedResultSet->getRows()[1]->getValues()[2]
        );
        $this->assertSame(
            '7.999',
            $combinedResultSet->getRows()[1]->getValues()[2]->getValue()
        );
        // Compare row 2.
        $this->assertInstanceOf(
            TextValue::class,
            $combinedResultSet->getRows()[2]->getValues()[0]
        );
        $this->assertSame(
            'rawr',
            $combinedResultSet->getRows()[2]->getValues()[0]->getValue()
        );
        $this->assertInstanceOf(
            BooleanValue::class,
            $combinedResultSet->getRows()[2]->getValues()[1]
        );
        $this->assertSame(
            false,
            $combinedResultSet->getRows()[2]->getValues()[1]->getValue()
        );
        $this->assertInstanceOf(
            NumberValue::class,
            $combinedResultSet->getRows()[2]->getValues()[2]
        );
        $this->assertSame(
            '-8',
            $combinedResultSet->getRows()[2]->getValues()[2]->getValue()
        );
    }

    /**
     * @covers Google\AdsApi\Dfp\Util\v201711\Pql::combineResultSets
     * @expectedException InvalidArgumentException
     */
    public function testCombineResultSetWithBadColumnsThrowsException()
    {
        $row1 = new Row(
            [
                $this->textValue1,
                $this->booleanValue1,
                $this->numberValue1
            ]
        );
        $row2 = new Row(
            [
                $this->textValue2,
                $this->booleanValue2,
                $this->numberValue2
            ]
        );
        $row3 = new Row(
            [
                $this->textValue3,
                $this->booleanValue3
            ]
        );

        $resultSet1 = new ResultSet(
            [
                $this->column1,
                $this->column2,
                $this->column3
            ],
            [
                $row1,
                $row2
            ]
        );
        $resultSet2 = new ResultSet(
            [
                $this->column1,
                $this->column2
            ],
            [
                $row3
            ]
        );

        Pql::combineResultSets($resultSet1, $resultSet2);
    }
}

// @codingStandardsIgnoreLineStart
class MyValue extends Value
{
}
// @codingStandardsIgnoreLineEnd

// @codingStandardsIgnoreLineStart
class MyObject
{
}
// @codingStandardsIgnoreLineEnd
