<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Elements - Paper Dashboard Pro by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link href="css/documentation.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body class="nude">



<div class="header-wrapper">
        <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
              </button>
              <a href="http://www.creative-tim.com">
                   <div class="logo-container">
                        <div class="logo">
                            <img src="../assets/img/new_logo.png" alt="Creative Tim Logo">
                        </div>
                        <div class="brand">
                            Creative Tim
                        </div>
                    </div>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
              <ul  class="nav navbar-nav navbar-right">
                    <li>
                        <button onclick="window.location.href='https://github.com/timcreative/paper-dashboard-pro/issues'" id="issueButton" class="btn btn-simple btn-neutral">Have an issue?</button>
                    </li>
               </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="header">
            <div class="filter"></div>
            <div class="title-container text-center">
                    <h1>Paper Dashboard PRO</h1>
                    <h3>Elements description</h3>
            </div>
        </div>
</div>


<div class="wrapper">

    <div class="main">
        <div class="section section-white">
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="fixed-section">
                <ul>
                    <li><a href="#buttons-row">Buttons</a></li>
                    <li><a href="#checkbox-row">Checkbox/Radio/Switch</a></li>
                    <li><a href="#dropdown-row">Dropdown</a></li>
                    <li><a href="#inputs-row">Inputs</a></li>
                    <li><a href="#select-row">Customizable Select</a></li>
                    <li><a href="#tags-row">Tags</a></li>
                    <li><a href="#textarea-row">Textarea</a></li>
                    <li><a href="#navbar-row">Navigation</a></li>
                    <li><a href="#subscription-row">Footers</a></li>
                    <li><a href="#pagination-row">Pagination</a></li>
                    <li><a href="#progressbar-row">Progress Bars</a></li>
                    <li><a href="#sliders-row">Sliders</a></li>
                    <li><a href="#panels-row">Panels</a></li>
                    <li><a href="#tables-row">Tables</a></li>
                    <li><a href="#collapsable-row">Collapsible Groups</a></li>
                    <li><a href="#notification-row">Notification</a></li>
                    <li><a href="#sidebar-row">Sidebar</a></li>
                    <li><a href="#sweetalert-row">Sweet Alert</a></li>
                    <li><a href="#datetimepicker-row">DateTimePicker</a></li>
                    <li><a href="#charts-row">Charts</a></li>
                    <li><a href="#google-row">Google Maps</a></li>
                    <li><a href="#jvector-row">jVector Maps</a></li>
                    <li><a href="#wizard-row">Wizard</a></li>
                    <li><a href="#validation-row">jQuery Validation</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <div class="space-top"></div>
            <div class="tim-container" style="min-height: 2000px;">

<!-- buttons row -->
    <div class="tim-row" id="buttons-row">

            <h2>Buttons
                <small><a href="../examples/components/buttons.php">Live Demo</a></small>
            </h2>
            <legend></legend>
            <h4>Colors</h4>
                <p>
                We worked over the original Bootstrap classes, choosing a different, slightly intenser colour palette:
                </p>
                <p>
                   <button class="btn btn-default">Default</button>
                   <button class="btn btn-primary">Primary</button>
                   <button class="btn btn-info">Info</button>
                   <button class="btn btn-success">Success</button>
                   <button class="btn btn-warning">Warning</button>
                   <button class="btn btn-danger">Danger</button>
                   <button class="btn btn-neutral">Neutral</button>

                </p>
                <br />
                <div class="area-line">
                <a data-target="#buttonColor" href="javascript: void(0);" data-toggle="collapse">
                      See Full Implementation
                </a>
<div id="buttonColor" class="collapse">
<pre class="prettyprint">
&lt;button class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;

&lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;

</pre>
</div>
                </div>
            <h4>Sizes</h4>
                <p class="space-top">
                    Buttons come in all needed sizes:
                </p>
                <p>
                    <button class="btn btn-primary btn-lg">Large</button>
                    <button class="btn btn-primary">Normal</button>
                    <button class="btn btn-primary btn-sm">Small</button>
                    <button class="btn btn-primary btn-xs">Extra Small</button>
                </p>
                <div class="area-line">
                <a data-target="#buttonSize" href="javascript: void(0);" data-toggle="collapse">
                      See Full Implementation
                </a>
<div id="buttonSize" class="collapse">
<pre class="prettyprint">
&lt;button class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;

&lt;button class=&quot;btn btn-primary&quot;&gt;Normal&lt;/button&gt;

&lt;button class=&quot;btn btn-primary btn-sm&quot;&gt;Small&lt;/button&gt;

&lt;button class=&quot;btn btn-primary btn-xs&quot;&gt;Extra Small&lt;/button&gt;
</pre>
</div>
                </div>
            <h4>Styles</h4>
                <p class="space-top">
                    We added extra classes that help you better customise the look. You can use regular buttons, filled buttons or plain link buttons. Let's see some examples:
                </p>
                <p>
                    <button class="btn btn-primary">Default</button>
                    <button class="btn btn-primary btn-fill">Filled</button>
                    <button class="btn btn-primary btn-simple">Simple</button>
                </p>
                <div class="area-line">
                <a data-target="#buttonStyle" href="javascript: void(0);" data-toggle="collapse">
                      See Full Implementation
                </a>
<div id="buttonStyle" class="collapse">
<pre class="prettyprint">
&lt;button class=&quot;btn btn-primary&quot;&gt;Default&lt;/button&gt;

&lt;button class=&quot;btn btn-primary btn-fill&quot;&gt;Filled&lt;/button&gt;

&lt;button class=&quot;btn btn-primary btn-simple&quot;&gt;Simple&lt;/button&gt;
</pre>
</div>
                </div>
                <p class="space-top">
                    Button groups, toolbars, and disabled states all work like they are supposed to.
                </p>

            <h4>Social Buttons</h4>
                <p>
                    An extra category of buttons that are necessary for any project is the social buttons. We have added classes that provide the default colour for every social network. <br />
                    To use them, you have to add to your button the general class <code>btn-social</code> and the specific network, for example <code>btn-twitter</code>. All styles described above can be applied to social buttons (default, filled, simple). <br />
                   We used the Themify social icons which you can find <a href="../examples/components/icons.php">here</a>.
                <br />
                Here are examples for all the social buttons:
                </p>
                <div class="social-buttons">
                    <button class="btn btn-icon btn-twitter">
                        <i class="ti-twitter"></i>
                    </button>
                    <button class="btn btn-icon btn-facebook">
                        <i class="ti-facebook"> </i>
                    </button>
                    <button class="btn btn-icon btn-google">
                        <i class="ti-google"> </i>
                    </button>
                    <button class="btn btn-icon btn-linkedin">
                        <i class="ti-linkedin"></i>
                    </button>
                    <button class="btn btn-icon btn-pinterest">
                        <i class="ti-pinterest"></i>
                    </button>
                    <button class="btn btn-icon btn-youtube">
                        <i class="ti-youtube"> </i>
                    </button>
                    <button class="btn btn-icon btn-tumblr">
                        <i class="ti-tumblr"> </i>
                    </button>
                    <button class="btn btn-icon btn-github">
                        <i class="ti-github"></i>
                    </button>
                    <button class="btn btn-icon btn-dribbble">
                        <i class="ti-dribbble"></i>
                    </button>
                    <button class="btn btn-icon btn-reddit">
                        <i class="ti-reddit"></i>
                    </button>
                    <button class="btn btn-icon btn-instagram">
                        <i class="ti-instagram"></i>
                    </button>
                </div>
                <div class="area-line">
                <a data-target="#buttonSocial" href="javascript: void(0);" data-toggle="collapse">
                      See Full Implementation
                </a>
                <div id="buttonSocial" class="collapse">
<pre class="prettyprint">
&lt;button class=&quot;btn btn-icon btn-twitter&quot;&gt;
    &lt;i class=&quot;ti-twitter&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-facebook&quot;&gt;
    &lt;i class=&quot;ti-facebook&quot;&gt; &lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-google&quot;&gt;
    &lt;i class=&quot;ti-google&quot;&gt; &lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-linkedin&quot;&gt;
    &lt;i class=&quot;ti-linkedin&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-pinterest&quot;&gt;
    &lt;i class=&quot;ti-pinterest&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-youtube&quot;&gt;
    &lt;i class=&quot;ti-youtube&quot;&gt; &lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-tumblr&quot;&gt;
    &lt;i class=&quot;ti-tumblr&quot;&gt; &lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-github&quot;&gt;
    &lt;i class=&quot;ti-github&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-dribbble&quot;&gt;
    &lt;i class=&quot;ti-dribbble&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-reddit&quot;&gt;
    &lt;i class=&quot;ti-reddit&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-icon btn-instagram&quot;&gt;
    &lt;i class=&quot;ti-instagram&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

</pre>
                </div>
                </div>

    </div>
<!--     end row -->

<!-- checkbox row -->
    <div class="tim-row" id="checkbox-row">
            <h2> Checkboxes
                <small><a href="../examples/forms/extended.php">Live Demo</a></small>
            </h2>
            <legend></legend>
            <p>
                To use the custom checkboxes, you need to import a separate Javascript file called 'bootstrap-checkbox-radio-switch-tags.js'.
            </p>
            <p>
                  <label class="checkbox" for="checkbox1">
                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                    Unchecked
                  </label>
                  <label class="checkbox" for="checkbox2">
                    <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                    Checked
                  </label>
                  <label class="checkbox" for="checkbox3">
                    <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled>
                    Disabled unchecked
                  </label>
                  <label class="checkbox" for="checkbox4">
                    <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" disabled checked>
                    Disabled checked
                  </label>
            </p>
            <p>Usage can be done via Data Attributes:
            <a data-target="#checkboxDataAttribute" href="javascript: void(0);" data-toggle="collapse">
                      See example.
            </a>
            </p>
<div id="checkboxDataAttribute" class="collapse">
<pre class="prettyprint">
&lt;label class=&quot;checkbox&quot; for=&quot;checkbox1&quot;&gt;

    &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox1&quot; data-toggle=&quot;checkbox&quot;&gt;

    Unchecked

&lt;/label&gt;

&lt;label class=&quot;checkbox&quot; for=&quot;checkbox2&quot;&gt;

    &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox2&quot; data-toggle=&quot;checkbox&quot; checked&gt;

    Checked

&lt;/label&gt;

&lt;label class=&quot;checkbox&quot; for=&quot;checkbox3&quot;&gt;

    &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox3&quot; data-toggle=&quot;checkbox&quot; disabled&gt;

    Disabled unchecked

&lt;/label&gt;

&lt;label class=&quot;checkbox&quot; for=&quot;checkbox4&quot;&gt;

    &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox4&quot; data-toggle=&quot;checkbox&quot; disabled checked&gt;

    Disabled checked

&lt;/label&gt;

</pre>
</div>
            <p>Or you can call it via Javascript:
            <a data-target="#checkboxJavascript" href="javascript: void(0);" data-toggle="collapse">
                      See example.
            </a>
            </p>
<div id="checkboxJavascript" class="collapse">
<pre class="prettyprint">
$(':checkbox').checkbox();
</pre>
</div>

            <p>
                <h4>Methods</h4>
                <ul class="list-unstyled">
                    <li>
                        <b>.checkbox('toggle')</b>
                        is used to toggle the states between checked and unchecked.
                    </li>
                    <li>
                        <b>.checkbox('check') </b>
                        sets the checkbox state to checked.
                    </li>
                    <li>
                        <b>.checkbox('uncheck') </b>
                        sets the state to unchecked.
                    </li>
                </ul>
                <div class="area-line">
                <a data-target="#checkboxMethod" href="javascript: void(0);" data-toggle="collapse">
                      See coded example
                </a>
