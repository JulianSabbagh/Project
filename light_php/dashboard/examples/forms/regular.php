<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard PRO by Creative Tim</title>

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
		<div class="sidebar" data-background-color="brown" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					Creative Tim
				</a>
			</div>
			<div class="logo logo-mini">
				<a href="http://www.creative-tim.com" class="simple-text">
					CT
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="photo">
	                    <img src="../../assets/img/faces/face-2.jpg" />
	                </div>
	                <div class="info">
	                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        Chet Faker
	                        <b class="caret"></b>
	                    </a>
	                    <div class="collapse" id="collapseExample">
	                        <ul class="nav">
	                            <li><a href="#profile">My Profile</a></li>
	                            <li><a href="#edit">Edit Profile</a></li>
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
								<li><a href="../dashboard/overview.php">Overview</a></li>
								<li><a href="../dashboard/stats.php">Stats</a></li>
							</ul>
						</div>
	                </li>
	                <li>
	                    <a data-toggle="collapse" href="#componentsExamples">
	                        <i class="ti-package"></i>
	                        <p>Components
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="componentsExamples">
	                        <ul class="nav">
	                            <li><a href="../components/buttons.php">Buttons</a></li>
	                            <li><a href="../components/grid.php">Grid System</a></li>
	                            <li><a href="../components/panels.php">Panels</a></li>
	                            <li><a href="../components/sweet-alert.php">Sweet Alert</a></li>
	                            <li><a href="../components/notifications.php">Notifications</a></li>
	                            <li><a href="../components/icons.php">Icons</a></li>
	                            <li><a href="../components/typography.php">Typography</a></li>
	                        </ul>
	                    </div>
	                </li>
	                <li class="active">
						<a data-toggle="collapse" href="#formsExamples" aria-expanded="true">
	                        <i class="ti-clipboard"></i>
	                        <p>
								Forms
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse in" id="formsExamples">
	                        <ul class="nav">
								<li class="active"><a href="regular.php">Regular Forms</a></li>
								<li><a href="extended.php">Extended Forms</a></li>
								<li><a href="validation.php">Validation Forms</a></li>
	                            <li><a href="wizard.php">Wizard</a></li>
	                        </ul>
	                    </div>
	                </li>
					<li>
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
	                </li>
	                <li>
						<a data-toggle="collapse" href="#mapsExamples">
	                        <i class="ti-map"></i>
	                        <p>
								Maps
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="mapsExamples">
	                        <ul class="nav">
								<li><a href="../maps/google.php">Google Maps</a></li>
								<li><a href="../maps/vector.php">Vector maps</a></li>
								<li><a href="../maps/fullscreen.php">Full Screen Map</a></li>
	                        </ul>
	                    </div>
	                </li>
	                <li>
	                    <a href="../charts.php">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Charts</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="../calendar.php">
	                        <i class="ti-calendar"></i>
	                        <p>Calendar</p>
	                    </a>
	                </li>
	                <li>
						<a data-toggle="collapse" href="#pagesExamples">
	                        <i class="ti-gift"></i>
	                        <p>
								Pages
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="pagesExamples">
	                        <ul class="nav">
								<li><a href="../pages/timeline.php">Timeline Page</a></li>
								<li><a href="../pages/user.php">User Page</a></li>
								<li><a href="../pages/login.php">Login Page</a></li>
								<li><a href="../pages/register.php">Register Page</a></li>
								<li><a href="../pages/lock.php">Lock Screen Page</a></li>
	                        </ul>
	                    </div>
	                </li>
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
	                    <a class="navbar-brand" href="#regularforms">Regular Forms</a>
	                </div>
	                <div class="collapse navbar-collapse">
						<form class="navbar-form navbar-left navbar-search-form" role="search">
	    					<div class="input-group">
	    						<span class="input-group-addon"><i class="fa fa-search"></i></span>
	    						<input type="text" value="" class="form-control" placeholder="Search...">
	    					</div>
	    				</form>
	                    <ul class="nav navbar-nav navbar-right">
	                        <li>
	                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
	                                <i class="ti-panel"></i>
									<p>Stats</p>
	                            </a>
	                        </li>
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
	                                <li><a href="#">Notification 1</a></li>
	                                <li><a href="#">Notification 2</a></li>
	                                <li><a href="#">Notification 3</a></li>
	                                <li><a href="#">Notification 4</a></li>
	                                <li><a href="#">Another notification</a></li>
	                            </ul>
	                        </li>
							<li>
	                            <a href="#settings" class="btn-rotate">
									<i class="ti-settings"></i>
									<p class="hidden-md hidden-lg">
										Settings
									</p>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="card">
							    <form method="#" action="#">
		                            <div class="header">
									    <h4 class="title">
											Stacked Form
										</h4>
									</div>
		                            <div class="content">
	                                    <div class="form-group">
	                                        <label>Email address</label>
	                                        <input type="email" placeholder="Enter email" class="form-control">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Password</label>
	                                        <input type="password" placeholder="Password" class="form-control">
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="checkbox">
	                                            <input type="checkbox" data-toggle="checkbox" value="" checked>
	                                            Subscribe to newsletter
	                                        </label>
	                                    </div>
	                                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
		                            </div>
							    </form>
	                        </div> <!-- end card -->
	                    </div> <!--  end col-md-6  -->
	                    <div class="col-md-6">
	                        <div class="card">
								<form class="form-horizontal">
		                            <div class="header">
										<h4 class="title">
											Horizontal Form
										</h4>
									</div>
		                            <div class="content">
										<div class="form-group">
		                                    <label class="col-md-3 control-label">Email</label>
		                                    <div class="col-md-9">
		                                        <input type="email" placeholder="Email" class="form-control">
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label class="col-md-3 control-label">Password</label>
		                                    <div class="col-md-9">
		                                        <input type="password" placeholder="Password" class="form-control">
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label class="col-md-3"></label>
		                                    <div class="col-md-9">
		                                        <label class="checkbox">
		                                            <input type="checkbox" data-toggle="checkbox" value="">
		                                            Remember Me
		                                        </label>
		                                    </div>
		                                </div>
									</div>
									<div class="card-footer">
										<div class="form-group">
											<label class="col-md-3"></label>
											<div class="col-md-9">
												<button type="submit" class="btn btn-fill btn-info">
													Sign in
												</button>
											</div>
										</div>
									</div>
								</form>
	                    	</div> <!-- end card -->
	                	</div> <!--  end col-md-6  -->
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Form Elements</h4>
	                            </div>
	                            <div class="content">
	                                <form method="get" action="/" class="form-horizontal">
	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">With help</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" class="form-control">
	                                                <span class="help-block">A block of help text that breaks onto a new line.</span>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Password</label>
	                                            <div class="col-sm-10">
	                                                <input type="password" name="password" class="form-control">
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Placeholder</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" placeholder="placeholder" class="form-control">
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Disabled</label>
	                                            <div class="col-sm-10">
	                                                <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Static control</label>
	                                            <div class="col-sm-10">
	                                                <p class="form-control-static">hello@creative-tim.com</p>
	                                            </div>
	                                        </div>
	                                    </fieldset>

										<fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Checkboxes and radios</label>
	                                            <div class="col-sm-10">
	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">First Checkbox
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Second Checkbox
	                                                </label>

	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option1" checked="">First Radio
	                                                </label>

	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">Second Radio
	                                                </label>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                           <label class="col-sm-2 control-label">Inline checkboxes</label>
	                                           <div class="col-sm-10">
	                                                <label class="checkbox checkbox-inline">
	                                                    <input type="checkbox" data-toggle="checkbox" value="option1">a
	                                                </label>
	                                                <label class="checkbox checkbox-inline">
	                                                    <input type="checkbox" data-toggle="checkbox" value="option2">b
	                                                </label>
	                                                <label class="checkbox checkbox-inline">
	                                                    <input type="checkbox" data-toggle="checkbox" value="option3">c
	                                                </label>
	                                           </div>
	                                        </div>
	                                    </fieldset>

										<fieldset>
	                                        <legend>Input Variants</legend>

	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
	                                            <div class="col-sm-4 col-sm-offset-1">
	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">
	                                                    Unchecked
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" checked>
	                                                    Checked
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" disabled>
	                                                    Disabled unchecked
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" disabled checked>
	                                                    Disabled checked
	                                                </label>
	                                            </div>

	                                            <div class="col-sm-5">
	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadios2" value="">
	                                                    Radio is off
	                                                </label>
	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadios2"value="" checked>
	                                                    Radio is on
	                                                </label>

	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadiosDisabled2" value="" disabled>
	                                                    Disabled radio is off
	                                                </label>
	                                                <label class="radio">
	                                                    <input type="radio" data-toggle="radio" name="optionsRadiosDisabled2" value="" checked disabled>
	                                                    Disabled radio is on
	                                                </label>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group has-success">
	                                            <label class="col-sm-2 control-label">Input with success</label>
	                                            <div class="col-sm-10">
	                        						<input type="text" value="Success" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group has-error">
	                                            <label class="col-sm-2 control-label">Input with error</label>
	                                            <div class="col-sm-10">
													<input type="text" value="Error" class="form-control"/>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group column-sizing">
	                                            <label class="col-sm-2 control-label">Column sizing</label>
	                                            <div class="col-sm-10">
	                                                <div class="row">
	                                                    <div class="col-md-3">
	                                                        <input type="text" placeholder=".col-md-3" class="form-control">
	                                                    </div>
	                                                    <div class="col-md-4">
	                                                        <input type="text" placeholder=".col-md-4" class="form-control">
	                                                    </div>
	                                                    <div class="col-md-5">
	                                                        <input type="text" placeholder=".col-md-5" class="form-control">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </fieldset>

	                                    <fieldset>
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Input groups</label>
	                                            <div class="col-sm-3">
	                                                <div class="input-group">
	                                                    <span class="input-group-addon">@</span>
	                                                    <input type="text" placeholder="Username" class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-3">
	                                                <div class="input-group">
	                                                    <input type="text" class="form-control">
	                                                    <span class="input-group-addon">.00</span>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-4">
	                                                <div class="input-group">
	                                                    <span class="input-group-addon">$</span>
	                                                    <input type="text" class="form-control">
	                                                    <span class="input-group-addon">.00</span>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </fieldset>
	                                    <fieldset>
    	                                    <div class="form-group">
	                                            <label class="col-sm-2 control-label">Textarea</label>
	                                            <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>
	                                            </div>
    	                                    </div>
	                                    </fieldset>
	                                </form>
	                            </div>
	                        </div>  <!-- end card -->
	                    </div> <!-- end col-md-12 -->
	                </div> <!-- end row -->
	            </div>

				<footer class="footer">
		            <div class="container-fluid">
		                <nav class="pull-left">
		                    <ul>

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
		                    </ul>
		                </nav>
						<div class="copyright pull-right">
		                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
		                </div>
		            </div>
		        </footer>
	    	</div>
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

</html>
