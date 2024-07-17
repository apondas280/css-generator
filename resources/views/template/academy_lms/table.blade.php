<!-- Start table -->
<hr>
<h1 class="my-5"><i class="fi-rr-sun"></i> Tables </h1>


<div class="row">
    <div class="col-12">
        <div class="ol-card">
            <div class="ol-card-body p-3 mb-5">
                <div class="row mt-3 mb-4">
                    <div class="col-md-6 d-flex align-items-center gap-3">
                        <div class="custom-dropdown ms-2">
                            <button class="dropdown-header btn ol-btn-light">
                                Export
                                <i class="fi-rr-file-export ms-2"></i>
                            </button>
                            <ul class="dropdown-list">
                                <li>
                                    <a class="dropdown-item export-btn" href="#"
                                        onclick="downloadPDF('.print-table', 'course-list')"><i
                                            class="fi-rr-file-pdf"></i> PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item export-btn" href="#" onclick="window.print();"><i
                                            class="fi-rr-print"></i>
                                        Print</a>
                                </li>
                            </ul>
                        </div>

                        <div class="custom-dropdown dropdown-filter   ">
                            <button class="dropdown-header btn ol-btn-light">
                                <i class="fi-rr-filter me-2"></i>
                                Filter

                            </button>
                            <ul class="dropdown-list w-250px">
                                <li>
                                    <form id="filter-dropdown" action="#courses" method="get">
                                        <div class="filter-option d-flex flex-column gap-3">
                                            <div>
                                                <label for="eDataList" class="form-label ol-form-label">Category</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible"
                                                    name="category">
                                                    <option value="yoga">Yoga</option>
                                                    <option value="vinyasa-yoga">--Vinyasa yoga
                                                    </option>
                                                    <option value="restorative-yoga">--Restorative Yoga
                                                    </option>

                                                </select>
                                            </div>
                                            <div>
                                                <label for="eDataList" class="form-label ol-form-label">Status</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="active">Active </option>
                                                    <option value="inactive">Inactive </option>
                                                    <option value="pending">Pending </option>
                                                    <option value="upcoming">Upcoming </option>
                                                    <option value="private">Private </option>
                                                    <option value="draft">Draft </option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="eDataList"
                                                    class="form-label ol-form-label">Instructor</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="1"> John Doe </option>
                                                    <option value="2">James Mariyati</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="eDataList" class="form-label ol-form-label">Price</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="free">Free</option>
                                                    <option value="paid">Paid</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="filter-button d-flex justify-content-end align-items-center mt-3">
                                            <button type="submit" class="ol-btn-primary">Apply</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <form action="#courses" method="get">
                            <div class="row">
                                <div class="col-9">
                                    <div class="search-input flex-grow-1">
                                        <input type="text" name="search" value="" placeholder="Search Title"
                                            class="ol-form-control form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn ol-btn-primary w-100"
                                        id="submit-button">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                            <p class="admin-tInfo">
                                Showing 9 of 9 data
                            </p>
                        </div>
                        <div class="table-responsive overflow-auto course_list" id="course_list">
                            <table class="table eTable eTable-2 print-table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Lesson &amp; Section</th>
                                        <th scope="col">Enrolled Student</th>
                                        <th scope="col" class="print-d-none">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col" class="print-d-none">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <p class="row-number">1</p>
                                        </th>
                                        <td>
                                            <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                <div class="dAdmin_profile_name">
                                                    <h4 class="title fs-14px">
                                                        <a href="#course/edit/1?tab=curriculum">WordPress
                                                            Theme Development with Bootstrap</a>
                                                    </h4>

                                                    <a href="#courses?instructor=1">
                                                        <p class="sub-title2 text-12px">
                                                            Instructor:
                                                            John Doe</p>
                                                        <p class="sub-title2 text-12px">Email:
                                                            admin@example.com</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#courses?category=wordpress">Wordpress</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#course/edit/1?tab=curriculum">
                                                    <p>lesson: 13 </p>
                                                    <p> Section: 4 </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <p>Enrollment History:
                                                    3
                                                </p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">
                                            <span class="badge bg-active">Active</span>
                                        </td>
                                        <td>
                                            <div class="sub-title2 dAdmin_info_name min-w-150px">
                                                <p>25 $ <del>30 $</del></p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">

                                            <div class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="fi-rr-menu-dots-vertical"></span>
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#course/wordpress-theme-development-with-bootstrap-1">View
                                                            Course On Frontend</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#play-course/wordpress-theme-development-with-bootstrap-1">Go
                                                            To Course Playing Page</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="#course/edit/1?tab=basic">Edit
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/duplicate/1')"
                                                            href="javascript:void(0)">Duplicate
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/status/inactive/1')"
                                                            href="#">Make As Inactive</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/delete/1')"
                                                            href="javascript:void(0)">Delete Course</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="row-number">2</p>
                                        </th>
                                        <td>
                                            <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                <div class="dAdmin_profile_name">
                                                    <h4 class="title fs-14px">
                                                        <a href="#course/edit/2?tab=curriculum">Build
                                                            Websites from Scratch with HTML &amp;
                                                            CSS</a>
                                                    </h4>

                                                    <a href="#courses?instructor=2">
                                                        <p class="sub-title2 text-12px">
                                                            Instructor:
                                                            James Mariyati</p>
                                                        <p class="sub-title2 text-12px">Email:
                                                            instructor@example.com</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#courses?category=html-css">HTML
                                                    &amp; CSS</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#course/edit/2?tab=curriculum">
                                                    <p>lesson: 7 </p>
                                                    <p> Section: 4 </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <p>Enrollment History:
                                                    1
                                                </p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">
                                            <span class="badge bg-active">Active</span>
                                        </td>
                                        <td>
                                            <div class="sub-title2 dAdmin_info_name min-w-150px">
                                                <p class="eBadge ebg-soft-success">
                                                    Free
                                                </p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">

                                            <div class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="fi-rr-menu-dots-vertical"></span>
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#course/build-websites-from-scratch-with-html-css">View
                                                            Course On Frontend</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#play-course/build-websites-from-scratch-with-html-css">Go
                                                            To Course Playing Page</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="#course/edit/2?tab=basic">Edit
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/duplicate/2')"
                                                            href="javascript:void(0)">Duplicate
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/status/inactive/2')"
                                                            href="#">Make As Inactive</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/delete/2')"
                                                            href="javascript:void(0)">Delete Course</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="row-number">3</p>
                                        </th>
                                        <td>
                                            <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                <div class="dAdmin_profile_name">
                                                    <h4 class="title fs-14px">
                                                        <a href="#course/edit/3?tab=curriculum">The
                                                            Data Science Course: Complete Data
                                                            Science</a>
                                                    </h4>

                                                    <a href="#courses?instructor=2">
                                                        <p class="sub-title2 text-12px">
                                                            Instructor:
                                                            James Mariyati</p>
                                                        <p class="sub-title2 text-12px">Email:
                                                            instructor@example.com</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#courses?category=bootstrap">Bootstrap</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <a href="#course/edit/3?tab=curriculum">
                                                    <p>lesson: 20 </p>
                                                    <p> Section: 4 </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sub-title2 text-12px">
                                                <p>Enrollment History:
                                                    4
                                                </p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">
                                            <span class="badge bg-active">Active</span>
                                        </td>
                                        <td>
                                            <div class="sub-title2 dAdmin_info_name min-w-150px">
                                                <p>12 $ <del>20 $</del></p>
                                            </div>
                                        </td>
                                        <td class="print-d-none">

                                            <div class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="fi-rr-menu-dots-vertical"></span>
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#course/the-data-science-course-complete-data-science">View
                                                            Course On Frontend</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="#play-course/the-data-science-course-complete-data-science">Go
                                                            To Course Playing Page</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="#course/edit/3?tab=basic">Edit
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/duplicate/3')"
                                                            href="javascript:void(0)">Duplicate
                                                            Course</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/status/inactive/3')"
                                                            href="#">Make As Inactive</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            onclick="confirmModal('#course/delete/3')"
                                                            href="javascript:void(0)">Delete
                                                            Course</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                            <p class="admin-tInfo">
                                Showing 6 of 9 data
                            </p>
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#/admin/courses?page=2">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#/admin/courses?page=2" rel="next"
                                            aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