<div id="checkboxMethod" class="collapse">
<pre class="prettyprint">
$(':checkbox').checkbox('check');
</pre>
</div>
                </div>
                <h4>Events</h4>
                <ul class="list-unstyled">
                    <li>
                        <b>.on('toggle') </b>
                        gets activated when the checkbox state changes between checked and unchecked.
                    </li>
                    <li>
                        <b>.on('change') </b>
                        the same as toggle.
                    </li>
                </ul>
            </p>
            <div class="area-line">
            <a data-target="#checkboxEvent" href="javascript: void(0);" data-toggle="collapse">
                  See coded example
            </a>
<div id="checkboxEvent" class="collapse">
<pre class="prettyprint">
$(':checkbox').on('toggle', function() {
  // Do something
});
</pre>
</div>
            </div>

    </div>
<!-- end row -->

<!-- radio row -->
    <div class="tim-row" id="radio-row">
        <h2> Radio Buttons
             <small><a href="../examples/forms/extended.php">Live Demo</a></small>
        </h2>
        <legend></legend>
            <p>
                To use the custom radio buttons, you need to import a separate Javascript file called 'bootstrap-checkbox-radio-switch-tags.js'.
            </p>
            <p>
               <label class="radio">
                <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                <i></i>Radio is off
              </label>
              <label class="radio">
                <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                <i></i>Radio is on
              </label>

              <label class="radio">
                <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios3" value="option2" disabled>
                <i></i>Disabled radio is off
              </label>
              <label class="radio">
                <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios4" value="option2" checked disabled>
                <i></i>Disabled radio is on
              </label>
            </p>
            <p>Usage can be done via Data Attributes: <a data-target="#radioDataAttribute" href="javascript: void(0);" data-toggle="collapse">See example.</a></p>
<div id="radioDataAttribute" class="collapse">
<pre class="prettyprint">
&lt;label class=&quot;radio&quot;&gt;

    &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios1&quot; value=&quot;option1&quot;&gt;

    &lt;i&gt;&lt;/i&gt;Radio is off

&lt;/label&gt;

&lt;label class=&quot;radio&quot;&gt;

    &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios2&quot; value=&quot;option1&quot; checked&gt;

    &lt;i&gt;&lt;/i&gt;Radio is on

&lt;/label&gt;

&lt;label class=&quot;radio&quot;&gt;

    &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios3&quot; value=&quot;option2&quot; disabled&gt;

    &lt;i&gt;&lt;/i&gt;Disabled radio is off

&lt;/label&gt;

&lt;label class=&quot;radio&quot;&gt;

    &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios4&quot; value=&quot;option2&quot; checked disabled&gt;

    &lt;i&gt;&lt;/i&gt;Disabled radio is on

&lt;/label&gt;
</pre>
</div>
            <p>Or can be called via Javascript: <a data-target="#radioJavascript" href="javascript: void(0);" data-toggle="collapse">See example.</a> </p>
<div id="radioJavascript" class="collapse">
<pre class="prettyprint">
$(':radio').radio();
</pre>
</div>
            <p>
                <h4>Methods</h4>
                <ul class="list-unstyled">

                    <li>
                        <b>.radio('check') </b>
                        sets the checkbox state to checked.
                    </li>
                    <li>
                        <b>.radio('uncheck') </b>
                        sets the state to unchecked.
                    </li>
                </ul>
                <div class="area-line">
                <a data-target="#radioMethod" href="javascript: void(0);" data-toggle="collapse">
                        See coded example
                </a>
<div id="radioMethod" class="collapse">
<pre class="prettyprint">
$(':radio').radio('check');
</pre>
</div>
                </div>
                <h4>Events</h4>
                <ul class="list-unstyled">
                    <li>
                        <b>.on('toggle') </b>
                        gets activated when the checkbox state changes between checked and unchecked.
                    </li>
                    <li>
                        <b>.on('change') </b>
                        the behaviour is the same as for the toggle, with the difference that the event is fired for each radio button that gets a change in its state.
                    </li>
                </ul>
            </p>
            <div class="area-line">
            <a data-target="#radioEvent" href="javascript: void(0);" data-toggle="collapse">
                        See coded example
            </a>
<div id="radioEvent" class="collapse">
<pre class="prettyprint">
$(':radio').on('toggle', function() {
  // Do something
});
</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- switches row -->
    <div class="tim-row" id="switch-row">
        <h2> Switches
            <small><a href="../examples/forms/extended.php">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
        If you want to use something more special than a checkbox, we recommend the switch. You can use it as plain, with text or with icons. The default version is the one with text (on and off states).
        </p>

        <div class="switch"
             data-on-label=""
             data-off-label="">
             <input type="checkbox" checked/>
        </div>

        <input type="checkbox" checked data-toggle="switch"/>
        <input type="checkbox" data-toggle="switch" />

         <div class="switch"
          data-on-label="<i class='fa fa-check'></i>"
          data-off-label="<i class='fa fa-times'></i>">
          <input type="checkbox" checked/>
        </div>
        <div class="switch"
          data-on-label="<i class='fa fa-check'></i>"
          data-off-label="<i class='fa fa-times'></i>">
          <input type="checkbox"/>
        </div>

        <br />
        <div class="area-line">
        <a data-target="#switchColor" href="javascript: void(0);" data-toggle="collapse">
                        See Full Implementation
        </a>
<div id="switchColor" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;switch&quot;
     data-on-label=&quot;&quot;
     data-off-label=&quot;&quot;&gt;
     &lt;input type=&quot;checkbox&quot; checked/&gt;
&lt;/div&gt;

&lt;input type=&quot;checkbox&quot; checked data-toggle=&quot;switch&quot;/&gt;
&lt;input type=&quot;checkbox&quot; data-toggle=&quot;switch&quot; /&gt;

 &lt;div class=&quot;switch&quot;
  data-on-label=&quot;&lt;i class=&#39;fa fa-check&#39;&gt;&lt;/i&gt;&quot;
  data-off-label=&quot;&lt;i class=&#39;fa fa-times&#39;&gt;&lt;/i&gt;&quot;&gt;
  &lt;input type=&quot;checkbox&quot; checked/&gt;
&lt;/div&gt;
&lt;div class=&quot;switch&quot;
  data-on-label=&quot;&lt;i class=&#39;fa fa-check&#39;&gt;&lt;/i&gt;&quot;
  data-off-label=&quot;&lt;i class=&#39;fa fa-times&#39;&gt;&lt;/i&gt;&quot;&gt;
  &lt;input type=&quot;checkbox&quot;/&gt;
&lt;/div&gt;
</pre>
</div>
        </div>

</div>
<!-- end row -->

<!-- dropdown row -->
<div class="tim-row" id="dropdown-row">
        <h2> Dropdown
            <small><a href="../examples/forms/extended.php">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
        We are very proud to present the dropdown, we added a subtle animation for this classic widget.  <br />
        Here is an example and the code:
        </p>

        <div class="row">
            <div class="col-md-3">
                <div class="dropdown">
                      <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                          Regular
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#paper">Action</a></li>
                        <li><a href="#paper">Another action</a></li>
                        <li><a href="#paper">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#paper">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#paper">One more separated link</a></li>
                      </ul>
                </div>
            </div>
          </div>


        <div class="area-line">
        <a data-target="#dropdown" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="dropdown" class="collapse">
<pre class="prettyprint">
	&lt;div class=&quot;dropdown&quot;&gt;
              &lt;a href=&quot;#&quot; class=&quot;btn dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
                  Regular
                  &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
              &lt;/a&gt;
              &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a href=&quot;#paper&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#paper&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#paper&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#paper&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#paper&quot;&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
        &lt;/div&gt;
</pre>
</div>
        </div>

</div>
<!-- end row -->

<!-- inputs row -->
    <div class="tim-row" id="inputs-row">
            <h2>Inputs
                <small><a href="../examples/forms/regular.php">Live Demo</a></small>
            </h2>
            <legend></legend>

            <p>
            We restyled the Bootstrap input to give it a flat, minimal look. You can use the classic look, different colours and states or input groups.
            </p>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                	<input type="text" value="" placeholder="Input" class="form-control" />
            	</div>
        	</div>
        	<div class="col-md-6">
        	    <div class="form-group has-success">
                    <input type="text" value="Success" class="form-control" />
                </div>
        	</div>
    	</div>
            <div class="row">
            <div class="col-md-6">
                  <div class="form-group has-error has-feedback">
                    <input type="text" value="Error" class="form-control" />
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                  </div>
        	</div>
        	<div class="col-md-6">
                	<div class="input-group">
                      <input type="text" value="Group Addon" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-group"></i></span>
                    </div>
        	</div>
    	</div>
            <div class="area-line">
            <a data-target="#inputs" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="inputs" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;form-group&quot;&gt;

    &lt;input type=&quot;text&quot; value=&quot;&quot; placeholder=&quot;Input&quot; class=&quot;form-control&quot; /&gt;

&lt;/div&gt;



&lt;div class=&quot;form-group has-success&quot;&gt;

    &lt;input type=&quot;text&quot; value=&quot;Success&quot; class=&quot;form-control&quot; /&gt;

&lt;/div&gt;



&lt;div class=&quot;form-group has-error has-feedback&quot;&gt;

    &lt;input type=&quot;text&quot; value=&quot;Error&quot; class=&quot;form-control&quot; /&gt;

    &lt;span class=&quot;glyphicon glyphicon-remove form-control-feedback&quot;&gt;&lt;/span&gt;

&lt;/div&gt;



&lt;div class=&quot;input-group&quot;&gt;

    &lt;input type=&quot;text&quot; value=&quot;Group Addon&quot; class=&quot;form-control&quot;&gt;

    &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;fa fa-group&quot;&gt;&lt;/i&gt;&lt;/span&gt;

&lt;/div&gt;
</pre>
</div>
            </div>
    </div>
<!-- end row -->

<!-- select row -->
<div class="tim-row" id="select-row">
    <h2>Customisable Select
        <small><a href="../examples/forms/extended.php">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>
        There are 2 ways to use this input: as a normal select, in which case you need to specify the style as <code>form-control</code>, or as a button, in which case you have to specify the style as <code>btn-{type}</code>. You can also have multiple select options by using the <code>multiple</code> attribute on the select tag. Here are some coded examples.
    </p>
    <div class="row">
       <div class="col-sm-4">
            <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block">
                <option value="id">Bahasa Indonesia</option>
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
        <div class="col-sm-4">
            <select multiple data-title="Multiple Select" name="currency" class="selectpicker" data-style="btn-info btn-fill btn-block">
                <option value="ARS">ARS</option>
                <option value="AUD">AUD</option>
                <option value="BRL">BRL</option>
                <option value="CAD">CAD</option>
                <option value="CHF">CHF</option>
                <option value="CNY">CNY</option>
                <option value="CZK">CZK</option>
                <option value="DKK">DKK</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="HKD">HKD</option>
                <option value="HUF">HUF</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="INR">INR</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="MYR">MYR</option>
                <option value="MXN">MXN</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PHP">PHP</option>
                <option value="PLN">PLN</option>
                <option value="RUB">RUB</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="TWD">TWD</option>
                <option value="USD">USD</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>
            </select>
        </div>
      </div>
    <div class="area-line">
     <a data-target="#customizableSelect" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="customizableSelect" class="collapse">
