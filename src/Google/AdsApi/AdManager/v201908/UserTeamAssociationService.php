<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserTeamAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DeleteUserTeamAssociations' => 'Google\\AdsApi\\AdManager\\v201908\\DeleteUserTeamAssociations',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201908\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateResult',
      'UserRecordTeamAssociation' => 'Google\\AdsApi\\AdManager\\v201908\\UserRecordTeamAssociation',
      'UserTeamAssociationAction' => 'Google\\AdsApi\\AdManager\\v201908\\UserTeamAssociationAction',
      'UserTeamAssociation' => 'Google\\AdsApi\\AdManager\\v201908\\UserTeamAssociation',
      'UserTeamAssociationPage' => 'Google\\AdsApi\\AdManager\\v201908\\UserTeamAssociationPage',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'createUserTeamAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createUserTeamAssociationsResponse',
      'getUserTeamAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getUserTeamAssociationsByStatementResponse',
      'performUserTeamAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performUserTeamAssociationActionResponse',
      'updateUserTeamAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateUserTeamAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/UserTeamAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\AdManager\v201908\UserTeamAssociation[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function createUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('createUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->getRval();
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\UserTeamAssociationPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getUserTeamAssociationsByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('getUserTeamAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link UserTeamAssociation} objects that match the
     * given {@link Statement#query}.
     *
     * a set of user team associations
     *
     * @param \Google\AdsApi\AdManager\v201908\UserTeamAssociationAction $userTeamAssociationAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $statement
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performUserTeamAssociationAction(\Google\AdsApi\AdManager\v201908\UserTeamAssociationAction $userTeamAssociationAction, \Google\AdsApi\AdManager\v201908\Statement $statement)
    {
      return $this->__soapCall('performUserTeamAssociationAction', array(array('userTeamAssociationAction' => $userTeamAssociationAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link UserTeamAssociation} objects.
     *
     * @param \Google\AdsApi\AdManager\v201908\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\AdManager\v201908\UserTeamAssociation[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('updateUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->getRval();
    }

}
