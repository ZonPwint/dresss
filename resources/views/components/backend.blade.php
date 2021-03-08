<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dress </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{asset('logo.jpg')}}" rel="icon">
    <link href="{{asset('logo.jpg')}}" rel="apple-touch-icon">

    <!-- Font CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/font.css')}}">

    <!-- Color CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/color.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/custom.css')}}">

    <!-- Bootstrap -->
    <link href="{{asset('plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Icon -->
    <link href="{{asset('plugin/icofont/icofont.min.css')}}">
    <link href="{{asset('plugin/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugin/backend/css/atlantis.css')}}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('plugin/backend/css/demo.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper" >
        <div class="main-header" style="background-color:blue;">
            <!-- Logo Header -->
            <div class="logo-header"  style="background-color:blue;">
                
                <a href="{{asset('index.html')}}" class="logo text-decoration-none ">
                    {{-- <img src="{{asset('logo.png')}}" alt="navbar brand" class="navbar-brand img-fluid logo"> --}}
                    <h4 class="fs-6 text-white ms-2 d-inline-block" data-background-color="blue">Myanmar Traditional Culture Dress </h4>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class='bx bx-menu' ></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class='bx bx-dots-vertical-rounded' ></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class='bx bx-menu' ></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" style="background-color:blue;">
                
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1 pt-2">
                                        <i class="icofont-search-2 search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="icofont-search-2"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bxs-bell' ></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new Orders </div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#" class="text-decoration-none">
                                            <div class="notif-img"> 
                                                <img src="../plugin/backend/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span> 
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="notif-img"> 
                                                <img src="../plugin/backend/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span> 
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="notif-img"> 
                                                <img src="../plugin/backend/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span> 
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all Orders <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                <i class='bx bxs-help-circle fs-4' ></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-shopping-bag mb-2' ></i>
                                                    <span class="text"> Today Orders </span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-list-ol mb-2'></i>
                                                    <span class="text"> Manage Top Seller </span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-line-chart mb-2' ></i>
                                                    <span class="text"> Generated Report </span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-user-plus mb-2' ></i>
                                                    <span class="text">Create New Author</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-book-add mb-2'></i>
                                                    <span class="text">Create New Book</span>
                                                </div>
                                            </a>
                                            
                                            <a class="col-6 col-md-4 p-0 text-decoration-none" href="#">
                                                <div class="quick-actions-item">
                                                    <i class='bx bx-file mb-2'></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('photo/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="{{ asset('photo/profile.jpg') }}" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>David</h4>
                                                <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Balance</a>
                                        <a class="dropdown-item" href="#">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            
            <div class="sidebar-wrapper scrollbar scrollbar-inner" >
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-start me-2">
                            <img src="{{ asset('photo/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-bs-toggle="collapse" class="text-decoration-none" href="#collapseExample" aria-expanded="true">
                                <span>
                                    David
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile" class="text-decoration-none">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit" class="text-decoration-none">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings" class="text-decoration-none">
                                            <span class="link-collapse"> Change Password </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class='bx bxs-home' ></i>
                                <p> Dashboard </p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class="icofont-chart-histogram"></i>
                                <p> Daily Report </p>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class='bx bxs-cart-alt' ></i>
                                <p> Orderdetail </p>
                                <span class="badge badge-danger">4</span>
                            </a>
                        </li>

                       {{--  <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class="icofont-book"></i>
                                <p> Dresses</p>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class='bx bxs-book-reader' ></i>
                                <p> Dresses </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class='bx bxs-category' ></i>
                                <p> Category </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="text-decoration-none">
                                <i class='bx bx-current-location' ></i>
                                <p> Township </p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        {{$slot}}

        {{-- <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                    </div>              
                </div>
        </footer> --}}
        
    </div>
    <!--   Core JS Files   -->
    <!-- Vendor JS Files -->
    <script src="{{asset('plugin/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('plugin/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- jQuery UI -->
    <script src="{{asset('plugin/backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugin/backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
    
    <!-- jQuery Scrollbar -->
    <script src="{{asset('plugin/backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('plugin/backend/js/plugin/datatables/datatables.min.js')}}"></script>
    <!-- Atlantis JS -->
    <script src="{{asset('plugin/backend/js/atlantis.js')}}"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{asset('plugin/backend/js/setting-demo2.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script >
        $(document).ready(function() {
            $('.select').select2();
            $('#basic-datatables').DataTable({
            });

            $('#multi-filter-select').DataTable( {
                "pageLength": 5,
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                                );

                            column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                        } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                    ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>

    

</body>
</html>