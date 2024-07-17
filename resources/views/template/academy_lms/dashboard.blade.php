<!-- Dashboard Start -->
<div class="ol-card radius-8px">
    <div class="ol-card-body my-3 py-4 px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                Dashboard
            </h4>
        </div>
    </div>
</div>


<div class="row g-2 g-sm-3 my-3 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="title card-title-hover fs-18px my-2">9</p>
                <p class="sub-title fs-14px">Number of Courses</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="title card-title-hover fs-18px my-2">122</p>
                <p class="sub-title fs-14px">Number of Lessons</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="title card-title-hover fs-18px my-2">19</p>
                <p class="sub-title fs-14px">Number of Enrollment</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="title card-title-hover fs-18px my-2">4</p>
                <p class="sub-title fs-14px">Number of Students</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="title card-title-hover fs-18px my-2">4</p>
                <p class="sub-title fs-14px">Number of Instructor</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="ol-card p-3">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title fs-14px">Admin Revenue This Year</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn-link" href="#admin_revenue" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Admin Revenue"><i class="fi-rr-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="ol-card-body">
                <canvas id="myChart" class="mw-100 w-100" height="320px"></canvas>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<div class="row my-3">
    <div class="col-md-5">
        <div class="ol-card">
            <div class="ol-card-body p-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title fs-14px">Course Status</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a class="btn-link" href="#courses" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Explore Courses"><i class="fi-rr-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="d-flex align-items-center g-30px flex-wrap flex-xl-nowrap justify-content-center">
                    <div class="pie-chart-sm">
                        <canvas id="pie2"></canvas>
                    </div>
                    <div class="pie-chart-sm-details">
                        <ul class="color-info-list">
                            <li>
                                <span class="info-list-color bg-active"></span>
                                <span class="title2 fs-14px">Active</span>
                            </li>
                            <li>
                                <span class="info-list-color bg-upcoming"></span>
                                <span class="title2 fs-14px">Upcoming</span>
                            </li>
                            <li>
                                <span class="info-list-color bg-pending"></span>
                                <span class="title2 fs-14px">Pending</span>
                            </li>
                            <li>
                                <span class="info-list-color bg-private"></span>
                                <span class="title2 fs-14px">Private</span>
                            </li>
                            <li>
                                <span class="info-list-color bg-draft"></span>
                                <span class="title2 fs-14px">Draft</span>
                            </li>
                            <li>
                                <span class="info-list-color bg-inactive"></span>
                                <span class="title2 fs-14px">Inactive</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="ol-card" id='unpaid-instructor-revenue'>
            <div class="ol-card-body p-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title text-14px mb-3">Pending Requested withdrawal</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a class="btn-link" href="#instructor_payout" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Instructor Payout"><i
                                class="fi-rr-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <p class="title fs-14px">Name: James Mariyati</p>
                                    <small>Email: <span class=" font-13">instructor@example.com</span></small>
                                </td>
                                <td>
                                    <p class="title fs-14px">100 $</p>
                                    <small><span class=" font-13">Requested withdrawal
                                            amount</span></small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
