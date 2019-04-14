<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="theme/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="theme/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="theme/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="theme/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="theme/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="theme/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition" >
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="theme/images/icon/logo.png" alt="CoolAdmin" />
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
                            <a class="js-arrow" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                       
                        <li>
                            <a href="{{ route('deposit') }}">
                                <i class="fas fa-chart-bar"></i>Deposit</a>
                        </li>
                        <li>
                            <a href="{{ route('withdraw') }}">
                                <i class="fas fa-table"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="{{ route('send') }}">
                                <i class="far fa-check-square"></i>Send</a>
                        </li>
                        <li>
                            <a href="{{ route('crypto') }}">
                                <i class="fas fa-exchange"></i>Crypto</a>
                        </li>
                        <li>
                            <a href="{{ route('setting') }}">
                                <i class="fas fa-gear"></i>Settings</a>
                        </li>
                       
                     
                     
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="theme/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div style="background-color: #3498DB;background-image: linear-gradient(to right, #5AA5FF , #75D2F4;" class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                       
                        <li>
                            <a href="{{ route('deposit') }}">
                                <i class="fas fa-chart-bar"></i>Deposit</a>
                        </li>
                        <li>
                            <a href="{{ route('withdraw') }}">
                                <i class="fas fa-table"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="{{ route('send') }}">
                                <i class="far fa-check-square"></i>Send</a>
                        </li>
                        <li>
                            <a href="{{ route('crypto') }}">
                                <i class="fas fa-exchange"></i>Crypto</a>
                        </li>
                        <li>
                            <a href="{{ route('setting') }}">
                                <i class="fas fa-gear"></i>Settings</a>
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
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                            
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="theme/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="theme/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('setting') }}">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">

                                                    
													
													<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content" style="background-color:#FAFAFA">

                       @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="theme/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="theme/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="theme/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="theme/vendor/slick/slick.min.js">
    </script>
    <script src="theme/vendor/wow/wow.min.js"></script>
    <script src="theme/vendor/animsition/animsition.min.js"></script>
    <script src="theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="theme/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="theme/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="theme/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="theme/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="theme/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="theme/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="theme/js/main.js"></script>

</body>

</html>
<!-- end document-->
