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
					Ct
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
	                <li>
						<a data-toggle="collapse" href="#formsExamples">
	                        <i class="ti-clipboard"></i>
	                        <p>
								Forms
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse" id="formsExamples">
	                        <ul class="nav">
								<li><a href="../forms/regular.php">Regular Forms</a></li>
								<li><a href="../forms/extended.php">Extended Forms</a></li>
								<li><a href="../forms/validation.php">Validation Forms</a></li>
	                            <li><a href="../forms/wizard.php">Wizard</a></li>
	                        </ul>
	                    </div>
	                </li>
					<li class="active">
						<a data-toggle="collapse" href="#tablesExamples">
	                        <i class="ti-view-list-alt"></i>
	                        <p>
								Table list
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse in" id="tablesExamples">
	                        <ul class="nav">
								<li><a href="regular.php">Regular Tables</a></li>
	                            <li class="active"><a href="extended.php">Extended Tables</a></li>
	                            <li><a href="bootstrap-table.php">Bootstrap Table</a></li>
								<li><a href="datatables.net.php">DataTables.net</a></li>
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
	                    <a class="navbar-brand" href="#extendedtables">Extended Tables</a>
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
	                            	<li><a href="#not1">Notification 1</a></li>
	                                <li><a href="#not2">Notification 2</a></li>
	                                <li><a href="#not3">Notification 3</a></li>
	                                <li><a href="#not4">Notification 4</a></li>
	                                <li><a href="#another">Another notification</a></li>
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Table with Links</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="content table-responsive table-full-width">
	                                <table class="table">
	                                    <thead>
	                                        <tr>
	                                            <th class="text-center">#</th>
	                                            <th>Name</th>
	                                            <th>Job Position</th>
	                                            <th class="text-right">Salary</th>
	                                            <th class="text-right">Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td class="text-center">1</td>
	                                            <td>Andrew Mike</td>
	                                            <td>Develop</td>
	                                            <td class="text-right">&euro; 99,225</td>
	                                            <td class="td-actions text-right">
	                                                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
	                                                    <i class="ti-user"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
	                                                    <i class="ti-pencil-alt"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
	                                                    <i class="ti-close"></i>
	                                                </a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">2</td>
	                                            <td>John Doe</td>
	                                            <td>Design</td>
	                                            <td class="text-right">&euro; 89,241</td>
	                                            <td class="td-actions text-right">
	                                                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
	                                                    <i class="ti-user"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
	                                                    <i class="ti-pencil-alt"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
	                                                    <i class="ti-close"></i>
	                                                </a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">3</td>
	                                            <td>Alex Mike</td>
	                                            <td>Design</td>
	                                            <td class="text-right">&euro; 92,144</td>
	                                            <td class="td-actions text-right">
	                                                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
	                                                    <i class="ti-user"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
	                                                    <i class="ti-pencil-alt"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
	                                                    <i class="ti-close"></i>
	                                                </a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">4</td>
	                                            <td>Mike Monday</td>
	                                            <td>Marketing</td>
	                                            <td class="text-right">&euro; 49,990</td>
	                                            <td class="td-actions text-right">
	                                                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
	                                                    <i class="ti-user"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
	                                                    <i class="ti-pencil-alt"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
	                                                    <i class="ti-close"></i>
	                                                </a>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">5</td>
	                                            <td>Paul Dickens</td>
	                                            <td>Communication</td>
	                                            <td class="text-right">&euro; 69,201</td>
	                                            <td class="td-actions text-right">
	                                                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
	                                                    <i class="ti-user"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
	                                                    <i class="ti-pencil-alt"></i>
	                                                </a>
	                                                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
	                                                    <i class="ti-close"></i>
	                                                </a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Table with Switches</h4>
	                                <p class="category">With some subtitle</p>
	                            </div>
	                            <div class="content table-full-width">
	                                <table class="table table-striped">
	                                    <thead>
	                                        <tr>
	                                            <th class="text-center">#</th>
	                                            <th>Name</th>
	                                            <th>Job Position</th>
	                                            <th class="text-right">Salary</th>
	                                            <th class="text-right">Active</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td class="text-center">1</td>
	                                            <td>Andrew Mike</td>
	                                            <td>Develop</td>
	                                            <td class="text-right">&euro; 99,225</td>
	                                             <td class="text-right">
	                                                <div class="switch"
	                                                     data-on-label=""
	                                                     data-off-label="">
	                                                     <input type="checkbox"/>
	                                                </div>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">2</td>
	                                            <td>John Doe</td>
	                                            <td>Design</td>
	                                            <td class="text-right">&euro; 89,241</td>
	                                             <td class="text-right">
	                                                <div class="switch"
	                                                     data-on-label=""
	                                                     data-off-label="">
	                                                     <input type="checkbox"/>
	                                                </div>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">3</td>
	                                            <td>Alex Mike</td>
	                                            <td>Design</td>
	                                            <td class="text-right">&euro; 92,144</td>
	                                             <td class="text-right">
	                                                <div class="switch"
	                                                     data-on-label=""
	                                                     data-off-label="">
	                                                     <input type="checkbox" checked/>
	                                                </div>
	                                            </td>
	                                        </tr>
	                                        <tr>
	                                            <td class="text-center">4</td>
	                                            <td>Mike Monday</td>
	                                            <td>Marketing</td>
	                                            <td class="text-right">&euro; 49,990</td>
	                                             <td class="text-right">
	                                                <div class="switch"
	                                                     data-on-label=""
	                                                     data-off-label="">
	                                                     <input type="checkbox" checked/>
	                                                </div>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
								</div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Table Big Boy</h4>
	                                <p class="category">A table for content management</p>
	                                <br />
	                            </div>
								<div class="table-responsive">
						            <table class="table table-shopping">
						                <thead>
						                    <tr>
						                        <th class="text-center"></th>
						                        <th></th>
						                        <th class="text-right">Price</th>
						                        <th class="text-right">Quantity</th>
						                        <th class="text-right">Total</th>
						                    </tr>
						                </thead>
						                <tbody>
						                    <tr>
						                        <td>
						                            <div class="img-container">
						                                <img src="../../assets/img/tables/agenda.png" alt="Agenda">
						                            </div>
						                        </td>
						                        <td class="td-product">
						                            <strong>Get Shit Done Notebook</strong>
						                            <p>
						                            Most beautiful agenda for the office.</p>
						                        </td>
						                        <td class="td-price">
						                            <small>&euro;</small>49
						                        </td>
						                        <td class="td-number td-quantity">
						                            1
						                            <div class="btn-group">
						                                <button class="btn btn-sm"><i class="ti-minus"></i></button>
						                                <button class="btn btn-sm"><i class="ti-plus"></i></button>
						                            </div>
						                        </td>
						                        <td class="td-number">
						                            <small>&euro;</small>49
						                        </td>
						                    </tr>
						                    <tr>
						                         <td>
						                            <div class="img-container">
						                                <img src="../../assets/img/tables/stylus.jpg" alt="Stylus"/>
						                            </div>
						                        </td>
						                        <td class="td-product">
						                            <strong>Stylus</strong>
						                            <p>Design is not just what it looks like and feels like. Design is how it works.  </p>
						                        </td>
						                        <td class="td-price">
						                            <small>&euro;</small>499
						                        </td>
						                        <td class="td-number td-quantity">
						                            2
						                            <div class="btn-group">
						                                <button class="btn btn-sm"><i class="ti-minus"></i></button>
						                                <button class="btn btn-sm"><i class="ti-plus"></i></button>
						                            </div>
						                        </td>
						                        <td class="td-number">
						                            <small>&euro;</small>998
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>
						                            <div class="img-container">
						                                <img src="../../assets/img/tables/evernote.png" alt="Evernote">
						                            </div>
						                        </td>
						                        <td class="td-product">
						                            <strong>Evernote iPad Stander</strong>
						                            <p>A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.</p>
						                        </td>
						                        <td class="td-price">
						                            <small>&euro;</small>799
						                        </td>
						                        <td class="td-number td-quantity">
						                            1
						                            <div class="btn-group">
						                                <button class="btn btn-sm"><i class="ti-minus"></i></button>
						                                <button class="btn btn-sm"><i class="ti-plus"></i></button>
						                            </div>
						                        </td>
						                        <td class="td-number">
						                            <small>&euro;</small>799
						                        </td>
						                    </tr>
						                    <tr>
						                        <td colspan="2"></td>
						                        <td></td>
						                        <td class="td-total">
						                           Total
						                        </td>
						                        <td class="td-total">
						                            <small>&euro;</small>12,999
						                        </td>
						                    </tr>
						                </tbody>
						            </table>
	    						</div>
	                        </div><!--  end card  -->
	                    </div> <!-- end col-md-12 -->
	                </div> <!-- end row -->
	            </div>
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
