<!DOCTYPE html>
<html lang="en" class="light">

<head>

    <title>Dashboard | Academy Learning Club</title>

    <!-- all the meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/upload/favicon/favicon-1716465915.png') }}" />
    <meta content="UQzRLXQ0TGBRQpRQXL94kNkAK4juUyIyQ4hYVMsN" name="csrf_token" />
    <!-- End meta -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icons/uicons-solid-rounded/css/uicons-solid-rounded.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icons/uicons-bold-rounded/css/uicons-bold-rounded.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icons/uicons-bold-straight/css/uicons-bold-straight.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icons/uicons-regular-rounded/css/uicons-regular-rounded.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icons/uicons-thin-rounded/css/uicons-thin-rounded.css') }}" />

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icon-picker/fontawesome-iconpicker.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/global/icon-picker/icons/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/summernote/summernote-lite.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/tagify-master/dist/tagify.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/select2/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/daterangepicker/daterangepicker.css') }}"
        rel="stylesheet" type="text/css" />

    @includeif('layouts.generated_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/new_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
</head>

<body>



    <!-- Sidebar Navigation -->
    <div class="ol-sidebar">
        <div class="sidebar-logo-area">
            <a href="#" class="sidebar-logos">
                <img class="sidebar-logo-lg" height="50px" src="assets/images/logo-full.svg" alt="">
                <img class="sidebar-logo-sm" height="40px" src="#public/assets/upload/favicon/favicon-1716465915.png"
                    alt="">
            </a>
            <button class="sidebar-cross menu-toggler d-block d-lg-none">
                <span class="fi-rr-cross"></span>
            </button>
        </div>
        <h3 class="sidebar-title fs-12px px-30px pb-20px mt-4 text-uppercase">Main Menu</h3>
        <div class="sidebar-nav-area">
            <nav class="sidebar-nav">
                <ul class="px-14px pb-24px">

                    <li class="sidebar-first-li active">
                        <a href="#dashboard">
                            <span class="icon fi-rr-house-blank"></span>
                            <div class="text">
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>


                    <li class="sidebar-first-li ">
                        <a href="#categories">
                            <span class="icon fi-rr-chart-tree-map"></span>
                            <div class="text">
                                <span>Category</span>
                            </div>
                        </a>
                    </li>


                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi fi-rr-e-learning"></span>
                            <div class="text">
                                <span>Course</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Course</li>
                            <li class="sidebar-second-li ">
                                <a href="#courses">Manage Courses</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#course/create">Add New Course</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#coupons">Coupons</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi-rr-elevator"></span>
                            <div class="text">
                                <span>Student enrollment</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Course enrollment</li>

                            <li class="sidebar-second-li ">
                                <a href="#enroll_history">Enrollment
                                    History</a>
                            </li>

                            <li class="sidebar-second-li ">
                                <a href="#enroll_student">Enroll student</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi-rr-comment-dollar"></span>
                            <div class="text">
                                <span>Payment Report</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Payment Report</li>

                            <li class="sidebar-second-li ">
                                <a href="#offline-payments">Offline
                                    payments</a>
                            </li>

                            <li class="sidebar-second-li "><a href="#admin_revenue">Admin Revenue</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#instructor_revenue">Instructor
                                    Revenue</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#purchase_history">Payment
                                    History</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi-rr-users"></span>
                            <div class="text">
                                <span>Users</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Users</li>
                            <li class="sidebar-second-li second-li-have-sub ">
                                <a href="javascript:void(0);">Admin</a>
                                <ul class="second-sub-menu">
                                    <li class="sidebar-third-li ">
                                        <a href="#admins">Manage Admin</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#admin/create">Add New
                                            Admin</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-second-li second-li-have-sub ">
                                <a href="javascript:void(0);">Instructor</a>
                                <ul class="second-sub-menu">
                                    <li class="sidebar-third-li ">
                                        <a href="#instructor">Manage
                                            Instructors</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#instructor_create">Add new
                                            Instructor</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#instructor_payout">Instructor
                                            Payout</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#instructor_setting">Instructor
                                            Setting</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#instructor_application">Application</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-second-li second-li-have-sub ">
                                <a href="javascript:void(0);">Student</a>
                                <ul class="second-sub-menu">
                                    <li class="sidebar-third-li ">
                                        <a href="#student">Manage
                                            Students</a>
                                    </li>
                                    <li class="sidebar-third-li ">
                                        <a href="#student/create">Add new
                                            Student</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-first-li ">
                        <a href="#message">
                            <span class="icon fi-rr-messages"></span>
                            <div class="text">
                                <span>Message</span>
                            </div>
                        </a>
                    </li>

                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi fi-rr-envelope-open-text"></span>
                            <div class="text">
                                <span>Newsletter</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Newsletter</li>

                            <li class="sidebar-second-li "><a href="#newsletters">Manage
                                    Newsletters</a></li>
                            <li class="sidebar-second-li ">
                                <a href="#newsletter/subscribers">Subscribed
                                    user</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-first-li ">
                        <a href="#contacts">
                            <span class="icon fi fi-br-portrait"></span>
                            <div class="text">
                                <span>Contacts</span>
                            </div>
                        </a>
                    </li>

                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi fi-rr-blog-text"></span>
                            <div class="text">
                                <span>Blogs</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">Blogs</li>

                            <li class="sidebar-second-li "><a href="#blogs">Manage Blogs</a>
                            </li>
                            <li class="sidebar-second-li "><a href="#blog/pending">Pending blogs</a>
                            </li>
                            <li class="sidebar-second-li "><a href="#blog/category">Category</a></li>
                            <li class="sidebar-second-li "><a href="#blog/settings">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>



            <nav class="sidebar-nav">
                <h3 class="sidebar-title fs-12px px-30px pb-3 text-uppercase">Settings</h3>
                <ul class="px-14px pb-24px pb-5 mb-5">
                    <li class="sidebar-first-li first-li-have-sub ">
                        <a href="javascript:void(0);">
                            <span class="icon fi fi-rr-settings"></span>
                            <div class="text">
                                <span>System Settings</span>
                            </div>
                        </a>
                        <ul class="first-sub-menu">
                            <li class="first-sub-menu-title fs-14px mb-18px">System Settings</li>
                            <li class="sidebar-second-li ">
                                <a href="#system_settings">System
                                    Settings</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#website_settings">Website
                                    Settings</a>
                            </li>
                            <li class="sidebar-second-li ">
                                <a href="#payment_settings">Payment
                                    Settings</a>
                            </li>

                            <li class="sidebar-second-li ">
                                <a href="#manage_language">Manage
                                    Language</a>
                            </li>

                            <li class="sidebar-second-li ">
                                <a href="#live-class/settings">Live Class
                                    Settings</a>
                            </li>
                            <li class="sidebar-second-li "><a href="#notification_settings">SMTP
                                    Settings</a></li>

                            <li class="sidebar-second-li ">
                                <a href="#certificate_settings">Certificate
                                    Settings</a>
                            </li>

                            <li class="sidebar-second-li "><a href="#open-ai/settings">Open AI
                                    Settings</a></li>

                            <li class="sidebar-second-li "><a href="#pages">Home Page Builder</a></li>

                            <li class="sidebar-second-li "><a href="#seo_settings">SEO Settings</a>
                            </li>

                            <li class="sidebar-second-li "><a href="#about">About</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-first-li ">
                        <a href="#manage_profile">
                            <span class="icon fi-rr-circle-user"></span>
                            <div class="text">
                                <span>Manage Profile</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="ol-sidebar-content">
        <!-- Header -->
        <div class="ol-header print-d-none d-flex align-items-center justify-content-between py-2 ps-3">
            <div class="header-title-menubar d-flex align-items-center">
                <button class="menu-toggler sidebar-plus">
                    <span class="fi-rr-menu-burger"></span>
                </button>

                <div class="main-header-title">
                    <h1 class="page-title fs-18px d-flex align-items-center gap-3">
                        Academy Learning Club
                    </h1>
                    <span class="text-12px d-none d-md-inline-block">Admin Panel</span>
                </div>
                <a href="#" target="_blank" class="btn btn-sm pt-0 d-none d-md-inline-block text-14px ">
                    <span>View site</span>
                    <i class="fi-rr-arrow-up-right-from-square text-12px "></i>
                </a>
            </div>
            <div class="header-content-right d-flex align-items-center justify-content-end">

                <!-- language Select -->
                <div class="d-none d-sm-block">
                    <div class="img-text-select ">
                        <div class="selected-show" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Language">
                            <i class="fi-rr-language text-20px py-2"></i>
                        </div>
                        <div class="drop-content">
                            <ul>
                                <li>
                                    <a href="#select-language/English" class="select-text text-capitalize">

                                        <i class="fi fi-br-check text-10px me-1 "></i>
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="#select-language/Hindi" class="select-text text-capitalize">

                                        <i class="fi fi-br-check text-10px me-1  visibility-hidden "></i>
                                        Hindi
                                    </a>
                                </li>
                                <li>
                                    <a href="#select-language/Spanish" class="select-text text-capitalize">

                                        <i class="fi fi-br-check text-10px me-1  visibility-hidden "></i>
                                        Spanish
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <a href="#" class="list text-18px d-inline-flex" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="d-block h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="AI Assistant">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" x="0" y="0"
                            viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <g fill="#424242">
                                    <path
                                        d="M36.5 20C27.953 20 21 13.047 21 4.5a.5.5 0 0 0-1 0C20 13.047 13.047 20 4.5 20a.5.5 0 0 0 0 1C13.047 21 20 27.953 20 36.5a.5.5 0 0 0 1 0C21 27.953 27.953 21 36.5 21a.5.5 0 0 0 0-1zM60 34.5a.5.5 0 0 0-.5-.5C52.607 34 47 28.393 47 21.5a.5.5 0 0 0-1 0C46 28.393 40.393 34 33.5 34a.5.5 0 0 0 0 1C40.393 35 46 40.607 46 47.5a.5.5 0 0 0 1 0C47 40.607 52.607 35 59.5 35a.5.5 0 0 0 .5-.5zM38 49.5a.5.5 0 0 0-.5-.5c-5.238 0-9.5-4.262-9.5-9.5a.5.5 0 0 0-1 0c0 5.238-4.262 9.5-9.5 9.5a.5.5 0 0 0 0 1c5.238 0 9.5 4.262 9.5 9.5a.5.5 0 0 0 1 0c0-5.238 4.262-9.5 9.5-9.5a.5.5 0 0 0 .5-.5z"
                                        fill="#424242" opacity="1" data-original="#424242" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </a>


                <div class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Help center">
                    <button class="btn ol-btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fi-rr-messages-question text-20px"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <div class="p-2">
                            <h5 class="title text-14px">Help center</h6>
                        </div>
                        <li>
                            <a href="https://creativeitem.com/docs/academy-lms" target="_blank"
                                class="dropdown-item">
                                <i class="fi-rr-document-signed"></i>
                                <span>Read documentation</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/watch?v=-HHhJUGQPeU&list=PLR1GrQCi5Zqvhh7wgtt-ShMAM1RROYJgE"
                                target="_blank" class="dropdown-item">
                                <i class="fi-rr-video-arrow-up-right"></i>
                                <span>Watch video tutorial</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://support.creativeitem.com" target="_blank" class="dropdown-item">
                                <i class="fi-rr-envelope-plus"></i>
                                <span>Get customer support</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://support.creativeitem.com" target="_blank" class="dropdown-item">
                                <i class="fi-rr-box-up"></i>
                                <span>Order customization</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://support.creativeitem.com" target="_blank"
                                class="select-text text-capitalize">
                                <i class="fi-rr-add"></i>
                                <span>Request a new feature</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://creativeitem.com/services" target="_blank"
                                class="text-premium select-text text-capitalize d-flex align-items-center">
                                <i class="fi-rr-settings-sliders me-1"></i>
                                <span>Get Services</span>
                                <i class="fi-rr-crown ms-auto"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <!-- Profile -->
                <div class="header-dropdown-md">
                    <button class="header-dropdown-toggle-md" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="user-profile-sm">
                            <img src="assets/images/img/message-profile-3.svg" alt="">
                        </div>
                    </button>
                    <div class="header-dropdown-menu-md p-3">
                        <div class="d-flex column-gap-2 mb-12px pb-12px ol-border-bottom-2">
                            <div class="user-profile-sm">
                                <img src="assets/images/img/message-profile-3.svg" alt="">
                            </div>
                            <div>
                                <h6 class="title fs-12px mb-2px">John Doe</h6>
                                <p class="sub-title fs-12px">Admin</p>
                            </div>
                        </div>
                        <ul class="mb-12px pb-12px ol-border-bottom-2">
                            <li class="dropdown-list-1"><a class="dropdown-item-1" href="#manage_profile">My
                                    Profile</a>
                            </li>
                            <li class="dropdown-list-1"><a class="dropdown-item-1"
                                    href="#system_settings">Settings</a>
                            </li>
                        </ul>
                        <ul>
                            <li class="dropdown-list-1"><a class="dropdown-item-1" href="#logout">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ol-body-content">
            <div class="container-fluid">


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

                <div class="color-palettes d-flex gap-3">
                    <div class="palette rounded-pill" id="dark" onclick="toggleColor(this)"
                        style="width: 50px; height: 50px; background: #19191c;"></div>
                    <div class="palette rounded-pill" id="light" onclick="toggleColor(this)"
                        style="width: 50px; height: 50px; background: #8aa2bd;"></div>
                </div>

                <script>
                    function toggleColor(elem) {
                        const palette = elem.getAttribute('id');
                        const htmlElement = document.querySelector('html');
                        htmlElement.className = '';
                        htmlElement.classList.add(palette);
                    }
                </script>

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
                                    <a class="btn-link" href="#admin_revenue" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Admin Revenue"><i
                                            class="fi-rr-arrow-alt-right"></i></a>
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
                                        <a class="btn-link" href="#courses" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Explore Courses"><i
                                                class="fi-rr-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center g-30px flex-wrap flex-xl-nowrap justify-content-center">
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
                                                    <small>Email: <span
                                                            class=" font-13">instructor@example.com</span></small>
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

                <!-- Dashboard End -->















                <!-- Category Start -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Category Card</h1>

                <div class="row g-4 all-category-list">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="ol-card category-card radious-10px h-100">
                            <img src="assets/images/products/product-1.svg" class="card-img-top" alt="...">
                            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                                <i class="me-1 far fa-object-ungroup"></i>
                                Web Development <span class="d-inline-block ms-auto">(4)</span>
                            </h6>
                            <div class="ol-card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fab fa-wordpress"></i> <span
                                                    class="text-12px">Wordpress</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=2', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/2')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-expand"></i> <span class="text-12px">Responsive
                                                    Design</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=3', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/3')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-code"></i> <span class="text-12px">Bootstrap</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=4', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/4')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-footer ol-card-body text-center py-1">
                                <a onclick="ajaxModal('#admin.category.create?parent_id=1', 'Add new category')"
                                    href="#" class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                                <a href="#" onclick="ajaxModal('#admin.category.edit?id=1', 'Edit category')"
                                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                                <a href="#" onclick="confirmModal('#category/delete/1')"
                                    class="btn text-12px fw-600"><i class="fi-rr-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="ol-card category-card radious-10px h-100">
                            <img src="assets/images/products/product-2.svg" class="card-img-top" alt="...">
                            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                                <i class="me-1 fas fa-pencil-alt"></i>
                                Graphic Design <span class="d-inline-block ms-auto">(5)</span>
                            </h6>
                            <div class="ol-card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-camera"></i> <span class="text-12px">Photoshop</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=7', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/7')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fab fa-digital-ocean"></i> <span class="text-12px">Digital
                                                    Art</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=11', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/11')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-footer ol-card-body text-center py-1">
                                <a onclick="ajaxModal('#admin.category.create?parent_id=6', 'Add new category')"
                                    href="#" class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                                <a href="#" onclick="ajaxModal('#admin.category.edit?id=6', 'Edit category')"
                                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                                <a href="#" onclick="confirmModal('#category/delete/6')"
                                    class="btn text-12px fw-600"><i class="fi-rr-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="ol-card category-card radious-10px h-100">
                            <img src="assets/images/products/product-3.svg" class="card-img-top" alt="...">
                            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                                <i class="me-1 fas fa-male"></i>
                                User Experience <span class="d-inline-block ms-auto">(6)</span>
                            </h6>
                            <div class="ol-card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-basketball-ball"></i> <span class="text-12px">User
                                                    Experience
                                                    Design</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=13', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/13')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-footer ol-card-body text-center py-1">
                                <a onclick="ajaxModal('#admin.category.create?parent_id=12', 'Add new category')"
                                    href="#" class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                                <a href="#" onclick="ajaxModal('#admin.category.edit?id=12', 'Edit category')"
                                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                                <a href="#" onclick="confirmModal('#category/delete/12')"
                                    class="btn text-12px fw-600"><i class="fi-rr-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="ol-card category-card radious-10px h-100">
                            <img src="assets/images/products/product-1.svg" class="card-img-top" alt="...">
                            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                                <i class="me-1 fab fa-yandex-international"></i>
                                Interior Design <span class="d-inline-block ms-auto">(5)</span>
                            </h6>
                            <div class="ol-card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-tint"></i> <span class="text-12px">Color
                                                    Theory</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=20', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/20')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-lightbulb"></i> <span class="text-12px">3D
                                                    Lighting</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=24', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/24')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-footer ol-card-body text-center py-1">
                                <a onclick="ajaxModal('#admin.category.create?parent_id=19', 'Add new category')"
                                    href="#" class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                                <a href="#" onclick="ajaxModal('#admin.category.edit?id=19', 'Edit category')"
                                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                                <a href="#" onclick="confirmModal('#category/delete/19')"
                                    class="btn text-12px fw-600"><i class="fi-rr-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="ol-card category-card radious-10px h-100">
                            <img src="assets/images/products/product-1.svg" class="card-img-top" alt="...">
                            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                                <i class="me-1 fas fa-cube"></i>
                                3D and Animation <span class="d-inline-block ms-auto">(6)</span>
                            </h6>
                            <div class="ol-card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-file-image"></i> <span
                                                    class="text-12px">Blender</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=26', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/26')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fas fa-images"></i> <span class="text-12px">Motion
                                                    Graphics</span>
                                            </div>
                                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                                <a onclick="ajaxModal('#admin.category.edit?id=27', 'Edit category')"
                                                    class="mx-1" data-bs-toggle="tooltip" href="#"
                                                    aria-label="Edit" data-bs-original-title="Edit"><i
                                                        class="fi fi-rr-pen-clip"></i></a>
                                                <a onclick="confirmModal('#category/delete/27')" class="mx-1"
                                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-footer ol-card-body text-center py-1">
                                <a onclick="ajaxModal('#admin.category.create?parent_id=25', 'Add new category')"
                                    href="#" class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                                <a href="#" onclick="ajaxModal('#admin.category.edit?id=25', 'Edit category')"
                                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                                <a href="#" onclick="confirmModal('#category/delete/25')"
                                    class="btn text-12px fw-600"><i class="fi-rr-trash"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category End -->

                <div class="row g-2 g-sm-3 mb-3 row-cols-1 row-colssm-2 row-cols-md-3 row-cols-lg-4 mt-5">
                    <div class="col">
                        <div class="ol-card card-hover">
                            <div class="ol-card-body px-20px py-3 d-flex justify-content-between">
                                <div>
                                    <p class="title card-title-hover">AI Learning</p>
                                    <p class="sub-title text-12px mt-2">Total number of blog 1</p>
                                </div>

                                <div class="dropdown ol-icon-dropdown">
                                    <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fi-rr-menu-dots-vertical"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="ajaxModal('#/modal/admin.blog_category.edit?id=1', 'Edit category')">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="confirmModal('#/admin/blog/category/delete/1')">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ol-card card-hover">
                            <div class="ol-card-body px-20px py-3 d-flex justify-content-between">
                                <div>
                                    <p class="title card-title-hover">Education</p>
                                    <p class="sub-title text-12px mt-2">Total number of blog 1</p>
                                </div>

                                <div class="dropdown ol-icon-dropdown">
                                    <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fi-rr-menu-dots-vertical"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="ajaxModal('#/modal/admin.blog_category.edit?id=2', 'Edit category')">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="confirmModal('#/admin/blog/category/delete/2')">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ol-card card-hover">
                            <div class="ol-card-body px-20px py-3 d-flex justify-content-between">
                                <div>
                                    <p class="title card-title-hover">Lifestyle</p>
                                    <p class="sub-title text-12px mt-2">Total number of blog 2</p>
                                </div>

                                <div class="dropdown ol-icon-dropdown">
                                    <button class="btn ol-btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fi-rr-menu-dots-vertical"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="ajaxModal('#/modal/admin.blog_category.edit?id=3', 'Edit category')">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="confirmModal('#/admin/blog/category/delete/3')">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







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
                                                    <a class="dropdown-item export-btn" href="#"
                                                        onclick="window.print();"><i class="fi-rr-print"></i>
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
                                                                <label for="eDataList"
                                                                    class="form-label ol-form-label">Category</label>
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
                                                                <label for="eDataList"
                                                                    class="form-label ol-form-label">Status</label>
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
                                                                <label for="eDataList"
                                                                    class="form-label ol-form-label">Price</label>
                                                                <select
                                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                                    <option value="free">Free</option>
                                                                    <option value="paid">Paid</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="filter-button d-flex justify-content-end align-items-center mt-3">
                                                            <button type="submit"
                                                                class="ol-btn-primary">Apply</button>
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
                                                        <input type="text" name="search" value=""
                                                            placeholder="Search Title"
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
                                        <div class="table-responsive overflow-auto course_list overflow-auto"
                                            id="course_list">
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
                                                            <div
                                                                class="dAdmin_profile d-flex align-items-center min-w-200px">
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

                                                            <div
                                                                class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                                <button class="btn ol-btn-secondary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
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
                                                                        <a class="dropdown-item"
                                                                            href="#course/edit/1?tab=basic">Edit
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
                                                            <div
                                                                class="dAdmin_profile d-flex align-items-center min-w-200px">
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

                                                            <div
                                                                class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                                <button class="btn ol-btn-secondary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
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
                                                                        <a class="dropdown-item"
                                                                            href="#course/edit/2?tab=basic">Edit
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
                                                            <div
                                                                class="dAdmin_profile d-flex align-items-center min-w-200px">
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

                                                            <div
                                                                class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent">
                                                                <button class="btn ol-btn-secondary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
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
                                                                        <a class="dropdown-item"
                                                                            href="#course/edit/3?tab=basic">Edit
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
                                                    <li class="page-item disabled" aria-disabled="true"
                                                        aria-label="« Previous">
                                                        <span class="page-link" aria-hidden="true">‹</span>
                                                    </li>
                                                    <li class="page-item active" aria-current="page"><span
                                                            class="page-link">1</span></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#/admin/courses?page=2">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#/admin/courses?page=2"
                                                            rel="next" aria-label="Next »">›</a>
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
                <hr>
                <div class="row mt-4">
                    <div class="col-xl-7">
                        <div class="ol-card p-4">
                            <p class="title text-14px mb-3">About This Application</p>
                            <div class="ol-card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <div class="table-responsive">
                                                    <div class="chart-widget-list">
                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Software version
                                                            <span class="float-end ml-5">1.0</span>
                                                        </p>
                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Laravel version
                                                            <span class="float-end ml-5">11.10.0</span>
                                                        </p>
                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Check update
                                                            <span class="float-end">
                                                                <a href="https://codecanyon.net/user/creativeitem/portfolio"
                                                                    target="_blank">
                                                                    <i class="bi bi-telegram"></i>
                                                                    Check update
                                                                </a>
                                                            </span>
                                                        </p>
                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Php version
                                                            <span class="float-end">8.2.0</span>
                                                        </p>
                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Curl enable
                                                            <span class="float-end">
                                                                <span class="eBadge ebg-soft-success">enabled</span>
                                                            </span>
                                                        </p>

                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Purchase code
                                                            <span
                                                                class="float-end">2719930f-9f8e-4712-80b2-fc7455ec59f9</span>
                                                        </p>

                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Product license
                                                            <span
                                                                class="float-end badge bg-success text-capitalize">valid</span>
                                                        </p>


                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Customer support status
                                                            <span class="float-end">
                                                                <span
                                                                    class="badge bg-danger float-end mt-1 text-capitalize">expired</span>
                                                                <a href="#" target="_blank"
                                                                    class="btn btn-success float-end me-2 py-0 text-13px">Renew
                                                                    support</a>
                                                            </span>
                                                        </p>

                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Support expiry date

                                                            <span class="float-end">15 Dec, 2023</span>
                                                        </p>

                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Customer name
                                                            <span class="float-end">AfricerTech</span>
                                                        </p>

                                                        <p class="mb-2 pb-2 text-13px">
                                                            <i class="fi-rr-hand-back-point-right me-3"></i>
                                                            Get customer support
                                                            <span class="float-end"><a class="about-sc-one"
                                                                    href="#" target="_blank"> <i
                                                                        class="bi bi-telegram"></i>
                                                                    Customer support
                                                                    <i class="fi-rr-navigation"></i>
                                                                </a> </span>
                                                        </p>

                                                    </div>
                                                    <table class="table eTable">

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Ended -->






                <!-- Start table -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Form Elements </h1>

                <!-- Form Start -->
                <div class="ol-card p-3">
                    <div class="ol-card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="dAdmin_info_name min-w-150px">
                                        <label class="form-label ol-form-label">Date range picker</label>
                                        <div class="eSwitches">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input form-switch-medium" type="checkbox"
                                                    checked="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="form-label ol-form-label">Date range picker</label>
                                    <div class="mb-3 position-relative position-relative">
                                        <input type="text"
                                            class="form-control ol-form-control daterangepicker w-100"
                                            name="eDateRange" value="06/01/2024 - 06/30/2024">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pb-2">
                                    <div class="eForm-layouts">
                                        <div class="fpb-7 mb-3">
                                            <label class="form-label ol-form-label" for="title">Title<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" name="title"
                                                class="form-control ol-form-control"
                                                placeholder="Enter Course Title" required="">
                                        </div>
                                        <div class="fpb-7 mb-3">
                                            <label class="form-label ol-form-label" for="short_description">Short
                                                Description</label>
                                            <textarea name="short_description" placeholder="Enter Short Description" class="form-control ol-form-control"
                                                rows="5" data-gramm="false" wt-ignore-input="true"></textarea>
                                        </div>
                                        <div class="fpb-7 mb-3">
                                            <label class="form-label ol-form-label"
                                                for="description">Description</label>
                                            <textarea name="description" placeholder="Enter Description" class="form-control ol-form-control text_editor"></textarea>
                                        </div>
                                        <div class="fpb-7 mb-2 ">
                                            <label for="course_status" class="col-sm-2 col-form-label">Create as
                                                <span class="text-danger ms-1">*</span></label>
                                            <div class="eRadios">
                                                <div class="form-check">
                                                    <input type="radio" value="active" name="status"
                                                        class="form-check-input eRadioSuccess" id="status_active"
                                                        required="" checked="">
                                                    <label for="status_active"
                                                        class="form-check-label">Active</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" value="private" name="status"
                                                        class="form-check-input eRadioPrimary" id="status_private"
                                                        required="">
                                                    <label for="status_private"
                                                        class="form-check-label">Private</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" value="upcoming" name="status"
                                                        class="form-check-input eRadioInfo" id="status_upcoming"
                                                        required="">
                                                    <label for="status_upcoming"
                                                        class="form-check-label">Upcoming</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" value="pending" name="status"
                                                        class="form-check-input eRadioDanger" id="status_pending"
                                                        required="">
                                                    <label for="status_pending"
                                                        class="form-check-label">Pending</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" value="draft" name="status"
                                                        class="form-check-input eRadioSecondary" id="status_draft"
                                                        required="">
                                                    <label for="status_draft" class="form-check-label">Draft</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" value="inactive" name="status"
                                                        class="form-check-input eRadioDark" id="status_inactive"
                                                        required="">
                                                    <label for="status_inactive"
                                                        class="form-check-label">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-select2-id="select2-data-86-zf2b">
                                    <div class="eForm-layouts">
                                        <div class="fpb-7 mb-3">
                                            <label for="category_id" class="form-label ol-form-label">Category<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="ol-select2 select2-hidden-accessible" name="category_id"
                                                id="category_id">
                                                <option value="41" data-select2-id="select2-data-99-2evo"> --
                                                    Vinyasa yoga
                                                </option>
                                                <option value="42" data-select2-id="select2-data-100-b1uf"> --
                                                    Restorative Yoga
                                                </option>
                                                <option value="44" data-select2-id="select2-data-101-zjro"> --
                                                    Tanya Wiggins
                                                </option>
                                            </select>
                                        </div>
                                        <div class="fpb-7 mb-3">
                                            <label for="level" class="form-label ol-form-label">Course level<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="ol-select2 select2-hidden-accessible" name="level"
                                                id="level">
                                                <option value="" data-select2-id="select2-data-60-clo7">Select
                                                    your
                                                    course level
                                                </option>
                                                <option value="beginner" data-select2-id="select2-data-145-f5x6">
                                                    Beginner</option>
                                                <option value="intermediate"
                                                    data-select2-id="select2-data-146-g540">
                                                    Intermediate
                                                </option>
                                                <option value="advanced" data-select2-id="select2-data-147-ro8u">
                                                    Advanced</option>
                                            </select>
                                        </div>
                                        <div class="fpb-7 mb-3">
                                            <label for="language" class="form-label ol-form-label">Made in
                                                <span class="text-danger ms-1">*</span></label>
                                            <select class="ol-select2 select2-hidden-accessible" name="language"
                                                id="language">
                                                <option value="" data-select2-id="select2-data-65-t0lk">Select
                                                    your
                                                    course language
                                                </option>
                                                <option value="english" class="text-capitalize">English</option>
                                                <option value="hindi" class="text-capitalize">Hindi</option>
                                                <option value="spanish" class="text-capitalize">Spanish</option>
                                            </select>
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label class="form-label ol-form-label col-sm-2 col-form-label">Pricing
                                                type<span class="text-danger ms-1">*</span></label>

                                            <div class="eRadios">
                                                <div class="form-check">
                                                    <input type="radio" name="is_paid" value="1"
                                                        class="form-check-input eRadioSuccess" id="paid"
                                                        onchange="$('#paid-section').slideDown(200)" checked="">
                                                    <label for="paid" class="form-check-label">Paid</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" name="is_paid" value="0"
                                                        class="form-check-input eRadioSuccess" id="free"
                                                        onchange="$('#paid-section').slideUp(200)">
                                                    <label for="free" class="form-check-label">Free</label>
                                                </div>
                                                <div class="paid-section" id="paid-section">
                                                    <div class="fpb-7 mb-3">
                                                        <label for="price" class="form-label ol-form-label">Price
                                                            <small>($0)</small><span
                                                                class="text-danger ms-1">*</span></label>

                                                        <input type="number" name="price"
                                                            class="form-control ol-form-control" id="price"
                                                            min="1" step=".01"
                                                            placeholder="Enter your course price ($0)">
                                                    </div>

                                                    <div class="fpb-7 mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="discount_flag"
                                                                value="1"
                                                                class="form-check-input eRadioSuccess"
                                                                id="discount_flag">
                                                            <label for="discount_flag"
                                                                class="form-check-label">Check if
                                                                this course has
                                                                discount</label>
                                                        </div>
                                                    </div>

                                                    <div class="fpb-7 mb-3">
                                                        <label for="discounted_price"
                                                            class="form-label ol-form-label">Discounted
                                                            price</label>

                                                        <input type="number" name="discounted_price"
                                                            class="form-control ol-form-control"
                                                            id="discounted_price" min="1" step=".01"
                                                            placeholder="Enter your discount price ($0)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fpb-7">
                                        <label for="thumbnail" class="form-label ol-form-label">Thumbnail</label>
                                        <input type="file" name="thumbnail"
                                            class="form-control ol-form-control form-control-file" id="thumbnail"
                                            accept="image/*">
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <button type="submit" class="btn ol-btn-primary float-end">Submit</button>
                                </div>
                            </div>
                        </form>



                        <h4 class="title mt-4 mb-3">Website FAQS</h4>
                        <form action="#/admin/website_settings/update" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW"
                                autocomplete="off"> <input type="hidden" name="type" value="websitefaqs">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="faq_area">
                                        <div class="d-flex mt-2">
                                            <div class="flex-grow-1 px-2 mb-3">
                                                <div class="fpb-7 mb-3">
                                                    <label class="form-label ol-form-label">Question</label>
                                                    <input type="text" class="form-control ol-form-control"
                                                        name="questions[]" id="questions"
                                                        placeholder="Write a question"
                                                        value="How to create an account?">
                                                </div>
                                                <div class="fpb-7 mb-3">
                                                    <label class="form-label ol-form-label">Answer</label>
                                                    <textarea name="answers[]" class="form-control ol-form-control" placeholder="Write a question answer"
                                                        data-gramm="false" wt-ignore-input="true">Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic.</textarea>
                                                </div>
                                            </div>

                                            <div class="pt-4">
                                                <button type="button" class="btn ol-btn-light ol-icon-btn mt-2"
                                                    name="button" data-bs-toggle="tooltip" onclick="appendFaq()"
                                                    aria-label="Add new" data-bs-original-title="Add new"> <i
                                                        class="fi-rr-plus-small"></i>
                                                </button>
                                            </div>
                                        </div>




                                        <div id="blank_faq_field" style="display: none;">
                                            <div class="d-flex pt-2 border-top">
                                                <div class="flex-grow-1 px-3">
                                                    <div class="fpb-7 mb-3">
                                                        <label class="form-label ol-form-label">Question</label>
                                                        <input type="text" class="form-control ol-form-control"
                                                            name="questions[]" id="questions"
                                                            placeholder="Write a question">
                                                    </div>
                                                    <div class="fpb-7 mb-3">
                                                        <label class="form-label ol-form-label">Answer</label>
                                                        <textarea name="answers[]" class="form-control ol-form-control" placeholder="Write a question answer"
                                                            data-gramm="false" wt-ignore-input="true"></textarea>
                                                    </div>

                                                </div>
                                                <div class="pt-4">
                                                    <button type="button" class="btn ol-btn-light ol-icon-btn mt-2"
                                                        name="button" data-bs-toggle="tooltip"
                                                        onclick="removeFaq(this)" aria-label="Remove"
                                                        data-bs-original-title="Remove"> <i
                                                            class="fi-rr-minus-small"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpb-7 mb-2 flex-grow-1 px-2">
                                        <button type="submit" class="btn ol-btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- Form Ended -->

                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-primary ol-alert-primary ol-alert-sm mb-3" role="alert">
                            <p class="title2 fs-14px">Course:
                                <span class="title">WordPress Theme Development with Bootstrap</span>
                            </p>
                        </div>

                        <form action="">
                            <input id="course_id_for_lesson" type="hidden" value=""
                                name="course_id_for_lesson">
                            <div class="ol-modal-form">
                                <h6 class="title fs-16px mb-3">Select lesson type</h6>
                                <div class="row row-12px row-cols-1 row-cols-sm-2 mb-20px">
                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-youtube">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/video-square-black-18.svg"
                                                    alt="">
                                                <p class="title">YouTube Video</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-youtube" value="youtube"
                                                checked="">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-vimeo">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/video-circle-black-18.svg"
                                                    alt="">
                                                <p class="title">Vimeo Video</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-vimeo" value="vimeo">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-videofile">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/video-black-18.svg" alt="">
                                                <p class="title">Video file</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-videofile" value="video">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-url">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/link-black-18.svg" alt="">
                                                <p class="title">Video url [ .mp4 ]</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-url">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-drive">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/document-black-18.svg" alt="">
                                                <p class="title">Google drive video</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-drive" value="google_drive_video">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-document">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/document-black-18.svg" alt="">
                                                <p class="title">Document file</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-document" value="document">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-text">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/text-block-black-18.svg"
                                                    alt="">
                                                <p class="title">Text</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-text" value="text">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-image">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/volume-black-18.svg" alt="">
                                                <p class="title">Image</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-image" value="image">
                                        </label>
                                    </div>


                                    <div class="col">
                                        <label
                                            class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                            for="radio-iframe">
                                            <div class="title-icon d-flex align-items-center">
                                                <img src="assets/images/icons/volume-black-18.svg" alt="">
                                                <p class="title">Iframe embed</p>
                                            </div>
                                            <input class="form-check-input form-check-input-radio" type="radio"
                                                name="lesson_type" id="radio-iframe" value="iframe">
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="javascript:void(0)" type="button" class="btn ol-btn-primary"
                                        data-toggle="modal" data-dismiss="modal" id="lesson-add-modal"
                                        onclick="showLessonAddModal()">Next
                                        <i class="fi-rr-angle-small-right"></i> </a>
                                </div>
                            </div>
                        </form>

                        <script type="text/javascript">
                            "use strict";

                            function showLessonAddModal() {
                                var url = $("input[name=lesson_type]:checked").val();
                                ajaxModal('http://localhost/academy-laravel/demo/modal/admin.course.lesson_add?id=1&lesson_type=' + url,
                                    'Add new lesson')
                            }
                        </script>
                    </div>
                </div>






                <!-- Start table -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Tab layouts </h1>

                <form class="ajaxForm initialized" action="#admin/course/update/1" method="post"
                    enctype="multipart/form-data"><input type="hidden" name="_token"
                        value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                    <div class="ol-card">
                        <div class="ol-card-body p-20px mb-3">

                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <a href="#course/wordpress-theme-development-with-bootstrap-1" target="_blank"
                                        class="btn ol-btn-outline-secondary me-3">
                                        Frontend View
                                        <i class="fi-rr-arrow-up-right-from-square"></i>
                                    </a>


                                    <a href="#play-course/wordpress-theme-development-with-bootstrap-1"
                                        target="_blank" class="btn ol-btn-outline-secondary">
                                        Course Player
                                        <i class="fi-rr-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div
                                    class="col-sm-4 mt-3 mt-sm-0 d-flex justify-content-start justify-content-sm-end">
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
                                                        <img src="assets/images/icons/firstline-gray-16.svg"
                                                            alt="">
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
                                                        <img src="assets/images/icons/firstline-gray-16.svg"
                                                            alt="">
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
                                                        <img src="assets/images/icons/firstline-gray-16.svg"
                                                            alt="">
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
                                                        <img src="assets/images/icons/firstline-gray-16.svg"
                                                            alt="">
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

                <hr>

                <div class="ol-card" data-select2-id="select2-data-1127-khox">
                    <div class="ol-card-body p-4" data-select2-id="select2-data-1126-3ls7">
                        <div class="d-flex gap-3 flex-wrap flex-md-nowrap" data-select2-id="select2-data-1125-pn7c">
                            <div class="ol-sidebar-tab">
                                <div class="nav flex-column nav-pills" id="myv-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link" id="v-pills-currency-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-currency" type="button" role="tab"
                                        aria-controls="v-pills-currency" aria-selected="false" tabindex="-1">
                                        <span>Currency Settings</span>
                                    </button>

                                    <hr>


                                    <button class="nav-link active" id="v-pills-paypal-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-paypal" type="button" role="tab"
                                        aria-controls="v-pills-paypal" aria-selected="true">
                                        <span>Paypal</span>
                                    </button>

                                    <button class="nav-link" id="v-pills-stripe-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-stripe" type="button" role="tab"
                                        aria-controls="v-pills-stripe" aria-selected="false" tabindex="-1">
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
                                        data-bs-target="#v-pills-paytm" type="button" role="tab"
                                        aria-controls="v-pills-paytm" aria-selected="false" tabindex="-1">
                                        <span>Paytm</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content w-100" id="myv-pills-tabContent"
                                data-select2-id="select2-data-myv-pills-tabContent">
                                <div class="tab-pane fade" id="v-pills-currency" role="tabpanel"
                                    aria-labelledby="v-pills-currency-tab" tabindex="0">
                                    <h3 class="title text-14px mb-3">Currency Settings</h3>

                                    <div class="alert alert-primary ol-alert-primary mb-3" role="alert">
                                        <p class="sub-title2 fs-16px">
                                            <span class="title2">Heads up !!</span>
                                            Ensure that the system currency and all active payment gateway
                                            currencies are same
                                        </p>
                                    </div>

                                    <div class="ol-card-body">
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="top_part" value="top_part">


                                            <div class="fpb-7 mb-3">
                                                <label class="form-label ol-form-label">Select currency</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="">Select currency</option>

                                                    <option value="USD" selected="">USD</option>
                                                    <option value="ALL">ALL</option>
                                                    <option value="DZD">DZD</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="form-label ol-form-label">Currency
                                                    position</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible"
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
                                                <button type="submit"
                                                    class="btn ol-btn-primary mt-3">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="v-pills-paypal" role="tabpanel"
                                    aria-labelledby="v-pills-paypal-tab" tabindex="0"
                                    data-select2-id="select2-data-v-pills-paypal">
                                    <h3 class="title text-14px mb-3">Paypal Settings</h3>
                                    <div class="ol-card-body" data-select2-id="select2-data-1124-mtaj">
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data" data-select2-id="select2-data-1123-j5j7">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="identifier" value="paypal">

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Active</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">No</option>
                                                    <option value="1" selected="">Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Want to keep test mode
                                                    enabled?</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Select currency</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="">Select currency</option>
                                                    <option value="YER">YER
                                                    </option>
                                                    <option value="ZMK">ZMK
                                                    </option>

                                                </select>
                                            </div>



                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">sandbox client id</label>
                                                <input type="text" name="sandbox_client_id"
                                                    class="form-control ol-form-control"
                                                    value="AfGaziKslex-scLAyYdDYXNFaz2aL5qGau-SbDgE_D2E80D3AFauLagP8e0kCq9au7W4IasmFbirUUYc"
                                                    required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">sandbox secret key</label>
                                                <input type="text" name="sandbox_secret_key"
                                                    class="form-control ol-form-control"
                                                    value="EMa5pCTuOpmHkhHaCGibGhVUcKg0yt5-C3CzJw-OWJCzaXXzTlyD17SICob_BkfM_0Nlk7TWnN42cbGz"
                                                    required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">production client id</label>
                                                <input type="text" name="production_client_id"
                                                    class="form-control ol-form-control" value="1234"
                                                    required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">production secret
                                                    key</label>
                                                <input type="text" name="production_secret_key"
                                                    class="form-control ol-form-control" value="12345"
                                                    required="">
                                            </div>

                                            <div class="row">
                                                <div class="fpb-7 mb-3 col-md-6">
                                                    <button class="btn btn-block ol-btn-primary"
                                                        type="submit">Update
                                                        Paypal setting</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-stripe" role="tabpanel"
                                    aria-labelledby="v-pills-stripe-tab" tabindex="0">
                                    <h3 class="title text-14px mb-3">Stripe Settings</h3>
                                    <div class="ol-card-body">
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="identifier" value="stripe">

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Active</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">No</option>
                                                    <option value="1" selected=""
                                                        data-select2-id="select2-data-405-m1p1">Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Want to keep test mode
                                                    enabled?</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">No</option>
                                                    <option value="1" selected="">Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Select currency</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="">Select currency</option>

                                                    <option value="ZMK">ZMK
                                                    </option>

                                                </select>
                                            </div>



                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">public key</label>
                                                <input type="text" name="public_key"
                                                    class="form-control ol-form-control"
                                                    value="pk_test_c6VvBEbwHFdulFZ62q1IQrar" required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">secret key</label>
                                                <input type="text" name="secret_key"
                                                    class="form-control ol-form-control"
                                                    value="sk_test_9IMkiM6Ykxr1LCe2dJ3PgaxS" required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">public live key</label>
                                                <input type="text" name="public_live_key"
                                                    class="form-control ol-form-control"
                                                    value="pk_live_xxxxxxxxxxxxxxxxxxxxxxxx" required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">secret live key</label>
                                                <input type="text" name="secret_live_key"
                                                    class="form-control ol-form-control"
                                                    value="sk_live_xxxxxxxxxxxxxxxxxxxxxxxx" required="">
                                            </div>

                                            <div class="row">
                                                <div class="fpb-7 mb-3 col-md-6">
                                                    <button class="btn btn-block ol-btn-primary"
                                                        type="submit">Update
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
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="identifier" value="razorpay">

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Active</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">
                                                        No</option>
                                                    <option value="1" selected=""
                                                        data-select2-id="select2-data-580-35p5">
                                                        Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Want to keep test mode
                                                    enabled?</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">
                                                        No</option>
                                                    <option value="1" selected=""
                                                        data-select2-id="select2-data-584-ou18">
                                                        Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Select currency</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="">Select currency</option>

                                                    <option value="USD" selected=""
                                                        data-select2-id="select2-data-751-5jlm">USD
                                                    </option>
                                                    <option value="ALL">ALL
                                                    </option>
                                                    <option value="ZMK">ZMK
                                                    </option>
                                                </select>
                                            </div>



                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">public key</label>
                                                <input type="text" name="public_key"
                                                    class="form-control ol-form-control"
                                                    value="rzp_test_J60bqBOi1z1aF5" required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">secret key</label>
                                                <input type="text" name="secret_key"
                                                    class="form-control ol-form-control"
                                                    value="uk935K7p4j96UCJgHK8kAU4q" required="">
                                            </div>

                                            <div class="row">
                                                <div class="fpb-7 mb-3 col-md-6">
                                                    <button class="btn btn-block ol-btn-primary"
                                                        type="submit">Update
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
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="identifier" value="flutterwave">

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Active</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">
                                                        No</option>
                                                    <option value="1" selected=""
                                                        data-select2-id="select2-data-755-4bm4">
                                                        Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Want to keep test mode
                                                    enabled?</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="0">
                                                        No</option>
                                                    <option value="1" selected=""
                                                        data-select2-id="select2-data-759-a3ss">
                                                        Yes</option>
                                                </select>
                                            </div>

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">Select currency</label>
                                                <select
                                                    class="form-control ol-form-control ol-select2 select2-hidden-accessible">
                                                    <option value="">Select currency</option>

                                                    <option value="YER">YER
                                                    </option>
                                                    <option value="ZMK">ZMK
                                                    </option>

                                                </select>
                                            </div>



                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">public key</label>
                                                <input type="text" name="public_key"
                                                    class="form-control ol-form-control"
                                                    value="FLWPUBK_TEST-48dfbeb50344ecd8bc075b4ffe9ba266-X"
                                                    required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">secret key</label>
                                                <input type="text" name="secret_key"
                                                    class="form-control ol-form-control"
                                                    value="FLWSECK_TEST-1691582e23bd6ee4fb04213ec0b862dd-X"
                                                    required="">
                                            </div>

                                            <div class="row">
                                                <div class="fpb-7 mb-3 col-md-6">
                                                    <button class="btn btn-block ol-btn-primary"
                                                        type="submit">Update
                                                        Flutterwave setting</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-paytm" role="tabpanel"
                                    aria-labelledby="v-pills-paytm-tab" tabindex="0">
                                    <h3 class="title text-14px mb-3">Paytm Settings</h3>
                                    <div class="ol-card-body">
                                        <form action="#/admin/payment_settings/update" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off">
                                            <input type="hidden" name="identifier" value="paytm">

                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">public key</label>
                                                <input type="text" name="public_key"
                                                    class="form-control ol-form-control"
                                                    value="ApLWOX88722132489587" required="">
                                            </div>
                                            <div class="fpb-7 mb-3">
                                                <label class="mb-2 text-capitalize">secret key</label>
                                                <input type="text" name="secret_key"
                                                    class="form-control ol-form-control"
                                                    value="#iFa7&amp;W_C50VL@aT" required="">
                                            </div>

                                            <div class="row">
                                                <div class="fpb-7 mb-3 col-md-6">
                                                    <button class="btn btn-block ol-btn-primary"
                                                        type="submit">Update
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

                <div class="ol-card">
                    <div class="ol-card-body p-20px mb-3">


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs eNav-Tabs-custom eTab" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  active " id="cHome-tab" data-bs-toggle="tab"
                                            data-bs-target="#cHome" type="button" role="tab"
                                            aria-controls="cHome" aria-selected="true">
                                            Pending payouts
                                            <span></span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="cProfile-tab" data-bs-toggle="tab"
                                            data-bs-target="#cProfile" type="button" role="tab"
                                            aria-controls="cProfile" aria-selected="false" tabindex="-1">
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
                                                            <div
                                                                class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                                <div class="dAdmin_profile_img">
                                                                    <img class="img-fluid rounded-circle image-45"
                                                                        width="45" height="45"
                                                                        src="assets/images/img/message-profile-3.svg">
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
                                                            <form action="#/admin/instructor_payment"
                                                                method="post">
                                                                <input type="hidden" name="_token"
                                                                    value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW"
                                                                    autocomplete="off"> <input type="hidden"
                                                                    name="user_id" value="2">
                                                                <input type="hidden" name="amount"
                                                                    value="100">
                                                                <input type="hidden" name="payout_id"
                                                                    value="3">
                                                                <button type="submit"
                                                                    class="btn ol-btn-outline-secondary">
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
                                    <div class="tab-pane fade pt-4" id="cProfile" role="tabpanel"
                                        aria-labelledby="cProfile-tab">

                                        <div class="card-centered-section">
                                            <div class="card-middle-banner">
                                                <img src="#/public/assets/backend/images/img/no-file-search.svg"
                                                    alt="">
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



                <!-- Start table -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Buttons & Badges </h1>

                <div class="ol-card">
                    <div class="ol-card-body p-20px mb-3">
                        <div class="row">
                            <div class="col-md-12 pb-3 d-flex flex-wrap gap-2">
                                <button type="button" class="btn ol-btn-light ol-icon-btn">
                                    <i class="fi-rr-trash"></i>
                                </button>

                                <button type="button" class="btn ol-btn-primary"> Filter</button>

                                <a href="#"
                                    class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
                                    <span class="fi-rr-plus"></span>
                                    <span>Add new enrollment</span>
                                </a>

                                <div class="custom-dropdown ">
                                    <button class="dropdown-header btn ol-btn-light">
                                        Custom Dropdown
                                        <i class="fi-rr-file-export ms-2"></i>
                                    </button>
                                    <ul class="dropdown-list" style="display: none; left: 0px; right: auto;">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="downloadPDF('.print-table', 'enroll-history')"><i
                                                    class="fi-rr-file-pdf"></i> PDF</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="window.print();"><i
                                                    class="fi-rr-print"></i> Print</a>
                                        </li>
                                    </ul>
                                </div>

                                <button type="button" class="btn ol-btn-secondary fw-500"
                                    data-bs-dismiss="modal">Cancel</button>
                                <a href="#" class="confirm-btn btn ol-btn-success fw-500">Confirm</a>
                            </div>

                            <div class="col-md-12 pb-3 d-flex flex-wrap gap-2">
                                <span class="badge bg-success">Success</span>
                                <span class="badge bg-info">Info</span>
                                <span class="badge bg-warning">Warnning</span>
                                <span class="badge bg-danger">Danger</span>
                                <span class="badge bg-secondary">Secondary</span>
                                <span class="badge bg-dark">Dark</span>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Start table -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Empty page </h1>

                <div class="ol-card">
                    <div class="ol-card-body p-3">
                        <!-- Table -->
                        <div class="card-centered-section">
                            <div class="card-middle-banner">
                                <img src="#/public/assets/backend/images/img/no-file-search.svg" alt="">
                            </div>
                            <p class="title2 fs-20px text-center">No data found</p>
                        </div>
                        <!-- Data info and Pagination -->
                    </div>
                </div>



                <!-- Start table -->
                <hr>
                <h1 class="my-5"><i class="fi-rr-sun"></i> Invoice </h1>

                <div class="row">
                    <div class="col-12">
                        <div class="ol-card p-4">
                            <div class="ol-card-body">
                                <div class="p-5 pt-3">
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div class="">
                                                <h4 class="title fs-18px mt-3">Invoice</h4>
                                                <h3 class="eh5 mt-2">#m34YlD4VEnhrnzISUGYW</h3>
                                            </div>

                                            <h6 class="title fs-18px mt-4">Billed To</h6>
                                            <address>
                                                Amber Domore,
                                                student5@example.com
                                            </address>
                                        </div> <!-- end col-->

                                        <div class="col-auto ms-auto">
                                            <div class="d-flex justify-content-between">
                                                <div class="mt-3">
                                                    <img width="200px" src="assets/images/logo-full.svg"
                                                        alt="">

                                                    <div class="ps-3 mt-4">
                                                        <h6 class="title fs-12px">Issue Date</h6>
                                                        <address>
                                                            26-May-2024
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->

                                    </div>
                                    <!-- end row -->

                                    <div class="row purchase_list" id="purchase_list">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table mt-4">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Instructor</th>
                                                            <th>Qty/Hr Rate</th>
                                                            <th class="text-right">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="min-w-250px">
                                                                <b>Complete Blender Creator: Learn 3D Modelling</b>
                                                            </td>
                                                            <td class="min-w-250px">
                                                                <b>John Doe</b>
                                                            </td>
                                                            <td class="min-w-250px">
                                                                1
                                                            </td>
                                                            <td class="min-w-250px">
                                                                69 $
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="min-w-250px">
                                                            </td>
                                                            <td class="min-w-250px">
                                                            </td>
                                                            <td class="min-w-250px">
                                                                <p>
                                                                    <span>Subtotal</span>
                                                                </p>
                                                                <p>
                                                                    <span>Tax</span>
                                                                </p>

                                                                <p>
                                                                    <span>Grand Total</span>
                                                                </p>
                                                            </td>
                                                            <td class="min-w-250px">
                                                                <p>
                                                                    <span>69 $</span>
                                                                </p>
                                                                <p>
                                                                    <span>5 $</span>
                                                                </p>

                                                                <p>
                                                                    <span>64 $</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->


                                    <div class="d-print-none mt-4">
                                        <div class="text-right">
                                            <a href="javascript:void(0)" onclick="printDiv('purchase_list')"
                                                class="btn ol-btn-primary"><i class="fi-rr-print"></i>
                                                Print</a>
                                        </div>
                                    </div>
                                    <!-- end buttons -->
                                </div>


                                <!-- Invoice Logo-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div>
                </div>





















            </div>
        </div>
    </div>
    </main>


    <div class="modal  fade" id="ajaxModal" aria-labelledby="ajaxModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-dark text-16px" id="ajaxModalLabel"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100 text-center py-5">
                        <div class="spinner-border my-5" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn ol-btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmModal" aria-labelledby="ajaxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content pt-2">
                <div class="modal-body text-center">
                    <div class="icon icon-confirm">
                        <i class="fi-rr-exclamation"></i>
                    </div>
                    <p class="title">Are you sure?</p>
                    <p class="">You can&#039;t bring it back!</p>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn ol-btn-secondary fw-500"
                        data-bs-dismiss="modal">Cancel</button>
                    <a href="" class="confirm-btn btn ol-btn-success fw-500">Confirm</a>
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="right-modal" aria-labelledby="right-modalLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title title text-16px" id="right-modalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">AI Assistant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="aiAjaxFormSubmission" action="#open-ai/generate" method="post">
                <input type="hidden" name="_token" value="UQzRLXQ0TGBRQpRQXL94kNkAK4juUyIyQ4hYVMsN"
                    autocomplete="off">
                <div class="mb-3">
                    <label class="form-label ol-form-label" for="ai_service_selector">Select your service</label>
                    <select class="ol-select2" id="ai_service_selector" name="service_type"
                        onchange="if(this.value == 'Course thumbnail'){$('#aiLanguageField').hide()}else{$('#aiLanguageField').show()}">
                        <option value="Course title" data-select2-id="2">Course title</option>
                        <option value="Course short description">Course short description</option>
                        <option value="Course short description">Course long description</option>
                        <option value="Course requirements">Course requirements</option>
                        <option value="Course outcomes">Course outcomes</option>
                        <option value="Course FAQ">Course faq</option>
                        <option value="Course SEO Tags">Course seo tags</option>
                        <option value="Course lesson text">Course lesson text</option>
                        <option value="Course certificate text">Course certificate text</option>
                        <option value="Course quiz text">Course quiz text</option>
                        <option value="Course blog title">Course blog title</option>
                        <option value="Course blog post">Course blog post</option>
                        <option value="Course thumbnail">Course thumbnail</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label ol-form-label" for="ai_keywords">Enter your keyword</label>
                    <input type="text" class="form-control ol-form-control" id="ai_keywords"
                        name="ai_keywords">
                </div>

                <div class="mb-3" id="aiLanguageField">
                    <label class="form-label ol-form-label" for="language">Language</label>
                    <select class="ol-select2" name="language">
                        <option value="english" class="text-capitalize">English</option>
                        <option value="hindi" class="text-capitalize">Hindi</option>
                        <option value="spanish" class="text-capitalize">Spanish</option>
                    </select>
                </div>

                <button type="submit" id="aiSubmissionBtn" class="btn ol-btn-primary w-100">Generate</button>
            </form>

            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 id="aiResultHeader"></h5>
                    <div id="aiGeneratedText" contenteditable="true"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/global/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/global/icon-picker/fontawesome-iconpicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/jquery-form/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/global/tagify-master/dist/tagify.min.js') }}"></script>
    <script src="{{ asset('assets/global/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/html2pdf.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <div class="toast-container position-fixed top-0 end-0 p-3"></div>

    <script>
        "use strict";
        document.addEventListener("DOMContentLoaded", function() {
            // Restore scroll position if it exists in localStorage
            const scrollPos = localStorage.getItem('navScrollPos');
            const sidebarNavArea = document.querySelector('.sidebar-nav-area');
            if (scrollPos) {
                sidebarNavArea.scrollTop = scrollPos;
            }

            // Ensure the active element is visible
            const activeElement = document.querySelector('.sidebar-nav-area .active');
            if (activeElement) {
                const activeElementTop = activeElement.getBoundingClientRect().top;
                const navAreaTop = sidebarNavArea.getBoundingClientRect().top;
                const navAreaBottom = navAreaTop + sidebarNavArea.clientHeight;

                if (activeElementTop < navAreaTop || activeElementTop > navAreaBottom) {
                    sidebarNavArea.scrollTop = activeElement.offsetTop - sidebarNavArea.offsetTop;
                }
            }

            // Save scroll position before page unload
            window.addEventListener('beforeunload', function() {
                localStorage.setItem('navScrollPos', sidebarNavArea.scrollTop);
            });
        });
    </script>

    <script>
        "use strict";

        function showRightModal(url, header) {
            // SHOWING AJAX PRELOADER IMAGE
            jQuery('#right-modal .offcanvas-body').html(
                '<div class="modal-spinner-border"><div class="spinner-border text-secondary" role="status"></div></div>'
            );
            jQuery('#right-modal .offcanvas-title').html("Loading...");
            // LOADING THE AJAX MODAL


            const bsOffcanvas = new bootstrap.Offcanvas('#right-modal');
            bsOffcanvas.show();

            // SHOW AJAX RESPONSE ON REQUEST SUCCESS
            $.ajax({
                url: url,
                success: function(response) {
                    jQuery('#right-modal .offcanvas-title').html(header);
                    jQuery('#right-modal .offcanvas-body').html(response);

                }
            });
        }
    </script>

    <script type="text/javascript">
        "use strict";

        function ajaxModal(url, title, modalClasses = 'modal-md', animation = 'fade') {
            $('#ajaxModal .modal-dialog').removeClass('modal-sm');
            $('#ajaxModal .modal-dialog').removeClass('modal-md');
            $('#ajaxModal .modal-dialog').removeClass('modal-lg');
            $('#ajaxModal .modal-dialog').removeClass('modal-xl');
            $('#ajaxModal .modal-dialog').removeClass('modal-xxl');
            $('#ajaxModal .modal-dialog').removeClass('modal-fullscreen');
            $('#ajaxModal .modal-dialog').addClass(modalClasses);

            $('#ajaxModal').removeClass('fade');
            $('#ajaxModal').addClass(animation);

            $('#ajaxModal .modal-title').html(title);
            $("#ajaxModal").modal('show');
            $.ajax({
                type: 'get',
                url: url,
                success: function(response) {
                    $('#ajaxModal .modal-body').html(response);
                }
            });
        }

        const myModalEl = document.getElementById('ajaxModal')
        myModalEl.addEventListener('hidden.bs.modal', event => {
            $('#ajaxModal .modal-body').html(
                '<div class="w-100 text-center py-5"><div class="spinner-border my-5" role="status"><span class="visually-hidden"></span></div></div>'
            );
        })



        function confirmModal(url, elem = false, actionType = null, content = null) {
            $("#confirmModal").modal('show');

            if (elem != false) {
                $.ajax({
                    url: url,
                    success: function(response) {
                        response = JSON.parse(response);
                        //For redirect to another url
                        if (typeof response.success != "undefined") {
                            window.location.href = response.success;
                        }
                        distributeServerResponse(response);
                    }
                });
            } else {
                $('#confirmModal .confirm-btn').attr('href', url);
                $('#confirmModal .confirm-btn').removeAttr('onclick');
            }
        }
    </script>

    <script type="text/javascript">
        "use strict";

        $(function() {
            //The form of submission to RailTeam js is defined here.(Form class or ID)
            $('.aiAjaxFormSubmission').ajaxForm({
                beforeSend: function() {
                    $('#aiSubmissionBtn').html("Generating");
                    $('#aiSubmissionBtn').attr('disabled', true);
                },
                uploadProgress: function(event, position, total, percentComplete) {

                },
                complete: function(xhr) {
                    var response = xhr.responseText;

                    if (/^[\],:{}\s]*$/.test(response.replace(/\\["\\\/bfnrtu]/g, '@').replace(
                            /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                            ']').replace(/(?:^|:|,)(?:\s*\[)+/g, '')) && $('#ai_service_selector')
                        .val() == 'Course thumbnail') {
                        var parsedJson = JSON.parse(response);
                        $('#aiGeneratedText').html('<div class="row"></div>');
                        console.log(parsedJson.length);
                        for (let i = 0; i < parsedJson.length; i++) {
                            var exi = i + 1;
                            var img =
                                '<div class="w-50 p-2 position-relative"><a class="position-absolute btn btn-success px-1 py-0 m-1" href="admin/ai_img_download?index=' +
                                exi +
                                '" target="_blank"><i class="fas fa-download"></i></a><img class="radius-5px" width="100%" src="' +
                                parsedJson[i].url +
                                '"></div>';
                            $('#aiGeneratedText .row').append(img);
                        }
                        $('#aiResultHeader').html('Your images:');
                        $('#aiGeneratedText').attr('contenteditable', 'false');
                    } else {
                        $('#aiGeneratedText').html(response);
                        $('#aiGeneratedText').append('<input type="text" value="' + response +
                            '" id="generatedAiText" class="visibility-hidden">');
                        $('#aiResultHeader').html(
                            '<span class="text-14px">Generated text:</span> <a href="javascript:;" onclick="copy_text(this)" data-toggle="tooltip" data-placement="top" title="Copy" class="float-right btn p-0"><i class="far fa-copy"></i> Copy</a>'
                        );
                    }


                    $('#aiSubmissionBtn').html("Generate");
                    $('#aiSubmissionBtn').attr('disabled', false);
                },
                error: function() {
                    //You can write here your js error message
                }
            });
        });

        function copy_text(e) {
            // Get the text field
            var copyText = document.getElementById("generatedAiText");
            console.log(copyText);

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            $(e).html('<i class="far fa-copy"></i> Copied!')
        }
    </script>

    <script>
        "use strict";

        function toaster_message(type, icon, header, message) {
            var toasterMessage = '<div class="toast ' + type +
                ' fade" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"> <i class="' +
                icon + ' me-2 mt-2px text-20px"></i> <strong class="me-auto"> ' + header +
                ' </strong><small>Just Now</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">' +
                message + '</div></div>';
            $('.toast-container').prepend(toasterMessage);
            const toast = new bootstrap.Toast('.toast')
            toast.show()
        }

        function success(message) {
            toaster_message('success', 'fi-sr-badge-check', 'Success !', message);
        }

        function warning(message) {
            toaster_message('warning', 'fi-sr-exclamation', 'Attention !', message);
        }

        function error(message) {
            toaster_message('error', 'fi-sr-triangle-warning', 'An Error Occurred !', message);
        }
    </script>

    <script>
        "use strict";

        $(function() {
            $('a[href="#"]').on('click', function(event) {
                event.preventDefault();
            });
        });

        function redirectTo(url) {
            $(location).attr('href', url);
        }

        function actionTo(url, type = "get") {
            //Start prepare get url to post value
            var jsonFormate = '{}';
            if (type == 'post') {
                let pieces = url.split(/[\s?]+/);
                let lastString = pieces[pieces.length - 1];
                jsonFormate = '{"' + lastString.replace('=', '":"').replace("&", '","').replace("=", '":"').replace("&",
                    '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=",
                    '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&",
                    '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=",
                    '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&",
                    '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","') + '"}';
            }
            jsonFormate = JSON.parse(jsonFormate);
            //End prepare get url to post value
            $.ajax({
                type: type,
                url: url,
                data: jsonFormate,
                headers: {
                    'X-CSRF-TOKEN': 'UQzRLXQ0TGBRQpRQXL94kNkAK4juUyIyQ4hYVMsN'
                },
                success: function(response) {
                    distributeServerResponse(response);
                }
            });
        }

        //Server response distribute
        function distributeServerResponse(response) {
            try {
                JSON.parse(response);
                var isValidJson = true;
            } catch (error) {
                var isValidJson = false;
            }
            if (isValidJson) {
                response = JSON.parse(response);
                //For reload after submission
                if (typeof response.reload != "undefined" && response.reload != 0) {
                    location.reload();
                }

                //For redirect to another url
                if (typeof response.redirectTo != "undefined" && response.redirectTo != 0) {
                    $(location).attr('href', response.redirectTo);
                }

                //for show a element
                if (typeof response.show != "undefined" && response.show != 0 && $(response.show).length) {
                    $(response.show).css('display', 'inline-block');
                }
                //for hide a element
                if (typeof response.hide != "undefined" && response.hide != 0 && $(response.hide).length) {
                    $(response.hide).hide();
                }
                //for fade in a element
                if (typeof response.fadeIn != "undefined" && response.fadeIn != 0 && $(response.fadeIn).length) {
                    $(response.fadeIn).fadeIn();
                }
                //for fade out a element
                if (typeof response.fadeOut != "undefined" && response.fadeOut != 0 && $(response.fadeOut).length) {
                    $(response.fadeOut).fadeOut();
                }

                //For adding a class
                if (typeof response.addClass != "undefined" && response.addClass != 0 && $(response.addClass.elem).length) {
                    $(response.addClass.elem).addClass(response.addClass.content);
                }
                //For remove a class
                if (typeof response.removeClass != "undefined" && response.removeClass != 0 && $(response.removeClass.elem)
                    .length) {
                    $(response.removeClass.elem).removeClass(response.removeClass.content);
                }
                //For toggle a class
                if (typeof response.toggleClass != "undefined" && response.toggleClass != 0 && $(response.toggleClass.elem)
                    .length) {
                    $(response.toggleClass.elem).toggleClass(response.toggleClass.content);
                }

                //For showing error message
                if (typeof response.error != "undefined" && response.error != 0) {
                    error(response.error);
                }
                //For showing warning message
                if (typeof response.warning != "undefined" && response.warning != 0) {
                    warning(response.warning);
                }
                //For showing success message
                if (typeof response.success != "undefined" && response.success != 0) {
                    success(response.success);
                }

                //For replace texts in a specific element
                if (typeof response.text != "undefined" && response.text != 0 && $(response.text.elem).length) {
                    $(response.text.elem).text(response.text.content);
                }
                //For replace elements in a specific element
                if (typeof response.html != "undefined" && response.html != 0 && $(response.html.elem).length) {
                    $(response.html.elem).html(response.html.content);
                }
                //For replace elements in a specific element
                if (typeof response.load != "undefined" && response.load != 0 && $(response.load.elem).length) {
                    $(response.load.elem).html(response.load.content);
                }
                //For appending elements
                if (typeof response.append != "undefined" && response.append != 0 && $(response.append.elem).length) {
                    $(response.append.elem).append(response.append.content);
                }
                //Fo prepending elements
                if (typeof response.prepend != "undefined" && response.prepend != 0 && $(response.prepend.elem).length) {
                    $(response.prepend.elem).prepend(response.prepend.content);
                }
                //For appending elements after a element
                if (typeof response.after != "undefined" && response.after != 0 && $(response.after.elem).length) {
                    $(response.after.elem).after(response.after.content);
                }

                // Update the browser URL and add a new entry to the history
                if (typeof response.pushState != "undefined" && response.pushState != 0) {
                    history.pushState({}, response.pushState.title, response.pushState.url);
                }
                //For form validation Error
                if (typeof response.validationError != "undefined" && response.validationError != 0) {
                    $('.form-validation-error-label').remove();
                    let errorList = '<ul>';
                    Object.keys(response.validationError).forEach(key => {
                        if ($("[name=" + key + "]").length > 0) {
                            $("[name=" + key + "]").after(
                                '<small class="text-danger text-12px form-validation-error-label">' + response
                                .validationError[key][0] + '</small>');
                        } else if ($("input[name='" + key + "[]']").length > 0) {
                            $("input[name='" + key + "[]']").after(
                                '<small class="text-danger text-12px form-validation-error-label">' +
                                response.validationError[key][0] + '</small>');
                        }

                        errorList = errorList + '<li>' + response.validationError[key][0] + '</li>';
                    });
                    errorList = errorList + '</ul>';

                    error(errorList);
                }

                if (typeof response.script != "undefined" && response.script != 0) {
                    response.script
                }
            }
        }

        function loadView(url, element, check_already_loaded) {
            if ($(element).text() == '' && check_already_loaded || !check_already_loaded) {
                $.ajax({
                    url: url,
                    success: function(response) {
                        $(element).html(response);
                    }
                });
            }
        }

        function downloadPDF(elem = ".print-table", fileName = 'data') {
            $('.print-d-none:not(.row, .ol-header, .ol-card)').addClass('d-none');
            // Get the table element as HTML
            const table = document.querySelector(elem);

            // Options for html2pdf
            const options = {
                margin: 0.5,
                filename: fileName,
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };

            // Generate PDF from the table
            if (html2pdf().from(table).set(options).save()) {
                setInterval(() => {
                    $('.print-d-none').removeClass('d-none');
                }, 2000);
            }

        }

        function downloadTableAsCSV(elem, filename = 'data.csv') {
            // Select the table element
            var table = document.querySelector(elem);

            // Initialize CSV string
            var csv = [];

            // Iterate over table rows
            var rows = table.rows;
            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].cells;

                // Iterate over table cells
                for (var j = 0; j < cols.length; j++) {
                    row.push(cols[j].innerText);
                }

                // Join the row elements with commas
                csv.push(row.join(','));
            }

            // Join the rows with newline character
            var csvData = csv.join('\n');

            // Create a Blob object containing the CSV data
            var blob = new Blob([csvData], {
                type: 'text/csv'
            });

            // Create a temporary link to trigger the download
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = filename + '.csv';
            document.body.appendChild(link);
            link.trigger('click');
            document.body.removeChild(link);
        }
    </script>
    <script type="text/javascript">
        "use strict";

        $(function() {
            // Date range picker
            if ($('.daterangepicker:not(.inited)').length) {
                $('.daterangepicker:not(.inited)').daterangepicker();
                $('.daterangepicker:not(.inited)').addClass('inited');
            }

            // icon picker
            if ($('.icon-picker:not(.inited)').length) {
                $('.icon-picker:not(.inited)').iconpicker();
                $('.icon-picker:not(.inited)').addClass('inited');
            }

            //Select 2
            if ($('#ajaxModal select.ol-select2:not(.inited)').length) {
                $('#ajaxModal select.ol-select2:not(.inited)').select2({
                    dropdownParent: $('#ajaxModal')
                });
                $('#ajaxModal select.ol-select2:not(.inited)').addClass('inited');
            }
            if ($('#right-modal select.ol-select2:not(.inited)').length) {
                $('#right-modal select.ol-select2:not(.inited)').select2({
                    dropdownParent: $('#right-modal')
                });
                $('#right-modal select.ol-select2:not(.inited)').addClass('inited');
            }
            if ($('select.ol-select2:not(.inited)').length) {
                $('select.ol-select2:not(.inited)').select2();
                $('select.ol-select2:not(.inited)').addClass('inited');
            }

            if ($('#ajaxModal select.select2:not(.inited)').length) {
                $('#ajaxModal select.select2:not(.inited)').select2({
                    dropdownParent: $('#ajaxModal')
                });
                $('#ajaxModal select.select2:not(.inited)').addClass('inited');
            }
            if ($('#right-modal select.select2:not(.inited)').length) {
                $('#right-modal select.select2:not(.inited)').select2({
                    dropdownParent: $('#right-modal')
                });
                $('#right-modal select.select2:not(.inited)').addClass('inited');
            }
            if ($('select.select2:not(.inited)').length) {
                $('select.select2:not(.inited)').select2();
                $('select.select2:not(.inited)').addClass('inited');
            }

            //Text editor
            if ($('.text_editor:not(.inited)').length) {
                $('.text_editor:not(.inited)').summernote({
                    height: 180, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    toolbar: [
                        ['color', ['color']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol']],
                        ['table', ['table']],
                        ['insert', ['link']]
                    ]
                });
                $('.text_editor:not(.inited)').addClass('inited');
            }
            //summary, note_for_student, short_description, message, biography, type-msg, id="comment", summernote, address, website_description


            $('.tagify:not(.inited)').each(function(index, element) {
                var tagify = new Tagify(element, {
                    placeholder: 'Enter your keywords'
                });
                $(element).addClass('inited');
            });

            var formElement;
            if ($('.ajaxForm:not(.initialized)').length > 0) {
                $('.ajaxForm:not(.initialized)').ajaxForm({
                    beforeSend: function(data, form) {
                        var formElement = $(form);
                    },
                    uploadProgress: function(event, position, total, percentComplete) {},
                    complete: function(xhr) {

                        setTimeout(function() {
                            distributeServerResponse(xhr.responseText);
                        }, 400);

                        if ($('.ajaxForm.resetable').length > 0) {
                            $('.ajaxForm.resetable')[0].reset();
                        }
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                $('.ajaxForm:not(.initialized)').addClass('initialized');
            }
        });



        function printDiv(divId) {
            var printContents = document.getElementById(divId).outerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendors/chart-js/chart.js"></script>



    <script>
        "use strict";

        const xValues = [0, "January", "February", "March", "April", "May", "June", "July", "August", "September",
            "October", "November", "December"
        ];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label: "Admin Revenue",
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: [0, 0, 0, 0, 0, 1302.912, 0, 0, 0, 0, 0, 0, 0]
                }]
            },
            options: {
                legend: {
                    display: true
                },
            }
        });


        // Pie Chart 2
        const project_progress2 = document.getElementById('pie2');
        const progressData2 = {
            labels: ['Active', 'Upcoming', 'Pending', 'Private', 'Draft', 'Inactive'],
            data: [8, 1, 0, 0, 0, 0],
        };
        var barColors = [
            "#12c093",
            "#1b84ff",
            "#ff2583",
            "#000",
            "#878d97",
            "#dadada",
        ];
        new Chart(project_progress2, {
            type: 'doughnut',
            data: {
                labels: progressData2.labels,
                datasets: [{
                    backgroundColor: barColors,
                    label: ' Courses',
                    data: progressData2.data,
                }, ],
            },
            options: {
                responsive: true,
                borderWidth: 5,
                hoverBorderColor: '#fff',
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });
    </script>

    <script type="text/javascript">
        "use strict";

        let blank_faq = jQuery('#blank_faq_field').html();
        let blank_motivational_speech = jQuery('#blank_motivational_speech_field').html();
        $(document).ready(function() {

            jQuery('#blank_faq_field').hide();
            jQuery('#blank_motivational_speech_field').hide();

        });

        function appendFaq() {
            jQuery('#faq_area').append(blank_faq);
        }

        function removeFaq(faqElem) {
            jQuery(faqElem).parent().parent().remove();
        }

        function appendMotivational_speech() {
            jQuery('#motivational_speech_area').append(blank_motivational_speech);
        }

        function removeMotivational_speech(faqElem) {
            jQuery(faqElem).parent().parent().remove();
        }
    </script>
</body>

</html>
