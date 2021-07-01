
 <style>

  @media only screen and (min-width: 600px) {
  .table-responsive {
    width:auto;
    float:none;
    margin:auto;
  }
}

  </style>



<div class="container-scroller"  !important">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div  class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="images/logo1.png" class="mr-2 alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo2.png" alt="logo"/></a>





    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <!--  <span style="background-color:orange;color:white;border-radius:9px;font-weight:bold;font-size:25px;padding:5px">FMS</span><span style="color:black !important;font-weight:bold;font-size:25px;font-family:Times New Roman;margin-left:10px;">Feedback Management System</span>
--
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="ti-view-list"></span>
      </button>-->

      <ul class="navbar-nav navbar-nav-right">

        <li class="nav-item dropdown">

          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">

            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-success">
                  <i class="ti-info-alt mx-0"></i>
                </div>
              </div>

            </a>


          </div>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="images/icon.png" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

            <a class="dropdown-item" href="logout.php">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="ti-view-list"></span>
      </button>
    </div>
  </nav>
