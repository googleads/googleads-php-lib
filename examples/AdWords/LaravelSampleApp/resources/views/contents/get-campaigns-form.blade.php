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
<div class="card">
    <div class="card-header">
        Get all campaigns for the specified client customer ID
    </div>
    <div class="card-body">
        <form action="{{ url('get-campaigns') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="clientCustomerId" class="col-sm-2 col-form-label">Client customer ID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="clientCustomerId" name="clientCustomerId"
                           aria-describedby="clientCustomerIdHelp"
                           placeholder="Enter your client customer ID" required>
                    <small id="clientCustomerIdHelp" class="form-text text-muted">The client customer ID that
                        will be used to get all campaigns, e.g., 1234567890 or 123-456-7890.
                    </small>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-sm-2 col-form-label pt-0">
                        Fields to be retrieved:
                    </legend>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="id" name="id"
                                   value="Id"
                                   checked disabled>
                            <label class="form-check-label" for="id"><code>Id</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="name" name="name"
                                   value="Name"
                                   checked>
                            <label class="form-check-label" for="name"><code>Name</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status" value="Status"
                                   checked>
                            <label class="form-check-label" for="status"><code>Status</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="servingStatus" name="servingStatus"
                                   value="ServingStatus"
                                   checked>
                            <label class="form-check-label" for="servingStatus"><code>ServingStatus</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="advertisingChannelType"
                                   name="advertisingChannelType"
                                   value="AdvertisingChannelType" checked>
                            <label class="form-check-label"
                                   for="advertisingChannelType"><code>AdvertisingChannelType</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="advertisingChannelSubType"
                                   name="advertisingChannelSubType"
                                   value="AdvertisingChannelSubType" checked>
                            <label class="form-check-label" for="advertisingChannelSubType"><code>AdvertisingChannelSubType</code></label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="entriesPerPage" class="col-sm-2 col-form-label">Number of rows per page</label>
                <div class="col-sm-2">
                    <select class="form-control" id="entriesPerPage" name="entriesPerPage">
                        <option selected>20</option>
                        <option>50</option>
                        <option>100</option>
                        <option>200</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Get All Campaigns</button>
                </div>
            </div>
        </form>
    </div>
</div>