<pre class="prettyprint">
&lt;!-- simple select --&gt;
&lt;select name=&quot;cities&quot; class=&quot;selectpicker&quot; data-title=&quot;Single Select&quot; data-style=&quot;btn-default btn-block&quot; &gt;
    &lt;option value=&quot;id&quot;&gt;Bahasa Indonesia&lt;/option&gt;
    &lt;option value=&quot;ms&quot;&gt;Bahasa Melayu&lt;/option&gt;
...
&lt;/select&gt;

&lt;!-- multiple select --&gt;
&lt;select multiple data-title=&quot;Multiple Select&quot; name=&quot;currency&quot; class=&quot;selectpicker&quot; data-style=&quot;btn-info btn-fill btn-block&quot; &gt;
    &lt;option value=&quot;ARS&quot;&gt;ARS&lt;/option&gt;
    &lt;option value=&quot;AUD&quot;&gt;AUD&lt;/option&gt;
...
&lt;/select&gt;

&lt;!-- Bootstrap Select Picker --&gt;
if($(&quot;.selectpicker&quot;).length != 0){
    $(&quot;.selectpicker&quot;).selectpicker();
}
</pre>
</div>
    </div>
</div>
<!-- end row -->

<!-- tags row    -->
<div class="tim-row" id="tags-row">
    <h2>Tags
        <small><a href="../examples/forms/extended.php">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>
    If you want to use tags, we now offer you 2 possibilities: simple tags and coloured tags, that you can use by adding the necessary colour class.
    </p>
    <input name="tagsinput" class="tagsinput" value="Minimal, Light, New, Friends" />
    <input name="tagsinput" class="tagsinput tag-info" value="Minimal, Light, New, Friends" />
    <div class="area-line">
        <a data-target="#tags" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="tags" class="collapse">
<pre class="prettyprint">
&lt;input name=&quot;tagsinput&quot; class=&quot;tagsinput&quot; value=&quot;Minimal, Light, New, Friends&quot; /&gt;
&lt;input name=&quot;tagsinput&quot; class=&quot;tagsinput tag-info&quot; value=&quot;Minimal, Light, New, Friends&quot; /&gt;
</pre>
</div>
    </div>
</div>
<!-- end row -->

<!-- textarea row -->
<div class="tim-row" id="textarea-row">
    <h2>Textarea
        <small><a href="../examples/forms/regular.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>We added custom style for the textarea, so it looks similar to all other inputs.</p>

    <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>

    <div class="area-line">
        <a data-target="#textarea" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="textarea" class="collapse">
<pre class="prettyprint">
&lt;textarea class=&quot;form-control&quot; placeholder=&quot;Here can be your nice text&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
</pre>
</div>
    </div>
</div>
<!-- end row -->

<!-- navbar row -->
<div class="tim-row" id="navbar-row">
        <h2>Navbar </h2>
        <legend></legend>
        <p>
            We restyled the classic Bootstrap Navbar:
        </p>

        <div id="navbar">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
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
                                <a href="charts.php">
                                    <i class="fa fa-line-chart"></i>
                                    <p>Stats</p>
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-gavel"></i>
                                    <p class="hidden-md hidden-lg">
                                    Actions
                                    <b class="caret"></b>
                                </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Create New Post</a></li>
                                    <li><a href="#">Manage Something</a></li>
                                    <li><a href="#">Do Nothing</a></li>
                                    <li><a href="#">Submit to live</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Another Action</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-md hidden-lg">
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

                            <li class="dropdown dropdown-with-icons">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list"></i>
                                    <p class="hidden-md hidden-lg">
    								More
    								<b class="caret"></b>
    							</p>
                                </a>
                                <ul class="dropdown-menu dropdown-with-icons">
                                    <li>
                                        <a href="#">
                                            <i class="pe-7s-mail"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="pe-7s-help1"></i> Help Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="pe-7s-tools"></i> Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="pe-7s-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-danger">
                                            <i class="pe-7s-close-circle"></i>
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

        <div class="area-line">
        <a data-target="#navbarCode" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="navbarCode" class="collapse">
<pre class="prettyprint">
&lt;nav class=&quot;navbar navbar-default&quot;&gt;
        &lt;div class=&quot;container-fluid&quot;&gt;
            &lt;div class=&quot;navbar-header&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot;&gt;
                    &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;
                    &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                    &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                    &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Dashboard&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;collapse navbar-collapse&quot;&gt;

                &lt;form class=&quot;navbar-form navbar-left navbar-search-form&quot; role=&quot;search&quot;&gt;
                    &lt;div class=&quot;input-group&quot;&gt;
                        &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;fa fa-search&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;input type=&quot;text&quot; value=&quot;&quot; class=&quot;form-control&quot; placeholder=&quot;Search...&quot;&gt;
                    &lt;/div&gt;
                &lt;/form&gt;

                &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;
                    &lt;li&gt;
                        &lt;a href=&quot;charts.php&quot;&gt;
                            &lt;i class=&quot;fa fa-line-chart&quot;&gt;&lt;/i&gt;
                            &lt;p&gt;Stats&lt;/p&gt;
                        &lt;/a&gt;
                    &lt;/li&gt;

                    &lt;li class=&quot;dropdown&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
                            &lt;i class=&quot;fa fa-gavel&quot;&gt;&lt;/i&gt;
                            &lt;p class=&quot;hidden-md hidden-lg&quot;&gt;Actions&lt;/p&gt;
                        &lt;/a&gt;
                        &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Create New Post&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Manage Something&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Do Nothing&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submit to live&lt;/a&gt;&lt;/li&gt;
                            &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another Action&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;

                    &lt;li class=&quot;dropdown&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
                            &lt;i class=&quot;fa fa-bell-o&quot;&gt;&lt;/i&gt;
                            &lt;span class=&quot;notification&quot;&gt;5&lt;/span&gt;
                            &lt;p class=&quot;hidden-md hidden-lg&quot;&gt;Notifications&lt;/p&gt;
                        &lt;/a&gt;
                        &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Notification 1&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Notification 2&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Notification 3&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Notification 4&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another notification&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;

                    &lt;li class=&quot;dropdown dropdown-with-icons&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
                            &lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;
                            &lt;p class=&quot;hidden-md hidden-lg&quot;&gt;More&lt;/p&gt;
                        &lt;/a&gt;
                        &lt;ul class=&quot;dropdown-menu dropdown-with-icons&quot;&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;i class=&quot;pe-7s-mail&quot;&gt;&lt;/i&gt; Messages
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;i class=&quot;pe-7s-help1&quot;&gt;&lt;/i&gt; Help Center
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;i class=&quot;pe-7s-tools&quot;&gt;&lt;/i&gt; Settings
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;i class=&quot;pe-7s-lock&quot;&gt;&lt;/i&gt; Lock Screen
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot; class=&quot;text-danger&quot;&gt;
                                    &lt;i class=&quot;pe-7s-close-circle&quot;&gt;&lt;/i&gt;
                                    Log out
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;

                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;
</pre>
</div>
        </div>


		<p class="space-top">
            <b>Fixed Navbar: </b> If you want to have a "Fixed Navbar" on Desktop and Mobile please add the class <code>navbar-fixed</code> on the tag <code>nav</code> and move the entire <code>nav</code> structure outside of the div with class <code>main-panel</code>. Check the example implementation for more details:
        </p>

        <div id="navbar">

        <div class="area-line">
        <a data-target="#navbarCodeFixed" href="javascript: void(0);" data-toggle="collapse">Example implementation</a>
<div id="navbarCodeFixed" class="collapse">
<pre class="prettyprint">
	&lt;div class=&quot;sidebar&quot; data-color=&quot;orange&quot; data-image=&quot;../assets/img/full-screen-image-3.jpg&quot;&gt;
	    ....
	&lt;/div&gt;

	&lt;nav class=&quot;navbar navbar-default navbar-fixed&quot;&gt;
		&lt;div class=&quot;container-fluid&quot;&gt;
			....
		&lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class=&quot;main-panel&quot;&gt;
		&lt;-- .navbar used to be here, but was moved outside of this div --&gt;
		....
	&lt;/div&gt;
</pre>
</div>
        </div>



        <p class="space-top">
            Besides the default navbar, we added 5 colors for the 5 classes: primary, info, success, warning, danger. If you want to use one of them, you have to replace the <code>navbar-default</code> with the class for the chosen color <code>navbar-ct-{class}</code>.
        </p>


<div id="navbar-blue">
    <nav class="navbar navbar-ct-primary">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
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
                        <a href="charts.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Stats</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div><!--  end navbar -->

<!-- navbar azure -->
<div id="navbar-azure">
       <nav class="navbar navbar-ct-info">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
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
                        <a href="charts.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Stats</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- navbar green -->
<div id="navbar-green">
   <nav class="navbar navbar-ct-success">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
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
                        <a href="charts.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Stats</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div><!--  end navbar -->

<!-- navbar orange -->
<div id="navbar-orange">
    <nav class="navbar navbar-ct-warning">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
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
                        <a href="charts.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Stats</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div><!--  end navbar -->

<!-- navbar red -->
<div id="navbar-red">
    <nav class="navbar navbar-ct-danger">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
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
                        <a href="charts.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Stats</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div><!--  end navbar -->

</div>
<!-- end row -->


<!-- footers row -->
<div class="tim-row" id="footers-row">
    <h2>Footers
        <small><a href="../examples/dashboard/stats.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>
        There are 3 classes for footers: <code>footer</code> for the default pale colour, <code>footer-black</code> for black and <code>footer-transparent</code> for transparent.<br />
    </p>
</div>
<!-- end row -->

<!-- pagination row -->
<div class="tim-row" id="pagination-row">
        <h2> Pagination
            <small><a href="../examples/components/buttons.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
        We took the Bootstrap pagination elements and customised them to fit the overall theme.
    </p>
        <ul class="pagination pagination-blue pagination-no-border">
     <!--   color-classes: "primary", "info", "warning", "danger", "success" -->
      <li><a href="#">&laquo;</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>


        <p class="space-top">
        Besides the classic look, we also added the colour classes to offer more customisation. To use them add the class <code>pagination-[primary/info/success/warning/danger]</code>.
    </p>
    <ul class="pagination pagination-primary">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li class="active"><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>

        <ul class="pagination pagination-info">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li class="active"><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
        <ul class="pagination pagination-success">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li class="active"><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
        <ul class="pagination pagination-warning">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li class="active"><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
        <ul class="pagination pagination-danger">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li class="active"><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
        <div class="area-line">
        <a data-target="#pagination" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="pagination" class="collapse">
<pre class="prettyprint">
&lt;ul class=&quot;pagination pagination-info&quot;&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;

  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;

  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;

&lt;/ul&gt
</pre>
</div>
        </div>
</div>
<!-- end row -->

<!-- progressbar row -->
<div class="tim-row" id="progressbar-row">
        <h2> Progress Bars
            <small><a href="../examples/forms/extended.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>

        <p>The progress bars from Bootstrap hold the same classes and functionality. Adding this kit over your existing project will only make it look more clean and minimal.</p>
         <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
         <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
         <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 35%">
            <span class="sr-only">35% Complete (success)</span>
          </div>
          <div class="progress-bar progress-bar-warning" style="width: 20%">
            <span class="sr-only">20% Complete (warning)</span>
          </div>
          <div class="progress-bar progress-bar-danger" style="width: 10%">
            <span class="sr-only">10% Complete (danger)</span>
          </div>
        </div>
         <div class="area-line">
         <a data-target="#progressBars" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
