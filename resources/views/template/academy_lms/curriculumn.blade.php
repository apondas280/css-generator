<!-- Start table -->
<hr>
<h1 class="my-5"><i class="fi-rr-sun"></i> Tab layouts </h1>

<form class="ajaxForm initialized" action="#admin/course/update/1" method="post" enctype="multipart/form-data"><input
        type="hidden" name="_token" value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
    <div class="ol-card">
        <div class="ol-card-body p-20px mb-3">

            <div class="row mb-3">
                <div class="col-sm-8">
                    <a href="#course/wordpress-theme-development-with-bootstrap-1" target="_blank"
                        class="btn ol-btn-outline-secondary me-3">
                        Frontend View
                        <i class="fi-rr-arrow-up-right-from-square"></i>
                    </a>


                    <a href="#play-course/wordpress-theme-development-with-bootstrap-1" target="_blank"
                        class="btn ol-btn-outline-secondary">
                        Course Player
                        <i class="fi-rr-arrow-up-right-from-square"></i>
                    </a>
                </div>
                <div class="col-sm-4 mt-3 mt-sm-0 d-flex justify-content-start justify-content-sm-end">
                    <button type="submit" class="btn ol-btn-outline-secondary  opacity-0 ">
                        Save changes
                    </button>
                </div>
            </div>

            <div class="d-flex gap-3 flex-wrap flex-md-nowrap">
                <div class="ol-sidebar-tab">
                    <div class="d-flex flex-column">

                        <input type="hidden" name="tab" value="curriculum">

                        <a class="nav-link  active " href="#admin/course/edit/1?tab=curriculum">
                            <span class="fi-rr-edit"></span>
                            <span>Curriculum</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=basic">
                            <span class="icon fi-rr-duplicate"></span>
                            <span>Basic</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=live-class">
                            <span class="fi-rr-file-video"></span>
                            <span>Live class</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=pricing">
                            <span class="fi-rr-comment-dollar"></span>
                            <span>Pricing</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=info">
                            <span class="fi-rr-tags"></span>
                            <span>Info</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=media">
                            <span class="fi fi-rr-gallery"></span>
                            <span>Media</span>
                        </a>

                        <a class="nav-link " href="#admin/course/edit/1?tab=seo">
                            <span class="fi-rr-note-medical"></span>
                            <span>SEO</span>
                        </a>
                    </div>
                </div>
                <div class="tab-content w-100">
                    <div class="w-100">
                        <!-- Tab-2-Content -->
                        <div class="mb-3 d-flex gap-2 align-items-center flex-wrap">
                            <a href="#"
                                onclick="ajaxModal('#modal/admin.course.create_section?id=1', 'Add new section')"
                                class="btn ol-btn-light ol-btn-sm">Add section
                            </a>

                            <a href="#"
                                onclick="ajaxModal('#modal/admin.course.lesson_type?id=1', 'Add new lesson')"
                                class="btn ol-btn-light ol-btn-sm">Add lesson
                            </a>

                            <a href="#"
                                onclick="ajaxModal('#modal/admin.course.quiz_create?id=1', 'Add new quiz')"
                                class="btn ol-btn-light ol-btn-sm d-none">Add quiz</a>

                            <a href="#"
                                onclick="ajaxModal('#modal/admin.course.section_sort?id=1', 'Sort sections')"
                                class="btn ol-btn-light ol-btn-sm">Sort Section
                            </a>
                        </div>



                        <ul class="ol-my-accordion">

                            <li class="single-accor-item">
                                <div class="accordion-btn-wrap">
                                    <div class="accordion-btn-title d-flex align-items-center">
                                        <img src="assets/images/icons/firstline-gray-16.svg" alt="">
                                        <h4 class="title">1. Getting Started With This Course</h4>
                                    </div>
                                    <div class="accordion-button-buttons">

                                        <a href="#"
                                            onclick="ajaxModal('#modal/admin.course.lesson_sort?id=1', 'Sort lessons'); event.stopPropagation();"
                                            class="btn btn-outline-gray-small">Sort lessons
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="ajaxModal('#modal/admin.course.section_edit?id=1', 'Edit section'); event.stopPropagation();"
                                            class="edit" aria-label="Edit section"
                                            data-bs-original-title="Edit section">
                                            <span class="fi-rr-pencil"></span>
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="confirmModal('#admin/section/delete/1'); event.stopPropagation();"
                                            class="delete" aria-label="Delete section"
                                            data-bs-original-title="Delete section">
                                            <span class="fi-rr-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accoritem-body d-hidden" style="display: none;">
                                    <ul class="list-group-3">
                                        <li>
                                            <h4 class="title">What is WordPress? And How Does It
                                                Work?
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=1', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/1')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">How Internet works?</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=2', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/2')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Wordpress local setpu</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=3', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/3')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Project overview</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=4', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/4')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Aperiam et aliquip u</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=121', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/121')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="single-accor-item active-accor">
                                <div class="accordion-btn-wrap">
                                    <div class="accordion-btn-title d-flex align-items-center">
                                        <img src="assets/images/icons/firstline-gray-16.svg" alt="">
                                        <h4 class="title">2. All about Bootstrap</h4>
                                    </div>
                                    <div class="accordion-button-buttons">

                                        <a href="#"
                                            onclick="ajaxModal('#modal/admin.course.lesson_sort?id=2', 'Sort lessons'); event.stopPropagation();"
                                            class="btn btn-outline-gray-small">Sort lessons
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="ajaxModal('#modal/admin.course.section_edit?id=2', 'Edit section'); event.stopPropagation();"
                                            class="edit" aria-label="Edit section"
                                            data-bs-original-title="Edit section">
                                            <span class="fi-rr-pencil"></span>
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="confirmModal('#admin/section/delete/2'); event.stopPropagation();"
                                            class="delete" aria-label="Delete section"
                                            data-bs-original-title="Delete section">
                                            <span class="fi-rr-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accoritem-body d-hidden" style="display: block;">
                                    <ul class="list-group-3">
                                        <li>
                                            <h4 class="title">What is Bootstrap</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=5', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/5')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Getting started with Bootstrap</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=6', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/6')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Column of Bootstrap</h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=7', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/7')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Bootstrap integration with Wordpress
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=8', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/8')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="single-accor-item">
                                <div class="accordion-btn-wrap">
                                    <div class="accordion-btn-title d-flex align-items-center">
                                        <img src="assets/images/icons/firstline-gray-16.svg" alt="">
                                        <h4 class="title">3. WordPress Theme: Setup</h4>
                                    </div>
                                    <div class="accordion-button-buttons">

                                        <a href="#"
                                            onclick="ajaxModal('#modal/admin.course.lesson_sort?id=3', 'Sort lessons'); event.stopPropagation();"
                                            class="btn btn-outline-gray-small">Sort lessons
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="ajaxModal('#modal/admin.course.section_edit?id=3', 'Edit section'); event.stopPropagation();"
                                            class="edit" aria-label="Edit section"
                                            data-bs-original-title="Edit section">
                                            <span class="fi-rr-pencil"></span>
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="confirmModal('#admin/section/delete/3'); event.stopPropagation();"
                                            class="delete" aria-label="Delete section"
                                            data-bs-original-title="Delete section">
                                            <span class="fi-rr-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accoritem-body d-hidden">
                                    <ul class="list-group-3">
                                        <li>
                                            <h4 class="title">Download the Latest Version of
                                                WordPress
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=9', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/9')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">Install WordPress on Your Local Machine
                                                in
                                                Under 5-Minutes
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=10', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/10')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="single-accor-item">
                                <div class="accordion-btn-wrap">
                                    <div class="accordion-btn-title d-flex align-items-center">
                                        <img src="assets/images/icons/firstline-gray-16.svg" alt="">
                                        <h4 class="title">4. Final Chapter</h4>
                                    </div>
                                    <div class="accordion-button-buttons">

                                        <a href="#"
                                            onclick="ajaxModal('#modal/admin.course.lesson_sort?id=4', 'Sort lessons'); event.stopPropagation();"
                                            class="btn btn-outline-gray-small">Sort lessons
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="ajaxModal('#modal/admin.course.section_edit?id=4', 'Edit section'); event.stopPropagation();"
                                            class="edit" aria-label="Edit section"
                                            data-bs-original-title="Edit section">
                                            <span class="fi-rr-pencil"></span>
                                        </a>

                                        <a href="#" data-bs-toggle="tooltip"
                                            onclick="confirmModal('#admin/section/delete/4'); event.stopPropagation();"
                                            class="delete" aria-label="Delete section"
                                            data-bs-original-title="Delete section">
                                            <span class="fi-rr-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accoritem-body d-hidden">
                                    <ul class="list-group-3">
                                        <li>
                                            <h4 class="title">Track Your Visitors With Google
                                                Analytics
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=11', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/11')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="title">You've Created Your Own Custom
                                                WordPress
                                                Theme! Now What?
                                            </h4>

                                            <div class="buttons">
                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="ajaxModal('#modal/admin.course.lesson_edit?id=12', 'Edit lesson')"
                                                    class="edit-delete" aria-label="Edit lesson"
                                                    data-bs-original-title="Edit lesson">
                                                    <span class="fi-rr-pencil"></span>
                                                </a>

                                                <a href="#" data-bs-toggle="tooltip"
                                                    onclick="confirmModal('#admin/lesson/delete/12')"
                                                    class="edit-delete" aria-label="Delete lesson"
                                                    data-bs-original-title="Delete lesson">
                                                    <span class="fi-rr-trash"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
