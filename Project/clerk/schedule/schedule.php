<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ET | Schedule Management</title>

  <!-- Custom fonts -->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    
  <!-- Custom styles for this page -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Express Travels</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading -->
      <div class="sidebar-heading">
      Management
      </div>

      <!-- Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pages</h6>
            <a class="collapse-item" href="../staff/staff.php">Staff Management</a>
            <a class="collapse-item" href="../bus/bus.php">Bus Management</a>
            <a class="collapse-item" href="../route/route.php">Route Management</a>
            <a class="collapse-item active" href="schedule.php">Schedule Management</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter Alerts -->
                <span class="badge badge-danger badge-counter">1+</span>
              </a>
              <!-- Dropdown Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Today</div>
                    <span class="font-weight-bold">Ready to go!</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter Messages -->
                <span class="badge badge-danger badge-counter">1+</span>
              </a>
              <!-- Dropdown Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="./img/Logo.jpg" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering to help you with a problem you've been having.</div>
                    <div class="small text-gray-500">Code Squad</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Code Sqard</span>
                <img class="img-profile rounded-circle" src="./img/Logo.jpg">
              </a>
              <!-- Dropdown User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">  
            
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Schedule Management</h1>
            <div class="row">
              <form class="form" action="conn.php" method="post" autocomplete="on">
                <div class="col-sm-10 col-md-6">
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Schedule ID
                          <input type="text" id="sid" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" required autofocus name="sid">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Employee ID
                          <input type="text" id="eid" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="eid">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Bus ID
                          <input type="text" id="bid" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="bid">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Route ID
                          <input type="text" id="rid" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="rid">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Date
                          <input type="text" id="date" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="date">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Time
                          <input type="text" id="time" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="time">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Departure
                          <input type="text" id="departure" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" name="departure">
                        </label>
                    </div>
                    <div id="dataTable_filter" class="dataTables_filter">
                        <label>Way Type
                          <select id="wayTyp" aria-controls="dataTable" class="form-control form-control-sm" name="wayTyp">
                            <option value="">Choose...</option>
                            <option>One Way</option>
                            <option>Round Way</option>
                          </select>
                        </label>
                    </div>
                    <br>
                    <table>
                      <tr>
                        <td>
                          <button class="btn btn-primary btn-icon-split btn-sm" type="submit" id="insert" name="insert">
                          <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Insert</span>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-split btn-sm" type="submit" id="search" name="search">
                          <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Search</span>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-split btn-sm" type="submit" id="update" name="update">
                          <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Update</span>
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-split btn-sm" type="submit" id="delete" name="delete">
                          <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Delete</span>
                          </button>
                        </td>
                      </tr>
                    </table>
                </div>
              </form>
            </div>

        </div>
        <!-- container fluid -->
          
        <br>
          
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Detail</h1>

          <!-- Datatable -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Time Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SID</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Departure</th>
                      <th>Way Type</th>
                    </tr>
                  </thead>
                    
                    <?php
                      
                        $conn = new mysqli('localhost','root','','expresstravels');
                        if($conn->connect_error){
                            die('Connection Failed :'.$conn->connect_error);
                        }
                        $sql = "select sid, date, time, departure, wayTyp from schedule";
                        $result = $conn-> query($sql);
                    
                        if($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                            echo "<tr><td>". $row["sid"] ."</td><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["departure"] ."</td><td>". $row["wayTyp"] ."</td></tr>"; 
                        }
                            echo "</table>";
                        }else{
                            echo "No results";
                        }
                        $conn-> close();
                    
                    ?>
                    
                </table>
              </div>
            </div>
          </div>
          <!-- End of Datatable -->

        </div>
        <!-- container fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Code Squad</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>
