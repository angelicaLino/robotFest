<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Edmate Learning Dashboard HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_private/images/logo/favicon.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/bootstrap.min.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/file-upload.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/plyr.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css') }}">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/full-calendar.css') }}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/jquery-ui.css') }}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/editor-quill.css') }}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/apexcharts.css') }}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/calendar.css') }}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/jquery-jvectormap-2.0.5.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/main.css') }}">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

<aside class="sidebar">
    <!-- sidebar close btn -->
     <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
    <!-- sidebar close btn -->
    
    <a href="index.html" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="{{ asset('assets_private/images/logo/selloemi.png') }}" alt="Logo">
    </a>

    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Dashboard</span>
                        <span class="link-badge">3</span>
                    </a>
                    <!-- Submenu t -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="index.html" class="sidebar-submenu__link"> Dashboard One </a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="index-2.html" class="sidebar-submenu__link"> Dashboard Two </a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="index-3.html" class="sidebar-submenu__link"> Dashboard Three </a>
                        </li>
                    </ul>
                    <!-- Submenu End -->
                </li>
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                        <span class="text">Courses</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="student-courses.html" class="sidebar-submenu__link"> Student Courses </a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="mentor-courses.html" class="sidebar-submenu__link"> Mentor Courses </a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="create-course.html" class="sidebar-submenu__link"> Create Course </a>
                        </li>
                    </ul>
                    <!-- Equipos -->
                </li>
                <li class="sidebar-menu__item">
                    <a href="students.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users-three"></i></span>
                        <span class="text">Equipos</span>
                    </a>
                </li>
                
                <li class="sidebar-menu__item">
                    <a href="mentors.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users"></i></span>
                        <span class="text">Usuarios</span>
                    </a>
                </li>
                 </li>
                <li class="sidebar-menu__item">
                    <a href="assignment.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                        <span class="text">Assignments</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="resources.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-bookmarks"></i></span>
                        <span class="text">Resources</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="message.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
                        <span class="text">Messages</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="analytics.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-chart-bar"></i></span>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="event.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-calendar-dots"></i></span>
                        <span class="text">Events</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="library.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-books"></i></span>
                        <span class="text">Library</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="pricing-plan.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-coins"></i></span>
                        <span class="text">Pricing</span>
                    </a>
                </li>
                
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="setting.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">Account Settings</span>
                    </a>
                </li>

                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-shield-check"></i></span>
                        <span class="text">Authetication</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="sign-in.html" class="sidebar-submenu__link">Sign In</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="sign-up.html" class="sidebar-submenu__link">Sign Up</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="forgot-password.html" class="sidebar-submenu__link">Forgot Password</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="reset-password.html" class="sidebar-submenu__link">Reset Password</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="verify-email.html" class="sidebar-submenu__link">Verify Email</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="two-step-verification.html" class="sidebar-submenu__link">Two Step Verification</a>
                        </li>
                    </ul>
                    <!-- Submenu End -->
                </li>
                
            </ul>
        </div>
        <div class="p-20 pt-80">
            <div class="bg-main-50 p-20 pt-0 rounded-16 text-center mt-74">
                <span class="border border-5 bg-white mx-auto border-primary-50 w-114 h-114 rounded-circle flex-center text-success-600 text-2xl translate-n74">
                    <img src="{{ asset('assets_private/images/icons/certificate.png') }}" alt="" class="centerised-img">
                </span>
                <div class="mt-n74">
                    <h5 class="mb-4 mt-22">Get Pro Certificate</h5>
                    <p class="">Explore 400+ courses with lifetime members</p>
                    <a href="pricing-plan.html" class="btn btn-main mt-16 rounded-pill">Get Access</a>
                </div>
            </div>
        </div>
    </div>

