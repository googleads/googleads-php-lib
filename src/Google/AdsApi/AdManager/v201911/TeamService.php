<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TeamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ActivateTeams' => 'Google\\AdsApi\\AdManager\\v201911\\ActivateTeams',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DeactivateTeams' => 'Google\\AdsApi\\AdManager\\v201911\\DeactivateTeams',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'TeamAction' => 'Google\\AdsApi\\AdManager\\v201911\\TeamAction',
      'Team' => 'Google\\AdsApi\\AdManager\\v201911\\Team',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201911\\TeamError',
      'TeamPage' => 'Google\\AdsApi\\AdManager\\v201911\\TeamPage',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201911\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'createTeamsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createTeamsResponse',
      'getTeamsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getTeamsByStatementResponse',
      'performTeamActionResponse' => 'Google\\AdsApi\\AdManager\\v201911\\performTeamActionResponse',
      'updateTeamsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateTeamsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/TeamService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\Team[] $teams
     * @return \Google\AdsApi\AdManager\v201911\Team[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\TeamPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getTeamsByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getTeamsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Team} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201911\TeamAction $teamAction
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function performTeamAction(\Google\AdsApi\AdManager\v201911\TeamAction $teamAction, \Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('performTeamAction', array(array('teamAction' => $teamAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Team} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\Team[] $teams
     * @return \Google\AdsApi\AdManager\v201911\Team[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateTeams(array $teams)
    {
      return $this->__soapCall('updateTeams', array(array('teams' => $teams)))->getRval();
    }

}
