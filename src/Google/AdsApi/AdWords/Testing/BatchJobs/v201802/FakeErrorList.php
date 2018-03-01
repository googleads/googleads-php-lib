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
 * A fake error list for testing purpose.
 */
class FakeErrorList
{

    protected $errors;

    /**
     * @return \Google\AdsApi\AdWords\Testing\BatchJobs\v201802\FakeApiError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param \Google\AdsApi\AdWords\Testing\BatchJobs\v201802\FakeApiError[]
     *     $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
}
