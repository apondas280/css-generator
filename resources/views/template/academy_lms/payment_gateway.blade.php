<hr>

<div class="ol-card" data-select2-id="select2-data-1127-khox">
    <div class="ol-card-body p-4" data-select2-id="select2-data-1126-3ls7">
        <div class="d-flex gap-3 flex-wrap flex-md-nowrap" data-select2-id="select2-data-1125-pn7c">
            <div class="ol-sidebar-tab">
                <div class="nav flex-column nav-pills" id="myv-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link" id="v-pills-currency-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-currency" type="button" role="tab"
                        aria-controls="v-pills-currency" aria-selected="false" tabindex="-1">
                        <span>Currency Settings</span>
                    </button>

                    <hr>


                    <button class="nav-link active" id="v-pills-paypal-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-paypal" type="button" role="tab" aria-controls="v-pills-paypal"
                        aria-selected="true">
                        <span>Paypal</span>
                    </button>

                    <button class="nav-link" id="v-pills-stripe-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-stripe" type="button" role="tab" aria-controls="v-pills-stripe"
                        aria-selected="false" tabindex="-1">
                        <span>Stripe</span>
                    </button>

                    <button class="nav-link" id="v-pills-razorpay-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-razorpay" type="button" role="tab"
                        aria-controls="v-pills-razorpay" aria-selected="false" tabindex="-1">
                        <span>Razorpay</span>
                    </button>

                    <button class="nav-link" id="v-pills-flutterwave-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-flutterwave" type="button" role="tab"
                        aria-controls="v-pills-flutterwave" aria-selected="false" tabindex="-1">
                        <span>Flutterwave</span>
                    </button>

                    <button class="nav-link" id="v-pills-paytm-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-paytm" type="button" role="tab" aria-controls="v-pills-paytm"
                        aria-selected="false" tabindex="-1">
                        <span>Paytm</span>
                    </button>
                </div>
            </div>
            <div class="tab-content w-100" id="myv-pills-tabContent"
                data-select2-id="select2-data-myv-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-currency" role="tabpanel" aria-labelledby="v-pills-currency-tab"
                    tabindex="0">
                    <h3 class="title text-14px mb-3">Currency Settings</h3>

                    <div class="alert alert-primary ol-alert-primary mb-3" role="alert">
                        <p class="sub-title2 fs-16px">
                            <span class="title2">Heads up !!</span>
                            Ensure that the system currency and all active payment gateway
                            currencies are same
                        </p>
                    </div>

                    <div class="ol-card-body">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW"
                                autocomplete="off">
                            <input type="hidden" name="top_part" value="top_part">


                            <div class="fpb-7 mb-3">
                                <label class="form-label ol-form-label">Select currency</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="">Select currency</option>

                                    <option value="USD" selected="">USD</option>
                                    <option value="ALL">ALL</option>
                                    <option value="DZD">DZD</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="form-label ol-form-label">Currency
                                    position</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible"
                                    id="currency_position" name="currency_position">
                                    <option value="left">
                                        Left</option>
                                    <option value="right">
                                        Right</option>
                                    <option value="left-space">
                                        Left with a space</option>
                                    <option value="right-space" selected=""
                                        data-select2-id="select2-data-226-hzmo">
                                        Right with a space</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <button type="submit" class="btn ol-btn-primary mt-3">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="v-pills-paypal" role="tabpanel"
                    aria-labelledby="v-pills-paypal-tab" tabindex="0"
                    data-select2-id="select2-data-v-pills-paypal">
                    <h3 class="title text-14px mb-3">Paypal Settings</h3>
                    <div class="ol-card-body" data-select2-id="select2-data-1124-mtaj">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data"
                            data-select2-id="select2-data-1123-j5j7">
                            <input type="hidden" name="_token" value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW"
                                autocomplete="off">
                            <input type="hidden" name="identifier" value="paypal">

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Active</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">No</option>
                                    <option value="1" selected="">Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Want to keep test
                                    mode
                                    enabled?</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Select
                                    currency</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="">Select currency</option>
                                    <option value="YER">YER
                                    </option>
                                    <option value="ZMK">ZMK
                                    </option>

                                </select>
                            </div>



                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">sandbox client
                                    id</label>
                                <input type="text" name="sandbox_client_id" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">sandbox secret
                                    key</label>
                                <input type="text" name="sandbox_secret_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">production client
                                    id</label>
                                <input type="text" name="production_client_id"
                                    class="form-control ol-form-control" value="1234" required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">production secret
                                    key</label>
                                <input type="text" name="production_secret_key"
                                    class="form-control ol-form-control" value="12345" required="">
                            </div>

                            <div class="row">
                                <div class="fpb-7 mb-3 col-md-6">
                                    <button class="btn btn-block ol-btn-primary" type="submit">Update
                                        Paypal setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-stripe" role="tabpanel" aria-labelledby="v-pills-stripe-tab"
                    tabindex="0">
                    <h3 class="title text-14px mb-3">Stripe Settings</h3>
                    <div class="ol-card-body">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" autocomplete="off">
                            <input type="hidden" name="identifier" value="stripe">

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Active</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">No</option>
                                    <option value="1" selected="" data-select2-id="select2-data-405-m1p1">Yes
                                    </option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Want to keep test
                                    mode
                                    enabled?</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">No</option>
                                    <option value="1" selected="">Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Select
                                    currency</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="">Select currency</option>

                                    <option value="ZMK">ZMK
                                    </option>

                                </select>
                            </div>



                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">public key</label>
                                <input type="text" name="public_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">secret key</label>
                                <input type="text" name="secret_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">public live
                                    key</label>
                                <input type="text" name="public_live_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">secret live
                                    key</label>
                                <input type="text" name="secret_live_key" class="form-control ol-form-control"
                                    required="">
                            </div>

                            <div class="row">
                                <div class="fpb-7 mb-3 col-md-6">
                                    <button class="btn btn-block ol-btn-primary" type="submit">Update
                                        Stripe setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-razorpay" role="tabpanel"
                    aria-labelledby="v-pills-razorpay-tab" tabindex="0">
                    <h3 class="title text-14px mb-3">Razorpay Settings</h3>
                    <div class="ol-card-body">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" autocomplete="off">
                            <input type="hidden" name="identifier" value="razorpay">

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Active</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">
                                        No</option>
                                    <option value="1" selected="" data-select2-id="select2-data-580-35p5">
                                        Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Want to keep test
                                    mode
                                    enabled?</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">
                                        No</option>
                                    <option value="1" selected="" data-select2-id="select2-data-584-ou18">
                                        Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Select
                                    currency</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="">Select currency</option>

                                    <option value="USD" selected="" data-select2-id="select2-data-751-5jlm">USD
                                    </option>
                                    <option value="ALL">ALL
                                    </option>
                                    <option value="ZMK">ZMK
                                    </option>
                                </select>
                            </div>



                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">public key</label>
                                <input type="text" name="public_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">secret key</label>
                                <input type="text" name="secret_key" class="form-control ol-form-control"
                                    required="">
                            </div>

                            <div class="row">
                                <div class="fpb-7 mb-3 col-md-6">
                                    <button class="btn btn-block ol-btn-primary" type="submit">Update
                                        Razorpay setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-flutterwave" role="tabpanel"
                    aria-labelledby="v-pills-flutterwave-tab" tabindex="0">
                    <h3 class="title text-14px mb-3">Flutterwave Settings</h3>
                    <div class="ol-card-body">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" autocomplete="off">
                            <input type="hidden" name="identifier" value="flutterwave">

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Active</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">
                                        No</option>
                                    <option value="1" selected="" data-select2-id="select2-data-755-4bm4">
                                        Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Want to keep test
                                    mode
                                    enabled?</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="0">
                                        No</option>
                                    <option value="1" selected="" data-select2-id="select2-data-759-a3ss">
                                        Yes</option>
                                </select>
                            </div>

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">Select
                                    currency</label>
                                <select class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                    <option value="">Select currency</option>

                                    <option value="YER">YER
                                    </option>
                                    <option value="ZMK">ZMK
                                    </option>

                                </select>
                            </div>



                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">public key</label>
                                <input type="text" name="public_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">secret key</label>
                                <input type="text" name="secret_key" class="form-control ol-form-control"
                                    required="">
                            </div>

                            <div class="row">
                                <div class="fpb-7 mb-3 col-md-6">
                                    <button class="btn btn-block ol-btn-primary" type="submit">Update
                                        Flutterwave setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-paytm" role="tabpanel" aria-labelledby="v-pills-paytm-tab"
                    tabindex="0">
                    <h3 class="title text-14px mb-3">Paytm Settings</h3>
                    <div class="ol-card-body">
                        <form action="#/admin/payment_settings/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" autocomplete="off">
                            <input type="hidden" name="identifier" value="paytm">

                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">public key</label>
                                <input type="text" name="public_key" class="form-control ol-form-control"
                                    required="">
                            </div>
                            <div class="fpb-7 mb-3">
                                <label class="ol-form-label mb-2 text-capitalize">secret key</label>
                                <input type="text" name="secret_key" class="form-control ol-form-control"
                                    value="#iFa7&amp;W_C50VL@aT" required="">
                            </div>

                            <div class="row">
                                <div class="fpb-7 mb-3 col-md-6">
                                    <button class="btn btn-block ol-btn-primary" type="submit">Update
                                        Paytm setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
