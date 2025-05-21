<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TeamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'ActivateTeams' => 'Google\\AdsApi\\AdManager\\v202505\\ActivateTeams',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DeactivateTeams' => 'Google\\AdsApi\\AdManager\\v202505\\DeactivateTeams',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202505\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202505\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TeamAction' => 'Google\\AdsApi\\AdManager\\v202505\\TeamAction',
      'Team' => 'Google\\AdsApi\\AdManager\\v202505\\Team',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202505\\TeamError',
      'TeamPage' => 'Google\\AdsApi\\AdManager\\v202505\\TeamPage',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202505\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202505\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'createTeamsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createTeamsResponse',
      'getTeamsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getTeamsByStatementResponse',
      'performTeamActionResponse' => 'Google\\AdsApi\\AdManager\\v202505\\performTeamActionResponse',
      'updateTeamsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateTeamsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/TeamService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\Team[] $teams
     * @return \Google\AdsApi\AdManager\v202505\Team[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\TeamPage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getTeamsByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getTeamsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Team} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202505\TeamAction $teamAction
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function performTeamAction(\Google\AdsApi\AdManager\v202505\TeamAction $teamAction, \Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('performTeamAction', array(array('teamAction' => $teamAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Team} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\Team[] $teams
     * @return \Google\AdsApi\AdManager\v202505\Team[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateTeams(array $teams)
    {
      return $this->__soapCall('updateTeams', array(array('teams' => $teams)))->getRval();
    }

}
