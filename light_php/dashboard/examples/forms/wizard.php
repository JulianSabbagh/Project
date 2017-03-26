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
								<li><a href="regular.php">Regular Forms</a></li>
								<li><a href="extended.php">Extended Forms</a></li>
								<li><a href="validation.php">Validation Forms</a></li>
	                            <li class="active"><a href="wizard.php">Wizard</a></li>
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
	                    <a class="navbar-brand" href="#wizard">Wizard</a>
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
	                    <div class="col-md-8 col-md-offset-2">
	                        <div class="card card-wizard" id="wizardCard">
	                            <form id="wizardForm" method="" action="">
		                            <div class="header text-center">
		                                <h4 class="title">Awesome Wizard</h4>
		                                <p class="category">Split a complicated flow in multiple steps</p>
		                            </div>
	            					<div class="content">
		            				    <ul class="nav">
		            						<li><a href="#tab1" data-toggle="tab">First Tab</a></li>
		            						<li><a href="#tab2" data-toggle="tab">Second Tab</a></li>
		            						<li><a href="#tab3" data-toggle="tab">Third Tab</a></li>
		            					</ul>
		            					<div class="tab-content">
		            					    <div class="tab-pane" id="tab1">
		                                        <h5 class="text-center">Please tell us more about yourself.</h5>
		                                        <div class="row">
		                                            <div class="col-md-5 col-md-offset-1">
		                                                <div class="form-group">
		                                                    <label class="control-label">
																First Name
															</label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="first_name"
		                                                           placeholder="ex: Mike"
															/>
		                                                </div>
		                                            </div>
		                                            <div class="col-md-5">
		                                                <div class="form-group">
		                                                    <label class="control-label">
																Last Name
															</label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="last_name"
		                                                           required="true"
		                                                           placeholder="ex: Andrew"
															/>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-10 col-md-offset-1">
		                                                <div class="form-group">
		                                                    <label class="control-label">
																Email<star>*</star>
															</label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="email"
		                                                           email="true"
		                                                           placeholder="ex: hello@creative-tim.com"
															/>
		                                                </div>
		                                            </div>
		                                        </div>
		            					    </div>
		            					    <div class="tab-pane" id="tab2">
		                                        <h5 class="text-center">Please give us more details about your platform.</h5>
		                                        <div class="row">
		                                            <div class="col-md-10 col-md-offset-1">
		                                                <div class="form-group">
		                                                    <label class="control-label">Your Website<star>*</star></label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="website"
		                                                           url="true"
		                                                           placeholder="ex: http://www.creative-tim.com"
															/>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-5 col-md-offset-1">
		                                                <div class="form-group">
		                                                    <label class="control-label">Framework Type</label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="framework"
		                                                           placeholder="ex: http://www.creative-tim.com"
															/>
		                                                </div>
		                                            </div>
		                                            <div class="col-md-5">
		                                                <div class="form-group">
		                                                    <label class="control-label">
																Language<star>*</star>
															</label>
		                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
		                                                     -->
		                                                    <select name="cities" class="form-control">
		                                                        <option selected="" disabled="">- language -</option>
		                                                        <option value="ms">Bahasa Melayu</option>
		                                                        <option value="ca">Català</option>
		                                                        <option value="da">Dansk</option>
		                                                        <option value="de">Deutsch</option>
		                                                        <option value="en">English</option>
		                                                        <option value="es">Español</option>
		                                                        <option value="el">Eλληνικά</option>
		                                                        <option value="fr">Français</option>
		                                                        <option value="it">Italiano</option>
		                                                        <option value="hu">Magyar</option>
		                                                        <option value="nl">Nederlands</option>
		                                                        <option value="no">Norsk</option>
		                                                        <option value="pl">Polski</option>
		                                                        <option value="pt">Português</option>
		                                                        <option value="fi">Suomi</option>
		                                                        <option value="sv">Svenska</option>
		                                                        <option value="tr">Türkçe</option>
		                                                        <option value="is">Íslenska</option>
		                                                        <option value="cs">Čeština</option>
		                                                        <option value="ru">Русский</option>
		                                                        <option value="th">ภาษาไทย</option>
		                                                        <option value="zh">中文 (简体)</option>
		                                                        <option value="zh-TW">中文 (繁體)</option>
		                                                        <option value="ja">日本語</option>
		                                                        <option value="ko">한국어</option>
		                                                    </select>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-5 col-md-offset-1">
		                                                <div class="form-group">
		                                                    <label class="control-label">
																Bootstrap Version
															</label>
		                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
		                                                     -->
		                                                    <select name="cities" class="form-control">
		                                                        <option selected="" disabled="">- version -</option>
		                                                        <option value="1.1">Bootstrap 1.1</option>
		                                                        <option value="2.0">Bootstrap 2.0</option>
		                                                        <option value="3.0">Bootstrap 3.0</option>
		                                                        <option value="4.0">Bootstrap 4.0(alpha)</option>
		                                                    </select>
		                                                </div>
		                                            </div>
		                                            <div class="col-md-5">
		                                                <div class="form-group">
		                                                    <label class="control-label">Price</label>
		                                                    <input class="form-control"
		                                                           type="text"
		                                                           name="price"
		                                                           placeholder="ex: 19.00"
															/>
		                                                </div>
		                                            </div>
		                                        </div>
		            					    </div>
		            						<div class="tab-pane" id="tab3">
		            							<h2 class="text-center text-space">Yuhuuu! <br><small> 													Click on "<b>Finish</b>" to join our community</small></h2>
		            					    </div>
		            					</div>
	            					</div>
		            				<div class="card-footer">
		                                <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Back</button>
		                                <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Next</button>
		                                <button type="button" class="btn btn-info btn-fill btn-wd btn-finish pull-right" onclick="onFinishWizard()">Finish</button>
		                                <div class="clearfix"></div>
		            				</div>
	                        	</form>
	                    	</div>
	                	</div>
	            	</div>
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

	<script type="text/javascript">
        $().ready(function(){

            var $validator = $("#wizardForm").validate({
    		  rules: {
    		    email: {
                    required: true,
                    email: true,
                    minlength: 5
    		    },
    		    first_name: {
    		        required: false,
                    minlength: 5
    		    },
    		    last_name: {
    		        required: false,
                    minlength: 5
    		    },
    		    website: {
    		        required: true,
                    minlength: 5,
                    url: true
    		    },
    		    framework: {
        		    required: false,
        		    minlength: 4
    		    },
    		    cities: {
        		    required: true
    		    },
    		    price:{
        		    number: true
    		    }
    		  }
    		});

			// you can also use the nav-pills-[blue | azure | green | orange | red] for a different color of wizard
            $('#wizardCard').bootstrapWizard({
            	tabClass: 'nav nav-pills',
            	nextSelector: '.btn-next',
                previousSelector: '.btn-back',
            	onNext: function(tab, navigation, index) {
            		var $valid = $('#wizardForm').valid();

            		if(!$valid) {
            			$validator.focusInvalid();
            			return false;
            		}
            	},
                onInit : function(tab, navigation, index){

                    //check number of tabs and fill the entire row
                    var $total = navigation.find('li').length;
                    $width = 100/$total;

                    $display_width = $(document).width();

                    if($display_width < 600 && $total > 3){
                       $width = 50;
                    }

                    navigation.find('li').css('width',$width + '%');
                },
                onTabClick : function(tab, navigation, index){
                    // Disable the posibility to click on tabs
                    return false;
                },
                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var wizard = navigation.closest('.card-wizard');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $(wizard).find('.btn-next').hide();
                        $(wizard).find('.btn-finish').show();
                    } else if($current == 1){
                        $(wizard).find('.btn-back').hide();
                    } else {
                        $(wizard).find('.btn-back').show();
                        $(wizard).find('.btn-next').show();
                        $(wizard).find('.btn-finish').hide();
                    }
                }
            });
        });

        function onFinishWizard(){
            //here you can do something, sent the form to server via ajax and show a success message with swal

            swal("Good job!", "You clicked the finish button!", "success");
        }
	</script>

</html>
