<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Maps</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="../../assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>

	<div class="wrapper">
		<div class="sidebar" data-background-color="white" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					Wildlife VA
				</a>
			</div>
			<div class="logo logo-mini">
				<a href="http://www.creative-tim.com" class="simple-text">
					WCV
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="photo">
	                    <img src="../../assets/img/faces/face-2.jpg" />
	                </div>
	                <div class="info">
	                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        Brad Johnson
	                        <b class="caret"></b>
	                    </a>
	                    <div class="collapse" id="collapseExample">
	                        <ul class="nav">
	                            <li><a href="../pages/user.php">My Profile</a></li>
	                            <li><a href="../pages/user.php">Edit Profile</a></li>
	                            <li><a href="#settings">Settings</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <ul class="nav">
					<li>
	                    <a data-toggle="collapse" href="#dashboardOverview">
	                        <i class="ti-panel"></i>
	                        <p>Dashboard
                                <b class="caret"></b>
                            </p>
	                    </a>
                        <div class="collapse" id="dashboardOverview">
							<ul class="nav">
								<li><a href="overview.php">Overview</a></li>
							</ul>
						</div>
	                </li>
	              
	                <li>
						<a data-toggle="collapse" href="#formsExamples">
	                        <i class="ti-folder"></i>
	                        <p>
								Documents
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="formsExamples">
	                        <ul class="nav">
								<li><a href="">Resume</a></li>
								<li><a href="">Letter of Recommedation</a></li>
								<li><a href="">Liability Form</a></li>
	                            <li><a href="">Social Media Policy</a></li>
	                            <li><a href="">Rabies Vaccination</a></li>
	                        </ul>
	                    </div>
	                </li>
					<!--<li>
						<a data-toggle="collapse" href="#tablesExamples">
	                        <i class="ti-view-list-alt"></i>
	                        <p>
								Table list
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="tablesExamples">
	                        <ul class="nav">
								<li><a href="../tables/regular.php">Regular Tables</a></li>
	                            <li><a href="../tables/extended.php">Extended Tables</a></li>
	                            <li><a href="../tables/bootstrap-table.php">Bootstrap Table</a></li>
								<li><a href="../tables/datatables.net.php">DataTables.net</a></li>
	                        </ul>
	                    </div>
	                </li> -->
	               
	                
	                   <li>
						<a data-toggle="collapse" href="#mapsExamples">
	                        <i class="ti-world"></i>
	                        <p>
								Maps
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="mapsExamples">
	                        <ul class="nav">
								<li><a href="../maps/google.html">Google Maps</a></li>
	                        </ul>
	                    </div>
	                </li>
	                
	                    <!--<div class="collapse" id="componentsExamples">
	                        <ul class="nav">
	                            <li><a href="../components/buttons.php">Buttons</a></li>
	                            <li><a href="../components/grid.php">Grid System</a></li>
	                            <li><a href="../components/panels.php">Panels</a></li>
	                            <li><a href="../components/sweet-alert.php">Sweet Alert</a></li>
	                            <li><a href="../components/notifications.php">Notifications</a></li>
	                            <li><a href="../components/icons.php">Icons</a></li>
	                            <li><a href="../components/typography.php">Typography</a></li>
	                        </ul>
	                    </div> -->
	                
	                <!--<li>
	                    <a href="../charts.php">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Charts</p>
	                    </a>
	                </li> -->
	                <!--<li class="active">
						<a data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
	                        <i class="ti-gift"></i>
	                        <p>
								Pages
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse in" id="pagesExamples">
	                        <ul class="nav">
								<li><a href="timeline.php">Timeline Page</a></li>
								<li class="active"><a href="user.php">User Page</a></li>
								<li><a href="login.php">Login Page</a></li>
								<li><a href="register.php">Register Page</a></li>
								<li><a href="lock.php">Lock Screen Page</a></li>
	                        </ul>
	                    </div>
	                </li> -->
	            </ul>
	    	</div>
	    </div>
	    <div class="main-panel">
			<nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand" href="#googlemaps">Google Maps</a>
	                </div>
	                <div class="collapse navbar-collapse">
						<form class="navbar-form navbar-left navbar-search-form" role="search">
	    					<div class="input-group">
	    						<span class="input-group-addon"><i class="fa fa-search"></i></span>
	    						<input type="text" value="" class="form-control" placeholder="Search...">
	    					</div>
	    				</form>
	                    <ul class="nav navbar-nav navbar-right">
	                        <!--<li>
	                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
	                                <i class="ti-panel"></i>
									<p>Stats</p>
	                            </a>
	                        </li> -->
	                        <li class="dropdown">
	                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-bell"></i>
	                                <span class="notification">5</span>
									<p class="hidden-md hidden-lg">
										Notifications
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#not1">Notification 1</a></li>
	                                <li><a href="#not2">Notification 2</a></li>
	                                <li><a href="#not3">Notification 3</a></li>
	                                <li><a href="#not4">Notification 4</a></li>
	                                <li><a href="#another">Another notification</a></li>
	                         	</ul>
	                        </li>
							<li class="dropdown">
	                            <a href="#settings" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-settings"></i>
	                                <span class="notification"></span>
									<p class="hidden-md hidden-lg">
										Settings
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#not1">Log Out</a></li>
	                            
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card card-map">
	        					<div class="header">
	                                <h4 class="title">Satellite Map</h4>
	                            </div>
								<div class="content">
	                                <div id="satelliteMap" class="map map-big"></div>
	                            </div>
	        				</div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Regular Map</h4>
	                            </div>
	                            <div class="content">
	                                <div id="regularMap" class="map"></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Custom Skin & Settings Map</h4>
	                            </div>
	                            <div class="content">
	                                <div id="customSkinMap" class="map"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>

			<footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <!--<ul>
	                        <li>
	                            <a href="http://www.creative-tim.com">
	                                Creative Tim
	                            </a>
	                        </li>
	                        <li>
	                            <a href="http://blog.creative-tim.com">
	                               Blog
	                            </a>
	                        </li>
	                        <li>
	                            <a href="http://www.creative-tim.com/license">
	                                Licenses
	                            </a>
	                        </li>
	                    </ul> -->
	                </nav>
					<!--<div class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
	                </div> -->
	            </div>
	        </footer>
	    </div>
	</div>
</body>

	<!--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   -->
	<script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="../../assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="../../assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="../../assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="../../assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="../../assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../../assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="../../assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="../../assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Wizard Plugin    -->
	<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="../../assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="../../assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="../../assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="../../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
            demo.initSmallGoogleMaps();

        });
    </script>

</html>
