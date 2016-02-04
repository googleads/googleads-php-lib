<?php
/**
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

require_once 'Google/Api/Ads/Common/Util/OgnlUtils.php';

/**
 * Unit tests for {@link OgnlUtils}.
 * @group small
 */
class OgnlUtilsTest extends PHPUnit_Framework_TestCase {

  /**
   * Test getting the value of an expression in a context.
   * @param string $expression the OGNL expression to evaluate
   * @param mixed $context the context to evaluate the expression in
   * @param mixed $expected the expected value of the provider
   * @covers OgnlUtils::GetValue
   * @dataProvider OgnlProvider
   */
  public function testGetValue($expression, $context, $expected) {
    $value = OgnlUtils::GetValue($expression, $context);
    $this->assertEquals($expected, $value);
  }

  /**
   * Test getting the operation index referenced in an expression.
   * @param string $expression the OGNL expression to evaluate
   * @param mixed $expected the expected operation index
   * @covers OgnlUtils::GetOperationIndex
   * @dataProvider OperationIndexProvider
   */
  public function testGetOperationIndex($expression, $expected) {
    $index = OgnlUtils::GetOperationIndex($expression);
    $this->assertEquals($expected, $index);
  }

  /**
   * Provides OGNL expressions and contexts along with the expected value.
   * @return array an array of arrays of expression, context, and value
   */
  public function OgnlProvider() {
    $data = array();

    // Valid expressions that evaluate in the context.
    // Associative array context.
    $data[] = array('foo', array('foo' => 'value'), 'value');
    // Object context.
    $data[] = array('foo', (object) array('foo' => 'value'), 'value');
    // Array context.
    $data[] = array('[0]', array('value'), 'value');
    // Null value.
    $data[] = array('foo', array('foo' => null), null);
    // Array value.
    $data[] = array('foo[0]', array('foo' => array('value')), 'value');
    // Child value.
    $data[] =
        array('foo.bar', array('foo' => array('bar' => 'value')), 'value');
    // Empty expression.
    $data[] = array('', array('foo' => 'value'), array('foo' => 'value'));

    // Valid expressions that don't evaluate in the context.
    // Null context.
    $data[] = array('foo', null, null);
    // Child of null value.
    $data[] = array('foo.bar', array('foo' => null), null);
    // Fields deeper than context.
    $data[] = array('foo.bar.more', array('foo' => 'value'), null);
    // Index out of bounds.
    $data[] = array('foo[1]', array('foo' => array('value')), null);

    // Invalid expressions.
    // Null expression.
    $data[] = array(null, array('foo' => 'value'), null);
    // Invalid characters in field.
    $data[] = array('foo!', array('foo' => 'value'), null);
    // Invalid characters in index.
    $data[] = array('[abc]', array('value'), null);
    // Missing dot.
    $data[] = array('foo[0]bar', array('foo' => array('bar' => 'value')), null);

    return $data;
  }

  /**
   * Provides OGNL expressions the expected operation index.
   * @return array an array of arrays of expression and operation index
   */
  public function OperationIndexProvider() {
    $data = array();

    // Expressions that reference an index.
    $data[] = array('operations[0]', 0);
    $data[] = array('operations[123]', 123);

    // Expressions that don't reference an index.
    $data[] = array('operations', null);
    $data[] = array('operations.foo', null);
    $data[] = array('foo', null);

    // Invalid expressions.
    $data[] = array(null, null);
    $data[] = array('', null);

    return $data;
  }
}

