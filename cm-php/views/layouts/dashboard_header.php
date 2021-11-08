<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/CM-PHP/public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/CM-PHP/public/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Quản lý khoá học</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/CM-PHP/public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/CM-PHP/public/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />


</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="{{asset('assets/img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text logo-mini">
                        CM
                    </a>
                    <a href="/home" class="simple-text logo-normal">
                        Trang Chủ
                    </a>
                </div>
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('assets/uploads/users/'.auth()->user()->image) }}" />
                    </div>
                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span> {{auth()->user()->name}}
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="/edit">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">Chỉnh sửa tài khoản</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li> --}}
                                {{-- <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->role === "admin")
                <ul class="nav">
                    {{-- <li class="nav-item ">
                            <a class="nav-link" href="/dashboard">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Dashboard</p>
                            </a>
                        </li> --}}
                    {{-- AUTH --}}

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="nc-icon nc-app"></i>
                            <p>
                                Quản lý khoá học
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/courses">
                                        <span class="sidebar-mini">B</span>
                                        <span class="sidebar-normal">Danh sách khoá học</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/add-course">
                                        <span class="sidebar-mini">GS</span>
                                        <span class="sidebar-normal">Thêm khoá học</span>
                                    </a>
                                </li>
                                {{-- <li class="nav-item ">
                                        <a class="nav-link" href="/edit-course">
                                            <span class="sidebar-mini">P</span>
                                            <span class="sidebar-normal">Chỉnh Sửa khoá học</span>
                                        </a>
                                    </li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="nc-icon nc-notes"></i>
                            <p>
                                Người dùng
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="formsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/users">
                                        <span class="sidebar-mini">Rf</span>
                                        <span class="sidebar-normal">Danh sách người dùng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                @else
                <ul class="nav">
                    {{-- <li class="nav-item ">
                            <a class="nav-link" href="/dashboard">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Dashboard</p>
                            </a>
                        </li> --}}
                    {{-- AUTH --}}

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="nc-icon nc-app"></i>
                            <p>
                                Quản lý khoá học
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/my-courses">
                                        <span class="sidebar-mini">B</span>
                                        <span class="sidebar-normal">Khoá học đã đăng ký</span>
                                    </a>
                                </li>
                                {{-- <li class="nav-item ">
                                        <a class="nav-link" href="/edit-course">
                                            <span class="sidebar-mini">P</span>
                                            <span class="sidebar-normal">Chỉnh Sửa khoá học</span>
                                        </a>
                                    </li> --}}
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                                <i class="nc-icon nc-notes"></i>
                                <p>
                                    Người dùng
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="formsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/users">
                                            <span class="sidebar-mini">Rf</span>
                                            <span class="sidebar-normal">Danh sách người dùng</span>
                                        </a>
                                    </li>                    
                                </ul>
                            </div>
                        </li> --}}

                </ul>
                @endif

                {{-- END AUTH --}}
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('logout') }}" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="nc-icon nc-button-power"></i> Đăng xuất
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->