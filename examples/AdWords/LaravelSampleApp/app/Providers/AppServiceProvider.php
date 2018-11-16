<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace App\Providers;

use Illuminate\Paginator;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind some classes related to the Google Ads API client library for
        // PHP.
        $this->app->bind(
            'Google\AdsApi\AdWords\AdWordsServices',
            function () {
                return new AdWordsServices();
            }
        );
        $this->app->bind(
            'Google\Auth\FetchAuthTokenInterface',
            function () {
                // Generate a refreshable OAuth2 credential for authentication
                // from the config file.
                return (new OAuth2TokenBuilder())->fromFile(
                    config('app.adsapi_php_path')
                )->build();
            }
        );
        $this->app->bind(
            'Google\AdsApi\AdWords\AdWordsSessionBuilder',
            function () {
                return new AdWordsSessionBuilder();
            }
        );

    }
}