</aside>    
<!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

    <div class="flex-align gap-16">
        <!-- Toggle Button Start -->
         <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
        <!-- Toggle Button End -->
        
        <form action="#" class="w-350 d-sm-block d-none">
            <div class="position-relative">
                <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i class="ph ph-magnifying-glass"></i></button> 
                <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
            </div>
        </form>
    </div>

    <div class="flex-align gap-16">
        <div class="flex-align gap-8">
            <!-- Notification Start -->
            <div class="dropdown">
                <button class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="position-relative">
                        <i class="ph ph-bell"></i>
                        <span class="alarm-notify position-absolute end-0"></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom p-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="py-8 px-24 bg-main-600">
                                <div class="flex-between">
                                    <h5 class="text-xl fw-semibold text-white mb-0">Notifications</h5>
                                    <div class="flex-align gap-12">
                                        <button type="button" class="bg-white rounded-6 text-sm px-8 py-2 hover-text-primary-600"> New </button>
                                        <button type="button" class="close-dropdown hover-scale-1 text-xl text-white"><i class="ph ph-x"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-24 max-h-270 overflow-y-auto scroll-sm">
                                <div class="d-flex align-items-start gap-12">
                                    <img src="{{ asset('assets_private/images/thumbs/notification-img1.png') }}" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="border-bottom border-gray-100 mb-24 pb-24">
                                        <div class="flex-align gap-4">
                                            <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Ashwin Bose is requesting access to Design File - Final Project. </a>
                                            <!-- Three Dot Dropdown Start -->
                                            <div class="dropdown flex-shrink-0">
                                                <button class="text-gray-200 rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ph-fill ph-dots-three-outline"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                        <div class="card-body p-12">
                                                            <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                                <ul>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Mark as read</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Delete Notification</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Report</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Three Dot Dropdown End -->
                                        </div>
                                        <div class="flex-align gap-6 mt-8">
                                            <img src="{{ asset('assets_private/images/icons/google-drive.png') }}" alt="">
                                            <div class="flex-align gap-4">
                                                <p class="text-gray-900 text-sm text-line-1">Design brief and ideas.txt</p>
                                                <span class="text-xs text-gray-200 flex-shrink-0">2.2 MB</span>
                                            </div>
                                        </div>
                                        <div class="mt-16 flex-align gap-8">
                                            <button type="button" class="btn btn-main py-8 text-15 fw-normal px-16">Accept</button>
                                            <button type="button" class="btn btn-outline-gray py-8 text-15 fw-normal px-16">Decline</button>
                                        </div>
                                        <span class="text-gray-200 text-13 mt-8">2 mins ago</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-12">
                                    <img src="{{ asset('assets_private/images/thumbs/notification-img2.png') }}" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="">
                                        <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Patrick added a comment on Design Assets - Smart Tags file:</a>
                                        <span class="text-gray-200 text-13">2 mins ago</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline"> View All </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Notification Start -->
            
            <!-- Language Start -->
            <div class="dropdown">
                <button class="text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ph ph-globe"></i>
                </button>
                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                        <div class="card-body">
                            <div class="max-h-270 overflow-y-auto scroll-sm pe-8">
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="arabic"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="{{ asset('assets_private/images/thumbs/flag1.png') }}" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Arabic</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="arabic">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="germany"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="{{ asset('assets_private/images/thumbs/flag2.png') }}" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Germany</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="germany">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="english"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="{{ asset('assets_private/images/thumbs/flag3.png') }}" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">English</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="english">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="spanish"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="{{ asset('assets_private/images/thumbs/flag4.png') }}" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Spanish</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="spanish">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Language Start -->
        </div>


        <!-- User Profile Start -->
        <div class="dropdown">
            <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="position-relative">
                    <img src="{{ asset('assets_private/images/thumbs/user-img.png') }}" alt="Image" class="h-32 w-32 rounded-circle">
                    <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                    <div class="card-body">
                        <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                            <img src="{{ asset('assets_private/images/thumbs/user-img.png') }}" alt="" class="w-54 h-54 rounded-circle">
                            <div class="">
                                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                <p class="fw-medium text-13 text-gray-200">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                            <li class="mb-4">
                                <a href="setting.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-gear"></i></span>
                                    <span class="text">Account Settings</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="pricing-plan.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-bar"></i></span>
                                    <span class="text">Upgrade Plan</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="analytics.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-line-up"></i></span>
                                    <span class="text">Daily Activity</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="message.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chats-teardrop"></i></span>
                                    <span class="text">Inbox</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="email.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-envelope-simple"></i></span>
                                    <span class="text">Email</span>
                                </a>
                            </li>
                            <li class="pt-8 border-top border-gray-100">
                                <a href="sign-in.html" class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-danger-600 d-flex"><i class="ph ph-sign-out"></i></span>
                                    <span class="text">Log Out</span>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile Start -->

    </div>
