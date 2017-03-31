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
    <nav class="navbar navbar-transparent navbar-absolute">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle navbar-toggle-black" data-toggle="collapse" data-target="#navigation-example-2">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar "></span>
	                <span class="icon-bar "></span>
	                <span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li>
	                   <a href="login.php" class="btn">
	                        Looking to login?
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>

	<div class="wrapper wrapper-full-page">
    	<div class="register-page">
		<!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        	<div class="content">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="header-text">
                            	<h2>Wildlife Volunteer Registrations</h2>
                            	<h4>Select which application you would like to apply for.</h4>
                            	<hr>
                        	</div>
                             
                                    <!-- MENU TABS -->
                                        <!-- horizontal tabs -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active"><a href="#animalcare" data-toggle="tab">Animal Care</a></li>
                                            <li><a href="#docent" data-toggle="tab">Outreach Docents</a></li>
                                            <li><a href="#treatment" data-toggle="tab">Treatment Team</a></li>
                                            <li><a href="#transport" data-toggle="tab">Transport + Rescue</a></li>
                                            <li><a href="#other" data-toggle="tab">Other</a></li>
                                        </ul>
                                    </div>
                                </div> <!-- MENU TABS END -->


                                  <!--START OF VOLUNTEER FORMS -->
                                <div id="my-tab-content" class="tab-content text-center">
                                    <div class="tab-pane active" id="animalcare">
                                        <p>Thank you for your interest in volunteering with the rehabilitation department at the Wildlife Center of Virginia. Once we receive your application, an rehabilitation staff member will email you within one week to acknowledge your application and notify you of the next Volunteer Information Session. </p>
                                    </div>
                                    

                                    <div class="tab-pane" id="docent">

                                        <p>Thank you for your interest in volunteering with the outreach department at the Wildlife Center of Virginia. Once we receive your application, an outreach staff member will email you within one week to acknowledge your application and notify you of the next Volunteer Information Session.</p>

                                    </div>

                                    <div class="tab-pane" id="treatment">
                                        <p>There are no treatment team positions available at this time.</p>
                                    </div>

                                    <div class="tab-pane" id="transport">
                                        <p>Volunteer transporters provide a vital service to both the Wildlife Center of Virginia and the community by facilitating the rescue of wild animals. We appreciate that our volunteer transporters share the use of their vehicles, cost of gasoline, and valuable time to assist wildlife. Volunteer transporters provide a life-saving service.</p>
                                    </div>

                                    <div class="tab-pane" id="other">
                                        <p>Front desk help or Adminstrative Assistance </p>
                                    </div>
                                </div>

                    	   </div>
                        </div>
                        <!--<div class="row">
                    	<div class="col-md-4 col-md-offset-2">
                        	<div class="media">
                            	<div class="media-left">
                                	<div class="icon icon-danger">
                                    	<i class="ti ti-user"></i>
                                	</div>
                            	</div>   
               
                            	<!--<div class="media-body">
                                	<h5>Free Account</h5>
                                	Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            	</div> 
                        	</div>
                        	<div class="media">
                            	<div class="media-left">
                                	<div class="icon icon-warning">
                                    	<i class="ti-bar-chart-alt"></i>
                                	</div>
                            	</div>
                            	<div class="media-body">
                                	<h5>Awesome Performances</h5>
                                	Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            	</div>
                        	</div>
                        	<div class="media">
                            	<div class="media-left">
                                	<div class="icon icon-info">
                                    	<i class="ti-headphone"></i>
                                	</div>
                            	</div>
                            	<div class="media-body">
                                	<h5>Global Support</h5>
                                	Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            	</div>
                        	</div> -->
                    	</div>
                        </div>

                      

                            <!--ANIMAL CARE FORM-->
                        <div class="col-md-4 col-md-offset-4">
                            <div class="card card-plain">
                                <div class="content">

                            <form class="webform-client-form" enctype="multipart/form-data" action="/animal-care-volunteer-application" method="post" id="webform-client-form-4959" accept-charset="UTF-8"><div><div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                              <label for="edit-submitted-name">Name <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-address">
                              <label for="edit-submitted-address">Address <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-address" name="submitted[address]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-volunteer-application-Address2">
                              <label for="edit-submitted-volunteer-application-address2">Address </label>
                             <input type="text" id="edit-submitted-volunteer-application-address2" name="submitted[volunteer_application_Address2]" value="" size="60" maxlength="128" class="form-text">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-city">
                              <label for="edit-submitted-city">City <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-city" name="submitted[city]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-select" id="webform-component-state">
                              <label for="edit-submitted-state">State <span class="form-required" title="This field is required.">*</span></label>
                             <select id="edit-submitted-state" name="submitted[state]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Marianas Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select>
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-zip-code">
                              <label for="edit-submitted-zip-code">Zip Code  <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-zip-code" name="submitted[zip_code]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-phone">
                              <label for="edit-submitted-phone">Phone <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-phone" name="submitted[phone]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-date" id="webform-component-date-of-birth">
                              <label for="edit-submitted-date-of-birth">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
                             <div class="webform-container-inline webform-datepicker"><div class="form-item form-type-select form-item-submitted-date-of-birth-month">
                              <label class="element-invisible" for="edit-submitted-date-of-birth-month">Month </label>
                             <select class="month form-select" id="edit-submitted-date-of-birth-month" name="submitted[date_of_birth][month]"><option value="" selected="selected">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                            </div>
                            <div class="form-item form-type-select form-item-submitted-date-of-birth-day">
                              <label class="element-invisible" for="edit-submitted-date-of-birth-day">Day </label>
                             <select class="day form-select" id="edit-submitted-date-of-birth-day" name="submitted[date_of_birth][day]"><option value="" selected="selected">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                            </div>
                            <div class="form-item form-type-select form-item-submitted-date-of-birth-year">
                              <label class="element-invisible" for="edit-submitted-date-of-birth-year">Year </label>
                             <select class="year form-select" id="edit-submitted-date-of-birth-year" name="submitted[date_of_birth][year]"><option value="" selected="selected">Year</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option></select>
                            </div>
                            <!--<input type="image" src="/sites/all/modules/webform/images/calendar.png" class="webform-calendar webform-calendar-start-1917-03-22 webform-calendar-end-2019-03-22 webform-calendar-day-0 hasDatepicker" alt="Open popup calendar" title="Open popup calendar" id="dp1490210844066">
                            </div> -->
                            </div>
                            <div class="form-item webform-component webform-component-email" id="webform-component-e-mail">
                              <label for="edit-submitted-e-mail">E-mail <span class="form-required" title="This field is required.">*</span></label>
                             <input class="email form-text form-email required" type="email" id="edit-submitted-e-mail" name="submitted[e_mail]" size="60">
                            </div>
                            <fieldset class="webform-component-fieldset collapsible form-wrapper collapse-processed" id="webform-component-emergency-contact-information"><legend><span class="fieldset-legend"><a class="fieldset-title" href="#"><span class="fieldset-legend-prefix element-invisible">Hide</span> Emergency Contact Information</a><span class="summary"></span></span></legend><div class="fieldset-wrapper"><div class="form-item webform-component webform-component-textfield" id="webform-component-emergency-contact-information--emergency-name">
                              <label for="edit-submitted-emergency-contact-information-emergency-name">Name  <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-emergency-contact-information-emergency-name" name="submitted[emergency_contact_information][emergency_name]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-emergency-contact-information--emergency-phone">
                              <label for="edit-submitted-emergency-contact-information-emergency-phone">Phone <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-emergency-contact-information-emergency-phone" name="submitted[emergency_contact_information][emergency_phone]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-emergency-contact-information--relationship">
                              <label for="edit-submitted-emergency-contact-information-relationship">Relationship </label>
                             <input type="text" id="edit-submitted-emergency-contact-information-relationship" name="submitted[emergency_contact_information][relationship]" value="" size="60" maxlength="128" class="form-text">
                            </div>
                            </div></fieldset>
                            <fieldset class="webform-component-fieldset collapsible form-wrapper collapse-processed" id="webform-component-interests-and-experience"><legend><span class="fieldset-legend"><a class="fieldset-title" href="#"><span class="fieldset-legend-prefix element-invisible">Hide</span> Experience and Requirements </a><span class="summary"></span></span></legend><div class="fieldset-wrapper"><div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--please-briefly-describe-your-relevant-hands-on-experience">
                              <label for="edit-submitted-interests-and-experience-please-briefly-describe-your-relevant-hands-on-experience">Please briefly describe your relevant hands-on experience with animals, if any. What did you enjoy about the experience?  What did you dislike? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-please-briefly-describe-your-relevant-hands-on-experience" name="submitted[interests_and_experience][please_briefly_describe_your_relevant_hands_on_experience]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--carnivorous-patients-are-sometimes-unable-to-eat-food-items">
                              <label for="edit-submitted-interests-and-experience-carnivorous-patients-are-sometimes-unable-to-eat-food-items">Carnivorous patients are sometimes unable to eat food items whole due to their injuries; you may be required to cut and divide dead rodents, chicks, and fishes into smaller portions. Are you comfortable handling dead animals for this purpose? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-carnivorous-patients-are-sometimes-unable-to-eat-food-items" name="submitted[interests_and_experience][carnivorous_patients_are_sometimes_unable_to_eat_food_items]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--predatory-birds-are-presented-with-live-mice">
                              <label for="edit-submitted-interests-and-experience-predatory-birds-are-presented-with-live-mice">Prior to release from the Wildlife Center, many predatory birds are presented with live mice in order to evaluate their ability to capture prey in a controlled and measurable environment. What is your opinion on using live-prey for this purpose? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-predatory-birds-are-presented-with-live-mice" name="submitted[interests_and_experience][predatory_birds_are_presented_with_live_mice]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--wildlife-rehabilitation-requires-daily-outdoor-work">
                              <label for="edit-submitted-interests-and-experience-wildlife-rehabilitation-requires-daily-outdoor-work">Wildlife rehabilitation requires daily outdoor work -- year-round and regardless of weather conditions. Are you able to work outside during all seasons? If not, what are your limitations? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-wildlife-rehabilitation-requires-daily-outdoor-work" name="submitted[interests_and_experience][wildlife_rehabilitation_requires_daily_outdoor_work]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-select" id="webform-component-interests-and-experience--are-you-able-to-lift-40-pounds">
                              <label for="edit-submitted-interests-and-experience-are-you-able-to-lift-40-pounds">Are you able to lift 40 pounds on potentially uneven surfaces with minimal assistance? <span class="form-required" title="This field is required.">*</span></label>
                             <select id="edit-submitted-interests-and-experience-are-you-able-to-lift-40-pounds" name="submitted[interests_and_experience][are_you_able_to_lift_40_pounds]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="yes">Yes</option><option value="no">No</option></select>
                            </div>
                            <div class="form-item webform-component webform-component-select" id="webform-component-interests-and-experience--are-you-vaccinated-for-rabies">
                              <label for="edit-submitted-interests-and-experience-are-you-vaccinated-for-rabies">Are you vaccinated for Rabies? <span class="form-required" title="This field is required.">*</span></label>
                             <select id="edit-submitted-interests-and-experience-are-you-vaccinated-for-rabies" name="submitted[interests_and_experience][are_you_vaccinated_for_rabies]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="yes">Yes</option><option value="no">No</option></select>
                            </div>
                            <div class="form-item webform-component webform-component-select" id="webform-component-interests-and-experience--if-not-are-you-willing-to-become-vaccinated-at-your-own-cost">
                              <label for="edit-submitted-interests-and-experience-if-not-are-you-willing-to-become-vaccinated-at-your-own-cost">If not, are you willing to become vaccinated at your own cost?  <span class="form-required" title="This field is required.">*</span></label>
                             <select id="edit-submitted-interests-and-experience-if-not-are-you-willing-to-become-vaccinated-at-your-own-cost" name="submitted[interests_and_experience][if_not_are_you_willing_to_become_vaccinated_at_your_own_cost]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="yes">Yes</option><option value="no">No</option><option value="n/a">N/A</option></select>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--please-list-all-food-and-animal-allergies-if-any">
                              <label for="edit-submitted-interests-and-experience-please-list-all-food-and-animal-allergies-if-any">Please list all food and animal allergies, if any: <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-please-list-all-food-and-animal-allergies-if-any" name="submitted[interests_and_experience][please_list_all_food_and_animal_allergies_if_any]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--what-days-of-the-week-are-you-available-and-at-what-times">
                              <label for="edit-submitted-interests-and-experience-what-days-of-the-week-are-you-available-and-at-what-times">What days of the week are you available, and at what times? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-what-days-of-the-week-are-you-available-and-at-what-times" name="submitted[interests_and_experience][what_days_of_the_week_are_you_available_and_at_what_times]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-select" id="webform-component-interests-and-experience--will-you-be-able-to-commit-to-either-a-six-month-or-one-year-schedule-with-at-least-one-shift-four-hours-per-week">
                              <label for="edit-submitted-interests-and-experience-will-you-be-able-to-commit-to-either-a-six-month-or-one-year-schedule-with-at-least-one-shift-four-hours-per-week">Will you be able to commit to either a six-month or one-year schedule, with at least one shift (four hours) per week? <span class="form-required" title="This field is required.">*</span></label>
                             <select id="edit-submitted-interests-and-experience-will-you-be-able-to-commit-to-either-a-six-month-or-one-year-schedule-with-at-least-one-shift-four-hours-per-week" name="submitted[interests_and_experience][will_you_be_able_to_commit_to_either_a_six_month_or_one_year_schedule_with_at_least_one_shift_four_hours_per_week]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="yes">Yes</option><option value="no">No</option></select>
                            </div>
                            <div class="form-item webform-component webform-component-textfield" id="webform-component-interests-and-experience--do-you-belong-to-any-animal-rights-groups-peta-the-humane-society-etc-if-so-which-ones">
                              <label for="edit-submitted-interests-and-experience-do-you-belong-to-any-animal-rights-groups-peta-the-humane-society-etc-if-so-which-ones">Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones? <span class="form-required" title="This field is required.">*</span></label>
                             <input type="text" id="edit-submitted-interests-and-experience-do-you-belong-to-any-animal-rights-groups-peta-the-humane-society-etc-if-so-which-ones" name="submitted[interests_and_experience][do_you_belong_to_any_animal_rights_groups_peta_the_humane_society_etc_if_so_which_ones]" value="" size="60" maxlength="128" class="form-text required">
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--what-do-you-hope-to-learn-or-accomplish-by-volunteering-at-the-wildlife-center-of-virginia">
                              <label for="edit-submitted-interests-and-experience-what-do-you-hope-to-learn-or-accomplish-by-volunteering-at-the-wildlife-center-of-virginia">What do you hope to learn or accomplish by volunteering at the Wildlife Center of Virginia? <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-what-do-you-hope-to-learn-or-accomplish-by-volunteering-at-the-wildlife-center-of-virginia" name="submitted[interests_and_experience][what_do_you_hope_to_learn_or_accomplish_by_volunteering_at_the_wildlife_center_of_virginia]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--please-describe-an-environmental-or-wildlife-based-issue-you-feel-passionately-about-and-why">
                              <label for="edit-submitted-interests-and-experience-please-describe-an-environmental-or-wildlife-based-issue-you-feel-passionately-about-and-why">Please describe an environmental or wildlife-based issue you feel passionately about, and why: <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-please-describe-an-environmental-or-wildlife-based-issue-you-feel-passionately-about-and-why" name="submitted[interests_and_experience][please_describe_an_environmental_or_wildlife_based_issue_you_feel_passionately_about_and_why]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            <div class="form-item webform-component webform-component-textarea" id="webform-component-interests-and-experience--is-there-anything-else-that-youd-like-us-to-know-about-yourself-or-your-experience">
                              <label for="edit-submitted-interests-and-experience-is-there-anything-else-that-youd-like-us-to-know-about-yourself-or-your-experience">Is there anything else that you’d like us to know about yourself or your experience?   <span class="form-required" title="This field is required.">*</span></label>
                             <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-interests-and-experience-is-there-anything-else-that-youd-like-us-to-know-about-yourself-or-your-experience" name="submitted[interests_and_experience][is_there_anything_else_that_youd_like_us_to_know_about_yourself_or_your_experience]" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                            </div>
                            </div></fieldset>
                            <div class="form-item webform-component webform-component-markup" id="webform-component-additional-documents">
                             <p><strong>ADDITIONAL REQUIREMENTS:<br>
                                In order to be considered for a volunteer position, applicants must submit the following additional documents:</strong></p>
                            <ul><li>
                                    <strong>Resume or CV: </strong>This should include information about your education and relevant work history.</li>
                                <li>
                                    <strong>Letter of Recommendation: </strong>The letter should be sent directly from your reference.</li>
                            </ul><p>These documents may be emailed to <a href="mailto:lmcdaniel@wildlifecenter.org">lmcdaniel@wildlifecenter.org</a> or mailed to:</p>
                            <p>Linda McDaniel<br>
                                P.O. Box 1557<br>
                                Waynesboro, VA 22980</p>

                            </div>
                            <input type="hidden" name="details[sid]">
                            <input type="hidden" name="details[page_num]" value="1">
                            <input type="hidden" name="details[page_count]" value="1">
                            <input type="hidden" name="details[finished]" value="0">
                            <input type="hidden" name="form_build_id" value="form-eWUxGV1W1SZN4lyIhnXM8FTkFPHRCHbRjiQOKZn4GPI">
                            <input type="hidden" name="form_id" value="webform_client_form_4959">
                            </div>

                                 </div>
                                </div>
                            </form>
                                <!-- end of ANIMAL CARE form! --> 
                                <!--END OF VOLUNTEER FORMS -->

    <!-- I only did one actually form, because Shelly said I could add that later and it was kind of hard lol but also sorry its so long I took it from the WCV site -->
                                   
                        </div>
                                                	

                        <!--<div class="col-md-4 col-md-offset-4">
                        	<form method="#" action="#">
                            	<div class="card card-plain">
                                	<div class="content">
                                    	<div class="form-group">
                                        	<input type="email" placeholder="Your First Name" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                        	<input type="email" placeholder="Your Last Name" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                        	<input type="email" placeholder="Adresss" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                        	<input type="email" placeholder="Enter email" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                        	<input type="password" placeholder="Password" class="form-control">
                                    	</div>
                                    	<div class="form-group">
                                        	<input type="password" placeholder="Password Confirmation" class="form-control">
                                    	</div>
                                	</div> -->
                                	<div class="footer text-center">
                                    	<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Submit" class="form-submit"></div>
                                	</div>
                            	</div>
                        	</form>
                    	</div>
                	
            	</div>
        	</div>

    		<footer class="footer footer-transparent">
            	<div class="container">
                	<div class="copyright text-center">
                    	&copy; <script>document.write(new Date().getFullYear())</script>, Wildlife Center of Virginia</a>
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
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
		});
	</script>

</html>
