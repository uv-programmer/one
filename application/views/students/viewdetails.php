<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>One-Student List</title>

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
            ONE ADMIN
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
            <span class="text-primary">ONE ADMIN</span>
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
<div class="small-header">
    <div class="specpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="index-2.html">Dashboard</a></li>
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Forms elements </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Students Data
            </h2>
            <small>Examples of various form controls.</small>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Student List</h3>
                    <div class="pull-right"> <a href="<?php echo base_url();?>index.php/Student/viewList"><button class="btn btn-primary btn-circle" type="button"><i class="fa fa-home"></i></button></a></div>
                </div>
                <!--Block Styled Form -->
                <!--===================================================-->


               
                  <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                            <?php foreach($student as $stud):?>
                    <tr>
                        <td><?php echo $stud->first_name; ?></td>
                        <td><?php echo $stud->last_name; ?></td>
                       
                         <td><a href="<?php echo base_url();?>index.php/Student/viewMore/<?php echo $stud->id; ?>"><button type="button" class="btn w-xs btn-primary2"><i class="fa fa-table"> View</i></button></a></td>
                       
                        <td><a href="<?php echo base_url();?>index.php/Student/editData/<?php echo $stud->id; ?>"><button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></td>
                       
                        <td><a href="<?php echo base_url();?>index.php/Student/deleteData/<?php echo $stud->id; ?>"><button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i> <span class="bold">Delete</span></button></a></td>
                       
                       
                     
                    </tr>
                    <?php endforeach;?>  
                    </tbody>
                </table>
            </div>
                <!--===================================================-->
                <!--End Block Styled Form -->
            </div>
        </div>
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
<!-- Spec scripts -->
<script src="<?php echo base_url();?>themes/js/spec.js"></script>




</body>
</html>