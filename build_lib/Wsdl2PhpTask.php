<?php
/**
 * Phing Task to call WSDLInterpreter on each service WSDL from a build script.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 *
 * @copyright 2011, Google Inc. All Rights Reserved.
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *            Version 2.0
 * @author    Adam Rogal
 * @author    Paul Matthews
 */
require_once 'phing/Task.php';
require_once 'WSDLInterpreter/WSDLInterpreter.php';

/**
 * A Phing task used to generate an Ads API service from a WSDL URL.
 */
class Wsdl2PhpTask extends Task {
  /**
   * The URL passed in the buildfile for the WSDL.
   * @var string the URL of the WSDL
   * @access private
   */
  private $url = NULL;

  /**
   * The SOAP client classname of the API.
   * @var string the SoapClient class extension to extend
   * @access private
   */
  private $soapClientClassName = NULL;

  /**
   * The SOAP client class path of the API.
   * @var string the path of the SoapClient class extension to extend
   * @access private
   */
  private $soapClientClassPath = NULL;

  /**
   * The output directory for the php file. This can be a relative path
   * from the current directory from which the task is called, or an
   * absolute path.
   * @var string the output directory of the task
   * @access private
   */
  private $outputDir = NULL;

  /**
   * The classmap of 'Wsdl Type => PHP Class' for the WSDL.
   * @var array the classmap for the WSDL type to PHP class
   * @access private
   */
  private $classmap = NULL;

  /**
   * A classmap of 'Wsdl Type => PHP Class' for the WSDL, to be used
   * to avoid class name conflicts when pseudo namespaces are not enabled.
   * @var array the classmap for the WSDL type to PHP class
   * @access private
   */
  private $conflictClassmap = NULL;

  /**
   * The WSDL types that shouldn't have their class names checked for
   * uniqueness. This option will be ignored when pseudo namespaces are enabled.
   * @var array the WSDL types that shouldn't have their class names checked for
   *     uniqueness.
   * @access private
   */
  private $skipClassNameCheckTypes = NULL;

  /**
   * The author of the service to be included in the file header.
   * @var string the author of the service
   * @access private
   */
  private $author = NULL;

  /**
   * The name of the service being worked on.
   * @var string the name of the service being worked on
   * @access private
   */
  private $serviceName = NULL;

  /**
   * The version of the service being worked on
   * @var string the version of the service being worked
   * @access private
   */
  private $version = NULL;

  /**
   * The package name to be included in the file header.
   * @var string the package name to be included in the file header
   * @access private
   */
  private $package = NULL;

  /**
   * The proxy URL to use when downloading WSDLs.
   * @var string the proxy URL to use when downloading WSDLs
   * @access private
   */
  private $proxy = NULL;

  /**
   * Whether or not to enable pseudo namespaces in the generated class names.
   * @var boolean whether or not to enable pseudo namespaces in the generated
   *     class names
   * @access private
   */
  private $enablePseudoNamespaces = FALSE;

  /**
   * The setter for the attribute <var>$url</var>.
   * @param string $url the URL of the WSDL file
   */
  public function setUrl($url) {
    $this->url = $url;
  }

  /**
   * The setter for the attribute <var>$soapClientClassName</var>.
   * @param string $soapClientClassName the soap client classname to extend for
   *     each soap client
   */
  public function setSoapClientClassName($soapClientClassName) {
    $this->soapClientClassName = $soapClientClassName;
  }

  /**
   * The setter for the attribute <var>$soapClientClassPath</var>.
   * @param string $soapClientClassPath the soap client class path to require
   *     in each service class file
   */
  public function setSoapClientClassPath($soapClientClassPath) {
    $this->soapClientClassPath = $soapClientClassPath;
  }

  /**
   * The setter for the attribute <var>$outputDir</var>.
   * @param string $path the output directory where the generated PHP
   *     file will be placed
   */
  public function setOutputDir($outputDir) {
    $this->outputDir = $outputDir;
  }

  /**
   * The setter for the attribute <var>$classmap</var>.
   * @param string $classmap JSON representation of the classmap, as a mapping
   *     from WSDL type to PHP class name
   */
  public function setClassmap($classmap) {
    $this->classmap = json_decode($classmap, true);
    if (!isset($this->classmap) && !empty($classmap)) {
      trigger_error('Unable to parse classmap as JSON.', E_USER_ERROR);
      die;
    }
  }

  /**
   * The setter for the attribute <var>$conflictClassmap</var>.
   * @param string $conflictClassmap JSON representation of a classmap, as a
   *     mapping from WSDL type to PHP class name, to be used to avoid name
   *     conflicts when pseudo namespaces aren't enabled
   */
  public function setConflictClassmap($conflictClassmap) {
    $this->conflictClassmap = json_decode($conflictClassmap, true);
    if (!isset($this->conflictClassmap) && !empty($conflictClassmap)) {
      trigger_error('Unable to parse the conflict classmap as JSON.',
        E_USER_ERROR);
      die;
    }
  }

  /**
   * The setter for the attribute <var>$skipClassNameCheckTypes</var>.
   * @param string $skipClassNameCheckTypes comma separated list of the type
   *     names
   */
  public function setSkipClassNameCheckTypes($skipClassNameCheckTypes) {
    if (!empty($skipClassNameCheckTypes)) {
      $this->skipClassNameCheckTypes = array_map('trim',
          explode(',', $skipClassNameCheckTypes));
    }
  }

  /**
   * The setter for the attribute <var>$author</var>.
   * @param string $author the author for the file header of the generated file
   */
  public function setAuthor($author) {
    $this->author = $author;
  }

  /**
   * The setter for the attribute <var>$version</var>.
   * @param string $version the version of the API for the generated service
   */
  public function SetVersion($version) {
    $this->version = $version;
  }

  /**
   * The setter for the attribute <var>$package</var>.
   * @param string $package the pacakge to be inserted into the file header
   */
  public function SetPackage($package) {
    $this->package = $package;
  }

  /**
   * The setter for the attribute <var>$proxy</var>.
   * @param string $proxy the proxy URL to use when downloading WSDLs
   */
  public function SetProxy($proxy) {
    $this->proxy = $proxy;
  }

  /**
   * The setter for the attribute <var>$enablePseudoNamespaces</var>.
   * @param boolean $enablePseudoNamespaces whether or not to enable pseudo
   *     namespaces in the generated class names.
   */
  public function SetEnablePseudoNamespaces($enablePseudoNamespaces) {
    $this->enablePseudoNamespaces = $enablePseudoNamespaces;
  }

  /**
   * The setter of the attribute <var>$serviceName</var>.
   * @param string $serviceName the name of the generated service
   */
  public function SetServiceName($serviceName) {
    $this->serviceName = $serviceName;
  }

  /**
   * Nothing to initilize for the task.
   */
  public function init() {}

  /**
   * The main entry point method for the task.
   */
  public function main() {
    print 'Starting: ' . $this->url . ' to ' . $this->outputDir . "\n";

    $wsdlInterpreter =
        new WSDLInterpreter($this->url, $this->soapClientClassName,
            $this->classmap, $this->conflictClassmap, $this->serviceName,
            $this->version, $this->author, $this->package,
            $this->soapClientClassPath, $this->proxy,
            $this->enablePseudoNamespaces, $this->skipClassNameCheckTypes);
    $wsdlInterpreter->savePHP($this->outputDir);
    print 'Done: ' . $this->url . "\n";
  }
}

