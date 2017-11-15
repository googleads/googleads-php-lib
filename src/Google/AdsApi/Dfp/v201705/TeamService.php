<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TeamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ActivateTeams' => 'Google\\AdsApi\\Dfp\\v201705\\ActivateTeams',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DeactivateTeams' => 'Google\\AdsApi\\Dfp\\v201705\\DeactivateTeams',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'TeamAction' => 'Google\\AdsApi\\Dfp\\v201705\\TeamAction',
      'Team' => 'Google\\AdsApi\\Dfp\\v201705\\Team',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201705\\TeamError',
      'TeamPage' => 'Google\\AdsApi\\Dfp\\v201705\\TeamPage',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'createTeamsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createTeamsResponse',
      'getTeamsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getTeamsByStatementResponse',
      'performTeamActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performTeamActionResponse',
      'updateTeamsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateTeamsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/TeamService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Team[] $teams
     * @return \Google\AdsApi\Dfp\v201705\Team[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\TeamPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getTeamsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getTeamsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Team} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\Dfp\v201705\TeamAction $teamAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performTeamAction(\Google\AdsApi\Dfp\v201705\TeamAction $teamAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performTeamAction', array(array('teamAction' => $teamAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Team} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\Team[] $teams
     * @return \Google\AdsApi\Dfp\v201705\Team[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateTeams(array $teams)
    {
      return $this->__soapCall('updateTeams', array(array('teams' => $teams)))->getRval();
    }

}
