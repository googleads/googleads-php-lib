<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TeamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201808\\ObjectValue',
      'ActivateTeams' => 'Google\\AdsApi\\AdManager\\v201808\\ActivateTeams',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201808\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201808\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201808\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201808\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201808\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201808\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201808\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201808\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201808\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201808\\DateValue',
      'DeactivateTeams' => 'Google\\AdsApi\\AdManager\\v201808\\DeactivateTeams',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201808\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201808\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201808\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201808\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201808\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201808\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201808\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201808\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201808\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201808\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201808\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201808\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201808\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201808\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201808\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201808\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201808\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201808\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201808\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201808\\String_ValueMapEntry',
      'TeamAction' => 'Google\\AdsApi\\AdManager\\v201808\\TeamAction',
      'Team' => 'Google\\AdsApi\\AdManager\\v201808\\Team',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201808\\TeamError',
      'TeamPage' => 'Google\\AdsApi\\AdManager\\v201808\\TeamPage',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201808\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201808\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201808\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201808\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201808\\Value',
      'createTeamsResponse' => 'Google\\AdsApi\\AdManager\\v201808\\createTeamsResponse',
      'getTeamsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201808\\getTeamsByStatementResponse',
      'performTeamActionResponse' => 'Google\\AdsApi\\AdManager\\v201808\\performTeamActionResponse',
      'updateTeamsResponse' => 'Google\\AdsApi\\AdManager\\v201808\\updateTeamsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201808/TeamService?wsdl')
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
     * The following fields are required:
     * <ul>
     * <li>{@link Team#name}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201808\Team[] $teams
     * @return \Google\AdsApi\AdManager\v201808\Team[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function createTeams(array $teams)
    {
      return $this->__soapCall('createTeams', array(array('teams' => $teams)))->getRval();
    }

    /**
     * Gets a {@code TeamPage} of {@code Team} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
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
     * a set of teams.
     *
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\TeamPage
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function getTeamsByStatement(\Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('getTeamsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Team} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201808\TeamAction $teamAction
     * @param \Google\AdsApi\AdManager\v201808\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201808\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function performTeamAction(\Google\AdsApi\AdManager\v201808\TeamAction $teamAction, \Google\AdsApi\AdManager\v201808\Statement $filterStatement)
    {
      return $this->__soapCall('performTeamAction', array(array('teamAction' => $teamAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Team} objects.
     *
     * @param \Google\AdsApi\AdManager\v201808\Team[] $teams
     * @return \Google\AdsApi\AdManager\v201808\Team[]
     * @throws \Google\AdsApi\AdManager\v201808\ApiException
     */
    public function updateTeams(array $teams)
    {
      return $this->__soapCall('updateTeams', array(array('teams' => $teams)))->getRval();
    }

}
