<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202302\\ObjectValue',
      'ActivateUsers' => 'Google\\AdsApi\\AdManager\\v202302\\ActivateUsers',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202302\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202302\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202302\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202302\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202302\\CommonError',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202302\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202302\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202302\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateValue',
      'DeactivateUsers' => 'Google\\AdsApi\\AdManager\\v202302\\DeactivateUsers',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202302\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202302\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202302\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v202302\\InvalidEmailError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202302\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202302\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202302\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202302\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202302\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredError',
      'Role' => 'Google\\AdsApi\\AdManager\\v202302\\Role',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202302\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202302\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202302\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202302\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202302\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202302\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202302\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202302\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202302\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202302\\TimeZoneError',
      'TokenError' => 'Google\\AdsApi\\AdManager\\v202302\\TokenError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202302\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202302\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202302\\UpdateResult',
      'UserAction' => 'Google\\AdsApi\\AdManager\\v202302\\UserAction',
      'User' => 'Google\\AdsApi\\AdManager\\v202302\\User',
      'UserPage' => 'Google\\AdsApi\\AdManager\\v202302\\UserPage',
      'UserRecord' => 'Google\\AdsApi\\AdManager\\v202302\\UserRecord',
      'Value' => 'Google\\AdsApi\\AdManager\\v202302\\Value',
      'createUsersResponse' => 'Google\\AdsApi\\AdManager\\v202302\\createUsersResponse',
      'getAllRolesResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getAllRolesResponse',
      'getCurrentUserResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getCurrentUserResponse',
      'getUsersByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getUsersByStatementResponse',
      'performUserActionResponse' => 'Google\\AdsApi\\AdManager\\v202302\\performUserActionResponse',
      'updateUsersResponse' => 'Google\\AdsApi\\AdManager\\v202302\\updateUsersResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202302/UserService?wsdl')
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
     * Creates new {@link User} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\User[] $users
     * @return \Google\AdsApi\AdManager\v202302\User[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function createUsers(array $users)
    {
      return $this->__soapCall('createUsers', array(array('users' => $users)))->getRval();
    }

    /**
     * Returns the {@link Role} objects that are defined for the users of the network.
     *
     * @return \Google\AdsApi\AdManager\v202302\Role[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getAllRoles()
    {
      return $this->__soapCall('getAllRoles', array(array()))->getRval();
    }

    /**
     * Returns the current {@link User}.
     *
     * @return \Google\AdsApi\AdManager\v202302\User
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getCurrentUser()
    {
      return $this->__soapCall('getCurrentUser', array(array()))->getRval();
    }

    /**
     * Gets a {@link UserPage} of {@link User} objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code email}</td>
     * <td>{@link User#email}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link User#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link User#name}</td>
     * </tr>
     * <tr>
     * <td>{@code roleId}</td>
     * <td>{@link User#roleId}
     * </tr>
     * <tr>
     * <td>{@code rolename}</td>
     * <td>{@link User#roleName}
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@code ACTIVE} if {@link User#isActive} is true; {@code INACTIVE}
     * otherwise</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\UserPage
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getUsersByStatement(\Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('getUsersByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link User} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202302\UserAction $userAction
     * @param \Google\AdsApi\AdManager\v202302\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202302\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function performUserAction(\Google\AdsApi\AdManager\v202302\UserAction $userAction, \Google\AdsApi\AdManager\v202302\Statement $filterStatement)
    {
      return $this->__soapCall('performUserAction', array(array('userAction' => $userAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link User} objects.
     *
     * @param \Google\AdsApi\AdManager\v202302\User[] $users
     * @return \Google\AdsApi\AdManager\v202302\User[]
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function updateUsers(array $users)
    {
      return $this->__soapCall('updateUsers', array(array('users' => $users)))->getRval();
    }

}
