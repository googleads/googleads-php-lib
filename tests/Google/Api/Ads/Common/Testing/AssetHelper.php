<?php
/**
 * A Helper class to facilitate loading assets in tests.
 *
 * PHP version 5
 *
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
 * @package    GoogleApiAdsCommon
 * @subpackage Testing
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * A Helper class to facilitate loading assets in tests.
 * @package GoogleApiAdsCommon
 * @subpackage Testing
 */
class AssetHelper {

  /**
   * Asset directory.
   * @var string
   */
  private $assetDirectory;

  /**
   * Default extension for this asset helper.
   * @var string
   */
  private $defaultExt;

  /**
   * Constructor.
   * @param string $assetDirectory the path to the directory containing assets
   * @param null|string $defaultExt the default extension for the assets
   */
  public function __construct($assetDirectory, $defaultExt = null) {
    $this->defaultExt = $defaultExt ?: '';
    $this->assetDirectory = $assetDirectory;
  }

  /**
   * Get the full path to an asset.
   * @param string $assetName the name of the asset
   * @param null|string $ext the extension of the asset, if applicable
   * @return string the resultant path
   */
  public function getAssetPath($assetName, $ext = null) {
    $ext = $ext ?: $this->defaultExt;
    return sprintf('%s/%s%s', $this->assetDirectory, $assetName, $ext);
  }

  /**
   * Get an Asset.
   * @param string $assetName the asset name
   * @param null|string $ext the extension of the asset, if applicable
   * @throws InvalidArgumentException if theres an issue finding the file
   * @return string the contents of the asset
   */
  public function getAsset($assetName, $ext = null) {
    $assetPath = $this->getAssetPath($assetName, $ext);

    if (!file_exists($assetPath)) {
      throw new InvalidArgumentException(sprintf('"%s" asset not found: %s',
          $assetName, $assetPath));
    }

    return file_get_contents($assetPath);
  }

  /**
   * Get an Asset as an XML Dom.
   * @param string $assetName the XML asset name
   * @param null|string $ext the extension of the asset, if applicable
   * @return string the contents of the asset
   * @throws InvalidArgumentException if theres an issue finding the file
   * @throws DOMException if the DOM could not be loaded
   */
  public function getAssetAsDom($assetName, $ext = null) {
    return XmlUtils::GetDomFromXml($this->getAsset($assetName, $ext));
  }
}
