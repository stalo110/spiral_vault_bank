<?php
	include 'scripts/db.php';
  session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Bank</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admindash.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Service Operations</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
          <a class="collapse-item" href="adminreg.php">Register New Customer</a>
            <a class="collapse-item" href="op.php">Credit and Debit</a>
            <a class="collapse-item" href="update.php">Update and Delete</a>
            <a class="collapse-item" href="Transferupdate.php">Update Transfer Request</a>
            <a class="collapse-item" href="update_address.php">Update Company Address</a>
            <a class="collapse-item" href="update-admin-password.php">Change Admin Password</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Account settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <form method="POST" action="scripts/adminlogout.php">
            <input class="btn btn-primary btn-user btn-block" type="submit" name="logout" value="logout" >
          </form>
            
           
        </div>
      </li>

      <!-- Nav Item - Charts -->
      

      <!-- Nav Item - Tables -->
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
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

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
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

            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update Transfer Request</h6>
              <?php
               
               $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
               if(strpos($url, "mail=empty")== true){
                 echo "<p style='color:red'>Forms must be filled before Procceding With Registration..</p>";}
              if(strpos($url, "del=succ")==true){
                echo "<p style='color:red'>customer Account was succesfully deleted..</p>";
              }
              if(strpos($url, "update=success")==true){
                echo "<p style='color:green'>Customer Was successfully updated..</p>";
              }
              
        
               
               ?>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black">
                  <thead>
                    <tr>
                    <th>Account Name</th>
                      <th>Account Number</th>
                      <th>Bank Name</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Sender</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>transaction id</th>
                      <th colspan="3">OPERATION</th>
                      
                    </tr>
                  </thead>
                  <?php
                  //BRING OUT ANY DATA FOR REGISTERED USERS INTO A VARIABLE AND SPIT IT OUT ON THE TABLE IN ADMIN DASHBOARD 
                  $sql= "SELECT * FROM transact";
                  $result = mysqli_query($conn,$sql);
                  $result_check = mysqli_num_rows($result);

                  if($result_check > 0){
                    while($data = mysqli_fetch_assoc($result)){
                      $acctname = $data['acctname'];
                      $acctnumb = $data['acctnumb'];
                      $bnkname = $data['bnkname'];
                      $descrip = $data['descrip'];
                      $amount = $data['amount'];
                      $transactid = $data['transactid'];
                      $tdate = $data['tdate'];
                      $stat = $data['stat'];
                      $tranid = $data['tranid'];
                     


                      echo '<tbody> ';
                                  echo '<tr>';
                                                echo '<td>'.$acctname. '</td>'; 
                                                echo '<td>'.$acctnumb. '</td>'; 
                                                 echo '<td>'.$bnkname. '</td>'; 
                                                echo '<td>'.$descrip. '</td>'; 
                                                 echo '<td>'.$amount. '</td>'; 
                                                  echo '<td>'.$transactid. '</td>'; 
                                                echo '<td>'.$tdate. '</td>';
                                                echo '<td>'.$stat. '</td>';
                                                echo '<td>'.$tranid. '</td>';
                                                 echo "<td><form method='POST' action='updatetransfer.php' ><input type='hidden' name='transactid' value='$tranid'> <input class='btn btn-success' type='submit' name='edit' value='update' > </form>  </td>";

                                                 echo "<td><form method='POST' action='scripts/admindeletetran.php'><input type='hidden' name='tranid' value='$tranid'> <input class='btn btn-danger' type='submit' name='delete' value='delete' class='exi_butt'> </form>  </td>";
                                  
                                                    
                                          
                                                echo '</tr>';
                                               
                                                         echo '</tbody>';




                    }
                  }
                  
                  ?>

                </table>
              </div>

              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Spring Bank Plc</span>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
