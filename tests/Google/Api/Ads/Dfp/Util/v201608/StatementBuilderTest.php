<?php
/**
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Dfp/Util/v201608/StatementBuilder.php';
require_once 'Google/Api/Ads/Dfp/v201608/PublisherQueryLanguageService.php';

/**
 * Tests for {@link StatementBuilder}.
 *
 * @group small
 */
class StatementBuilderTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementForPqlTable() {
    $expectedQuery = 'SELECT Id FROM table WHERE a = b AND b = c ORDER BY a '
        . 'ASC, b DESC LIMIT 200 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Select('Id')
        ->From('table')
        ->Where('a = b AND b = c')
        ->OrderBy('a ASC, b DESC')
        ->Limit(200)
        ->Offset(0)
        ->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementForPqlTableWithKeywords() {
    $expectedQuery = 'SELECT Id FROM table WHERE a = b AND b = c ORDER BY a '
        . 'ASC, b DESC LIMIT 200 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Select('Id')
        ->From('FrOM table')
        ->Where('WHERE a = b AND b = c')
        ->OrderBy('order BY a ASC, b DESC')
        ->Limit(200)
        ->Offset(0)
        ->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementNotPqlTable() {
    $expectedQuery = 'WHERE a = b AND b = c ORDER BY a ASC, b DESC LIMIT 200 '
        . 'OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Where('a = b AND b = c')
        ->OrderBy('a ASC, b DESC')
        ->Limit(200)
        ->Offset(0)
        ->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementNoOffset() {
    $expectedQuery = 'WHERE a = b AND b = c ORDER BY a ASC, b DESC LIMIT 200';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Where('a = b AND b = c')
        ->OrderBy('a ASC, b DESC')
        ->Limit(200)
        ->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementJustLimit() {
    $expectedQuery = 'LIMIT 500';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Limit(500)->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementLimitAndOffset() {
    $expectedQuery = 'LIMIT 500 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Limit(500)
        ->Offset(0)
        ->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   * @covers StatementBuilder::RemoveLimitAndOffset
   */
  public function testToStatementRemoveLimitAndOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 0';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->Limit(500)
        ->Offset(0)
        ->Where('a = b')
        ->OrderBy('a');
    $this->assertEquals($expectedQueryBefore,
        $statementBuilder->ToStatement()->query);
    $statementBuilder->RemoveLimitAndOffset();
    $this->assertEquals($expectedQueryAfter,
        $statementBuilder->ToStatement()->query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   * @covers StatementBuilder::IncreaseOffsetBy
   */
  public function testToStatementIncreaseOffsetNoInitialOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 120';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->Limit(500)
        ->Where('a = b')
        ->OrderBy('a');
    $this->assertEquals($expectedQueryBefore,
        $statementBuilder->ToStatement()->query);
    $statementBuilder->IncreaseOffsetBy(120);
    $this->assertEquals($expectedQueryAfter,
        $statementBuilder->ToStatement()->query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   * @covers StatementBuilder::IncreaseOffsetBy
   */
  public function testToStatementIncreaseOffsetWithInitialOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 10';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 40';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->Limit(500)
        ->Offset(10)
        ->Where('a = b')
        ->OrderBy('a');
    $this->assertEquals($expectedQueryBefore,
        $statementBuilder->ToStatement()->query);
    $statementBuilder->IncreaseOffsetBy(30);
    $this->assertEquals($expectedQueryAfter,
        $statementBuilder->ToStatement()->query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   */
  public function testToStatementEmpty() {
    $expectedQuery = '';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->ToStatement()->query;
    $this->assertEquals($expectedQuery, $query);
  }

  /**
   * @covers StatementBuilder::ToStatement
   * @expectedException ValidationException
   */
  public function testToStatementOffsetWithoutLimit() {
    $statementBuilder = new StatementBuilder();
    $statementBuilder->Offset(500)->ToStatement();
  }

  /**
   * @covers StatementBuilder::WithBindVariableValue
   */
  public function testWithBindingVariable() {
    $key = 'key';
    $value = 'value';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->WithBindVariableValue($key, $value);
    $bindVariableMap = $statementBuilder->GetBindVariableMap();
    $this->assertEquals($value, $bindVariableMap[$key]->value);
  }
}

