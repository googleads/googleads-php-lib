<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'ManagedCustomerLabel' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerLabel',
      'ManagedCustomerLabelOperation' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerLabelOperation',
      'ManagedCustomerLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerLabelReturnValue',
      'ManagedCustomerServiceError' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerServiceError',
      'PendingInvitationSelector' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\PendingInvitationSelector',
      'AccountLabel' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\AccountLabel',
      'ManagedCustomerLink' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerLink',
      'LinkOperation' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\LinkOperation',
      'MoveOperation' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\MoveOperation',
      'MutateLinkResults' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\MutateLinkResults',
      'MutateManagerResults' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\MutateManagerResults',
      'ManagedCustomer' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomer',
      'ManagedCustomerOperation' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerOperation',
      'ManagedCustomerPage' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerPage',
      'ManagedCustomerReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\ManagedCustomerReturnValue',
      'PendingInvitation' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\PendingInvitation',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\getResponse',
      'getPendingInvitationsResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\getPendingInvitationsResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\mutateLabelResponse',
      'mutateLinkResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\mutateLinkResponse',
      'mutateManagerResponse' => 'Google\\AdsApi\\AdWords\\v201710\\mcm\\mutateManagerResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/mcm/v201710/ManagedCustomerService?wsdl')
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
     * Returns the list of customers that meet the selector criteria.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns the pending invitations for the customer IDs in the selector.
     *
     * @param \Google\AdsApi\AdWords\v201710\mcm\PendingInvitationSelector $selector
     * @return \Google\AdsApi\AdWords\v201710\mcm\PendingInvitation[]
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function getPendingInvitations(\Google\AdsApi\AdWords\v201710\mcm\PendingInvitationSelector $selector)
    {
      return $this->__soapCall('getPendingInvitations', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Modifies or creates new {@link ManagedCustomer}s.
     *
     * <p class="note"><b>Note:</b> See {@link ManagedCustomerOperation} for available operators.</p>
     *
     * <code>operations</code> array.
     *
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds {@linkplain AccountLabel}s to, and removes
     * {@linkplain AccountLabel}s from, {@linkplain ManagedCustomer}s.
     *
     * <p>To add an {@linkplain AccountLabel} to a {@linkplain ManagedCustomer},
     * use {@link Operator#ADD}.
     * To remove an {@linkplain AccountLabel} from a {@linkplain ManagedCustomer},
     * use {@link Operator#REMOVE}.</p>
     * <p>The label must already exist (see {@link AccountLabelService#mutate} for
     * how to create them) and be owned by the authenticated user.</p>
     * <p>The {@linkplain ManagedCustomer} must already exist and be managed by
     * the customer making the request (either directly or indirectly).</p>
     * <p>An AccountLabel may be applied to at most 1000 customers.</p>
     * <p>This method does not support partial failures, and will fail if any
     * operation is invalid.</p>
     *
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Modifies the ManagedCustomer forest. These actions are possible (categorized by
     * Operator + Link Status):
     *
     * <ul>
     * <li>ADD + PENDING:   manager extends invitations</li>
     * <li>SET + CANCELLED: manager rescinds invitations</li>
     * <li>SET + INACTIVE:  manager/client terminates links</li>
     * <li>SET + ACTIVE:    client accepts invitations</li>
     * <li>SET + REFUSED:   client declines invitations</li>
     * </ul>
     *
     * In addition to these, active links can also be marked hidden / unhidden.
     * <ul>
     * <li> An ACTIVE link can be marked hidden with SET + ACTIVE along with setting the
     * isHidden bit to true. </li>
     * <li> An ACTIVE link can be marked unhidden with SET + ACTIVE along with setting the
     * isHidden bit to false. </li>
     * </ul>
     *
     * @param \Google\AdsApi\AdWords\v201710\mcm\LinkOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\mcm\MutateLinkResults
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutateLink(array $operations)
    {
      return $this->__soapCall('mutateLink', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Moves client customers to new managers (moving links). Only the following action is possible:
     *
     * <ul>
     * <li>SET + ACTIVE: manager moves client customers to new managers within the same manager
     * account hierarchy</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdWords\v201710\mcm\MoveOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\mcm\MutateManagerResults
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutateManager(array $operations)
    {
      return $this->__soapCall('mutateManager', array(array('operations' => $operations)))->getRval();
    }

}
