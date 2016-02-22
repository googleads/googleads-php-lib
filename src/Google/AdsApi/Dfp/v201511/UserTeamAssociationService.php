<?php

namespace Google\AdsApi\Dfp\v201511;

class UserTeamAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DeleteUserTeamAssociations' => 'Google\\AdsApi\\Dfp\\v201511\\DeleteUserTeamAssociations',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201511\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'UserRecordTeamAssociation' => 'Google\\AdsApi\\Dfp\\v201511\\UserRecordTeamAssociation',
      'UserTeamAssociationAction' => 'Google\\AdsApi\\Dfp\\v201511\\UserTeamAssociationAction',
      'UserTeamAssociation' => 'Google\\AdsApi\\Dfp\\v201511\\UserTeamAssociation',
      'UserTeamAssociationPage' => 'Google\\AdsApi\\Dfp\\v201511\\UserTeamAssociationPage',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/UserTeamAssociationService?wsdl')
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
     * Creates new {@link UserTeamAssociation} objects.
     *
     * @param \Google\AdsApi\Dfp\v201511\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\Dfp\v201511\UserTeamAssociation[]
     */
    public function createUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('createUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->rval;
    }

    /**
     * Gets a {@link UserTeamAssociationPage} of {@link UserTeamAssociation}
     * objects that satisfy the given {@link Statement#query}. The following
     * fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code userId}</td>
     * <td>{@link UserTeamAssociation#userId}</td>
     * </tr>
     * <tr>
     * <td>{@code teamId}</td>
     * <td>{@link UserTeamAssociation#teamId}</td>
     * </tr>
     * </table>
     *
     * a set of user team associations
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UserTeamAssociationPage
     */
    public function getUserTeamAssociationsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getUserTeamAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link UserTeamAssociation} objects that match the
     * given {@link Statement#query}.
     *
     * a set of user team associations
     *
     * @param \Google\AdsApi\Dfp\v201511\UserTeamAssociationAction $userTeamAssociationAction
     * @param \Google\AdsApi\Dfp\v201511\Statement $statement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performUserTeamAssociationAction(\Google\AdsApi\Dfp\v201511\UserTeamAssociationAction $userTeamAssociationAction, \Google\AdsApi\Dfp\v201511\Statement $statement)
    {
      return $this->__soapCall('performUserTeamAssociationAction', array(array('userTeamAssociationAction' => $userTeamAssociationAction, 'statement' => $statement)))->rval;
    }

    /**
     * Updates the specified {@link UserTeamAssociation} objects.
     *
     * @param \Google\AdsApi\Dfp\v201511\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\Dfp\v201511\UserTeamAssociation[]
     */
    public function updateUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('updateUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->rval;
    }

}
