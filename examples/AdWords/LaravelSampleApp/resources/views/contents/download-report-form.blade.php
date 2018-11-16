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
<div class="card mt-3">
    <div class="card-header">
        Download a report for the specified client customer ID using <a
                href="https://developers.google.com/adwords/api/docs/guides/awql" target="_blank">AWQL</a>
    </div>
    <div class="card-body">
        <div class="alert alert-info" role="alert">
            All reports are downloaded <em>without</em>
            <a href="https://developers.google.com/adwords/api/docs/guides/zeroimpression-structure-reports">zero-impression rows</a>
            for the sake of brevity.
        </div>
        <form action="{{ url('download-report') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="clientCustomerId" class="col-sm-2 col-form-label">Client customer ID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="clientCustomerId" name="clientCustomerId"
                           aria-describedby="clientCustomerIdHelp"
                           placeholder="Enter your client customer ID" required>
                    <small id="clientCustomerIdHelp" class="form-text text-muted">This is a client customer ID that
                        will be used to download reports.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="reportType" class="col-form-label">Report type
                        <small id="reportTypeHelp" class="form-text text-muted">See all report types
                            <a href="https://developers.google.com/adwords/api/docs/appendix/reports/all-reports" target="_blank">here</a>.
                        </small>
                    </label>
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="reportType" name="reportType">
                        <option selected>CAMPAIGN_PERFORMANCE_REPORT</option>
                        <option>ADGROUP_PERFORMANCE_REPORT</option>
                        <option>AD_PERFORMANCE_REPORT</option>
                        <option>ACCOUNT_PERFORMANCE_REPORT</option>
                    </select>
                    <small id="reportTypeExplanation" class="form-text text-muted">Some
                        <a href="https://developers.google.com/adwords/api/docs/appendix/reports#field-attributes" target="_blank">attribute fields</a>
                        specific to the specified report type will also be selected. For example, <code>AdId</code> and
                        <code>AdGroupId</code> will be selected when <code>AD_PERFORMANCE_REPORT</code> is specified.
                    </small>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-sm-2 col-form-label pt-0">
                        <a href="https://developers.google.com/adwords/api/docs/appendix/reports#field-attributes"
                           target="_blank">Metric fields</a> to be retrieved:
                        <small id="reportTypeHelp" class="form-text text-muted">See all report types
                            <a href="https://developers.google.com/adwords/api/docs/appendix/reports/all-reports">here</a>.
                        </small>
                    </legend>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="impressions" name="impressions"
                                   value="Impressions"
                                   checked>
                            <label class="form-check-label" for="impressions"><code>Impressions</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="clicks" name="clicks" value="Clicks"
                                   checked>
                            <label class="form-check-label" for="clicks"><code>Clicks</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="ctr"
                                   name="ctr"
                                   value="Ctr"
                                   checked>
                            <label class="form-check-label" for="ctr"><code>Ctr</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="cost" name="cost"
                                   value="Cost"
                                   checked>
                            <label class="form-check-label" for="cost"><code>Cost</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="conversions" name="conversions"
                                   value="Conversions"
                                   checked>
                            <label class="form-check-label" for="conversions"><code>Conversions</code></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="crossDeviceConversions"
                                   name="crossDeviceConversions"
                                   value="CrossDeviceConversions"
                                   checked>
                            <label class="form-check-label" for="crossDeviceConversions">
                                <code>CrossDeviceConversions</code></label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="reportRange" class="col-sm-2 col-form-label">Report download date range</label>
                <div class="col-sm-2">
                    <select class="form-control" id="reportRange" name="reportRange">
                        <option selected>YESTERDAY</option>
                        <option>LAST_7_DAYS</option>
                        <option>LAST_WEEK</option>
                        <option>LAST_MONTH</option>
                    </select>
                </div>
            </div>
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
                    <button type="submit" class="btn btn-primary">Download Report</button>
                </div>
            </div>
        </form>
    </div>
</div>

