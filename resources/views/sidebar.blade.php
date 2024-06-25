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

                <li class="sidebar-first-li">
                    <a href="{{ route('palette') }}">
                        <span class="icon fi-rr-house-blank"></span>
                        <div class="text">
                            <span>Editor</span>
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
