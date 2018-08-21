<!--
  Copyright 2018 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
@extends('layouts.default')
@section('content')
    @include('includes.results-back')
    <div class="container-fluid mt-2">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            @foreach ($selectedFields as $field)
                <th scope="col">{{ $field }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach ($campaigns as $index => $campaign)
            <tr>
                <th scope="row">{{ $index + 1 + ($campaigns->currentPage() - 1) * $campaigns->perPage() }}</th>
                @foreach ($selectedFields as $field)
                    <?php $methodName = 'get' . $field ?>
                    @if (empty($campaign->$methodName()))
                        <td><em>N/A</em></td>
                    @else
                        <td>{{ $campaign->$methodName() }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    {{ $campaigns->links(new \Illuminate\Pagination\BootstrapFourPresenter($campaigns)) }}
    @include('includes.results-back')
@stop
