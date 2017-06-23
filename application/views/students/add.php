<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Spec - Responsive Bootstrap Admin</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- dependencies styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/fontawesome/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/metisMenu/metisMenu.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/animate.css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/bootstrap/bootstrap.css" />

    <!-- spec styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/helper.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>themes/css/style.css">

</head>
<body class="fixed-navbar sidebar-scroll">

<!-- Header -->
<div id="header">
    <div id="logo" class="light-version">
        <span style="font-weight:bold;">
            SPEC ADMIN
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu">
            <li class=" left-sidebar-menu"><a href="javascript:;" id="sidebar" class="left-sidebar-toggle">
                        <i class="fa fa-server" style="color:#777;"></i>
                    </a>
                </li>
        </div>
        <div class="small-logo">
            <span class="text-primary">SPEC ADMIN</span>
        </div>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-bell"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated bounceInDown">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="javascript:;">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="index.html#" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated bounceInDown">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="javascript:;">See All Messages</a></li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="index.html#" id="sidebar" class="right-sidebar-toggle">
                        <i class="glyphicon glyphicon-option-vertical" style="color:#777;"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="login.html">
                        <i class="fa fa-key"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Left sidebar Menu -->
    <div id="left-sidebar" class="animated fadeIn">

        <div class="p-m">
            <button id="sidebar-close" class="left-sidebar-toggle sidebar-button btn btn-default m-b-md pull-right"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                
        <div class="profile-picture">
            <a href="index.html">
                <img src="images/user.png" class="img-circle m-b" style="width: 40px;height: 40px;" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">John Doe</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown">
                        <small class="text-muted">Edit Details <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu m-t-xs">
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="analytics.html">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>

                <p>Remaining Diskspace</p>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 45%; line-height: 10px; font-size:10px;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">45%
                    <span class="sr-only">45% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <div id="navigation">

        <ul class="nav" id="side-menu">
            <li>
                <a href="index.html#"> <span class="nav-label">Dashboard</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="index.html">Dashboard Layout 1</a></li>
                    <li><a href="index-2.html">Dashboard Layout 2</a></li>
                    <li><a href="index-3.html">Dashboard Layout 3</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">UI Elements</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="panels.html">Panels</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="loading_buttons.html">Loading buttons</a></li>
                    <li><a href="draggable.html">Draggable panels</a></li>
                    <li><a href="code_editor.html">Code editor</a></li>
                    <li><a href="email_template.html">Email template</a></li>
                    <li><a href="nestable_list.html">List</a></li>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="icons.html">Icons library</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">Spec Pages</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project.html">Project detail</a></li>
                    <li><a href="plans.html">Pricing plans</a></li>
                    <li><a href="social_board.html">Social board</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li><a href="mailbox_compose.html">Email compose</a></li>
                    <li><a href="mailbox_view.html">Email view</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog_details.html">Blog article</a></li>
                    <li><a href="forum.html">Forum</a></li>
                    <li><a href="forum_details.html">Forum details</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="file_manager.html">File manager</a></li>
                    <li><a href="chat_view.html">Chat view</a></li>
                    <li><a href="search.html">Search view</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">Charts</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="chartjs.html">ChartJs</a></li>
                    <li><a href="flot.html">Flot charts</a></li>
                    <li><a href="inline.html">Inline graphs</a></li>
                    <li><a href="chartist.html">Chartist</a></li>
                    <li><a href="morris.html">Morris Charts</a></li>
                </ul>
            </li>
            <li>
                <a href="animation.html"><span class="nav-label"><span class="label label-success pull-right">Animate.css</span>Animation</span></a>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">Pages</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="error_one.html">Error 404</a></li>
                    <li><a href="error_two.html">Error 505</a></li>
                    <li><a href="lock.html">Lock screen</a></li>
                    <li><a href="password_recovery.html">Passwor recovery</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">Tables</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="tables_design.html">Tables design</a></li>
                    <li><a href="datatables.html">Data tables</a></li>
                    <li><a href="footable.html">Foo Table</a></li>

                </ul>
            </li>
            <li>
                <a href="widgets.html"> <span class="nav-label">Widgets</span> <span class="label label-warning pull-right">New</span></a>
            </li>
            <li>
                <a href="index.html#"><span class="nav-label">Forms</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="forms_elements.html">Forms elements</a></li>
                    <li><a href="forms_extended.html">Forms extended</a></li>
                    <li><a href="text_editor.html">Text editor</a></li>
                    <li><a href="wizard.html">Wizard</a></li>
                    <li><a href="validation.html">Validation</a></li>
                </ul>
            </li>

        </ul>
    </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            
                <div class="small-chart m-t-sm" style="margin-left:80px;"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></div>
        </div>

    </div>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="content">
        <!-- First Charts Row -->
        <div class="row">
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                    <i class="fa fa-dollar"></i> Sales <span style="margin-left:2px;" class="fa fa-level-up text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline1"></span>

                                <div class="small">
                                    <i class="fa fa-clock"></i> Last sale 10 minutes before
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Small Chart 2 -->
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                     <i class="glyphicon glyphicon-stats"></i> Traffic <span style="margin-left:2px;" class="fa fa-level-up text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline4"></span>

                                <div class="small">
                                    <i class="fa fa-clock"></i>Total increase in traffic
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Chart 3 -->
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                     <i class="glyphicon glyphicon-arrow-up"></i> Top Countries <span style="margin-left:2px;" class="fa fa-level-up text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline3"></span>

                                <div class="small">
                                    <i class="fa fa-clock"></i> Top Countries Traffic
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Chart 4 -->
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                   <i class="glyphicon glyphicon-thumbs-up"></i> Like/Dislikes <span style="margin-left:2px; color:#e74c3c !important;" class="fa fa-level-down text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline2"></span>

                                <div class="small">
                                    <i class="fa fa-clock"></i>Total likes & dislikes
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Chart 5 -->
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                   <i class="glyphicon glyphicon-download-alt"></i> Downloads <span style="margin-left:2px;" class="fa fa-level-up text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline5"></span>

                                <div class="small">
                                   <i class="fa fa-clock"></i> Total Downloads Statistics
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Small Chart 6 -->
             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="small">
                                    <i class="fa fa-user"></i> Users <span style="margin-left:2px;" class="fa fa-level-up text-success"></span>
                                </div>
                                <div>
                                    <span id="sparkline6"></span>

                                <div class="small">
                                   <i class="fa fa-clock"></i> Weekly New Users Statis
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- First Charts Row Ends Here -->

         <!-- Second Chart ROW 2 starts here -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Dashboard information and statistics
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="text-center small">
                                    <i class="fa fa-dollar"></i> Sales
                                </div>
                                  <div>
                                    <canvas id="lineChart" height="140"></canvas>
                                </div>
                            <div class="pull-left col-md-6 col-sm-6 col-xs-12 graph2under">
                                <i class="pe-7s-graph1 fa-4x"></i>

                                 <h4 class="no-margins text-success">
                                <strong class="m-xs" style="color: #666;">$1 206,90</strong> Total Sales <small>(Daily)</small>
                                </h4>
                                <small>Lorem ipsum dolor sit amet</small>
                                <br>
                                <div class="stat-data" style="margin-top: 10px; margin-bottom: 10px;"></div>

                                <h4 class="no-margins text-success">
                                <strong class="m-xs" style="color: #666;">47%</strong> Conversion Rate <small>(%)</small>
                                </h4>
                                <small>Lorem ipsum dolor sit amet</small>
                                <br>
                            </div>
                              <div class="pull-right col-md-6 col-sm-6 col-xs-12 graph1under">
                                <i class="glyphicon glyphicon-hand-down fa-4x"></i>

                                

                                <h4 class="no-margins text-success">
                                <strong class="m-xs" style="color: #666;">1,206</strong> Total Views <small>(Daily)</small>
                                </h4>
                                <small>Lorem ipsum dolor sit amet</small>
                                <br>
                                <div class="stat-data" style="margin-top: 10px; margin-bottom: 10px;"></div>

                                <h4 class="no-margins text-success">
                                <strong class="m-xs" style="color: #666;">676</strong> Hits <small>(Daily)</small>
                                </h4>
                                <small>Lorem ipsum dolor sit amet</small>
                                <br>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    <span class="pull-right">
                          This is standard panel footer <a href="index.html#">Right Side</a>
                    </span>
                        Last update: 18.05.2017
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Dashboard information and statistics
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-sm-charts">
                                <div class="text-center small">
                                    <i class="fa fa-laptop"></i> Monitor
                                </div>
                                  <div>
                                    <canvas id="barChart" height="120"></canvas>
                                </div>
                                    <div class="panel-body list" style="border: none !important;">
                                 <div class="table-responsive project-list" id="tablescroll" style="margin-top: 40px !important;" >
                                    <table class="table table-striped" style="margin-bottom: -70px !important;">
                                        <thead>
                                        <tr>

                                            <th colspan="2">Process Name</th>
                                            <th style="padding-left: 25px;">CPU</th>
                                            <th style="padding-left: 25px;">Memory</th>
                                            <th style="padding-left: 25px;">Disc</th>
                                            <th style="padding-left: 25px;">Running</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><i class="fa fa-check" style="color:#1ab394;"></td>
                                            <td><i class="fa fa-server"> Server Loads
                                            </td>
                                            <td>
                                                <span class="pie">1/5</span>
                                            </td>
                                            <td><strong>20%</strong></td>
                                            <td>12MB</td>
                                            <td><a href="index.html#">OK</a></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check" style="color:#1ab394;"></td>
                                            <td><i class="fa fa-sitemap"> Total Websites
                                            </td>
                                            <td>
                                                <span class="pie">1/4</span>
                                            </td>
                                            <td><strong>40%</strong></td>
                                            <td>70MB</td>
                                            <td><a href="index.html#">OK</a></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-close" style="color:#e74c3c;"></td>
                                            <td><i class="fa fa-signal"></i> Process Load
                                            </td>
                                            <td>
                                                <span class="pie">0.52/1.561</span>
                                            </td>
                                            <td><strong>75%</strong></td>
                                            <td>1GB</td>
                                            <td><a href="index.html#">NOT OK</a></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check" style="color:#1ab394;"></td>
                                            <td><i class="fa fa-bolt"></i> Xampp Server
                                            </td>
                                            <td>
                                                <span class="pie">226/360</span>
                                            </td>
                                            <td><strong>16%</strong></td>
                                            <td>1TB</td>
                                            <td><a href="index.html#">OK</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    <span class="pull-right">
                          This is standard panel footer <a href="index.html#">Right Side</a>
                    </span>
                        Last update: 18.05.2017
                    </div>
                </div>
            </div>
        </div>

     <!-- Chart ROW 2 ends here -->

     <div class="row">
        <div class="col-lg-4">
                <div class="specpanel stats">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Last active
                    </div>
                    <div class="panel-body list">
                        <div class="stats-title pull-left">
                            <h4>Activity</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-science fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <div class="feed-element">
                               <a href="profile.html" class="pull-left">
                                  <img alt="image" class="img-circle" src="images/a1.png">
                                </a>
                              <div class="media-body ">
                               <small class="pull-right">5m ago</small>
                               <strong>John Doe</strong> posted a new blog. 
                               <br>
                                <small class="text-muted">Today 5:60 pm - 12.05.2017</small>

                                </div>
                            </div>
                                <!-- feed element 2 -->
                                <div class="feed-element">
                                      <a href="profile.html" class="pull-left">
                                         <img alt="image" class="img-circle" src="images/a5.png">
                                        </a>
                                      <div class="media-body ">
                                         <small class="pull-right">2h ago</small>
                                             <strong>John Doe</strong> posted message on <strong>Jane Doe</strong> site. 
                                             <br>
                                            <small class="text-muted">Today 2:10 pm - 12.05.2017</small>
                                        </div>
                                </div>
                             
                             <!-- feed element 3 -->
                             <div class="feed-element">
                                  <a href="profile.html" class="pull-left">
                                      <img alt="image" class="img-circle" src="images/a3.png">
                                  </a>
                                  <div class="media-body ">
                                   <small class="pull-right">2h ago</small>
                                    <strong>Jane Doe</strong> add 1 photo on <strong>David Smith</strong>. 
                                    <br>
                                     <small class="text-muted">2 days ago at 8:30am</small>
                                    </div>
                               </div>
                               <!-- feed element 4 -->

                               <div class="feed-element">
                                        <a href="profile.html" class="pull-left">
                                          <img alt="image" class="img-circle" src="images/a2.png">
                                        </a>
                                     <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                     <strong>Jane W</strong> started following <strong>James Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.05.2017</small>
                                     <div class="actions">
                                     <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                      <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    </div>
                                  </div>
                              </div>

                              <!-- feed element 5 -->

                              <div class="feed-element">
                                    <a href="profile.html" class="pull-left">
                                      <img alt="image" class="img-circle" src="images/a5.png">
                                     </a>
                                    <div class="media-body ">
                                       <small class="pull-right">2h ago</small>
                                     <strong>Tim Tom</strong> posted message on <strong>James Smith</strong> site. <br>
                                    <small class="text-muted">Yesterday 5:20 pm - 12.05.2017</small>
                                     <div class="well">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        </div>
                                    <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                     </div>
                                   </div>
                               </div>

                               <!-- feed element 6 -->
                                    <div class="feed-element">
                                        <a href="profile.html" class="pull-left">
                                         <img alt="image" class="img-circle" src="images/a6.png">
                                        </a>
                                        <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                    </div>
                                    <div class="feed-element">
                                    <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="images/a7.png">
                                    </a>
                                    <div class="media-body ">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Jane Doe</strong> started following <strong>John Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.05.2017</small>
                                    </div>
                                   </div>

                                     <button class="btn btn-success btn-block m-t"><i class="fa fa-arrow-down"></i> View More</button>

                            <br/>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center marginactivysec">
                                <small>
                                <span class="fa fa-comment"></span> New Comments
                            </small>
                                <h3 class="no-margins font-extra-bold text-success">1,102</h3>

                                <div class="font-bold">Increase 47% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center marginactivysec">
                                 <small>
                                <span class="glyphicon glyphicon-heart-empty"></span> New Follwers
                                </small>
                                <h3 class="no-margins font-extra-bold text-success">10,200</h3>

                                <div class="font-bold">Increase 78% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center marginactivysec">
                            <small>
                                <span class="fa fa-like"></span> New Likes
                            </small>
                                <h3 class="no-margins font-extra-bold ">14,108</h3>

                                <div class="font-bold">Decrease 31% <i class="fa fa-level-down" style="color:red;"></i></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center marginactivysec">
                                <small>
                                <span class="glyphicon glyphicon-time"></span> Bounce Rate
                                </small>
                                <h3 class="no-margins font-extra-bold ">32%</h3>

                                <div class="font-bold">Increase 28% <i class="fa fa-level-up text-success"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
                <!-- Activty Section Ends Here -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="specpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Recently active support
                    </div>
                    <div class="panel-body list">
                        <div class="col-sm-12 col-md-12 col-xs-23">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="index.html#chat-1">James</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="index.html#chat-2">Jane</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="index.html#chat-3">Smith</a>
                            </li>
                        </ul>
                        <div class="tab-content no-padding">
                            <div class="tab-pane active cont" id="chat-1">
                                <div class="chat-wi">
                                    <div class="chat-space nano nscroller has-scrollbar">
                                        <div class="chat-content content"  tabindex="0">
                                            <div class="chat-conv">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a1.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hello, what can i do for you?
                                                    </div>
                                                    <div>
                                                        <small>12:20 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv sent">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a5.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hi, i need support with my Spec?
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a1.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hello, how are you? i just though you were here, i'll see you tomorrow.
                                                    </div>
                                                    <div>
                                                        <small>12:30 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv sent">
                                               <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a5.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hi, i need support with my Spec?
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pane">
                                            <div class="slider" style="height: 323px; top: 0px;"></div>
                                        </div>
                                    </div>
                                    <div class="chat-in">
                                        <form action="index.html#" id="sd" method="post" name="sd">
                                            <input class="btn btn-success m-t pull-right" type="submit" value="SEND">
                                            <div class="input">
                                                <input name="msg" placeholder="Send a message..." type="text">
                                            </div>
                                            <div class="chat-tools">
                                                <ul class="nav nav-pills">
                                                    <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                    <li><i class="fa fa-camera"></i></li>
                                                    <li><i class="fa fa-microphone"></i></li>
                                                    <li><i class="fa fa-cloud"></i></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane cont" id="chat-2">
                                <div class="chat-wi">
                                    <div class="chat-space nano nscroller has-scrollbar">
                                        <div class="chat-content content" style="right: -17px;" tabindex="0">
                                            <div class="chat-conv sent">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a2.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hey, are you there?
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a1.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        I'm here, how was your day?
                                                    </div>
                                                    <div>
                                                        <small>12:20 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv sent">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a2.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        It was fine, just making some designs...
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pane" style="display: none;">
                                            <div class="slider" style="height: 20px; top: 0px;"></div>
                                        </div>
                                    </div>
                                    <div class="chat-in">
                                        <form action="index.html#" id="sd" method="post" name="sd">
                                            <input class="btn btn-info pull-right" type="submit" value="SEND">
                                            <div class="input">
                                                <input name="msg" placeholder="Send a message..." type="text">
                                            </div>
                                            <div class="chat-tools">
                                                <ul class="nav nav-pills">
                                                    <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                    <li><i class="fa fa-camera"></i></li>
                                                    <li><i class="fa fa-microphone"></i></li>
                                                    <li><i class="fa fa-cloud"></i></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="chat-3">
                                <div class="chat-wi">
                                    <div class="chat-space nano nscroller has-scrollbar">
                                        <div class="chat-content content" style="right: -17px;" tabindex="0">
                                            <div class="chat-conv">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a1.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hello, what can i do for you?
                                                    </div>
                                                    <div>
                                                        <small>12:20 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv sent">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a6.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hi, i need support with Spec Admin?
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a1.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hello, how are you? i just though you were here, i'll see you tomorrow.
                                                    </div>
                                                    <div>
                                                        <small>12:30 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <div class="chat-conv sent">
                                                <img alt="Avatar" class="c-avatar img-circle ttip" data-toggle="tooltip" src="images/a6.png" title="">
                                                <div class="c-bubble">
                                                    <div class="msg">
                                                        Hi, i need support with Spec Admin?
                                                    </div>
                                                    <div>
                                                        <small>12:25 p.m.</small>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pane" style="display: none;">
                                            <div class="slider" style="height: 20px; top: 0px;"></div>
                                        </div>
                                    </div>
                                    <div class="chat-in">
                                        <form action="index.html#" id="sd" method="post" name="sd">
                                            <input class="btn btn-info pull-right" type="submit" value="SEND">
                                            <div class="input">
                                                <input name="msg" placeholder="Send a message..." type="text">
                                            </div>
                                            <div class="chat-tools">
                                                <ul class="nav nav-pills">
                                                    <li class="active"><i class="fa fa-location-arrow"></i></li>
                                                    <li><i class="fa fa-camera"></i></li>
                                                    <li><i class="fa fa-microphone"></i></li>
                                                    <li><i class="fa fa-cloud"></i></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="specpanel stats">
                            <div class="panel-body h-200">
                                <div class="stats-title pull-left">
                                    <li class="dropdown" style="list-style-type:none;">
                                    <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown" aria-expanded="true">
                                        <small>Today <i class="fa fa-chevron-down"></i></small>
                                    </a>
                                    <ul class="dropdown-menu hdropdown notification">
                                        <li>
                                            <a>
                                                Yesterday.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                Weekly.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                Monthly.
                                            </a>
                                        </li>
                                        <li class="summary"><a href="javascript:;">See all due tasks</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h3 class="no-margins font-extra-bold text-success" style="font-size:45px;">32</h3>
                            <span class="font-bold no-margins" style="text-transform:uppercase; font-size:25px;">
                                Due Tasks
                            </span>
                                    <br/>
                                    <small>
                                        Number of total due tasks.
                                    </small>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Compeleted 10
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-12 text-center">
                        <div class="specpanel stats">
                            <div class="panel-body h-200">
                                <div class="stats-title pull-left">
                                    <li class="dropdown" style="list-style-type:none;">
                                    <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown" aria-expanded="true">
                                         <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu hdropdown notification">
                                        <li>
                                            <a>
                                                Details.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                Refresh.
                                            </a>
                                        </li>
                                        <li class="summary"><a href="javascript:;">See all overdue tasks</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-battery-1 fa-3x"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h3 class="no-margins font-extra-bold text-success" style="font-size:45px; color:#a94442;">132</h3>
                            <span class="font-bold no-margins" style="text-transform:uppercase; font-size:25px;">
                                Overdue Tasks
                            </span>
                                    <br/>
                                    <small>
                                        Number of total overdue tasks.
                                    </small>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Yesterday Overdue 5
                            </div>
                        </div>
                    </div>
                </div>
        </div> <!-- Chatbox Ends Here -->

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="specpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            To do list
                        </div>
                        <div class="panel-body list">

                            <div class="pull-right">
                                <a href="index.html#" class="btn btn-xs btn-default">Today</a>
                                <a href="index.html#" class="btn btn-xs btn-default">Yesterday</a>
                            </div>
                            <div class="panel-title">WHAT TO DO?</div>
                            <small class="fo">This is what to do list</small>
                            <div class="list-item-container" style="width: 100%;">
                               <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item listitemactivty">
                                <span class="pull-right">
                                    09:00 pm
                                </span>
                                <span class="label label-success">1</span> Please contact me
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    10:16 am
                                </span>
                                <span class="label label-info">2</span> Sign a contract
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    08:22 pm
                                </span>
                                <span class="label label-primary">3</span> Open new digital store
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    11:06 pm
                                </span>
                                <span class="label label-default">4</span> Promote our shop
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    12:00 am
                                </span>
                                <span class="label label-primary">5</span> Let's become partners
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    01:00 pm
                                </span>
                                <span class="label label-info">6</span> Looking for affiliate program
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    02:00 pm
                                </span>
                                <span class="label label-success">7</span> Looking for some customizations
                            </li>
                            <li class="list-group-item listitemactivty">
                                <span class="pull-right">
                                    03:00 pm
                                </span>
                                <span class="label label-default">8</span> Open another store in our area
                            </li>
                        </ul>
                        <br>
                        <br>
                            </div>

                        </div>
                    </div>
                     <!-- To DO LIST ENDS HERE -->
                        <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="specpanel stats">
                                <div class="panel-body h-200">
                                    <div class="stats-title pull-left">
                                        <li class="dropdown" style="list-style-type:none;">
                                        <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown" aria-expanded="true">
                                             <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu hdropdown notification">
                                            <li>
                                                <a>
                                                    Details.
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    Refresh.
                                                </a>
                                            </li>
                                            <li class="summary"><a href="javascript:;">See all support tickets</a></li>
                                        </ul>
                                    </li>
                                    </div>
                                    <div class="stats-icon pull-right">
                                        <i class="fa fa-support fa-3x"></i>
                                    </div>
                                    <div class="m-t-xl">
                                        <h3 class="no-margins font-extra-bold text-success" style="font-size:45px; color:#ffb606;">42</h3>
                                <span class="font-bold no-margins" style="text-transform:uppercase; font-size:25px;">
                                    Support Tickets
                                </span>
                                        <br/>
                                        <small>
                                            Number of total support tickets.
                                        </small>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    Today's Support Tickets 15
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                        <div class="specpanel stats">
                            <div class="panel-body h-200">
                                <div class="stats-title pull-left">
                                    <li class="dropdown" style="list-style-type:none;">
                                    <a class="dropdown-toggle" href="index.html#" data-toggle="dropdown" aria-expanded="true">
                                         <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu hdropdown notification">
                                        <li>
                                            <a>
                                                Details.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                Refresh.
                                            </a>
                                        </li>
                                        <li class="summary"><a href="javascript:;">See all proposals</a></li>
                                    </ul>
                                </li>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-coffee fa-3x"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h3 class="no-margins font-extra-bold text-success" style="font-size:45px; color:#777;">47</h3>
                            <span class="font-bold no-margins" style="text-transform:uppercase; font-size:25px;">
                                Total Proposals
                            </span>
                                    <br/>
                                    <small>
                                        Number of total proposals.
                                    </small>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Today's Proposals 9
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Other Box End Here -->
            </div>
     </div>


    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight right-sidebar">


                <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified" style="padding-top: 10px;">
                                <li class="active">
                                    <a href="index.html#asd-tab-1" data-toggle="tab">
                                        <i class="pli-speech-bubble-7"></i>Message
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#asd-tab-2" data-toggle="tab">
                                        <i class="pli-information icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#asd-tab-3" data-toggle="tab">
                                        <i class="pli-wrench icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="asd-tab-1">
                                    <p class="pad-hor mar-top text-semibold text-main">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a3.png" alt="Profile Picture">
                                                <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Stephen Tran</p>
                                                <small class="text-muted">Availabe</small>
                                            </div>
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a2.png" alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Brittany Meyer</p>
                                                <small class="text-muted">I think so</small>
                                            </div>
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a1.png" alt="Profile Picture">
                                                <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Jack George</p>
                                                <small class="text-muted">Last Seen 2 hours ago</small>
                                            </div>
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a4.png" alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Donald Brown</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet.</small>
                                            </div>
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a8.png" alt="Profile Picture">
                                                <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Betty Murphy</p>
                                                <small class="text-muted">Idle</small>
                                            </div>
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="images/a7.png" alt="Profile Picture">
                                                <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Samantha Reid</p>
                                                <small class="text-muted">Offline</small>
                                            </div>
                                        </a>
                                    </div>

                                    <hr>
                                    <p class="pad-hor text-semibold text-main">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="index.html#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="index.html#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-hor mar-top text-semibold text-main">News</p>

                                    <div class="pad-hor">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold" href="index.html#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small class="text-muted"><em>Last Update : May 16, 2017</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="text-semibold text-main">Billing &amp; reports</p>
                                        <p class="text-muted">Get <strong>$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2016.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="text-semibold text-main">Amount Due On</span>
                                        <p class="text-muted text-sm">May 10, 2017</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-hor text-semibold text-main">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="index.html#" class="list-group-item"><i class="pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="index.html#" class="list-group-item"><i class="pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="index.html#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="index.html#" class="list-group-item"><i class="pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 111-11111 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-semibold text-main mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-1" type="checkbox" checked>
                                                <label for="switch-1"></label>
                                            </div>
                                            <p class="mar-no">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-2" type="checkbox" checked>
                                                <label for="switch-2"></label>
                                            </div>
                                            <p class="mar-no">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-3" type="checkbox">
                                                <label for="switch-3"></label>
                                            </div>
                                            <p class="mar-no">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-semibold text-main mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-4" type="checkbox" checked>
                                                <label for="switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-5" type="checkbox" checked>
                                                <label for="switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="switch-6" type="checkbox" checked>
                                                <label for="switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-semibold text-main mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p>Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress m-t-xs full progress-small">
                                            <div style="width: 45%; line-height: 10px; font-size:10px;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class=" progress-bar progress-bar-success">45%
                                                <span class="sr-only">45% Complete (success)</span>
                                            </div>
                                        </div>
                                        </div>
                                        <small class="text-muted">45% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p>Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress m-t-xs full progress-small">
                                                <div style="width: 45%; line-height: 10px; font-size:10px;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class=" progress-bar progress-bar-danger">25%
                                                    <span class="sr-only">25% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

    </div>
</div>
    <!-- Footer-->
    <footer class="footer">
        <span class="pull-left">
        Company 2015-2020
        </span>
    </footer>

<!-- dependencies scripts -->
<script src="<?php echo base_url();?>themes/js/jquery.js"></script>
<script src="<?php echo base_url();?>themes/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>themes/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>themes/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>themes/js/metisMenu.js"></script>
<script src="<?php echo base_url();?>themes/js/icheck.js"></script>

<!-- Peity -->
 <script src="charts/js/plugins/peity/jquery.peity.js"></script>

<!-- Sparkline -->
<script src="charts/js/plugins/sparkline/jquery.sparkline.js"></script>

<!-- ChartJS -->
<script src="charts/js/plugins/chartJs/Chart.js"></script>


<!-- Sparkline data -->
<script src="charts/js/settings/sparkline-settings.js"></script>

<!-- Peity data -->
<script src="charts/js/settings/peity-settings.js"></script>


<!-- Spec scripts -->
<script src="<?php echo base_url();?>themes/js/spec.js"></script>

<!-- Custom Intializing Script -->

<script src="charts/js/settings/chartjs-settings.js"></script>



</body>
</html>