<div id="progressBars" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;progress&quot;&gt;

  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 30%;&quot;&gt;

    &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;

  &lt;/div&gt;

&lt;/div&gt;

&lt;div class=&quot;progress&quot;&gt;

  &lt;div class=&quot;progress-bar progress-bar-info&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 60%;&quot;&gt;

    &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;

  &lt;/div&gt;

&lt;/div&gt;

&lt;div class=&quot;progress&quot;&gt;

  &lt;div class=&quot;progress-bar progress-bar-success&quot; style=&quot;width: 35%&quot;&gt;

    &lt;span class=&quot;sr-only&quot;&gt;35% Complete (success)&lt;/span&gt;

  &lt;/div&gt;

  &lt;div class=&quot;progress-bar progress-bar-warning&quot; style=&quot;width: 20%&quot;&gt;

    &lt;span class=&quot;sr-only&quot;&gt;20% Complete (warning)&lt;/span&gt;

  &lt;/div&gt;

  &lt;div class=&quot;progress-bar progress-bar-danger&quot; style=&quot;width: 10%&quot;&gt;

    &lt;span class=&quot;sr-only&quot;&gt;10% Complete (danger)&lt;/span&gt;

  &lt;/div&gt;

&lt;/div&gt;
</pre>
</div>
         </div>
</div>
<!-- end row -->

<!-- sliders row -->
<div class="tim-row" id="sliders-row">
        <h2> Sliders
            <small><a href="../examples/forms/extended.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>We restyled jQuery UI slider, while keeping the design consistent.</p>

        <div id="slider-default" class="slider-info"></div>
        <br>
        <div id="slider-range" class="slider-success"></div>
        <div class="area-line">
        <a data-target="#sliderMarkup" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
<div id="sliderMarkup" class="collapse">
<pre class="prettyprint">
&lt;!-- Markup --&gt;
&lt;div id=&quot;slider-default&quot; class=&quot;slider-info&quot;&gt;&lt;/div&gt;

&lt;div id=&quot;slider-range&quot; class=&quot;slider-success&quot;&gt;&lt;/div&gt;

&lt;!-- Javascript --&gt;
$( &quot;#slider-range&quot; ).slider({

	range: true,
	min: 0,
	max: 500,
	values: [ 75, 300 ],

});

$( &quot;#slider-default&quot; ).slider({

		value: 70,
		orientation: &quot;horizontal&quot;,
		range: &quot;min&quot;,
		animate: true

});
</pre>
</div>
        </div>
</div>
<!-- end row -->

<!-- panel row -->
<div class="tim-row" id="panels-row">
    <h2>Panels
        <small><a href="../examples/components/panels.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>
        If you have information that you don't need to show at once, we suggest you use tabs. You can use them horizontally or vertically.
        Here are the coded examples:
    </p>
    <div class="space-top"></div>
    <div class="row">
        <div class="col-md-5">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                        <li><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages" data-toggle="tab">Messages</a></li>
                    </ul>
                </div>
            </div>
            <div id="my-tab-content" class="tab-content text-center">
                <div class="tab-pane active" id="home">
                    <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                </div>
                <div class="tab-pane" id="profile">
                    <p>Here is your profile.</p>
                </div>
                <div class="tab-pane" id="messages">
                    <p>Here are your messages.</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="nav nav-stacked" role="tablist">
                        <li class="active">
                            <a href="#info" role="tab" data-toggle="tab">
                                 Info
                            </a>
                        </li>
                        <li>
                            <a href="#description" role="tab" data-toggle="tab">
                                 Description
                            </a>
                        </li>
                        <li>
                            <a href="#concept" role="tab" data-toggle="tab">
                                 Concept
                            </a>
						</li>
                        <li>
                           <a href="#support" role="tab" data-toggle="tab">
                                Support
                           </a>
                        </li>
                        <li>
                           <a href="#extra" role="tab" data-toggle="tab">
                                Extra
                           </a>
                        </li>
                    </ul>
                </div>
				<div class="col-md-8 col-sm-8 col-xs-6">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="info">
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                            <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        </div>
                        <div class="tab-pane" id="description">
                            <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. </p>
                            <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>
                        </div>
                        <div class="tab-pane" id="concept">
                            <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                        </div>
                        <div class="tab-pane" id="support">
                            <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                            <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        </div>
                        <div class="tab-pane" id="extra">
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                            <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
    <div class="area-line">
        <a data-target="#tabsCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="tabsCode" class="collapse">
<pre class="prettyprint">
&lt;!-- horizontal tabs --&gt;
&lt;div class=&quot;nav-tabs-navigation&quot;&gt;
    &lt;div class=&quot;nav-tabs-wrapper&quot;&gt;
        &lt;ul id=&quot;tabs&quot; class=&quot;nav nav-tabs&quot; data-tabs=&quot;tabs&quot;&gt;
            &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#home&quot; data-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#profile&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#messages&quot; data-toggle=&quot;tab&quot;&gt;Messages&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;my-tab-content&quot; class=&quot;tab-content text-center&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;home&quot;&gt;
        &lt;p&gt;Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;profile&quot;&gt;
        &lt;p&gt;Here is your profile.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;messages&quot;&gt;
        &lt;p&gt;Here are your messages.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;


&lt;!-- vertical tabs --&gt;
&lt;div class=&quot;row&quot;&gt;
	&lt;div class=&quot;col-md-4 col-sm-4 col-xs-6&quot;&gt;
        &lt;ul class=&quot;nav nav-stacked&quot; role=&quot;tablist&quot;&gt;
            &lt;li class=&quot;active&quot;&gt;
                &lt;a href=&quot;#info&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
                     Info
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;#description&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
                     Description
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;a href=&quot;#concept&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
                     Concept
                &lt;/a&gt;
			&lt;/li&gt;
            &lt;li&gt;
               &lt;a href=&quot;#support&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
                    Support
               &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
               &lt;a href=&quot;#extra&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;
                    Extra
               &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
	&lt;div class=&quot;col-md-8 col-sm-8 col-xs-6&quot;&gt;
        &lt;!-- Tab panes --&gt;
        &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active&quot; id=&quot;info&quot;&gt;
                &lt;p&gt;Larger, yet.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;description&quot;&gt;
                &lt;p&gt;The first thing...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;concept&quot;&gt;
                &lt;p&gt;It&rsquo;s one...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;support&quot;&gt;
                &lt;p&gt;From the...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;extra&quot;&gt;
                &lt;p&gt;Larger, yet...&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

</pre>
</div>
    </div>

</div>
<!-- end row -->

<!-- tables row -->
<div class="tim-row" id="tables-row">
    <h2>Tables
        <small><a href="../examples/tables/extended.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>
   All Boostrap classes for tables are supported and improved. Besides the simple and striped tables, we added tables that have actions and tables with switches. <br />
   You can see coded examples below:
    </p>
    <h4>Simple Table with Actions</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Job Position</th>
                    <th>Since</th>
                    <th class="text-right">Salary</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Andrew Mike</td>
                    <td>Develop</td>
                    <td>2013</td>
                    <td class="text-right">&euro; 99,225</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>

                    <td class="text-center">2</td>
                    <td>John Doe</td>
                    <td>Design</td>
                    <td>2012</td>
                    <td class="text-right">&euro; 89,241</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Alex Mike</td>
                    <td>Design</td>
                    <td>2010</td>
                    <td class="text-right">&euro; 92,144</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Mike Monday</td>
                    <td>Marketing</td>
                    <td>2013</td>
                    <td class="text-right">&euro; 49,990</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Paul Dickens</td>
                    <td>Communication</td>
                    <td>2014</td>
                    <td class="text-right">&euro; 69,201</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    <div class="area-line">
            <a data-target="#simpleTableWithActions" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="simpleTableWithActions" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;table-responsive&quot;&gt;

&lt;table class=&quot;table&quot;&gt;

    &lt;thead&gt;

        &lt;tr&gt;

            &lt;th class=&quot;text-center&quot;&gt;#&lt;/th&gt;

            &lt;th&gt;Name&lt;/th&gt;

            &lt;th&gt;Job Position&lt;/th&gt;

            &lt;th&gt;Since&lt;/th&gt;

            &lt;th class=&quot;text-right&quot;&gt;Salary&lt;/th&gt;

            &lt;th class=&quot;text-right&quot;&gt;Actions&lt;/th&gt;

        &lt;/tr&gt;

    &lt;/thead&gt;

    &lt;tbody&gt;

        &lt;tr&gt;

            &lt;td class=&quot;text-center&quot;&gt;1&lt;/td&gt;

            &lt;td&gt;Andrew Mike&lt;/td&gt;

            &lt;td&gt;Develop&lt;/td&gt;

            &lt;td&gt;2013&lt;/td&gt;

            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 99,225&lt;/td&gt;

            &lt;td class=&quot;td-actions text-right&quot;&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/td&gt;

        &lt;/tr&gt;

        &lt;tr&gt;



            &lt;td class=&quot;text-center&quot;&gt;2&lt;/td&gt;

            &lt;td&gt;John Doe&lt;/td&gt;

            &lt;td&gt;Design&lt;/td&gt;

            &lt;td&gt;2012&lt;/td&gt;

            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 89,241&lt;/td&gt;

            &lt;td class=&quot;td-actions text-right&quot;&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/td&gt;

        &lt;/tr&gt;

        &lt;tr&gt;

            &lt;td class=&quot;text-center&quot;&gt;3&lt;/td&gt;

            &lt;td&gt;Alex Mike&lt;/td&gt;

            &lt;td&gt;Design&lt;/td&gt;

            &lt;td&gt;2010&lt;/td&gt;

            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 92,144&lt;/td&gt;

            &lt;td class=&quot;td-actions text-right&quot;&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/td&gt;

        &lt;/tr&gt;

        &lt;tr&gt;

            &lt;td class=&quot;text-center&quot;&gt;4&lt;/td&gt;

            &lt;td&gt;Mike Monday&lt;/td&gt;

            &lt;td&gt;Marketing&lt;/td&gt;

            &lt;td&gt;2013&lt;/td&gt;

            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 49,990&lt;/td&gt;

            &lt;td class=&quot;td-actions text-right&quot;&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/td&gt;

        &lt;/tr&gt;

        &lt;tr&gt;

            &lt;td class=&quot;text-center&quot;&gt;5&lt;/td&gt;

            &lt;td&gt;Paul Dickens&lt;/td&gt;

            &lt;td&gt;Communication&lt;/td&gt;

            &lt;td&gt;2014&lt;/td&gt;

            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 69,201&lt;/td&gt;

            &lt;td class=&quot;td-actions text-right&quot;&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/td&gt;

        &lt;/tr&gt;

    &lt;/tbody&gt;

&lt;/table&gt;

&lt;/div&gt;
</pre>
</div>
    </div>
    <h4>Striped Table with Switches</h4>
    <div class="table-responsive">
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
    <div class="area-line">
            <a data-target="#stripedTableWithCheckboxes" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="stripedTableWithCheckboxes" class="collapse">
