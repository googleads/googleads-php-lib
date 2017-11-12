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
namespace Google\AdsApi\Dfp\Util\v201705;

use PHPUnit\Framework\TestCase;

/**
 * Tests for `StatementBuilder`.
 *
 * @see StatementBuilder
 * @small
 */
class StatementBuilderTest extends TestCase {

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementForPqlTable() {
    $expectedQuery = 'SELECT Id FROM table WHERE a = b AND b = c ORDER BY a '
        . 'ASC, b DESC LIMIT 200 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Select('Id')
        ->from('table')
        ->where('a = b AND b = c')
        ->orderBy('a ASC, b DESC')
        ->limit(200)
        ->offset(0)
        ->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementForPqlTableWithKeywords() {
    $expectedQuery = 'SELECT Id FROM table WHERE a = b AND b = c ORDER BY a '
        . 'ASC, b DESC LIMIT 200 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->Select('Id')
        ->from('FrOM table')
        ->where('WHERE a = b AND b = c')
        ->orderBy('order BY a ASC, b DESC')
        ->limit(200)
        ->offset(0)
        ->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementNotPqlTable() {
    $expectedQuery = 'WHERE a = b AND b = c ORDER BY a ASC, b DESC LIMIT 200 '
        . 'OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->where('a = b AND b = c')
        ->orderBy('a ASC, b DESC')
        ->limit(200)
        ->offset(0)
        ->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementNoOffset() {
    $expectedQuery = 'WHERE a = b AND b = c ORDER BY a ASC, b DESC LIMIT 200';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->where('a = b AND b = c')
        ->orderBy('a ASC, b DESC')
        ->limit(200)
        ->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementJustLimit() {
    $expectedQuery = 'LIMIT 500';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->limit(500)->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementLimitAndOffset() {
    $expectedQuery = 'LIMIT 500 OFFSET 0';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->limit(500)
        ->offset(0)
        ->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::removeLimitAndOffset
   */
  public function testToStatementRemoveLimitAndOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 0';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->limit(500)
        ->offset(0)
        ->where('a = b')
        ->orderBy('a');
    $this->assertSame($expectedQueryBefore,
        $statementBuilder->toStatement()->getQuery());
    $statementBuilder->removeLimitAndOffset();
    $this->assertSame($expectedQueryAfter,
        $statementBuilder->toStatement()->getQuery());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::increaseOffsetBy
   */
  public function testToStatementIncreaseOffsetNoInitialOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 120';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->limit(500)
        ->where('a = b')
        ->orderBy('a');
    $this->assertSame($expectedQueryBefore,
        $statementBuilder->toStatement()->getQuery());
    $statementBuilder->increaseOffsetBy(120);
    $this->assertSame($expectedQueryAfter,
        $statementBuilder->toStatement()->getQuery());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::increaseOffsetBy
   */
  public function testToStatementIncreaseOffsetWithInitialOffset() {
    $expectedQueryBefore = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 10';
    $expectedQueryAfter = 'WHERE a = b ORDER BY a LIMIT 500 OFFSET 40';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->limit(500)
        ->offset(10)
        ->where('a = b')
        ->orderBy('a');
    $this->assertSame($expectedQueryBefore,
        $statementBuilder->toStatement()->getQuery());
    $statementBuilder->increaseOffsetBy(30);
    $this->assertSame($expectedQueryAfter,
        $statementBuilder->toStatement()->getQuery());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   */
  public function testToStatementEmpty() {
    $expectedQuery = '';
    $statementBuilder = new StatementBuilder();
    $query = $statementBuilder->toStatement()->getQuery();
    $this->assertSame($expectedQuery, $query);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::toStatement
   * @expectedException InvalidArgumentException
   */
  public function testToStatementOffsetWithoutLimit() {
    $statementBuilder = new StatementBuilder();
    $statementBuilder->offset(500)->toStatement();
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201705\StatementBuilder::withBindVariableValue
   */
  public function testWithBindingVariable() {
    $key = 'key';
    $value = 'value';
    $statementBuilder = new StatementBuilder();
    $statementBuilder->withBindVariableValue($key, $value);
    $bindVariableMap = $statementBuilder->getBindVariableMap();
    $this->assertSame($value, $bindVariableMap[$key]->getValue());
  }
}
