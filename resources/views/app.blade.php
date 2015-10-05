<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planner</title>

        <!-- Vendor CSS -->
        <link href="{{ asset('/css/ripples.min.css')}}" rel="stylesheet">

        <link href="{{ asset('material_vendors/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/material-icons/material-design-iconic-font.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/socicon/socicon.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/noUiSlider/jquery.nouislider.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/farbtastic/farbtastic.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/summernote/summernote.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">


        <!-- CSS -->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <script type="text/javascript"
                   src="https://maps.google.com/maps/api/js?sensor=false"></script>

       <style type="text/css">

           .top-menu > li > a.tm-search {
             background-image: url("../img/icons/search.png");
           }

           .top-menu > li > a.tm-notification {
             background-image: url("../img/icons/notification.png");
           }

           .top-menu > li > a.tm-settings {
             background-image: url("../img/icons/ellipsis.png");
           }
       </style>


    </head>
    <body>
      <header id="header">
                <ul class="header-inner">
                    <li id="menu-trigger" data-trigger="#sidebar">
                        <div class="line-wrap">
                            <div class="line top"></div>
                            <div class="line center"></div>
                            <div class="line bottom"></div>
                        </div>
                    </li>

                    <li class="logo hidden-xs">
                        <a href="index.html">Planner</a>
                    </li>

                    <li class="pull-right">
                    <ul class="top-menu">
                        <li id="toggle-width">
                            <div class="toggle-switch">
                                <input id="tw-switch" type="checkbox" hidden="hidden">
                                <label for="tw-switch" class="ts-helper"></label>
                            </div>
                        </li>
                        <li id="top-search">
                            <a class="tm-search" href=""></a>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="tm-message" href=""><i class="tmn-counts">6</i></a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body c-overflow">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="md md-done-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body c-overflow">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class="lv-footer" href="">View Previous</a>
                                </div>

                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" class="tm-task" href=""><i class="tmn-counts">2</i></a>
                            <div class="dropdown-menu pull-right dropdown-menu-lg">
                                <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="tm-settings" href=""></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li>
                                    <a data-action="fullscreen" href=""><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                                </li>
                                <li>
                                    <a data-action="clear-localstorage" href=""><i class="md md-delete"></i> Clear Local Storage</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-person"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-settings"></i> Other Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                            <a class="tm-chat" href=""></a>
                        </li>
                        </ul>
                    </li>
                </ul>

                <!-- Top Search Content -->
                <div id="top-search-wrap">
                    <input type="text">
                    <i id="top-search-close">&times;</i>
                </div>
            </header>

            <section id="main">
                <aside id="sidebar">
                    <div class="sidebar-inner">
                        <div class="si-inner">
                            <div class="profile-menu">
                                <a href="">
                                    <div class="profile-pic">
                                        <img src="img/profile-pics/1.jpg" alt="">
                                    </div>

                                    <div class="profile-info">
                                        Malinda Hollaway

                                        <i class="md md-arrow-drop-down"></i>
                                    </div>
                                </a>

                                <ul class="main-menu">
                                    <li>
                                        <a href="profile-about.html"><i class="md md-person"></i> View Profile</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="md md-settings"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="md md-history"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <ul class="main-menu">
                                <li class="active"><a href="index.html"><i class="md md-home"></i> Home</a></li>
                                <li><a href="typography.html"><i class="md md-format-underline"></i> Typography</a></li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-now-widgets"></i> Widgets</a>

                                    <ul>
                                        <li><a href="widget-templates.html">Templates</a></li>
                                        <li><a class="active" href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-view-list"></i> Tables</a>

                                    <ul>
                                        <li><a href="tables.html">Normal Tables</a></li>
                                        <li><a href="data-tables.html">Data Tables</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-my-library-books"></i> Forms</a>

                                    <ul>
                                        <li><a href="form-elements.html">Basic Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                        <li><a href="form-validations.html">Form Validation</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-swap-calls"></i>User Interface</a>
                                    <ul>
                                        <li><a href="colors.html">Colors</a></li>
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="box-shadow.html">Box Shadow</a></li>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="alerts.html">Alerts</a></li>
                                        <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                        <li><a href="media.html">Media</a></li>
                                        <li><a href="components.html">Components</a></li>
                                        <li><a href="other-components.html">Others</a></li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-trending-up"></i>Charts</a>
                                    <ul>
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="other-charts.html">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html"><i class="md md-today"></i> Calendar</a></li>
                                <li><a href="generic-classes.html"><i class="md md-layers"></i> Generic Classes</a></li>
                                <li class="sub-menu">
                                    <a href=""><i class="md md-content-copy"></i> Sample Pages</a>
                                    <ul>
                                        <li><a href="profile-about.html">Profile</a></li>
                                        <li><a href="list-view.html">List View</a></li>
                                        <li><a href="messages.html">Messages</a></li>
                                        <li><a href="login.html">Login and Sign Up</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>



                <section id="content">
                    @yield('content')
                </section>
            </section>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="{{ asset('js/material/jquery-2.1.1.min.js')}}"></script>
        <script src="{{ asset('js/material/bootstrap.min.js')}}"></script>

        <script src="{{ asset('material_vendors/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/plugins/curvedLines.js')}}"></script>
        <script src="{{ asset('material_vendors/sparklines/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('material_vendors/easypiechart/jquery.easypiechart.min.js')}}"></script>

        <script src="{{ asset('material_vendors/fullcalendar/lib/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('material_vendors/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{ asset('material_vendors/auto-size/jquery.autosize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('material_vendors/waves/waves.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
        <script src="{{ asset('material_vendors/sweet-alert/sweet-alert.min.js')}}"></script>

        <!--FORM -->
        <script src="{{ asset('material_vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fileinput/fileinput.min.js')}}"></script>
        <script src="{{ asset('material_vendors/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{ asset('material_vendors/moment/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('material_vendors/noUiSlider/jquery.nouislider.all.min.js')}}"></script>
        <script src="{{ asset('material_vendors/input-mask/input-mask.min.js')}}"></script>
        <script src="{{ asset('material_vendors/farbtastic/farbtastic.min.js')}}"></script>
        <script src="{{ asset('material_vendors/summernote/summernote.min.js')}}"></script>

        <script src="{{ asset('js/material/flot-charts/curved-line-chart.js')}}"></script>
        <script src="{{ asset('js/material/flot-charts/line-chart.js')}}"></script>
        <script src="{{ asset('js/material/charts.js')}}"></script>



        <script src="{{ asset('js/material/charts.js')}}"></script>
        <script src="{{ asset('js/material/functions.js')}}"></script>
        <script src="{{ asset('js/material/demo.js')}}"></script>


    </body>
  </html>
