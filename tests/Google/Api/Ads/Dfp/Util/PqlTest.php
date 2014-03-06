<?php
/**
 * Copyright 2013, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Dfp/Util/Pql.php';
require_once 'Google/Api/Ads/Dfp/v201308/PublisherQueryLanguageService.php';

/**
 * Tests for {@link Pql}.
 *
 * @group small
 */
class PqlTest extends PHPUnit_Framework_TestCase {

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

  protected function setUp() {
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
    $date1 = new Date(2012, 12, 2);
    $dateTime1 = new DfpDateTime($date1, 12, 45, 0, PqlTest::TIME_ZONE_ID1);
    $this->dateValue1 = new DateValue($date1);
    $this->dateTimeValue1 = new DateTimeValue($dateTime1);
  }

  /**
   * @covers Pql::ToString
   */
  public function testToString() {
    $this->assertEquals('hello world', Pql::ToString($this->textValue1));
    $this->assertEquals('false', Pql::ToString($this->booleanValue1));
    $this->assertEquals('2', Pql::ToString($this->numberValue1));
    $this->assertEquals('2012-12-02', Pql::ToString($this->dateValue1));
    $this->assertEquals('2012-12-02T12:45:00+08:00',
        Pql::ToString($this->dateTimeValue1));
  }

  /**
   * @covers Pql::ToString
   * @expectedException InvalidArgumentException
   */
  public function testToStringWithUnsupportedValueTypeThrowsException() {
    Pql::ToString(new MyValue());
  }

  /**
   * @covers Pql::GetColumnLabels
   */
  public function testGetColumnLabels() {
    $resultSet = new ResultSet(array($this->column1, $this->column2,
        $this->column3));
    $this->assertEquals(array('Id', 'Name', 'Status'),
        Pql::GetColumnLabels($resultSet));
  }

  /**
   * @covers Pql::GetRowStringValues
   */
  public function testGetRowStringValues() {
    $row = new Row(array($this->textValue1, $this->booleanValue1,
        $this->numberValue1));
    $this->assertEquals(array('hello world', 'false', '2'),
        Pql::GetRowStringValues($row));
  }

  /**
   * @covers Pql::CombineResultSets
   */
  public function testCombineResultSet() {
    $row1 = new Row(array($this->textValue1, $this->booleanValue1,
        $this->numberValue1));
    $row2 = new Row(array($this->textValue2, $this->booleanValue2,
        $this->numberValue2));
    $row3 = new Row(array($this->textValue3, $this->booleanValue3,
        $this->numberValue3));

    $resultSet1 = new ResultSet(array($this->column1, $this->column2,
        $this->column3), array($row1, $row2));
    $resultSet2 = new ResultSet(array($this->column1, $this->column2,
        $this->column3), array($row3));

    $combinedResultSet = Pql::CombineResultSets($resultSet1, $resultSet2);

    $this->assertEquals(3, count($combinedResultSet->rows));
    $this->assertEquals(array(new ColumnType('Id'),
        new ColumnType('Name'),
        new ColumnType('Status')), $combinedResultSet->columnTypes);
    $this->assertEquals(array(new TextValue('hello world'),
        new BooleanValue(false),
        new NumberValue('2')), $combinedResultSet->rows[0]->values);
    $this->assertEquals(array(new TextValue('description'),
        new BooleanValue(true),
        new NumberValue('7.999')), $combinedResultSet->rows[1]->values);
    $this->assertEquals(array(new TextValue('rawr'),
        new BooleanValue(false),
        new NumberValue('-8')), $combinedResultSet->rows[2]->values);
  }

  /**
   * @covers Pql::CombineResultSets
   * @expectedException InvalidArgumentException
   */
  public function testCombineResultSetWithBadColumnsThrowsException() {
    $row1 = new Row(array($this->textValue1, $this->booleanValue1,
        $this->numberValue1));
    $row2 = new Row(array($this->textValue2, $this->booleanValue2,
        $this->numberValue2));
    $row3 = new Row(array($this->textValue3, $this->booleanValue3));

    $resultSet1 = new ResultSet(array($this->column1, $this->column2,
        $this->column3), array($row1, $row2));
    $resultSet2 = new ResultSet(array($this->column1, $this->column2),
        array($row3));

    Pql::CombineResultSets($resultSet1, $resultSet2);
  }
}

class MyValue extends Value {}
