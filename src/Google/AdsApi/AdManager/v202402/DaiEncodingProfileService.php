<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiEncodingProfileService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202402\\ObjectValue',
      'ActivateDaiEncodingProfiles' => 'Google\\AdsApi\\AdManager\\v202402\\ActivateDaiEncodingProfiles',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202402\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202402\\ApplicationException',
      'ArchiveDaiEncodingProfiles' => 'Google\\AdsApi\\AdManager\\v202402\\ArchiveDaiEncodingProfiles',
      'AudioSettings' => 'Google\\AdsApi\\AdManager\\v202402\\AudioSettings',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202402\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202402\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202402\\CommonError',
      'DaiEncodingProfileAction' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileAction',
      'DaiEncodingProfileAdMatchingError' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileAdMatchingError',
      'DaiEncodingProfileContainerSettingsError' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileContainerSettingsError',
      'DaiEncodingProfile' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfile',
      'DaiEncodingProfileNameError' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileNameError',
      'DaiEncodingProfilePage' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfilePage',
      'DaiEncodingProfileUpdateError' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileUpdateError',
      'DaiEncodingProfileVariantSettingsError' => 'Google\\AdsApi\\AdManager\\v202402\\DaiEncodingProfileVariantSettingsError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202402\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202402\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateValue',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202402\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202402\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202402\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202402\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202402\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202402\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202402\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202402\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202402\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202402\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202402\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202402\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202402\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202402\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202402\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202402\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202402\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202402\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202402\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202402\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202402\\Value',
      'VideoSettings' => 'Google\\AdsApi\\AdManager\\v202402\\VideoSettings',
      'createDaiEncodingProfilesResponse' => 'Google\\AdsApi\\AdManager\\v202402\\createDaiEncodingProfilesResponse',
      'getDaiEncodingProfilesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getDaiEncodingProfilesByStatementResponse',
      'performDaiEncodingProfileActionResponse' => 'Google\\AdsApi\\AdManager\\v202402\\performDaiEncodingProfileActionResponse',
      'updateDaiEncodingProfilesResponse' => 'Google\\AdsApi\\AdManager\\v202402\\updateDaiEncodingProfilesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202402/DaiEncodingProfileService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202402\DaiEncodingProfile[] $daiEncodingProfiles
     * @return \Google\AdsApi\AdManager\v202402\DaiEncodingProfile[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\DaiEncodingProfilePage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getDaiEncodingProfilesByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('getDaiEncodingProfilesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link DaiEncodingProfile} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202402\DaiEncodingProfileAction $daiEncodingProfileAction
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function performDaiEncodingProfileAction(\Google\AdsApi\AdManager\v202402\DaiEncodingProfileAction $daiEncodingProfileAction, \Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('performDaiEncodingProfileAction', array(array('daiEncodingProfileAction' => $daiEncodingProfileAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link DaiEncodingProfile} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\DaiEncodingProfile[] $daiEncodingProfiles
     * @return \Google\AdsApi\AdManager\v202402\DaiEncodingProfile[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function updateDaiEncodingProfiles(array $daiEncodingProfiles)
    {
      return $this->__soapCall('updateDaiEncodingProfiles', array(array('daiEncodingProfiles' => $daiEncodingProfiles)))->getRval();
    }

}