</div>

        
        <div class="dashboard-body">
           
            <div class="row gy-4">
                <div class="col-lg-9">
                    <!-- Widgets Start -->
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2">155+</h4>
                                    <span class="text-gray-600">Completed Courses</span>
                                    <div class="flex-between gap-8 mt-16">
                                        <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i class="ph-fill ph-book-open"></i></span>
                                        <div id="complete-course" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2">39+</h4>
                                    <span class="text-gray-600">Earned Certificate</span>
                                    <div class="flex-between gap-8 mt-16">
                                        <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-two-600 text-white text-2xl"><i class="ph-fill ph-certificate"></i></span>
                                        <div id="earned-certificate" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2">25+</h4>
                                    <span class="text-gray-600">Course in Progress</span>
                                    <div class="flex-between gap-8 mt-16">
                                        <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl"> <i class="ph-fill ph-graduation-cap"></i></span>
                                        <div id="course-progress" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2">18k+</h4>
                                    <span class="text-gray-600">Community Support</span>
                                    <div class="flex-between gap-8 mt-16">
                                        <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-warning-600 text-white text-2xl"><i class="ph-fill ph-users-three"></i></span>
                                        <div id="community-support" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Widgets End -->

                    <!-- Top Course Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h4 class="mb-0">Study Statistics</h4>
                                <div class="flex-align gap-16 flex-wrap">
                                    <div class="flex-align flex-wrap gap-16">
                                        <div class="flex-align flex-wrap gap-8">
                                            <span class="w-8 h-8 rounded-circle bg-main-600"></span>
                                            <span class="text-13 text-gray-600">Study</span>
                                        </div>
                                        <div class="flex-align flex-wrap gap-8">
                                            <span class="w-8 h-8 rounded-circle bg-main-two-600"></span>
                                            <span class="text-13 text-gray-600">Test</span>
                                        </div>
                                    </div>
                                    <select class="form-select form-control text-13 px-8 pe-24 py-8 rounded-8 w-auto">
                                        <option value="1">Yearly</option>
                                        <option value="1">Monthly</option>
                                        <option value="1">Weekly</option>
                                        <option value="1">Today</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div id="doubleLineChart" class="tooltip-style y-value-left"></div>
                            
                        </div>
                    </div>
                    <!-- Top Course End -->

                    <!-- Top Course Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h4 class="mb-0">Top Courses Pick for You</h4>
                                <a href="student-courses.html" class="text-13 fw-medium text-main-600 hover-text-decoration-underline">See All</a>
                            </div>
                            
                            <div class="row g-20">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('assets_private/images/thumbs/course-img1.png') }}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Development</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Full Stack Web Development</a></h5>

                                                <div class="flex-align gap-8 flex-wrap mt-16">
                                                    <img src="{{ asset('assets_private/images/thumbs/user-img1.png') }}" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                                    <div>
                                                        <span class="text-gray-600 text-13">Created by <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Albert James</a> </span>
                                                    </div>
                                                </div>

                                                <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-video-camera"></i></span>
                                                        <span class="text-13 text-gray-600">24 Lesson</span>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                        <span class="text-13 text-gray-600">40 Hours</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-13 fw-bold text-gray-600">4.9</span>
                                                        <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                                    </div>
                                                    <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('assets_private/images/thumbs/course-img5.png') }}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-warning-50 text-warning-600 mb-16">Design</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Design System</a></h5>

                                                <div class="flex-align gap-8 flex-wrap mt-16">
                                                    <img src="{{ asset('assets_private/images/thumbs/user-img5.png') }}" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                                    <div>
                                                        <span class="text-gray-600 text-13">Created by <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Albert James</a> </span>
                                                    </div>
                                                </div>

                                                <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-video-camera"></i></span>
                                                        <span class="text-13 text-gray-600">24 Lesson</span>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                        <span class="text-13 text-gray-600">40 Hours</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-13 fw-bold text-gray-600">4.9</span>
                                                        <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                                    </div>
                                                    <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="{{ asset('assets_private/images/thumbs/course-img6.png') }}" alt="Course Image">
                                            </a>
                                            <div class="p-8">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-danger-50 text-danger-600 mb-16">Frontend</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">React Native Courese</a></h5>

                                                <div class="flex-align gap-8 flex-wrap mt-16">
                                                    <img src="{{ asset('assets_private/images/thumbs/user-img6.png') }}" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                                    <div>
                                                        <span class="text-gray-600 text-13">Created by <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Albert James</a> </span>
                                                    </div>
                                                </div>

                                                <div class="flex-align gap-8 mt-12 pt-12 border-top border-gray-100">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-video-camera"></i></span>
                                                        <span class="text-13 text-gray-600">24 Lesson</span>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                        <span class="text-13 text-gray-600">40 Hours</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-13 fw-bold text-gray-600">4.9</span>
                                                        <span class="text-13 fw-bold text-gray-600">(12k)</span>
                                                    </div>
                                                    <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Course End -->
                </div>

                <div class="col-lg-3">
                    <!-- Calendar Start -->
                    <div class="card">
                        <div class="card-body">
                            <div class="calendar">
                                <div class="calendar__header">
                                    <button type="button" class="calendar__arrow left"><i class="ph ph-caret-left"></i></button>
                                    <p class="display h6 mb-0">""</p>
                                    <button type="button" class="calendar__arrow right"><i class="ph ph-caret-right"></i></button>
                                </div>
                            
                                <div class="calendar__week week">
                                    <div class="calendar__week-text">Su</div>
                                    <div class="calendar__week-text">Mo</div>
                                    <div class="calendar__week-text">Tu</div>
                                    <div class="calendar__week-text">We</div>
                                    <div class="calendar__week-text">Th</div>
                                    <div class="calendar__week-text">Fr</div>
                                    <div class="calendar__week-text">Sa</div>
                                </div>
                                <div class="days"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Calendar End -->
                    
                    <!-- Assignment Start -->
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h4 class="mb-0">Assignments</h4>
                                <a href="assignment.html" class="text-13 fw-medium text-main-600 hover-text-decoration-underline">See All</a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="ph-fill ph-graduation-cap"></i></span>
                                    <div>
                                        <h6 class="mb-0">Do The Research</h6>
                                        <span class="text-13 text-gray-400">Due in 9 days</span>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="ph ph-code"></i></span>
                                    <div>
                                        <h6 class="mb-0">PHP Dvelopment</h6>
                                        <span class="text-13 text-gray-400">Due in 2 days</span>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                            <div class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1">
                                <div class="flex-align flex-wrap gap-8">
                                    <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i class="ph ph-bezier-curve"></i></span>
                                    <div>
                                        <h6 class="mb-0">Graphic Design</h6>
                                        <span class="text-13 text-gray-400">Due in 5 days</span>
                                    </div>
                                </div>
                                <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Assignment End -->
                    
                    <!-- Progress Bar Start -->
                    <div class="card mt-24">
                        <div class="card-header border-bottom border-gray-100">
                            <h5 class="mb-0">My Progress</h5>
                        </div>
                        <div class="card-body">
                           <div id="radialMultipleBar"></div>

                           <div class="">
                                <h6 class="text-lg mb-16 text-center"> <span class="text-gray-400">Total hour:</span> 6h 32 min</h6>
                                <div class="flex-between gap-8 flex-wrap">
                                    <div class="flex-align flex-column">
                                        <h6 class="mb-6">60/60</h6>
                                        <span class="w-30 h-3 rounded-pill bg-main-600"></span>
                                        <span class="text-13 mt-6 text-gray-600">Completed</span>
                                    </div>
                                    <div class="flex-align flex-column">
                                        <h6 class="mb-6">60/60</h6>
                                        <span class="w-30 h-3 rounded-pill bg-main-two-600"></span>
                                        <span class="text-13 mt-6 text-gray-600">Completed</span>
                                    </div>
                                    <div class="flex-align flex-column">
                                        <h6 class="mb-6">60/60</h6>
                                        <span class="w-30 h-3 rounded-pill bg-gray-500"></span>
                                        <span class="text-13 mt-6 text-gray-600">Completed</span>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- Progress bar end -->
                </div>

            </div>
        </div>
        <div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
        <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright Edmate 2024, All Right Reserverd</p>
        <div class="flex-align flex-wrap gap-16">
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">More Themes</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Documentation</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
        </div>
    </div>
