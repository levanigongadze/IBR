<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="assets/dashboard/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="assets/dashboard/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/dashboard/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="assets/dashboard/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">



        <!-- CSS -->
        <link href="assets/dashboard/css/app.min.1.css" rel="stylesheet">
        <link href="assets/dashboard/css/app.min.2.css" rel="stylesheet">

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
                    <a href="index.html">IBR</a>
                </li>

                <ul class="top-menu pull-right">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                </ul>
        </header>

        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <ul class="main-menu">
                        <li class="active"><a href="#"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-widgets"></i> My Account</a>

                            <ul>
                                <li><a href="#">Live Account</a></li>
                                <li><a class="active" href="#">Create Live Account</a></li>
                                <li><a href="#">Demo Account</a></li>
                                <li><a href="#">Create Demo Account</a></li>
                                <li><a href="#">Deposit</a></li>
                                <li><a href="#">Withdrawal</a></li>
                                <li><a href="#">Internal Transfer</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-view-list"></i> My Wallet</a>

                            <ul>
                                <li><a href="#">My Wallet</a></li>
                                <li><a href="#">Deposit</a></li>
                                <li><a href="#">Withdrawal</a></li>
                                <li><a href="#">Internal Transfer</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-collection-text"></i> Service Request</a>

                            <ul>
                                <li><a href="#">Change Account Type Request</a></li>
                                <li><a href="#">Change Leverage Request</a></li>
                                <li><a href="#">Change Password Request</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-swap-alt"></i>My Profile</a>
                            <ul>
                                <li><a href="#">View/Edit Presonal Detail</a></li>
                                <li><a href="#">Change Password</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-trending-up"></i>Partner Area</a>
                            <ul>
                                <li><a href="#">Request For Partner</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-image"></i>Support Center</a>
                            <ul>
                                <li><a href="photos.html">New Ticket</a></li>
                                <li><a href="photo-timeline.html">My Tickets</a></li>
                            </ul>
                        </li>

                        <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Logout</a></li>
                    </ul>
                </div>
            </aside>

            <section id="content">
                section
            </section>
        </section>

        <footer id="footer">
            Copyright &copy; 2015 Material Admin

            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
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
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="assets/dashboard/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="assets/dashboard/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="assets/dashboard/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="assets/dashboard/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="assets/dashboard/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

        <script src="assets/dashboard/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
        <script src="assets/dashboard/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="assets/dashboard/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="assets/dashboard/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="assets/dashboard/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="assets/dashboard/js/flot-charts/curved-line-chart.js"></script>
        <script src="assets/dashboard/js/flot-charts/line-chart.js"></script>
        <script src="assets/dashboard/js/charts.js"></script>

        <script src="assets/dashboard/js/charts.js"></script>
        <script src="assets/dashboard/js/functions.js"></script>
        <script src="assets/dashboard/js/demo.js"></script>


    </body>
  </html>
