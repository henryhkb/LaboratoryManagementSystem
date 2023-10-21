<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from laravel.spruko.com/azira/leftmenu_light/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 08:35:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">	
		<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!-- Owl-carousel css-->
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet"/>

		<!--- Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Custom Scroll bar -->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

		<!--- Sidemenu css -->
		<link href="assets/css/sidemenu.css" rel="stylesheet">

		<!--- Animations css -->
		<link href="assets/css/animate.css" rel="stylesheet">
		
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	</head>

	<body class="main-body  app sidebar-mini">
		
		
		
		

		<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="main-sidebar app-sidebar sidebar-scroll">
			<div class="main-sidebar-header text text-center">
                <h3><a>Dashboard</a></h3>
                <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
			</div><!-- /logo -->
			
            {{-- Gives out space --}}
			<div class="sidebar-navs">
				<ul class="nav  nav-pills-circle">
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings" aria-describedby="tooltip365540">
						<a class="nav-link text-center m-2">
							<i class="fe fe-settings"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat">
						<a class="nav-link text-center m-2">
							<i class="fe fe-mail"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers">
						<a class="nav-link text-center m-2">
							<i class="fe fe-user"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
						<a class="nav-link text-center m-2">
							<i class="fe fe-power"></i>
						</a>
					</li>
				</ul>
			</div>

            {{-- Gives out space --}}
			<div class="main-sidebar-body">
				<ul class="side-menu ">
					<li class="slide">
						<a class="side-menu__item" href="index.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
					
					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Hormones</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/reproAssay')}}">Reproductive Assay</a></li>
							<li><a class="slide-item" href="{{ url('/ViewreproAssay')}}">View Reproductive Assay</a></li>
							<li><a class="slide-item" href="{{ url('/ironStudy')}}">Iron Study</a></li>
							<li><a class="slide-item" href="{{ url('/viewIronStudy')}}">View Iron Study</a></li>
							<li><a class="slide-item" href="rangeslider.html">Alfa Feto</a></li>
							<li><a class="slide-item" href="calendar.html">Cortisol</a></li>
							<li><a class="slide-item" href="contacts.html">Troponin</a></li>
							<li><a class="slide-item" href="image-compare.html">Estrogen</a></li>
							<li><a class="slide-item" href="notification.html">TFT</a></li>
							<li><a class="slide-item" href="widget-notification.html">Serum</a></li>
							<li><a class="slide-item" href="treeview.html">CEA</a></li>
							<li><a class="slide-item" href="treeview.html">ISE</a></li>
							<li><a class="slide-item" href="treeview.html">PSA</a></li>
							<li><a class="slide-item" href="treeview.html">CA-125</a></li>
						</ul>
					</li>
					
					

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Chemistry</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="table-basic.html">General Chemistry</a></li>
							<li><a class="slide-item" href="table-data.html">BUE + Creatinine</a></li>
							<li><a class="slide-item" href="table-data.html">Urine</a></li>
							<li><a class="slide-item" href="table-data.html">LIPIDS</a></li>
							<li><a class="slide-item" href="table-data.html">Cardiac Enzy</a></li>
							<li><a class="slide-item" href="table-data.html">Blood Sugar</a></li>
							<li><a class="slide-item" href="table-data.html">LFT</a></li>
							<li><a class="slide-item" href="table-data.html">Compact Chemistry</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-layers "></i><span class="side-menu__label">Haematology</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="alerts.html">Clotting Profile</a></li>
							<li><a class="slide-item" href="avatar.html">Specials</a></li>
							<li><a class="slide-item" href="breadcrumbs.html">FBC</a></li>
							<li><a class="slide-item" href="buttons.html">FBC - CHILDREN</a></li>
						</ul>
					</li>
					
					
					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-compass"></i><span class="side-menu__label">Bacteriology</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="profile.html">Ascitic Fluid C/S</a></li>
							<li><a class="slide-item" href="editprofile.html">Wound C/S</a></li>
							<li><a class="slide-item" href="invoice.html">Blood C/S</a></li>
							<li><a class="slide-item" href="pricing.html">Urine R/E</a></li>
							<li><a class="slide-item" href="gallery.html">HVS R/E</a></li>
							<li><a class="slide-item" href="todotask.html">HVS C/S</a></li>
							<li><a class="slide-item" href="faq.html">Sputum</a></li>
							<li><a class="slide-item" href="empty.html">Stool C/S</a></li>
                            <li><a class="slide-item" href="empty.html">Stool R/E</a></li>
							<li><a class="slide-item" href="empty.html">Skin Snip</a></li>
							<li><a class="slide-item" href="empty.html">URETHRAL C/S</a></li>
							<li><a class="slide-item" href="empty.html">Endocervical Swab</a></li>
							<li><a class="slide-item" href="empty.html">Throat Swab C/S</a></li>
							<li><a class="slide-item" href="empty.html">Sputum AFB</a></li>
							<li><a class="slide-item" href="empty.html">Ear Swab C/S</a></li>
							<li><a class="slide-item" href="empty.html">Eye Swab C/S</a></li>
							
						</ul>
					</li>


                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-package "></i><span class="side-menu__label">Immunology</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="accordion.html">Semen Analysis</a></li>
							<li><a class="slide-item" href="carousel.html">Widal</a></li>
							<li><a class="slide-item" href="collapse.html">Montaux</a></li>
							<li><a class="slide-item" href="modals.html">Hepatitis Markers</a></li>
							<li><a class="slide-item" href="timeline.html">HBV Viral Load</a></li>
							<li><a class="slide-item" href="sweet-alert.html">Antenatal Screening</a></li>
							<li><a class="slide-item" href="rating.html">HIV Viral Load</a></li>
							<li><a class="slide-item" href="counters.html">Rheumatology</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</aside>


        <!-- /main-sidebar -->
		<!-- main-content -->
		<div class="main-content">
            <!-- main-header -->
                <div class="main-header  side-header">
                    <div class="container-fluid">
                        <div class="main-header-left ">
                            <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                                <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                                <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                            </div>
                            <div class="responsive-logo">
                                <a href="index.html"><img src="assets/img/brand/logo-white.png" class="logo-1"></a>
                                <a href="index.html"><img src="assets/img/brand/logo.png" class="logo-11"></a>
                                <a href="index.html"><img src="assets/img/brand/favicon-white.png" class="logo-2"></a>
                                <a href="index.html"><img src="assets/img/brand/favicon.png" class="logo-12"></a>
                            </div>
                            
                        </div>
                        <div class="main-header-right">
                            
                            <div class="nav nav-item  navbar-nav-right ml-auto">
                                
                                
                                <div class="dropdown main-profile-menu nav nav-item nav-link">
    
                                    <a class="profile-user d-flex" href="#"><img src="assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
    
                                    <div class="dropdown-menu">
                                        <div class="main-header-profile header-img">
                                            <h6>Petey Cruiser</h6><span>Premium Member</span>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="far fa-user"></i> My Profile</a>
                                        <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /main-header -->
    
             

                    @yield('content')

                   
            </div>
            <!-- /main-content -->
        
            <!--/Sidebar-right-->
                        <!-- Footer opened -->
            <div class="main-footer ht-40">
                <div class="container-fluid pd-t-0-f ht-100p">
                    <span>Copyright © 2020 <a href="#">Azira</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
                </div>
            </div>
            <!-- Footer closed -->		
            <!-- Back-to-top -->
            <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
    
            <!--- JQuery min js -->
            <script src="assets/plugins/jquery/jquery.min.js"></script>
		<!--- Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
		<!--- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!--- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>
		<!-- datatable js -->
		<script src="assets/js/table-data.js"></script>
		<!--- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>
		<!--- JQuery sparkline js -->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		<!--- Perfect-scrollbar js -->
        <!--- Internal jquery-simple-datetimepicker js -->
        <script src="assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
        <!--- Ionicons js -->
        <script src="assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>
		<!--- Rating js -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>
		<!--- Custom Scroll bar Js -->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<!--- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>
		<!--- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
		<!--- Eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>
		<!--- Scripts js -->
		<script src="assets/js/script.js"></script>
		<!--- Custom js -->
		<script src="assets/js/custom.js"></script>
		<!--- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>
        
        </body>
    
    <!-- Mirrored from laravel.spruko.com/azira/leftmenu_light/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 08:36:17 GMT -->
    </html>