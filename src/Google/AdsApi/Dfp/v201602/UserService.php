<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActivateUsers' => 'Google\\AdsApi\\Dfp\\v201602\\ActivateUsers',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DeactivateUsers' => 'Google\\AdsApi\\Dfp\\v201602\\DeactivateUsers',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\DropDownCustomFieldValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201602\\InvalidEmailError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'Role' => 'Google\\AdsApi\\Dfp\\v201602\\Role',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201602\\TimeZoneError',
      'TokenError' => 'Google\\AdsApi\\Dfp\\v201602\\TokenError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'UserAction' => 'Google\\AdsApi\\Dfp\\v201602\\UserAction',
      'User' => 'Google\\AdsApi\\Dfp\\v201602\\User',
      'UserPage' => 'Google\\AdsApi\\Dfp\\v201602\\UserPage',
      'UserRecord' => 'Google\\AdsApi\\Dfp\\v201602\\UserRecord',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/UserService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\User[] $users
     * @return \Google\AdsApi\Dfp\v201602\User[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function createUsers(array $users)
    {
      return $this->__soapCall('createUsers', array(array('users' => $users)))->rval;
    }

    /**
     * Returns the {@link Role} objects that are defined for the users of the
     * network.
     *
     * @return \Google\AdsApi\Dfp\v201602\Role[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getAllRoles()
    {
      return $this->__soapCall('getAllRoles', array(array()))->rval;
    }

    /**
     * Returns the current {@link User}.
     *
     * @return \Google\AdsApi\Dfp\v201602\User
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getCurrentUser()
    {
      return $this->__soapCall('getCurrentUser', array(array()))->rval;
    }

    /**
     * Gets a {@link UserPage} of {@link User} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * a set of users
     *
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UserPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getUsersByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getUsersByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link User} objects that match the given
     * {@link Statement#query}.
     *
     * a set of users
     *
     * @param \Google\AdsApi\Dfp\v201602\UserAction $userAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performUserAction(\Google\AdsApi\Dfp\v201602\UserAction $userAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performUserAction', array(array('userAction' => $userAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link User} objects.
     *
     * @param \Google\AdsApi\Dfp\v201602\User[] $users
     * @return \Google\AdsApi\Dfp\v201602\User[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateUsers(array $users)
    {
      return $this->__soapCall('updateUsers', array(array('users' => $users)))->rval;
    }

}
