
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>2 Columns - Vuesax - Bootstrap HTML admin template</title>
	<?php $this->load->view('css');?>
    
</head>
 
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <!-- BEGIN: Main Menu-->
    <!-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuesax</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="../../../html/ltr/vertical-menu-template/index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge badge-warning badge-pill float-right">2</span></a>
                </li>
                 
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/demo/vuesax-html-admin-dashboard-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="">Documentation</span></a>
                </li>
            </ul>
        </div>
    </div> -->
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto">
                                    <!-- <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a> -->
                                    <span style="font-size: larger; font-weight: bold;" id="judulnya"> </span>
                                </li>
                            </ul>

                            <!-- <ul class="nav navbar-nav bookmark-icons"> 
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-1-column.html" data-toggle="tooltip" data-placement="top" title="1-Column"><i class="ficon feather icon-file-text"></i></a></li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-2-columns.html" data-toggle="tooltip" data-placement="top" title="2-Columns"><i class="ficon feather icon-sidebar"></i></a></li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-static.html" data-toggle="tooltip" data-placement="top" title="Static Layout"><i class="ficon feather icon-sliders"></i></a></li>
                            </ul> -->
                            <!-- <ul class="nav navbar-nav">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                    <div class="bookmark-input search-input">
                                        <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                        <input class="form-control input" type="text" placeholder="Explore Vuesax..." tabindex="0" data-search="starter-list" />
                                        <ul class="search-list"></ul>
                                    </div>
                                     
                                </li>
                            </ul> -->
                        </div>
                        <ul class="nav navbar-nav float-right">
                            
                            <!-- <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="images/portrait/small/avatar-s-11.png" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="feather icon-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="feather icon-power"></i> Logout</a>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <div class="content-wrapper">
           
            <div class="content-body">
                <!-- Description -->
                <div >
                    <?php echo $output;?>
                </div>
                 
            </div>
        </div>
    </div>
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
 
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="#" target="_blank">NdaNde,</a>All rights Reserved</span>  
        </p>
    </footer> 
    <?php $this->load->view('js');?>
    <script type="text/javascript">
        $("#judulnya").html('Catatan Cicilan');
    </script>
</body> 

</html>