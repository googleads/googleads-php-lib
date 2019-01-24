<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdWords\Testing\BatchJobs\v201802;

/**
 * A fake campaign class for testing purpose.
 */
class FakeCampaign
{

    protected $id;
    protected $name;
    protected $isServing;
    protected $OperandType;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function getIsServing()
    {
        return $this->isServing;
    }

    /**
     * @param bool $isServing
     */
    public function setIsServing($isServing)
    {
        $this->isServing = $isServing;
    }

    /**
     * @return string
     */
    public function getOperandType()
    {
        return $this->OperandType;
    }

    /**
     * @param string $OperandType
     */
    public function setOperandType($OperandType)
    {
        $this->OperandType = $OperandType;
    }
}