<pre class="prettyprint">
&lt;table class=&quot;table table-striped&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th class=&quot;text-center&quot;&gt;#&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Job Position&lt;/th&gt;
            &lt;th class=&quot;text-right&quot;&gt;Salary&lt;/th&gt;
            &lt;th class=&quot;text-right&quot;&gt;Active&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td class=&quot;text-center&quot;&gt;1&lt;/td&gt;
            &lt;td&gt;Andrew Mike&lt;/td&gt;
            &lt;td&gt;Develop&lt;/td&gt;
            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 99,225&lt;/td&gt;
             &lt;td class=&quot;text-right&quot;&gt;
                &lt;div class=&quot;switch&quot;
                     data-on-label=&quot;&quot;
                     data-off-label=&quot;&quot;&gt;
                     &lt;input type=&quot;checkbox&quot;/&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;

            &lt;td class=&quot;text-center&quot;&gt;2&lt;/td&gt;
            &lt;td&gt;John Doe&lt;/td&gt;
            &lt;td&gt;Design&lt;/td&gt;
            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 89,241&lt;/td&gt;
             &lt;td class=&quot;text-right&quot;&gt;
                &lt;div class=&quot;switch&quot;
                     data-on-label=&quot;&quot;
                     data-off-label=&quot;&quot;&gt;
                     &lt;input type=&quot;checkbox&quot;/&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;text-center&quot;&gt;3&lt;/td&gt;
            &lt;td&gt;Alex Mike&lt;/td&gt;
            &lt;td&gt;Design&lt;/td&gt;
            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 92,144&lt;/td&gt;
             &lt;td class=&quot;text-right&quot;&gt;
                &lt;div class=&quot;switch&quot;
                     data-on-label=&quot;&quot;
                     data-off-label=&quot;&quot;&gt;
                     &lt;input type=&quot;checkbox&quot; checked/&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;text-center&quot;&gt;4&lt;/td&gt;
            &lt;td&gt;Mike Monday&lt;/td&gt;
            &lt;td&gt;Marketing&lt;/td&gt;
            &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 49,990&lt;/td&gt;
             &lt;td class=&quot;text-right&quot;&gt;
                &lt;div class=&quot;switch&quot;
                     data-on-label=&quot;&quot;
                     data-off-label=&quot;&quot;&gt;
                     &lt;input type=&quot;checkbox&quot; checked/&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;

</pre>
</div>
    </div>
    <h4>Big Boy Table</h4>
    <p>We have also created the Big Boy table, that can be used for content management systems or in the checkout process of an e-commerce. It offers extended functionality, like adding pictures, descriptions and actions.</p>
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
                        <img src="../assets/img/tables/agenda.png" alt="Agenda">
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
        </tbody>
    </table>
    </div>
    <div class="area-line">
        <a data-target="#bigBoyTable" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="bigBoyTable" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;table-responsive&quot;&gt;
    &lt;table class=&quot;table table-shopping&quot;&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th class=&quot;text-center&quot;&gt;&lt;/th&gt;
                &lt;th&gt;&lt;/th&gt;
                &lt;th class=&quot;text-right&quot;&gt;Price&lt;/th&gt;
                &lt;th class=&quot;text-right&quot;&gt;Quantity&lt;/th&gt;
                &lt;th class=&quot;text-right&quot;&gt;Total&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class=&quot;img-container&quot;&gt;
                        &lt;img src=&quot;../assets/img/tables/agenda.png&quot; alt=&quot;Agenda&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;td-product&quot;&gt;
                    &lt;strong&gt;Get Shit Done Notebook&lt;/strong&gt;
                    &lt;p&gt;
                    Most beautiful agenda for the office.&lt;/p&gt;
                &lt;/td&gt;
                &lt;td class=&quot;td-price&quot;&gt;
                    &lt;small&gt;&amp;euro;&lt;/small&gt;49
                &lt;/td&gt;
                &lt;td class=&quot;td-number td-quantity&quot;&gt;
                    1
                    &lt;div class=&quot;btn-group&quot;&gt;
                        &lt;button class=&quot;btn btn-sm&quot;&gt;&lt;i class=&quot;ti-minus&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button class=&quot;btn btn-sm&quot;&gt;&lt;i class=&quot;ti-plus&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;td-number&quot;&gt;
                    &lt;small&gt;&amp;euro;&lt;/small&gt;49
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
</pre>
</div>
    </div>

    <h4>DataTables</h4>
        <p>
            To offer you the possibility to better work with tables, we have integrated a third party for datatables. We have changed the design for the inputs, buttons, typography, pagination and dropdown, so it can look consistent with the rest of the dashboard. <br /><br />
            It contains methods for sorting columns, searching, paginations, ajax calls, actions on rows and many other functions. For detailed description regarding usage, please see <a href="http://bootstrap-table.wenzhixin.net.cn/documentation/">the original documentation</a> from our friend <a href="https://github.com/wenzhixin">Zhixin Wen</a>.
<br /><br />
            To get things going, you can start with the basic coded example below.
        </p>

    <div class="toolbar">
        <!--Here you can write extra buttons/actions for the toolbar-->
    </div>
    <table id="bootstrap-table" class="table">
        <thead>
            <th data-field="state" data-checkbox="true"></th>
            <th data-field="id" class="text-center">ID</th>
        	<th data-field="name" data-sortable="true">Name</th>
        	<th data-field="salary" data-sortable="true">Salary</th>
        	<th data-field="country" data-sortable="true">Country</th>
        	<th data-field="city">City</th>
        	<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
            	<td>1</td>
            	<td>Dakota Rice</td>
            	<td>$36,738</td>
            	<td>Niger</td>
            	<td>Oud-Turnhout</td>
            	<td></td>
            </tr>
            <tr>
                <td></td>
            	<td>2</td>
            	<td>Minerva Hooper</td>
            	<td>$23,789</td>
            	<td>Curaçao</td>
            	<td>Sinaai-Waas</td>
            	<td></td>
            </tr>
            <tr>
                <td></td>
            	<td>3</td>
            	<td>Sage Rodriguez</td>
            	<td>$56,142</td>
            	<td>Netherlands</td>
            	<td>Baileux</td>
            	<td></td>
            </tr>
        </tbody>
    </table>
    <div class="area-line">
        <a data-target="#dataTableExample" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="dataTableExample" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;toolbar&quot;&gt;
    &lt;!--Here you can write extra buttons/actions for the toolbar--&gt;