</div>
    </div>
    
        <!-- Jquery js -->
    <script src="{{ asset('assets_private/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets_private/js/boostrap.bundle.min.js') }}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('assets_private/js/phosphor-icon.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets_private/js/file-upload.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets_private/js/plyr.js') }}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js') }}"></script>
    <!-- full calendar -->
    <script src="{{ asset('assets_private/js/full-calendar.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets_private/js/jquery-ui.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets_private/js/editor-quill.js') }}"></script>
    <!-- apex charts -->
    <script src="{{ asset('assets_private/js/apexcharts.min.js') }}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('assets_private/js/calendar.js') }}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('assets_private/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('assets_private/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    
    <!-- main js -->
    <script src="{{ asset('assets_private/js/main.js') }}"></script>




    <script>
        function createChart(chartId, chartColor) {

            let currentYear = new Date().getFullYear();

            var options = {
            series: [
                {
                    name: 'series1',
                    data: [18, 25, 22, 40, 34, 55, 50, 60, 55, 65],
                },
            ],
            chart: {
                type: 'area',
                width: 80,
                height: 42,
                sparkline: {
                    enabled: true // Remove whitespace
                },

                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 1,
                colors: [chartColor],
                lineCap: 'round'
            },
            grid: {
                show: true,
                borderColor: 'transparent',
                strokeDashArray: 0,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },   
                yaxis: {
                    lines: {
                        show: false
                    }
                },  
                row: {
                    colors: undefined,
                    opacity: 0.5
                },  
                column: {
                    colors: undefined,
                    opacity: 0.5
                },  
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },  
            },
            fill: {
                type: 'gradient',
                colors: [chartColor], // Set the starting color (top color) here
                gradient: {
                    shade: 'light', // Gradient shading type
                    type: 'vertical',  // Gradient direction (vertical)
                    shadeIntensity: 0.5, // Intensity of the gradient shading
                    gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                    inverseColors: false, // Do not invert colors
                    opacityFrom: .5, // Starting opacity
                    opacityTo: 0.3,  // Ending opacity
                    stops: [0, 100],
                },
            },
            // Customize the circle marker color on hover
            markers: {
                colors: [chartColor],
                strokeWidth: 2,
                size: 0,
                hover: {
                    size: 8
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                tooltip: {
                    enabled: false,
                },
            },
            yaxis: {
                labels: {
                    show: false
                }
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            };

            var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
            chart.render();
        }

        // Call the function for each chart with the desired ID and color
        createChart('complete-course', '#2FB2AB');
        createChart('earned-certificate', '#27CFA7');
        createChart('course-progress', '#6142FF');
        createChart('community-support', '#FA902F');


        // =========================== Double Line Chart Start ===============================
        function createLineChart(chartId, chartColor) {
            var options = {
            series: [
                {
                    name: 'Study',
                    data: [8, 15, 9, 20, 10, 33, 13, 22, 8, 17, 10, 15],
                },
                {
                    name: 'Test',
                    data: [8, 24, 18, 40, 18, 48, 22, 38, 18, 30, 20, 28],
                },
            ],
            chart: {
                type: 'area',
                width: '100%',
                height: 300,
                sparkline: {
                    enabled: false // Remove whitespace
                },
                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            colors: ['#3D7FF9', chartColor],  // Set the color of the series
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth',
                width: 1,
                colors: ["#3D7FF9", chartColor],
                lineCap: 'round',
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.9,  // Decrease this value to reduce opacity
                    opacityTo: 0.2,    // Decrease this value to reduce opacity
                    stops: [0, 100]
                }
            },
            grid: {
                show: true,
                borderColor: '#E6E6E6',
                strokeDashArray: 3,
                position: 'back',
                xaxis: {
                    lines: {
                        show: false
                    }
                },   
                yaxis: {
                    lines: {
                        show: true
                    }
                },  
                row: {
                    colors: undefined,
                    opacity: 0.5
                },  
                column: {
                    colors: undefined,
                    opacity: 0.5
                },  
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },  
            },
            // Customize the circle marker color on hover
            markers: {
                colors: ["#3D7FF9", chartColor],
                strokeWidth: 3,
                size: 0,
                hover: {
                    size: 8
                }
            },
                xaxis: {
                    labels: {
                        show: false
                    },
                    categories: [`Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`],
                    tooltip: {
                        enabled: false,        
                    },
                    labels: {
                        formatter: function (value) {
                            return value;
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
                },
                yaxis: {
                        labels: {
                            formatter: function (value) {
                                return "$" + value + "Hr";
                            },
                            style: {
                                fontSize: "14px"
                            }
                        },
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
                legend: {
                    show: false,
                    position: 'top',
                    horizontalAlign: 'right',
                    offsetX: -10,
                    offsetY: -0
                }
            };

            var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
            chart.render();
        }
        createLineChart('doubleLineChart', '#27CFA7');
        // =========================== Double Line Chart End ===============================

        // ================================= Multiple Radial Bar Chart Start =============================
        var options = {
            series: [100, 60, 25],
            chart: {
                height: 172,
                type: 'radialBar',
            },
            colors: ['#3D7FF9', '#27CFA7', '#020203'], 
            stroke: {
                lineCap: 'round',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '30%',  // Adjust this value to control the bar width
                    },
                    dataLabels: {
                        name: {
                            fontSize: '16px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            formatter: function (w) {
                                return '82%'
                            }
                        }
                    }
                }
            },
            labels: ['Completed', 'In Progress', 'Not Started'],
        };

        var chart = new ApexCharts(document.querySelector("#radialMultipleBar"), options);
        chart.render();
        // ================================= Multiple Radial Bar Chart End =============================

        // ========================== Export Js Start ==============================
        document.getElementById('exportOptions').addEventListener('change', function() {
            const format = this.value;
            const table = document.getElementById('studentTable');
            let data = [];
            const headers = [];
            
            // Get the table headers
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.innerText.trim());
            });

            // Get the table rows
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = {};
                tr.querySelectorAll('td').forEach((td, index) => {
                    row[headers[index]] = td.innerText.trim();
                });
                data.push(row);
            });

            if (format === 'csv') {
                downloadCSV(data);
            } else if (format === 'json') {
                downloadJSON(data);
            }
        });

        function downloadCSV(data) {
            const csv = data.map(row => Object.values(row).join(',')).join('\n');
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        function downloadJSON(data) {
            const json = JSON.stringify(data, null, 2);
            const blob = new Blob([json], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
        // ========================== Export Js End ==============================
        
    </script>
    
    
    </body>
</html>