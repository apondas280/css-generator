<div class="ol-card">
    <div class="ol-card-body p-20px mb-3">


        <div class="row mt-4">
            <div class="col-md-12">
                <ul class="nav nav-tabs eNav-Tabs-custom eTab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  active " id="cHome-tab" data-bs-toggle="tab" data-bs-target="#cHome"
                            type="button" role="tab" aria-controls="cHome" aria-selected="true">
                            Pending payouts
                            <span></span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="cProfile-tab" data-bs-toggle="tab" data-bs-target="#cProfile"
                            type="button" role="tab" aria-controls="cProfile" aria-selected="false" tabindex="-1">
                            Completed payouts
                            <span></span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content eNav-Tabs-content" id="myTabContent">
                    <div class="tab-pane fade pt-4  show active " id="cHome" role="tabpanel"
                        aria-labelledby="cHome-tab">


                        <div
                            class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                            <p class="admin-tInfo">
                                Showing 1 of 1 data
                            </p>
                        </div>
                        <div class="table-responsive purchase_list mt-4" id="purchase_list">
                            <table class="table eTable eTable-2 print-table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Payout amount</th>
                                        <th scope="col"> Payout date</th>
                                        <th scope="col" class="print-d-none">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <p class="row-number">1</p>
                                        </th>
                                        <td>
                                            <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                <div class="dAdmin_profile_img">
                                                    <img class="img-fluid rounded-circle image-45" width="45"
                                                        height="45" src="assets/images/img/message-profile-3.svg">
                                                </div>
                                                <div class="ms-1">
                                                    <h4 class="title fs-14px">James Mariyati</h4>
                                                    <p class="sub-title2 text-12px">
                                                        instructor@example.com</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dAdmin_info_name min-w-250px mr-50">
                                                <p>100 $
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dAdmin_info_name min-w-250px">
                                                <p>Sat, 01 Jun 2024
                                                </p>
                                            </div>
                                        </td>

                                        <td class="print-d-none">
                                            <form action="#/admin/instructor_payment" method="post">
                                                <input type="hidden" name="_token"
                                                    value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                                <input type="hidden" name="user_id" value="2">
                                                <input type="hidden" name="amount" value="100">
                                                <input type="hidden" name="payout_id" value="3">
                                                <button type="submit" class="btn ol-btn-outline-secondary">
                                                    <i class="fi-rr-credit-card"></i>
                                                    Pay</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>

                                        <th></th>
                                        <th></th>
                                        <th>Total :
                                            100 $
                                        </th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Data info and Pagination -->
                        <div
                            class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                            <p class="admin-tInfo">
                                Showing 1 of 1 data
                            </p>

                        </div>
                    </div>
                    <div class="tab-pane fade pt-4" id="cProfile" role="tabpanel" aria-labelledby="cProfile-tab">

                        <div class="card-centered-section">
                            <div class="card-middle-banner">
                                <img src="#/public/assets/backend/images/img/no-file-search.svg" alt="">
                            </div>
                            <p class="title2 fs-20px text-center">No data found</p>
                        </div>
                        <!-- Data info and Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
