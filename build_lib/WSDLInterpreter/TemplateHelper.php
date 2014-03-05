<?php
/**
 * Interprets WSDL documents for the purposes of PHP 5 object creation
 *
 * The WSDLInterpreter package is used for the interpretation of a WSDL
 * document into PHP classes that represent the messages using inheritance
 * and typing as defined by the WSDL rather than SoapClient's limited
 * interpretation.  PHP classes are also created for each service that
 * represent the methods with any appropriate overloading and strict
 * variable type checking as defined by the WSDL.
 *
 * PHP version 5
 *
 * LICENSE: This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301 USA
 *
 * @category    WebServices
 * @package     WSDLInterpreter
 * @author      Kevin Vaughan kevin@kevinvaughan.com
 * @copyright   2007 Kevin Vaughan
 * @license     http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 *
 * Modified by Adam Rogal &
 * Paul Matthews for use with Ads APIs @ Google.
 */

/**
 * A helper class for generating templates.
 *
 * Configured to a template directory, allows standard php file usage as
 * template.
 */
class TemplateHelper {
  protected $dir;

  /**
   * Create the template helper
   *
   * @param string $templateDir the template directory path
   */
  public function __construct($templateDir) {
    $this->dir = $templateDir;
  }

  /**
   * Generate a template.
   *
   * Passing template variables to be created into the method
   *
   * @param string $templateName is the raw template name without extension
   * @param array $templateVars template variables name => value to use
   * @return string the rendered template
   */
  public function generate($templateName, $templateVars = array()) {
    // Create template vars
    extract($templateVars);

    // Get template path
    $templatePath = $this->getTemplatePath($templateName);

    // Generate the content
    ob_start();
    require $templatePath;
    $templateValue = ob_get_contents();
    ob_end_clean();
    return $templateValue;
  }

  /**
   * Function to print a line within a template.
   *
   * Usage:
   *  $this->outLn('content');
   *
   * @param string $content to be rendered
   * @return TemplateHelper for chaining calls
   */
  public function outLn($content) {
    return $this->out($content, true);
  }

  /**
   * Function to print content within a template.
   *
   * Usage:
   *  $this->out('content');
   *
   * @param string $content to be rendered
   * @param boolean $crlf true to print a new line, otherwise false
   * @return TemplateHelper for chaining calls
   */
  public function out($content, $crlf = false) {
    $fmt = $crlf ? "%s\n" : "%s";
    echo sprintf($fmt, $content);
    return $this;
  }

  /**
   * Get the template path.
   *
   * @param string $templateName the name of the template to print
   * @return string the template path
   */
  protected function getTemplatePath($templateName) {
    return sprintf('%s/%s.phpt', $this->dir, $templateName);
  }
}
