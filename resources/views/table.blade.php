<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page--> 
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/table">
                            <img src="images/icon/logo-siemens.png" alt="Siemens" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                           
                        </li>                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/table">
                    <img src="images/icon/logo-siemens.png" alt="Siemens" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                            
                        </li>                                                                
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            {{-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> --}}
                            <div class="header-button">                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.png" alt="John Doe" oncontextmenu="return false"/>
                                        </div>
                                        @if (Auth::check() && Auth::user())
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">{{ Auth::user()->username }}</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="">
                                                            <img src="images/icon/avatar-01.png" alt="John Doe" oncontextmenu="return false"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->username }}</a>
                                                    </h5>                                                    
                                                    <span class="email">{{ Auth::user()->role->name }}</span>
                                                </div>
                                            </div>                                            
                                        @endif
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('actionlogout') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Project Factory Service</h3>
                                
                                <div class="tables-header">
                                    <div class="tables-header-item">
                                        <div>
                                            <button type="button" class="btn" id="reloadButton"><i class="fa-solid fa-arrow-rotate-right" style="color: #255271"></i></button>
                                        </div>
                                        <div>
                                            <a  style="display: flex; align-items: center; color: #255271; text-decoration: none" href="{{ route('project-export') }}"><i class="fa-solid fa-file-export" style="margin-right: 5px" ></i>
                                                <p class="export-text">export to excel</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="search-container">
                                        <div class="input-group">
                                            <input class="form-control" style="background: none; border: none; display: flex; align-items: center;" id="searchInput" type="text" placeholder="Search">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="background: none; border: none; padding-left: 0; display: flex; align-items: center;">
                                                    <button type="button"><i class="fa-solid fa-search" style="background: none;"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="task" data-toggle="modal" data-target="#TaskModal">
                                        <div>
                                            <i class="fa-solid fa-list-check"></i>
                                        </div>
                                        <div>
                                            <p>Add Task</p>
                                        </div>
                                    </button>
                                </div>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-striped" id="dataTable">
                                        <thead class="text-center">
                                            <tr class="table-header">
                                                <th>input date</th>
                                                <th>project</th>
                                                <th>requestor</th>
                                                <th>Category</th>
                                                <th>Update</th>
                                                <th>status</th>
                                                <th>pic</th>
                                                <th>ETA</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($projects as $item)                                                                                                                                            
                                            <tr class="tr">
                                                <td >{{ $item->input_date }}</td>
                                                <td >{{ $item->nama_project }}</td>
                                                <td class="desc">{{ $item->requestor }}</td>
                                                <td >{{ $item->category_project }}</td>
                                                <td >
                                                   <pre>{{ $item->description_project }}</pre>
                                                </td>
                                                <td >{{ $item->status }}</td>
                                                <td >
                                                    <span class="status--process">{{ $item->pic_project }}</span>
                                                </td>
                                                <td>{{ $item->eta_project }}
                                                </td>
                                                <td>
                                                    <div class="table-data-feature" id="editContainer">                                                        
                                                        <button type="button" class="item edit-button" data-toggle="modal" data-target="#editModal" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>                                                        
                                                        <button class="item delete-button" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>                                            
                                                    </div>
                                                </td>                                                
                                                @endforeach
                                            </tr>
                                        </tbody>                                        
                                    </table>                                
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>                                            
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL ADD-->
        <div class="modal fade" id="TaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add Task</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form id="addTask" action="{{ route('create-data') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="container-fluid">                        
                            <div class="row">                                                                    
                                <div class="col-sm-5 col-md-6">
                                    <div class="mb-3">
                                        <label for="date" class="align-items-start">Date:</label>
                                        <div class="input-group date w-100" id="datepickerContainer">
                                            <input type="text" class="form-control datepicker " id="datepicker" name="input_date" />
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="eta" class="align-items-start">ETA:</label>
                                        <div class="input-group date w-100" id="datepickerContainer">
                                            <input type="text" class="form-control datepicker" id="etapicker" name="eta_project"/>
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="requestor" class="align-items-start">Requestor:</label>
                                        <input type="text" class="form-control w-100" name="requestor">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pic" class="align-items-start">PIC:</label>
                                        <input type="text" class="form-control w-100" name="pic_project">
                                    </div>
                                </div>
                                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                    <div class="mb-3">
                                        <label for="project" class="align-items-start">Project:</label>
                                        <input type="text" class="form-control w-100" name="nama_project">
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="align-items-start">Category:</label>
                                        <input type="text" class="form-control w-100" name="category_project">
                                    </div>
                                    <div class="mb-3" >                                        
                                        <label for="status">Status</label>                                                            
                                            <select class="form-control w-100" id="status" name="status">
                                            <option selected>Select</option>
                                            <option value="Open">Open</option>
                                            <option value="On Progress">On Progress</option>
                                            <option value="Done">Done</option>
                                        </select>
                                    </div>     
                                    <div class="mb-3">
                                        <label for="update_status">Update Status</label>
                                        <textarea class="form-control w-100" style="border: 1px solid; border-color:rgb(223, 223, 223)" name="description_project" id="descript" cols="30" rows="10"></textarea>
                                    </div>                                                    
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>

        
        <!-- MODAL EDIT-->
        
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editTask" action="{{ route('update-data', $item->id) }}" method="POST" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="project_id">
                    <div class="container-fluid">                        
                        <div class="row">                                                                    
                            <div class="col-sm-5 col-md-6">
                                <div class="mb-3">
                                    <label for="date" class="align-items-start">Date:</label>
                                    <div class="input-group date w-100" id="datepickerContainer">
                                        <input type="text" class="form-control datepicker" id="datepicker" name="input_date"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="eta" class="align-items-start">ETA:</label>
                                    <div class="input-group date w-100" id="datepickerContainer">
                                        <input type="text" class="form-control datepicker " id="etapicker" name="eta_project" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="requestor" class="align-items-start">Requestor:</label>
                                    <input type="text" class="form-control w-100" id="requestor" name="requestor">
                                </div>
                                <div class="mb-3">
                                    <label for="pic" class="align-items-start">PIC:</label>
                                    <input type="text" class="form-control w-100" id="pic_project" name="pic_project">
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                <div class="mb-3">
                                    <label for="project" class="align-items-start">Project:</label>
                                    <input type="text" class="form-control w-100" id="nama_project" name="nama_project">
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="align-items-start">Category:</label>
                                    <input type="text" class="form-control w-100" id="category_project" name="category_project">
                                </div>
                                <div class="mb-3" >                                        
                                    <label for="status">Status</label>                                                            
                                    <select class="form-control w-100" aria-label="Default select example" id="status" name="status">                                    
                                        <option value="Open">Open</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>     
                                <div class="mb-3">
                                    <label for="update_status">Update Status</label>
                                    <textarea class="form-control w-100" style="border: 1px solid; border-color:rgb(223, 223, 223)" name="description_project" id="descript" cols="30" rows="10"></textarea>
                                </div>                                                    
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" id="saveData" class="btn btn-primary" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
        

    
    <!-- Jquery JS-->
    
    
    
    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'mm/dd/yyyy', // Adjust the format as needed
                todayHighlight: true,
                autoclose: true,
                orientation: 'bottom'
            });
    
            // Set the date for the datepickerInput to today
            $('.datepickerInput').datepicker('setDate', new Date());
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $('#etapicker').datepicker({
                format: 'mm/dd/yyyy', // Adjust the format as needed
                todayHighlight: true,
                autoclose: true,
                orientation: 'bottom'
            });
    
            // Set the date for the datepickerInput to today
            $('.datepickerInput').datepicker('setDate', new Date());
        });
    </script>


    

{{-- <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true, // Close the datepicker when a date is selected
                orientation: 'bottom' // Set the position of the datepicker (e.g., 'auto', 'top', 'bottom', 'left', 'right')
            });
        });
    </script> --}}

    {{-- <script>
        const handleClick = (e) => {
            e.preventDefault();
            const modalElement = document.getElementById('.item[data-bs-toggle="modal"]');
            const modal = new Modal(modalElement, {backdrop: false, keyboard: true, focus: true});
            console.log('button clicked');
            modal.show();
        }

    </script> --}}
    {{-- <script>
       
    </script> --}}


    

    <!-- Bootstrap JS-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    

</body>

</html>
<!-- end document-->