&lt;/div&gt;
&lt;table id=&quot;bootstrap-table&quot; class=&quot;table&quot;&gt;
    &lt;thead&gt;
        &lt;th data-field=&quot;state&quot; data-checkbox=&quot;true&quot;&gt;&lt;/th&gt;
        &lt;th data-field=&quot;id&quot; class=&quot;text-center&quot;&gt;ID&lt;/th&gt;
    	&lt;th data-field=&quot;name&quot; data-sortable=&quot;true&quot;&gt;Name&lt;/th&gt;
    	&lt;th data-field=&quot;salary&quot; data-sortable=&quot;true&quot;&gt;Salary&lt;/th&gt;
    	&lt;th data-field=&quot;country&quot; data-sortable=&quot;true&quot;&gt;Country&lt;/th&gt;
    	&lt;th data-field=&quot;city&quot;&gt;City&lt;/th&gt;
    	&lt;th data-field=&quot;actions&quot; class=&quot;td-actions text-right&quot; data-events=&quot;operateEvents&quot; data-formatter=&quot;operateFormatter&quot;&gt;Actions&lt;/th&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;/td&gt;
        	&lt;td&gt;1&lt;/td&gt;
        	&lt;td&gt;Dakota Rice&lt;/td&gt;
        	&lt;td&gt;$36,738&lt;/td&gt;
        	&lt;td&gt;Niger&lt;/td&gt;
        	&lt;td&gt;Oud-Turnhout&lt;/td&gt;
        	&lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;/td&gt;
        	&lt;td&gt;2&lt;/td&gt;
        	&lt;td&gt;Minerva Hooper&lt;/td&gt;
        	&lt;td&gt;$23,789&lt;/td&gt;
        	&lt;td&gt;Cura&ccedil;ao&lt;/td&gt;
        	&lt;td&gt;Sinaai-Waas&lt;/td&gt;
        	&lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;/td&gt;
        	&lt;td&gt;3&lt;/td&gt;
        	&lt;td&gt;Sage Rodriguez&lt;/td&gt;
        	&lt;td&gt;$56,142&lt;/td&gt;
        	&lt;td&gt;Netherlands&lt;/td&gt;
        	&lt;td&gt;Baileux&lt;/td&gt;
        	&lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- the javascript for the datatables --&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
    var $table = $(&#39;#bootstrap-table&#39;);

    $().ready(function(){
        $table.bootstrapTable({
            toolbar: &quot;.toolbar&quot;,
            clickToSelect: true,
            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            searchAlign: &#39;left&#39;,
            pageSize: 8,
            clickToSelect: false,
            pageList: [8,10,25,50,100],

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                //do nothing here, we don&#39;t want to show the text &quot;showing x of y from...&quot;
            },
            formatRecordsPerPage: function(pageNumber){
                return pageNumber + &quot; rows visible&quot;;
            },
            icons: {
                refresh: &#39;fa fa-refresh&#39;,
                toggle: &#39;fa fa-th-list&#39;,
                columns: &#39;fa fa-columns&#39;,
                detailOpen: &#39;fa fa-plus-circle&#39;,
                detailClose: &#39;fa fa-minus-circle&#39;
            }
        });

        //activate the tooltips after the data table is initialized
        $(&#39;[rel=&quot;tooltip&quot;]&#39;).tooltip();

        $(window).resize(function () {
            $table.bootstrapTable(&#39;resetView&#39;);
        });

        window.operateEvents = {
            &#39;click .view&#39;: function (e, value, row, index) {
                info = JSON.stringify(row);

                swal(&#39;You click view icon, row: &#39;, info);
                console.log(info);
            },
            &#39;click .edit&#39;: function (e, value, row, index) {
                info = JSON.stringify(row);

                swal(&#39;You click edit icon, row: &#39;, info);
                console.log(info);
            },
            &#39;click .remove&#39;: function (e, value, row, index) {
                console.log(row);
                $table.bootstrapTable(&#39;remove&#39;, {
                    field: &#39;id&#39;,
                    values: [row.id]
                });
            }
        };
    });

    function operateFormatter(value, row, index) {
        return [
            &#39;&lt;a rel=&quot;tooltip&quot; title=&quot;View&quot; class=&quot;btn btn-simple btn-info btn-icon table-action view&quot; href=&quot;javascript:void(0)&quot;&gt;&#39;,
                &#39;&lt;i class=&quot;fa fa-image&quot;&gt;&lt;/i&gt;&#39;,
            &#39;&lt;/a&gt;&#39;,
            &#39;&lt;a rel=&quot;tooltip&quot; title=&quot;Edit&quot; class=&quot;btn btn-simple btn-warning btn-icon table-action edit&quot; href=&quot;javascript:void(0)&quot;&gt;&#39;,
                &#39;&lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;&#39;,
            &#39;&lt;/a&gt;&#39;,
            &#39;&lt;a rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-simple btn-danger btn-icon table-action remove&quot; href=&quot;javascript:void(0)&quot;&gt;&#39;,
                &#39;&lt;i class=&quot;fa fa-remove&quot;&gt;&lt;/i&gt;&#39;,
            &#39;&lt;/a&gt;&#39;
        ].join(&#39;&#39;);
    }


&lt;/script&gt;
</pre>
</div>
    </div>


</div>
<!-- end row -->

<!-- collapsable groups row -->
<div class="tim-row" id="collapsable-row">
        <h2> Collapsible Groups
            <small><a href="../examples/components/panels.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
            <p>
We restyled the classic collapsable group, to make it look more like the other elements in paper dashboard. If you want to add a border for the panel, you can add the class <code>panel-border</code>.
            </p>
            <div id="acordeon">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-border panel-default">
                        <a data-toggle="collapse" href="#collapseOne">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                	Default Collapsible Item 1
                                	<i class="ti-angle-down"></i>
                                </h4>
                            </div>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse">
                        	<div class="panel-body">
                            	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-border panel-default">
                        <a data-toggle="collapse" href="#collapseTwo">
                            <div class="panel-heading">
                            	<h4 class="panel-title">
                                	Default Collapsible Item 1
                                	<i class="ti-angle-down"></i>
                                </h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                        	<div class="panel-body">
                            	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-border panel-default">
                        <a data-toggle="collapse" href="#collapseThree">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                	Default Collapsible Item 1
                                	<i class="ti-angle-down"></i>
                                </h4>
                            </div>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse">
                        	<div class="panel-body">
                            	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="area-line">
            <a data-target="#acordeonCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="acordeonCode" class="collapse">
<pre class="prettyprint">
&lt;div id=&quot;acordeon&quot;&gt;
    &lt;div class=&quot;panel-group&quot; id=&quot;accordion&quot;&gt;
        &lt;div class=&quot;panel panel-border panel-default&quot;&gt;
            &lt;a data-toggle=&quot;collapse&quot; href=&quot;#collapseOne&quot;&gt;
                &lt;div class=&quot;panel-heading&quot;&gt;
                    &lt;h4 class=&quot;panel-title&quot;&gt;
                    	Default Collapsible Item 1
                    	&lt;i class=&quot;ti-angle-down&quot;&gt;&lt;/i&gt;
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/a&gt;
            &lt;div id=&quot;collapseOne&quot; class=&quot;panel-collapse collapse&quot;&gt;
            	&lt;div class=&quot;panel-body&quot;&gt;
                	Anim pariatur...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;panel panel-border panel-default&quot;&gt;
            &lt;a data-toggle=&quot;collapse&quot; href=&quot;#collapseTwo&quot;&gt;
                &lt;div class=&quot;panel-heading&quot;&gt;
                	&lt;h4 class=&quot;panel-title&quot;&gt;
                    	Default Collapsible Item 1
                    	&lt;i class=&quot;ti-angle-down&quot;&gt;&lt;/i&gt;
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/a&gt;
            &lt;div id=&quot;collapseTwo&quot; class=&quot;panel-collapse collapse&quot;&gt;
            	&lt;div class=&quot;panel-body&quot;&gt;
                	Anim pariatur...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;panel panel-border panel-default&quot;&gt;
            &lt;a data-toggle=&quot;collapse&quot; href=&quot;#collapseThree&quot;&gt;
                &lt;div class=&quot;panel-heading&quot;&gt;
                    &lt;h4 class=&quot;panel-title&quot;&gt;
                    	Default Collapsible Item 1
                    	&lt;i class=&quot;ti-angle-down&quot;&gt;&lt;/i&gt;
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/a&gt;
            &lt;div id=&quot;collapseThree&quot; class=&quot;panel-collapse collapse&quot;&gt;
            	&lt;div class=&quot;panel-body&quot;&gt;
                	Anim pariatur...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- notification row -->
<div class="tim-row" id="notification-row">
        <h2> Notifications
            <small><a href="../examples/components/notifications.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
        The notifications for Paper Dashboard PRO are looking fresh and clean. They go great with the navbar. They come with 4 classes, each for a different color: <code>.alert-info</code>, <code>.alert-success</code>, <code>.alert-warning</code>, <code>.alert-danger</code>.
        <br /><br />
        If you want to add special animations for them, we integrated a third party plugin called Bootstrap Notify. To see the original repository for it, check it out <a href="https://github.com/mouse0270/bootstrap-notify">here</a>. Out friend Robert McIntosh did a wonderful job. If you want to see a coded example, you can see it below.
        </p>
        <button class="btn btn-default" onclick="showNotification('top','right')">Top Right Notification</button>

        <div class="area-line">
            <a data-target="#notificationCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="notificationCode" class="collapse">
<pre class="prettyprint">
&lt;!-- button to trigger the action --&gt;
&lt;button class=&quot;btn btn-default&quot; onclick=&quot;showNotification(&#39;top&#39;,&#39;right&#39;)&quot;&gt;Top Right Notification&lt;/button&gt;

&lt;!-- javascript --&gt;
function showNotification(from, align){
	color = Math.floor((Math.random() * 4) + 1);

	$.notify({
    	icon: &quot;ti-gift&quot;,
    	message: &quot;Welcome to &lt;b&gt;Paper Dashboard&lt;/b&gt; - a beautiful freebie for every web developer.&quot;

    },{
        type: type[color],
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
}
</pre>
</div>
        </div>
</div>
<!-- end row -->

<!-- sidebar row -->
<div class="tim-row" id="sidebar-row">
        <h2> Sidebar
            <small><a href="../examples/dashboard/stats.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            We have created the class <code>.sidebar</code> for navigation. It contains the company title, a photo of the logged in user with options inside a dropdown, and a list of all the pages. Every element in the list of pages can have a sublist of pages.
        </p>
        <p>
            You have two options for the background colour <code>data-background-color="white/brown"</code>.<br />
            If you want to change the colour of the links inside the sidebar, you can do so by modifying the following attribute <code>data-active-color="primary/info/success/warning/danger"</code>.
        </p>
        <p>If you want to have more space for the main panel, you can shrink the sidebar by adding the class <code>sidebar-mini</code> on the body of the page.</p>
            <div class="area-line">
            <a data-target="#sidebarCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="sidebarCode" class="collapse">
<pre class="prettyprint">
&lt;div class=&quot;sidebar&quot; data-background-color=&quot;white&quot; data-active-color=&quot;danger&quot;&gt;
	&lt;div class=&quot;sidebar-wrapper&quot;&gt;
        &lt;div class=&quot;logo&quot;&gt;
            &lt;a href=&quot;http://www.creative-tim.com&quot; class=&quot;simple-text&quot;&gt;
                Creative Tim
            &lt;/a&gt;
        &lt;/div&gt;
		&lt;div class=&quot;mini-logo&quot;&gt;
			&lt;a href=&quot;http://www.creative-tim.com&quot; class=&quot;simple-text&quot;&gt;
                Ct
            &lt;/a&gt;
		&lt;/div&gt;
		&lt;div class=&quot;user&quot;&gt;
            &lt;div class=&quot;photo&quot;&gt;
                &lt;img src=&quot;assets/img/faces/face-2.jpg&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;info&quot;&gt;
                &lt;a data-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; class=&quot;collapsed&quot;&gt;
                    Chet Faker
                    &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
                &lt;/a&gt;
                &lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
                    &lt;ul class=&quot;nav&quot;&gt;
                        &lt;li&gt;&lt;a href=&quot;#profile&quot;&gt;My Profile&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#editprofile&quot;&gt;Edit Profile&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#settings&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;ul class=&quot;nav&quot;&gt;
            &lt;li class=&quot;active&quot;&gt;
                &lt;a href=&quot;dashboard.php&quot;&gt;
                    &lt;i class=&quot;ti-panel&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;Dashboard&lt;/p&gt;
                &lt;/a&gt;
            &lt;/li&gt;
			&lt;li&gt;
				&lt;a data-toggle=&quot;collapse&quot; href=&quot;#componentsExamples&quot; aria-expanded=&quot;true&quot;&gt;
					&lt;i class=&quot;ti-package&quot;&gt;&lt;/i&gt;
					&lt;p&gt;Components
					   &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
					&lt;/p&gt;
				&lt;/a&gt;
				&lt;div class=&quot;collapse&quot; id=&quot;componentsExamples&quot;&gt;
					&lt;ul class=&quot;nav&quot;&gt;
						&lt;li&gt;&lt;a href=&quot;components/buttons.php&quot;&gt;Buttons&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/grid.php&quot;&gt;Grid System&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/panels.php&quot;&gt;Panels&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/sweet-alert.php&quot;&gt;Sweet Alert&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/notifications.php&quot;&gt;Notifications&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/icons.php&quot;&gt;Icons&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;components/typography.php&quot;&gt;Typography&lt;/a&gt;&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;a data-toggle=&quot;collapse&quot; href=&quot;#formsExamples&quot;&gt;
                    &lt;i class=&quot;ti-clipboard&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;
						Forms
                       &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
                    &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;collapse&quot; id=&quot;formsExamples&quot;&gt;
                    &lt;ul class=&quot;nav&quot;&gt;
						&lt;li&gt;&lt;a href=&quot;forms/regular.php&quot;&gt;Regular Forms&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;forms/extended.php&quot;&gt;Extended Forms&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;forms/validation.php&quot;&gt;Validation Forms&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;forms/wizard.php&quot;&gt;Wizard&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/li&gt;
            &lt;li&gt;
				&lt;a data-toggle=&quot;collapse&quot; href=&quot;#tablesExamples&quot;&gt;
                    &lt;i class=&quot;ti-view-list-alt&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;
						Table list
                       &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
                    &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;collapse&quot; id=&quot;tablesExamples&quot;&gt;
                    &lt;ul class=&quot;nav&quot;&gt;
						&lt;li&gt;&lt;a href=&quot;tables/regular.php&quot;&gt;Regular Tables&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;tables/extended.php&quot;&gt;Extended Tables&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;tables/bootstrap-table.php&quot;&gt;Bootstrap-Table&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/li&gt;
			&lt;li&gt;
				&lt;a data-toggle=&quot;collapse&quot; href=&quot;#mapsExamples&quot;&gt;
                    &lt;i class=&quot;ti-map&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;
						Maps
                       &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
                    &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;collapse&quot; id=&quot;mapsExamples&quot;&gt;
                    &lt;ul class=&quot;nav-second-level nav&quot;&gt;
						&lt;li&gt;&lt;a href=&quot;maps/google.php&quot;&gt;Google Maps&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;maps/vector.php&quot;&gt;Vector Maps&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;maps/fullscreen.php&quot;&gt;Full Screen Map&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/li&gt;
			&lt;li&gt;
                &lt;a href=&quot;charts.php&quot;&gt;
                    &lt;i class=&quot;ti-bar-chart-alt&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;Charts&lt;/p&gt;
                &lt;/a&gt;
            &lt;/li&gt;
			&lt;li&gt;
                &lt;a href=&quot;calendar.php&quot;&gt;
                    &lt;i class=&quot;ti-calendar&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;Calendar&lt;/p&gt;
                &lt;/a&gt;
            &lt;/li&gt;
			&lt;li&gt;
				&lt;a data-toggle=&quot;collapse&quot; href=&quot;#pagesExamples&quot;&gt;
                    &lt;i class=&quot;ti-gift&quot;&gt;&lt;/i&gt;
                    &lt;p&gt;
						Pages
                       &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
                    &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;collapse&quot; id=&quot;pagesExamples&quot;&gt;
                    &lt;ul class=&quot;nav-second-level nav&quot;&gt;
						&lt;li&gt;&lt;a href=&quot;pages/timeline.php&quot;&gt;Timeline Page&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;pages/user.php&quot;&gt;User Page&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;pages/login.php&quot;&gt;Login Page&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;pages/register.php&quot;&gt;Register Page&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;pages/lock.php&quot;&gt;Lock Screen Page&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- sweetalert row -->
<div class="tim-row" id="sweetalert-row">
        <h2> Sweet Alert
            <small><a href="../examples/components/sweet-alert.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            If you want to replace the classic alert box with something that looks amazing, you can use the Sweet Alert 2 Plugin. We have changed the typography and colours for the plugin provided by <a href="https://twitter.com/t4t5">Tristan Edwards</a>. If you want to see the full documentation, please check <a href="http://limonte.github.io/sweetalert2/">out this page</a>.
            <br /><br />
            If you want to see a basic coded example, here is one below.
        </p>

        <button class="btn btn-default btn-fill" onclick='swal("Good job!", "You clicked the button!", "success")'>Try me!</button>

            <div class="area-line">
            <a data-target="#sweetAlertCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="sweetAlertCode" class="collapse">
<pre class="prettyprint">
&lt;button class=&quot;btn btn-default btn-fill&quot; onclick=&#39;swal(&quot;Good job!&quot;, &quot;You clicked the button!&quot;, &quot;success&quot;)&#39;&gt;Try me!&lt;/button&gt;
&lt;!-- for more actions that you can use onclick, please check out demo.js --&gt;
</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- datetimepicker row -->
<div class="tim-row" id="datetimepicker-row">
    <h2>DateTimePicker
            <small><a href="../examples/forms/extended.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>We have created a date-time picker starting from <a href="https://eonasdan.github.io/bootstrap-datetimepicker/">this wonderful plugin</a> created by <a href="https://github.com/Eonasdan">Eonasdan</a>. We have changed the colours, typography and buttons, so it can look like the rest of the dashboard.<br /><br />
        Here is a coded example:
    </p>
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control datetimepicker" placeholder="Datetime Picker Here"/>
        </div>
    </div>
    <div class="area-line">
        <a data-target="#datepicker" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
<div id="datepicker" class="collapse">
<pre class="prettyprint">
&lt;!-- input with datetimepicker --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control datetimepicker&quot; placeholder=&quot;Datetime Picker Here&quot;/&gt;

&lt;!-- javascript for init --&gt;
$(&#39;.datetimepicker&#39;).datetimepicker({
    icons: {
        time: &quot;fa fa-clock-o&quot;,
        date: &quot;fa fa-calendar&quot;,
        up: &quot;fa fa-chevron-up&quot;,
        down: &quot;fa fa-chevron-down&quot;,
        previous: &#39;fa fa-chevron-left&#39;,
        next: &#39;fa fa-chevron-right&#39;,
        today: &#39;fa fa-screenshot&#39;,
        clear: &#39;fa fa-trash&#39;,
        close: &#39;fa fa-remove&#39;
    }
});
</pre>
</div>
    </div>
</div>
<!-- end row -->

<!-- charts row -->
<div class="tim-row" id="charts-row">
    <h2>Charts
        <small><a href="../examples/charts.php" target="_blank">Live Demo</a></small>
    </h2>
    <legend></legend>
    <p>For the implementation of graphic charts, we used the Chartist plugin and added our custom styles. The plugin is free to download and use <a href="https://gionkunz.github.io/chartist-js/examples.php">here</a>. <a href="https://github.com/gionkunz">Gion Kunz</a> is the guy behind the project; he did an awesome job and we recommend using his stuff. Besides all the great options for customisation that you have using it, it is also fully responsive. We changed the colours, background and typography.</p>
    <h4>Line Chart</h4>
    <p>We recommend using this chart when you have easy to understand information, that can be conveyed in a single line throughout a continuous period. </p>
    <div class="row">
        <div class="col-md-8">
        <h4><small>24 Hours Performance</small></h4>
        <div id="chartPerformance" class="ct-chart"></div>
        </div>
    </div>
    <div class="area-line">
        <a data-target="#lineChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>
<div id="lineChart" class="collapse">
<pre class="prettyprint">
&lt;!-- graphic area in html --&gt;



&lt;h4&gt; &lt;br&gt;&lt;small&gt;24 Hours Performance&lt;/small&gt;&lt;/h4&gt;

&lt;div id=&quot;chartPerformance&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;



&lt;!-- javascript --&gt;
var dataPerformance = {
  labels: ['6pm','9pm','11pm', '2am', '4am', '8am', '2pm', '5pm', '8pm', '11pm', '4am'],
  series: [
    [1, 6, 8, 7, 4, 7, 8, 12, 16, 17, 14, 13]
  ]
};

var optionsPerformance = {
  showPoint: false,
  lineSmooth: true,
  height: &quot;200px&quot;,
  axisX: {
    showGrid: false,
    showLabel: true
  },
  axisY: {
    offset: 40,
  },
  low: 0,
  high: 16,
  height: &quot;250px&quot;
};

Chartist.Line('#chartPerformance', dataPerformance, optionsPerformance);
</pre>
</div>
    </div>

    <h4>Line Chart with Points</h4>
    <p>This graphic is best used when you have multiple results for different points and you want to show a correlation (growth, down-side, etc).</p>
    <div class="row">
        <div class="col-md-8">
            <h4><small>NASDAQ: AAPL</small></h4>
            <div id="chartStock" class="ct-chart"></div>
        </div>
    </div>
    <div class="area-line">
            <a data-target="#lineChartPoints" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

<div id="lineChartPoints" class="collapse">
<pre class="prettyprint">

&lt;!-- graphic area in html --&gt;

&lt;h4&gt;&lt;/small&gt; &lt;br&gt;&lt;small&gt;NASDAQ: AAPL&lt;/small&gt;&lt;/h4&gt;

&lt;div id=&quot;chartStock&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;



&lt;!-- javascript --&gt;

var dataStock = {
  labels: ['\'07','\'08','\'09', '\'10', '\'11', '\'12', '\'13', '\'14', '\'15'],
  series: [
    [22.20, 34.90, 42.28, 51.93, 62.21, 80.23, 62.21, 82.12, 102.50, 107.23]
  ]
};

var optionsStock = {
  lineSmooth: false,
  height: "200px",
  axisY: {
    offset: 40,
    labelInterpolationFnc: function(value) {
        return '$' + value;
      }

  },
  low: 10,
  height: "250px",
  high: 110,
    classNames: {
      point: 'ct-point ct-green',
      line: 'ct-line ct-green'
  }
};

Chartist.Line('#chartStock', dataStock, optionsStock);
</pre>
</div>
        </div>

    <h4>Multiple Lines Chart</h4>
    <p>We recommend you use this graphic when you need to show multiple functions in the same visual element. For example, you can see a correlation between the registered versus active users. Always try to use a legend when you have multiple elements in the graphic.</p>
    <div class="row">
            <div class="col-md-8">
                 <h4><small>Users Behavior</small></h4>
                <div id="chartHours" class="ct-chart"></div>

                 <h6>Legend</h6>
                 <i class="fa fa-circle text-info"></i> Visited Site
                 <i class="fa fa-circle text-warning"></i> Register
                 <i class="fa fa-circle text-danger"></i> Login 2nd Time
            </div>
    </div>
    <div class="area-line">
        <a data-target="#multipleLinesChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

<div id="multipleLinesChart" class="collapse">
<pre class="prettyprint">
&lt;!-- graphic area in html --&gt;

&lt;h4&gt;&lt;small&gt;Users Behavior&lt;/small&gt;&lt;/h4&gt;

&lt;div id=&quot;chartHours&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;

&lt;h6&gt;Legend&lt;/h6&gt;

&lt;i class=&quot;fa fa-circle text-info&quot;&gt;&lt;/i&gt; Visited Site
&lt;i class=&quot;fa fa-circle text-warning&quot;&gt;&lt;/i&gt; Register
&lt;i class=&quot;fa fa-circle text-danger&quot;&gt;&lt;/i&gt; Login 2nd Time


&lt;!-- javascript --&gt;

var dataSales = {
  labels: ['9:00AM', '12:00AM', '3:00PM', '6:00PM', '9:00PM', '12:00PM', '3:00AM', '6:00AM'],
  series: [
     [287, 385, 490, 562, 594, 626, 698, 895, 952],
    [67, 152, 193, 240, 387, 435, 535, 642, 744],
    [23, 113, 67, 108, 190, 239, 307, 410, 410]
  ]
};

var optionsSales = {
  lineSmooth: false,
  low: 0,
  high: 1000,
  showArea: true,
  height: "245px",
  axisX: {
    showGrid: false,
  },
  lineSmooth: Chartist.Interpolation.simple({
    divisor: 3
  }),
  showLine: true,
  showPoint: false,
};

var responsiveSales = [
  ['screen and (max-width: 640px)', {
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);
</pre>
</div>
    </div>

    <h4>Pie Chart</h4>
    <p>A pie chart is the easiest way to represent an information. Use it whenever you want to show something understandable at once.</p>
    <div class="row">
        <div class="col-md-8">
            <h4><small>Public Preferences</small></h4>
             <div class="row margin-top">
                 <div class="col-md-10 col-md-offset-1">
                     <div id="chartPreferences" class="ct-chart"></div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-10 col-md-offset-1">
                    <div class="chart-legend">
                        <h6>Legend</h6>
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Bounce
                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                    </div>
                 </div>
             </div>
        </div>
    </div>
    <div class="area-line">
            <a data-target="#pieChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

<div id="pieChart" class="collapse">
<pre class="prettyprint">
&lt;!-- graphic area in html --&gt;

&lt;h4&gt;&lt;small&gt;Public Preferences&lt;/small&gt;&lt;/h4&gt;

&lt;div class=&quot;row margin-top&quot;&gt;

 &lt;div class=&quot;col-md-10 col-md-offset-1&quot;&gt;

     &lt;div id=&quot;chartPreferences&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;

 &lt;/div&gt;

&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;

 &lt;div class=&quot;col-md-10 col-md-offset-1&quot;&gt;

     &lt;h6&gt;Legend&lt;/h6&gt;

    &lt;i class=&quot;fa fa-circle text-info&quot;&gt;&lt;/i&gt; Open
    &lt;i class=&quot;fa fa-circle text-danger&quot;&gt;&lt;/i&gt; Bounce
    &lt;i class=&quot;fa fa-circle text-warning&quot;&gt;&lt;/i&gt; Unsubscribe

 &lt;/div&gt;

&lt;/div&gt;



&lt;!-- javascript --&gt;

Chartist.Pie('#chartPreferences', {
  labels: ['62%','32%','6%'],
  series: [62, 32, 6]
});
</pre>
</div>
    </div>

    <h4>Bar Chart</h4>
    <p>We recommend using the bar chart whenever you want to show progress over periods of time. Here is an example.</p>
    <div class="row">
        <div class="col-md-8">
            <h4><small>Views</small></h4>
            <div id="chartViews" class="ct-chart"></div>
        </div>
    </div>
    <div class="area-line">
            <a data-target="#barChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>
<div id="barChart" class="collapse">
<pre class="prettyprint">
&lt;!-- graphic area in html --&gt;

&lt;h4&gt;&lt;small&gt;Views&lt;/small&gt;&lt;/h4&gt;

&lt;div id=&quot;chartViews&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;



&lt;!-- javascript --&gt;

var dataViews = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  series: [
    [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]
  ]
};

var optionsViews = {
  seriesBarDistance: 10,
  classNames: {
    bar: 'ct-bar'
  },
  axisX: {
    showGrid: false,

  },
  height: &quot;250px&quot;

};

var responsiveOptionsViews = [
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

Chartist.Bar('#chartViews', dataViews, optionsViews, responsiveOptionsViews);
</pre>
</div>
    </div>

    <h4>Multiple Bars Chart</h4>
    <p>Go for multiple bars charts if you want to show two indicators side by side.</p>
    <div class="row">
        <div class="col-md-8">
            <h4>Activity <br><small>Multiple Bars Chart</small></h4>
            <div id="chartActivity" class="ct-chart"></div>
            <h6>Legend</h6>
            <span class="label label-info">Tesla</span>
            <span class="label label-warning">BMW</span>
        </div>
    </div>
    <div class="area-line">
            <a data-target="#multipleBarsChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

<div id="multipleBarsChart" class="collapse">
<pre class="prettyprint">
&lt;!-- graphic area in html --&gt;

&lt;h4&gt;Activity &lt;br&gt;&lt;small&gt;Multiple Bars Chart&lt;/small&gt;&lt;/h4&gt;

&lt;div id=&quot;chartActivity&quot; class=&quot;ct-chart&quot;&gt;&lt;/div&gt;

&lt;h6&gt;Legend&lt;/h6&gt;

&lt;span class=&quot;label label-info&quot;&gt;Tesla&lt;/span&gt;

&lt;span class=&quot;label label-warning&quot;&gt;BMW&lt;/span&gt;



&lt;!-- javascript --&gt;

var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  series: [
    [542, 543, 520, 680, 653, 753, 326, 434, 568, 610, 756, 895],
    [230, 293, 380, 480, 503, 553, 600, 664, 698, 710, 736, 795]
  ]
};

var options = {
    seriesBarDistance: 10,
    axisX: {
        showGrid: false
    },
    height: &quot;245px&quot;
};

var responsiveOptions = [
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

Chartist.Line('#chartActivity', data, options, responsiveOptions);

</pre>
</div>
    </div>
</div>
<!-- end row -->

<!-- google maps row -->
<div class="tim-row" id="google-row">
        <h2> Google Maps
            <small><a href="../examples/maps/google.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            We changed the classic Google Maps by adding special skins and putting them in cards. If you want to see the full documentation from Google, you can see the docs <a href="https://developers.google.com/maps/documentation/javascript/">here</a>.<br /><br />
            Below, you will find a coded example:
        </p>
        <div class="card">
            <div class="header">
                <p class="category">Regular Map</p>
            </div>
            <div class="content">
                <div id="regularMap" class="map"></div>
            </div>
        </div>

            <div class="area-line">
            <a data-target="#googleMapsCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="googleMapsCode" class="collapse">
<pre class="prettyprint">
&lt;!-- card for the map --&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;header&quot;&gt;
        &lt;p class=&quot;category&quot;&gt;Regular Map&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
        &lt;div id=&quot;regularMap&quot; class=&quot;map&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- javascript for init --&gt;
var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
var mapOptions = {
    zoom: 8,
    center: myLatlng,
    scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
}

var map = new google.maps.Map(document.getElementById(&quot;regularMap&quot;), mapOptions);

var marker = new google.maps.Marker({
    position: myLatlng,
    title:&quot;Regular Map!&quot;
});

marker.setMap(map);

});
</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- jvector maps row -->
<div class="tim-row" id="jvector-row">
        <h2> jVector Maps
            <small><a href="../examples/maps/vector.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            We have integrated and changed the look for the jVector Maps. We recommend using them for statistics for countries. To see the original documentation from Kirill Lebedev, you can go <a href="http://jvectormap.com/tutorials/getting-started/">here</a>.<br /><br />
            If you want to see how it looks and how you can use this map, here is an example.
        </p>
        <div class="card card-plain">
            <div class="content">
                <div id="worldMap" class="map map-big"></div>
            </div>
        </div>

            <div class="area-line">
            <a data-target="#jVectorMapsCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="jVectorMapsCode" class="collapse">
<pre class="prettyprint">
&lt;!-- card for the map --&gt;
&lt;div class=&quot;card card-plain&quot;&gt;
    &lt;div class=&quot;content&quot;&gt;
        &lt;div id=&quot;worldMap&quot; class=&quot;map map-big&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- javascript for init --&gt;
 var mapData = {
        &quot;AU&quot;: 760,
        &quot;BR&quot;: 550,
        &quot;CA&quot;: 120,
        &quot;DE&quot;: 1300,
        &quot;FR&quot;: 540,
        &quot;GB&quot;: 690,
        &quot;GE&quot;: 200,
        &quot;IN&quot;: 200,
        &quot;RO&quot;: 600,
        &quot;RU&quot;: 300,
        &quot;US&quot;: 2920,
    };

    $(&#39;#worldMap&#39;).vectorMap({
        map: &#39;world_mill_en&#39;,
        backgroundColor: &quot;transparent&quot;,
        regionStyle: {
            initial: {
                fill: &#39;#e4e4e4&#39;,
                &quot;fill-opacity&quot;: 0.9,
                stroke: &#39;none&#39;,
                &quot;stroke-width&quot;: 0,
                &quot;stroke-opacity&quot;: 0
            }
        },

        series: {
            regions: [{
                values: mapData,
                scale: [&quot;#AAAAAA&quot;,&quot;#444444&quot;],
                normalizeFunction: &#39;polynomial&#39;
            }]
        },
    });

});

</pre>
</div>
            </div>
</div>
<!-- end row -->

<!-- wizard row -->
<div class="tim-row" id="wizard-row">
        <h2> Wizard
            <small><a href="../examples/forms/wizard.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            If you have lengthy forms to complete, you can use the Bootstrap Wizard. This plugin allows you to cut the form into steps and let the user complete it gradually. We have worked over the original repository from <a href="https://twitter.com/gabrielva">Vincent Gabriel</a>, which you can find <a href="http://vadimg.com/twitter-bootstrap-wizard-example/#demo">here</a>.<br /><br />
            We have changed the typography, inputs, buttons and we have added validation for inputs. You can see how it looks and feels in the live demo.
        </p>
</div>
<!-- end row -->

<!-- validation row -->
<div class="tim-row" id="validation-row">
        <h2> jQuery Validate for Forms
            <small><a href="../examples/forms/validation.php" target="_blank">Live Demo</a></small>
        </h2>
        <legend></legend>
        <p>
            If you have required fields in forms, the best way to add validation for them is through the jQuery Validation tool. We have imported it into the Paper Dashboard PRO library and changed its colours. To see the original and full documentation from jQueryValidation, you can go <a href="http://jqueryvalidation.org/">here</a>.<br /><br />
            If you want to see a basic login example and the code behind it, check out the example below:
        </p>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <form id="loginFormValidation" action="" method="" novalidate="">
                        <div class="content">
                        <div class="header text-center"><h5>Login Form</h5></div>

                            <div class="form-group">
                                <label class="control-label">Email Address <star>*</star></label>
                                <input class="form-control"
                                       name="email"
                                       type="text"
                                       email="true"
                                       required="true"
                                />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Password <star>*</star></label>
                                <input class="form-control"
                                       name="password"
                                       id="registerPassword"
                                       type="password"
                                       required="true"
                                />
                            </div>

                            <div class="category"><star>*</star> Required fields</div>
                            <br />
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Register</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
            <div class="area-line">
            <a data-target="#validationCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
<div id="validationCode" class="collapse">
<pre class="prettyprint">
&lt;!-- html for login --&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;form id=&quot;loginFormValidation&quot; action=&quot;&quot; method=&quot;&quot; novalidate=&quot;&quot;&gt;
        &lt;div class=&quot;content&quot;&gt;
        &lt;div class=&quot;header text-center&quot;&gt;&lt;h5&gt;Login Form&lt;/h5&gt;&lt;/div&gt;

            &lt;div class=&quot;form-group&quot;&gt;
                &lt;label class=&quot;control-label&quot;&gt;Email Address &lt;star&gt;*&lt;/star&gt;&lt;/label&gt;
                &lt;input class=&quot;form-control&quot;
                       name=&quot;email&quot;
                       type=&quot;text&quot;
                       email=&quot;true&quot;
                       required=&quot;true&quot;
                /&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-group&quot;&gt;
                &lt;label class=&quot;control-label&quot;&gt;Password &lt;star&gt;*&lt;/star&gt;&lt;/label&gt;
                &lt;input class=&quot;form-control&quot;
                       name=&quot;password&quot;
                       id=&quot;registerPassword&quot;
                       type=&quot;password&quot;
                       required=&quot;true&quot;
                /&gt;
            &lt;/div&gt;

            &lt;div class=&quot;category&quot;&gt;&lt;star&gt;*&lt;/star&gt; Required fields&lt;/div&gt;
            &lt;br /&gt;
            &lt;div class=&quot;footer text-center&quot;&gt;
                &lt;button type=&quot;submit&quot; class=&quot;btn btn-info btn-fill btn-wd&quot;&gt;Register&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;


    &lt;/form&gt;
&lt;/div&gt;

&lt;!-- javascript for validation --&gt;
$(&#39;#loginFormValidation&#39;).validate();

</pre>
</div>
            </div>
<!-- end row -->

</div>
<!-- end row -->

            <!-- end container -->
        </div>
    </div>
    </div>
    </div>
    </div>


</div>
<footer class="footer footer-black">
    <div class="container">
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
</body>
	<!--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   -->
	<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="../assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="../assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="../assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="../assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="../assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="../assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="../assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Wizard Plugin    -->
	<script src="../assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="../assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="../assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="../assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

    <script>
        var $table = $('#bootstrap-table');

        $().ready(function(){

//             for tables
            $( "#slider-range" ).slider({
            	range: true,
            	min: 0,
            	max: 500,
            	values: [ 75, 300 ],

            });

            $( "#slider-default" ).slider({
            		value: 70,
            		orientation: "horizontal",
            		range: "min",
            		animate: true

            });

//             for datatables
            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8,10,25,50,100],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });

            window.operateEvents = {
                'click .view': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click view icon, row: ', info);
                    console.log(info);
                },
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click edit icon, row: ', info);
                    console.log(info);
                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
                }
            };

            //for datetimepickers
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });

            //for chartist
            demo.initDocumentationCharts();


            //for google map
            // Regular Map
            var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
            var mapOptions = {
                zoom: 8,
                center: myLatlng,
                scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
            }

            var map = new google.maps.Map(document.getElementById("regularMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"Regular Map!"
            });

            marker.setMap(map);


            //for jVector map
             var mapData = {
                    "AU": 760,
                    "BR": 550,
                    "CA": 120,
                    "DE": 1300,
                    "FR": 540,
                    "GB": 690,
                    "GE": 200,
                    "IN": 200,
                    "RO": 600,
                    "RU": 300,
                    "US": 2920,
                };

                $('#worldMap').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: "transparent",
                    regionStyle: {
                        initial: {
                            fill: '#e4e4e4',
                            "fill-opacity": 0.9,
                            stroke: 'none',
                            "stroke-width": 0,
                            "stroke-opacity": 0
                        }
                    },

                    series: {
                        regions: [{
                            values: mapData,
                            scale: ["#AAAAAA","#444444"],
                            normalizeFunction: 'polynomial'
                        }]
                    },
                });

            //for validation
            $('#loginFormValidation').validate();

            });



        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                    '<i class="fa fa-image"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }

        function showNotification(from, align){
        	color = Math.floor((Math.random() * 4) + 1);

        	$.notify({
            	icon: "ti-gift",
            	message: "Welcome to <b>Paper Dashboard PRO</b> - a beautiful dashboard for your next project."

            },{
                type: type[color],
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');

    </script>

</html>
