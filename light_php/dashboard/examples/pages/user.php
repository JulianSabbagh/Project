<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Profile</title>

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
	<div class="wrapper" id="side">
		<div class="sidebar" data-background-color="white" data-active-color="success">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="" class="simple-text">
					Wildlife VA
				</a>
			</div>
			<div class="logo logo-mini">
				<a href="" class="simple-text">
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
	                            <li><a href="user.php">My Profile</a></li>
	                            <li><a href="user.php">Edit Profile</a></li>
	                            <li><a href="#settings">Settings</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>

	            <!-- START OF SIDE BAR NAV -->
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
								<li><a href="google.php">Google Maps</a></li>
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
	                </li>
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
	    </div>  <!-- END OF SIDE BAR NAV -->



<!-- START OF TOP NAV -->
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
	                    <a class="navbar-brand" href="#userpage">My Profile</a>
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
	        </nav> <!-- END OF TOP NAV -->


<!-- START OF USER PHOTO BUBBLE CARD -->
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-4 col-md-5">
	                        <div class="card card-user">
	                            <div class="image">
	                                <img src="../../assets/img/background.jpg" alt="..."/>
	                            </div>
	                            <div class="content">
	                                <div class="author">
	                                  <img class="avatar border-white" src="../../assets/img/faces/face-2.jpg" alt="..."/>
	                                  <h4 class="title">Brad Johnson<br />
	                                     <a href="#"><small>@bradjman</small></a>
	                                  </h4>
	                                </div>
	                                <p class="description text-center">
	                                    34, Business Sales Rep <br>
	                                    Animal Lover <i class="fa fa-heart heart"></i>
	                                </p>
	                            </div>
	                            <hr>
	                            <div class="text-center">
	                                <div class="row">
	                                    <div class="col-md-3 col-md-offset-1">
	                                        <h5>12<br /><small>Hours</small></h5>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h5>230<br /><small>Miles</small></h5>
	                                    </div>
	                                    <div class="col-md-3">
	                                        <h5>24,6$<br /><small>Spent</small></h5>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        		<!-- END OF USER PHOTO BUBBLE CARD -->

	                        <!--<div class="card">
	                            <div class="header">
	                                <h4 class="title">Team Members</h4>
	                            </div>
	                            <div class="content">
	                                <ul class="list-unstyled team-members">
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    DJ Khaled
                                                    <br />
                                                    <span class="text-muted"><small>Offline</small></span>
                                                </div>
                                                <div class="col-xs-3 text-right">
                                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    Creative Tim
                                                    <br />
                                                    <span class="text-success"><small>Available</small></span>
                                                </div>
                                                <div class="col-xs-3 text-right">
                                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    Flume
                                                    <br />
                                                    <span class="text-danger"><small>Busy</small></span>
                                                </div>
                                                <div class="col-xs-3 text-right">
                                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                </div>
                                            </div>
                                        </li>
	                                </ul>
	                            </div>
	                        </div> -->


	              <!--START OF EDIT PROFILE FORM SECTION -->
	                    </div>
	                    <div class="col-lg-8 col-md-7">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Edit Profile</h4>
	                            </div>
	                            <div class="content">
	                                <form>
	                                <fieldset>
	                                	<div class="row">
	                                        <div class="form-group">
	                                            <label class="col-sm-2 control-label">Volunteer Type</label>

	                                            <div class="col-sm-4">
	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Animal Care
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Outreach Docents
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Treatment Teams
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Transport + Rescue
	                                                </label>
	                                              </div>
	                                             </div> 

	                                           
	                                        <div class="col-sm-5">
	                                            <div class="form-group">
	                                                <label>Status</label>
	                                                <input type="text" class="form-control border-input" disabled placeholder="Active" value="Status">
	                                            </div>
	                                        </div>
	                            
	                                      	
	                                      </div> <!-- end of row -->

	                                      

	                                    </fieldset>
	                                 	               

	                                    <div class="row">

	                                    <div class="col-sm-4">
	                                            <div class="form-group">
	                                                <label>Username</label>
	                                                <input type="text" class="form-control border-input" placeholder="Username" value="bradjohnson">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-8">
	                                            <div class="form-group">
	                                                <label>Email Address</label>
	                                                <input type="text" class="form-control border-input" placeholder="Email" value="bradjohnson@gmail.com">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>First Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="First Name" value="Brad">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Last Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Johnson">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Address</label>
	                                                <input type="text" class="form-control border-input" placeholder="Home Address" value="2573 Coolest Lane">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
	                                            <div class="form-group">
	                                                <label>City</label>
	                                                <input type="text" class="form-control border-input" placeholder="City" value="Harrisonburg, VA">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-4">
	                                            <div class="form-group">
	                                                <label>Postal Code</label>
	                                                <input type="text" class="form-control border-input" placeholder="ZIP" value="ZIP Code">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-4">
	                                            <div class="form-group">
	                                                <label>Phone Number</label>
	                                                <input type="number" class="form-control border-input" placeholder="(   )   -    -" value="(804)517-9050">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Allergies/Physical Limitations</label>
	                                                <textarea rows="3" class="form-control border-input" placeholder="Allergies" value="">
Peanuts, Pine Nuts, Bee stings and having fun.
													</textarea>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Availability</label>
	                                                <textarea rows="5" class="form-control border-input" placeholder="Availability" value="Mike">
Mondays 10 - 2PM
Wednesdays 12 - 3PM
Fridays ALL DAY

Seasons: Fall, Summer
													</textarea>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    	<div class="row">
	                                    	<div class="form-group">
	                                            <label class="col-sm-4 control-label">Rabies vaccinated within past two years?</label>

	                                            <div class="col-sm-3">
	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Yes
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">No
	                                                </label>
	                                                <button type="submit" class="btn btn-info btn-fill">Upload</button>

	                                            </div>

	                                              <label class="col-sm-5 control-label">Do you hold a valid permit to rehabilitate wildlife in the state of Virginia?</label>

	                                            <div class="col-sm-4">
	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">Yes
	                                                </label>

	                                                <label class="checkbox">
	                                                    <input type="checkbox" data-toggle="checkbox" value="">No
	                                                </label>
	                                                <button type="submit" class="btn btn-info btn-fill">Upload</button>
	                                             </div>


	                                              </div>
	                                            </div>
	                                            




								<div class="header">
	                                <h4 class="title">Emergency Contact</h4>
	                            </div>
	                            		<div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>First Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="First Name" value="Keith">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Last Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Johnson">
	                                            </div>
	                                        </div>
	                                       </div>
	                                      <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Relation</label>
	                                                <input type="text" class="form-control border-input" placeholder="Relation" value="Father">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Phone Number</label>
	                                                <input type="text" class="form-control border-input" placeholder="Mobile" value="(   )   -    ">
	                                            </div>
	                                        </div>
	                                       </div>


	                                    <div class="text-center">
	                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>      <!--END OF EDIT PROFILE FORM SECTION -->

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

</html>
