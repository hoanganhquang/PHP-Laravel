<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Quản lý khoá học</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=2.0.1')}}" rel="stylesheet" />


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
                        <a class="navbar-brand" href="#pablo">  </a>
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

@yield('content')

<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!--  jVector Map  -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{asset('assets/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{asset('assets/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=2.0.1')}}" type="text/javascript"></script>

<script type="text/javascript">
var $table = $('#bootstrap-table');

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="Edit" class="btn btn-link btn-warning table-action edit" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="btn btn-link btn-danger table-action remove" href="javascript:void(0)">',
            '<i class="fa fa-remove"></i>',
            '</a>'
        ].join('');
    }

    $().ready(function() {
        window.operateEvents = {
            'click .view': function(e, value, row, index) {
                info = JSON.stringify(row);

                swal('You click view icon, row: ', info);
                console.log(info);
            },
            'click .edit': function(e, value, row, index) {
                if(row.email){
                    location.assign(`/edit-user/${row.id}`)
                } else {
                    if(row.timeRegister){
                        e.stoppropagation()
                    } else {
                        location.assign(`/edit-course/${row.id}`)
                    }
                }

            },
            'click .remove': function(e, value, row, index) {
                if(row.email){
                    location.assign(`/user/${row.id}`)
                } else {
                    if(row.timeRegister){
                        location.assign(`/remove-course/${row.name}`)
                    } else {
                        location.assign(`/course/${row.id}`)
                    }
                }
                
            }
        };

        $table.bootstrapTable({
            toolbar: ".toolbar",
            clickToSelect: true,
            showRefresh: true,
            search: false,
            showToggle: true,
            showColumns: true,
            pagination: true,
            searchAlign: 'left',
            pageSize: 8,
            clickToSelect: false,
            pageList: [8, 10, 25, 50, 100],

            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        //activate the tooltips after the data table is initialized
        $('[rel="tooltip"]').tooltip();

        $(window).resize(function() {
            $table.bootstrapTable('resetView');
        });


    });
    
  
</script>

</html>