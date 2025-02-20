<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserTeamAssociationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'DeleteUserTeamAssociations' => 'Google\\AdsApi\\AdManager\\v202502\\DeleteUserTeamAssociations',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202502\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202502\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202502\\UpdateResult',
      'UserRecordTeamAssociation' => 'Google\\AdsApi\\AdManager\\v202502\\UserRecordTeamAssociation',
      'UserTeamAssociationAction' => 'Google\\AdsApi\\AdManager\\v202502\\UserTeamAssociationAction',
      'UserTeamAssociation' => 'Google\\AdsApi\\AdManager\\v202502\\UserTeamAssociation',
      'UserTeamAssociationPage' => 'Google\\AdsApi\\AdManager\\v202502\\UserTeamAssociationPage',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'createUserTeamAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\createUserTeamAssociationsResponse',
      'getUserTeamAssociationsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getUserTeamAssociationsByStatementResponse',
      'performUserTeamAssociationActionResponse' => 'Google\\AdsApi\\AdManager\\v202502\\performUserTeamAssociationActionResponse',
      'updateUserTeamAssociationsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\updateUserTeamAssociationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/UserTeamAssociationService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202502\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\AdManager\v202502\UserTeamAssociation[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function createUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('createUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->getRval();
    }

    /**
     * Gets a {@link UserTeamAssociationPage} of {@link UserTeamAssociation} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202502\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202502\UserTeamAssociationPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getUserTeamAssociationsByStatement(\Google\AdsApi\AdManager\v202502\Statement $filterStatement)
    {
      return $this->__soapCall('getUserTeamAssociationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link UserTeamAssociation} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202502\UserTeamAssociationAction $userTeamAssociationAction
     * @param \Google\AdsApi\AdManager\v202502\Statement $statement
     * @return \Google\AdsApi\AdManager\v202502\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function performUserTeamAssociationAction(\Google\AdsApi\AdManager\v202502\UserTeamAssociationAction $userTeamAssociationAction, \Google\AdsApi\AdManager\v202502\Statement $statement)
    {
      return $this->__soapCall('performUserTeamAssociationAction', array(array('userTeamAssociationAction' => $userTeamAssociationAction, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link UserTeamAssociation} objects.
     *
     * @param \Google\AdsApi\AdManager\v202502\UserTeamAssociation[] $userTeamAssociations
     * @return \Google\AdsApi\AdManager\v202502\UserTeamAssociation[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function updateUserTeamAssociations(array $userTeamAssociations)
    {
      return $this->__soapCall('updateUserTeamAssociations', array(array('userTeamAssociations' => $userTeamAssociations)))->getRval();
    }

}
