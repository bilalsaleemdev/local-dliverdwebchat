<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>@yield('title') | 25CENE</title>
    <!-- <link href="{{ asset('css/fontawesome-free/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
    </style>
    @yield('styletag')
</head>

<body id="page-top">
  <!-- body -->
  
    <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#!">
        <div class="sidebar-brand-icon rotate-n-15">
          Logo
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link active" href="#!">
          <span>Overviw</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#!">
          <H5>1528</H5>
          <span>Total Members</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#!">
          <H5>15</H5>
          <span>Active Users</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#!">
          <H5>15</H5>
          <span>Active Jobs</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#!">
          <H5>15</H5>
          <span>Canceled Jobs</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top ">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3  animated--grow-in" aria-labelledby="searchDropdown">
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

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Valerie</span>
                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
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
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
              </svg>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right  animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="m-auto">
              <a href="#" class="btn btn-lg btn-primary rounded-circle pdlr" data-toggle="modal" data-target="#create">+</a>
            </li>     
          </ul>
        </nav>
        <!-- End of Topbar -->
        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-image: linear-gradient(to right, rgba(255, 255, 255, .6), rgba(255, 255, 255, .6)), url('image/popupbg.png');background-repeat: no-repeat, no-repeat;">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                  <div class="col-md-8 nopadnomar row mb-4">
                    <div class="col-md-8">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="name" class="signup__field" placeholder="Full Name" required>
                          <label for="name" class="signup__label">Full Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="number" id="number" class="signup__field" placeholder="+12 346 3465789" required>
                          <label for="number" class="signup__label">Phone Number</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="address" class="signup__field" placeholder="Address" required>
                          <label for="address" class="signup__label">Address</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="team" class="signup__field" placeholder="Team" required>
                          <label for="team" class="signup__label">Team</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="signup mt-4">
                        <div class="signup__body">
                          <input type="text" id="time" class="signup__field" placeholder="Local Time" required>
                          <label for="time" class="signup__label">Local Time</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <!-- upload image  -->
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil penci" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>
                            </label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url();">
                            </div>
                        </div>
                    </div>
                  <!--end upload image  -->
                  </div>
                  
                  <div class="row col-md-12 mt-4">
                    <div class="col-md-4">
                      <div class="signup__body">
                          <input type="password" id="password" class="signup__field" placeholder="Passwerd" required>
                          <label for="password" class="signup__label">Passwerd</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <div class="signup__body">
                          <input type="email" id="email" class="signup__field" placeholder="Email@email.com" required>
                          <label for="email" class="signup__label">Email</label>
                        </div>
                    </div>
                  </div>
                </div>
                  
                <button type="button" class="col-md-4 offset-md-4 mt-4 bdrd btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        @yield('bodyContent')


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
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

  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/style.js')}}"></script>
  
  <!-- Page level plugins -->
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  
  <!-- Page level custom scripts -->
  <script src="{{ asset('js/datatables-demo.js') }}"></script>
  @yield('scriptTag')
  <script>            
  </script>
</body>

</html>