<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TeamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202605\\ObjectValue',
      'ActivateTeams' => 'Google\\AdsApi\\AdManager\\v202605\\ActivateTeams',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202605\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202605\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202605\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202605\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202605\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202605\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202605\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202605\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateValue',
      'DeactivateTeams' => 'Google\\AdsApi\\AdManager\\v202605\\DeactivateTeams',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202605\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202605\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202605\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202605\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202605\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202605\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202605\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202605\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202605\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202605\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202605\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202605\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202605\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202605\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202605\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202605\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202605\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\String_ValueMapEntry',
      'TeamAction' => 'Google\\AdsApi\\AdManager\\v202605\\TeamAction',
      'Team' => 'Google\\AdsApi\\AdManager\\v202605\\Team',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202605\\TeamError',
      'TeamPage' => 'Google\\AdsApi\\AdManager\\v202605\\TeamPage',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202605\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202605\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202605\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202605\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202605\\Value',
      'createTeamsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createTeamsResponse',
      'getTeamsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getTeamsByStatementResponse',
      'performTeamActionResponse' => 'Google\\AdsApi\\AdManager\\v202605\\performTeamActionResponse',
      'updateTeamsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateTeamsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202605/TeamService?wsdl')
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
     * Creates new {@link Team} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link Team#name}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202605\Team[] $teams
     * @return \Google\AdsApi\AdManager\v202605\Team[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createTeams(array $teams)
    {
      return $this->__soapCall('createTeams', array(array('teams' => $teams)))->getRval();
    }

    /**
     * Gets a {@code TeamPage} of {@code Team} objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Team#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Team#name}</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Team#description}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\TeamPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getTeamsByStatement(\Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('getTeamsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Team} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202605\TeamAction $teamAction
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function performTeamAction(\Google\AdsApi\AdManager\v202605\TeamAction $teamAction, \Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('performTeamAction', array(array('teamAction' => $teamAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Team} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\Team[] $teams
     * @return \Google\AdsApi\AdManager\v202605\Team[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateTeams(array $teams)
    {
      return $this->__soapCall('updateTeams', array(array('teams' => $teams)))->getRval();
    }

}
