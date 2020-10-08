<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2020 17:49:47 GMT -->
<head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/admin/images/favicon.ico')}}">

        <!-- Plugins css-->
        <link href="{{asset('frontend/admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css')}}">
        <!-- App css -->
        <link href="{{asset('frontend/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('frontend/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <script src="https://kit.fontawesome.com/3f9b5b8735.js" crossorigin="anonymous"></script>
        <link href="{{asset('frontend/admin/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('frontend/admin/images/flags/us.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('frontend/admin/images/flags/germany.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('frontend/admin/images/flags/italy.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('frontend/admin/images/flags/spain.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('frontend/admin//images/flags/russia.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-md-inline-block">
                        <a href="#" id="btn-fullscreen" class="nav-link waves-effect waves-light">
                            <i class="mdi mdi-crop-free noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <i class="fa fa-user-plus text-info"></i>
                                    </div>
                                    <p class="notify-details">New user registered
                                        <small class="noti-time">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-success">
                                        <i class="far fa-gem text-primary"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="noti-time">There are new settings available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="far fa-bell text-danger"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="noti-time">There are 2 new updates available</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-item notify-all">
                                    See all notifications
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('frontend/admin/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                            <span>Bishajit</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-face-profile"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                           
                            <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="mdi mdi-power-settings"></i>  Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                        </div>
                    </li>

                


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                        <a href="index.html" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="{{asset('frontend/admin/images/logo-dark.png')}}" alt="" height="16">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('frontend/admin/images/logo-sm.png')}}" alt="" height="25">
                            </span>
                        </a>

                        <a href="index.html" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="{{asset('frontend/admin/images/logo-light.png')}}" alt="" height="16">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('frontend/admin/images/logo-sm.png')}}" alt="" height="25">
                            </span>
                        </a>
                    </div>

                <!-- LOGO -->
  

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
    
                            <div class="user-box">
                    
                                <div class="float-left">
                                    <img src="{{asset('frontend/admin/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                                    
                                </div>
                               <div class="user-info">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                John Doe <i class="mdi mdi-chevron-down"></i>
                                                        </a>
                                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                    <p class="font-13 text-muted m-0">Administrator</p>
                                </div>
                            </div>
    
                            <ul class="metismenu" id="side-menu">
                                
                                <li>
                                    <a href="index.html" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="index.html" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span class="text-primary"> <b>POS</b> </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Employee </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('employees.create')}}">Add Employee</a></li>
                                        <li><a href="{{route('employees.index')}}">Employees</a></li>
                                    </ul>
                                </li>

                                
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Customer </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('customers.create')}}">Add Customer</a></li>
                                        <li><a href="{{route('customers.index')}}">Customers</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Supplier </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('suppliers.create')}}">Add Supplier</a></li>
                                        <li><a href="{{route('suppliers.index')}}">Suppliers</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Salary (EMP) </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('salaries.advancesalary')}}">Add Advance salary</a></li>
                                        <li><a href="{{route('salaries.alladvancesalary')}}">All Salary</a></li>
                                        <li><a href="{{route('salaries.paysalary')}}">Pay Salary</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Category </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('categories.create')}}">Add Category</a></li>
                                        <li><a href="{{route('categories.index')}}">All Category</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Product </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('products.create')}}">Add Product</a></li>
                                        <li><a href="{{route('products.index')}}">All Product</a></li>
                                        <li><a href="{{route('products.import')}}">Import Product</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Expense </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('expenses.create')}}">Add New</a></li>
                                        <li><a href="{{route('expenses.today')}}">Today Expense</a></li>
                                        <li><a href="{{route('expenses.monthly')}}">Monthly Expense</a></li>
                                        <li><a href="{{route('expenses.yearly')}}">Yearly Expense</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Sales Report </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="#">First/a></li>
                                        <li><a href="#">Second</a></li>
                                    
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Attendance </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('attendences.take')}}">Take Attendence</a></li>
                                        <li><a href="{{route('attendences.all')}}">All Attendence</a></li>
                                        <li><a href="">Monthly Attendence</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-users"></i>
                                        <span> Setting </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('setting')}}">Setting</a></li>
                                       
                                    
                                    </ul>
                                </li>

                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                    {{session()->get('success')}}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                    {{session()->get('error')}}
                    </div>
                @endif
                @yield('content')

                </div>
                <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2016 - 2020 &copy; Moltran theme by <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://bit.ly/2QMLoUn" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

       

        <!-- Vendor js -->
        <script src="{{asset('frontend/admin/js/vendor.min.js')}}"></script>

        <script src="{{asset('frontend/admin/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/jquery-scrollto/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        
        <!-- Chat app -->
        <script src="{{asset('frontend/admin/js/pages/jquery.chat.js')}}"></script>

        <!-- Todo app -->
        <script src="{{asset('frontend/admin/js/pages/jquery.todo.js')}}"></script>

        <!-- flot chart -->
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.time.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('frontend/admin/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

        <!-- Dashboard init JS -->
        <script src="{{asset('frontend/admin/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('frontend/admin/js/app.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js') }}"></script>
        <script type="text/JavaScript" src="{{ ('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"></script>

        <script>
            @if(Session::has('message'))
              var type="{{Session::get('alert-type','info')}}"
            switch(type){
              case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

              case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

              case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

              case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;

            }
            @endif
  </script>

<script>
  
  $(document).on("click","#delete", function(e){
   e.preventDefault();
 var link = $(this).attr("href");
 Swal.fire({
 title: 'Are you sure?',
 text: "You won't be able to revert this!",
 icon: 'warning',
 showCancelButton: true,
 confirmButtonColor: '#3085d6',
 cancelButtonColor: '#d33',
 confirmButtonText: 'Yes, delete it!'
}).then((result) => {
 if (result.value) {
   window.location.href=link;
 
 }
 else{
     Swal.fire(
     'Data Safe!'
   )
 }
});

  });
</script>

<script src="{{asset('frontend/admin/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/admin/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function(){
      $('#datatable').dataTable();
    });
</script>

    </body>


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2020 17:50:34 GMT -->
</html>