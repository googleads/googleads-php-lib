<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiEncodingProfileService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivateDaiEncodingProfiles' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateDaiEncodingProfiles',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'ArchiveDaiEncodingProfiles' => 'Google\\AdsApi\\AdManager\\v202202\\ArchiveDaiEncodingProfiles',
      'AudioSettings' => 'Google\\AdsApi\\AdManager\\v202202\\AudioSettings',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'DaiEncodingProfileAction' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileAction',
      'DaiEncodingProfileAdMatchingError' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileAdMatchingError',
      'DaiEncodingProfileContainerSettingsError' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileContainerSettingsError',
      'DaiEncodingProfile' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfile',
      'DaiEncodingProfileNameError' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileNameError',
      'DaiEncodingProfilePage' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfilePage',
      'DaiEncodingProfileUpdateError' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileUpdateError',
      'DaiEncodingProfileVariantSettingsError' => 'Google\\AdsApi\\AdManager\\v202202\\DaiEncodingProfileVariantSettingsError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202202\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202202\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoSettings' => 'Google\\AdsApi\\AdManager\\v202202\\VideoSettings',
      'createDaiEncodingProfilesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createDaiEncodingProfilesResponse',
      'getDaiEncodingProfilesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getDaiEncodingProfilesByStatementResponse',
      'performDaiEncodingProfileActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performDaiEncodingProfileActionResponse',
      'updateDaiEncodingProfilesResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateDaiEncodingProfilesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/DaiEncodingProfileService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link DaiEncodingProfile} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\DaiEncodingProfile[] $daiEncodingProfiles
     * @return \Google\AdsApi\AdManager\v202202\DaiEncodingProfile[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createDaiEncodingProfiles(array $daiEncodingProfiles)
    {
      return $this->__soapCall('createDaiEncodingProfiles', array(array('daiEncodingProfiles' => $daiEncodingProfiles)))->getRval();
    }

    /**
     * Gets a {@link DaiEncodingProfilePage} of {@link DaiEncodingProfile} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link DaiEncodingProfile#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link DaiEncodingProfile#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link DaiEncodingProfile#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\DaiEncodingProfilePage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getDaiEncodingProfilesByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getDaiEncodingProfilesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link DaiEncodingProfile} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202202\DaiEncodingProfileAction $daiEncodingProfileAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performDaiEncodingProfileAction(\Google\AdsApi\AdManager\v202202\DaiEncodingProfileAction $daiEncodingProfileAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performDaiEncodingProfileAction', array(array('daiEncodingProfileAction' => $daiEncodingProfileAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link DaiEncodingProfile} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\DaiEncodingProfile[] $daiEncodingProfiles
     * @return \Google\AdsApi\AdManager\v202202\DaiEncodingProfile[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateDaiEncodingProfiles(array $daiEncodingProfiles)
    {
      return $this->__soapCall('updateDaiEncodingProfiles', array(array('daiEncodingProfiles' => $daiEncodingProfiles)))->getRval();
    }

}
