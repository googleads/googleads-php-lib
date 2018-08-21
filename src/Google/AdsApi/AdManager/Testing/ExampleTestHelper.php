<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\AdManager\Testing;

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\Util\v201808\StatementBuilder;
use Google\AdsApi\AdManager\v201808\DeleteUserTeamAssociations;
use Google\AdsApi\AdManager\v201808\UserTeamAssociation;
use Google\AdsApi\AdManager\v201808\UserTeamAssociationService;
use RuntimeException;
use SoapClient;

/**
 * Helper class for Ad Manager examples.
 * Provides functionality to create prerequisite objects for testing.
 */
class ExampleTestHelper
{
    private $services;
    private $session;
    private $userTeamAssociationService;

    /**
     * Creates an example test helper object.
     *
     * @param AdManagerServices $services entry point for accessing the Ad
     *     Manager SOAP services
     * @param AdManagerSession $session a session for using the Ad Manager API
     */
    public function __construct(
        AdManagerServices $services, AdManagerSession $session)
    {
        $this->services = $services;
        $this->session = $session;
    }

    /**
     * Checks if a user-team association already exists.
     *
     * @param mixed $userId the user's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @param mixed $teamId the team's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @return bool true if the user–team association already exists; Otherwise,
     *     return false.
     */
    public function checkExistingUserTeamAssociation($userId, $teamId)
    {
        // Create statement to select all line items.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('userId = :userId AND teamId = :teamId');
        $statementBuilder->limit(1);
        $statementBuilder->withBindVariableValue('userId', $userId);
        $statementBuilder->withBindVariableValue('teamId', $teamId);
        $service = $this->getUserTeamAssociationService();
        $page = $service->getUserTeamAssociationsByStatement(
            $statementBuilder->toStatement()
        );
        return $page->getTotalResultSetSize() > 0;
    }

    /**
     * Creates a new user-team association.
     *
     * @param mixed $userId the user's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @param mixed $teamId the team's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     */
    public function createUserTeamAssociation($userId, $teamId)
    {
        $service = $this->getUserTeamAssociationService();
        $userTeamAssociation = new UserTeamAssociation();
        $userTeamAssociation->setUserId($userId);
        $userTeamAssociation->setTeamId($teamId);
        $service->createUserTeamAssociations([$userTeamAssociation]);
    }

    /**
     * Deletes an existing user-team association.
     *
     * @param mixed $userId the user's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @param mixed $teamId the team's ID either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @throws RuntimeException if no records was deleted on the server
     */
    public function deleteUserTeamAssociation($userId, $teamId)
    {
        $service = $this->getUserTeamAssociationService();
        // Create a statement to get all user team associations for a user.
        $statementBuilder = (new StatementBuilder())
            ->where('WHERE userId = :userId AND teamId = :teamId')
            ->withBindVariableValue('userId', $userId)
            ->withBindVariableValue('teamId', $teamId);

        $result = $service->performUserTeamAssociationAction(
            new DeleteUserTeamAssociations(),
            $statementBuilder->toStatement()
        );

        if (is_null($result) || $result->getNumChanges() < 1) {
            throw new RuntimeException('The requested delete action did not' .
                ' delete any user-team association records');
        }
    }

    /**
     * Gets the SOAP service for managing user-team associations.
     *
     * @return SoapClient the `UserTeamAssociationService` object for managing
     *     user-team associations
     */
    private function getUserTeamAssociationService()
    {
        if (is_null($this->userTeamAssociationService)) {
            $this->userTeamAssociationService = $this->services
                ->get($this->session, UserTeamAssociationService::class);
        }
        return $this->userTeamAssociationService;
    }
}
