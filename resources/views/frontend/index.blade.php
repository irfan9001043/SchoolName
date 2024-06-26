<!DOCTYPE html>
<html lang="en" class="app">
<!-- Mirrored from flatfull.com/themes/note/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 14:35:50 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" /> <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-dark dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png" class="m-r-sm">Notebook</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="fa fa-building-o"></i> <span class="font-bold">Activity</span> </a>
                    <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                        <div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                            <div class="clear"> <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span> <small class="block">Art Director</small> <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a> </div>
                        </div>
                        <div class="row m-l-none m-r-none m-b-n-xs text-center">
                            <div class="col-xs-4">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">245</span> <small class="text-muted">Followers</small> </div>
                            </div>
                            <div class="col-xs-4 dk">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">55</span> <small class="text-muted">Likes</small> </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">2,035</span> <small class="text-muted">Photos</small> </div>
                            </div>
                        </div>
                    </section>
                </li>
                <li>
                    <div class="m-t m-l"> <a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a> </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                <li class="hidden-xs"> <a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i class="fa fa-bell"></i> <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span> </a>
                    <section class="dropdown-menu aside-xl">
                        <section class="panel bg-white">
                            <header class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </header>
                            <div class="list-group list-group-alt animated fadeInRight"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a> </div>
                            <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
                        </section>
                    </section>
                </li>
                <li class="dropdown hidden-xs"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
                    <section class="dropdown-menu aside-xl animated fadeInUp">
                        <section class="panel bg-white">
                            <form role="search">
                                <div class="form-group wrapper m-b-none">
                                    <div class="input-group"> <input type="text" class="form-control" placeholder="Search"> <span class="input-group-btn"> <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button> </span> </div>
                                </div>
                            </form>
                        </section>
                    </section>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar.jpg"> </span> John.Smith <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>
                        <li> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch"> <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <header class="header bg-primary lter text-center clearfix">
                            <div class="btn-group"> <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                                <div class="btn-group hidden-nav-xs"> <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Switch Project <span class="caret"></span> </button>
                                    <ul class="dropdown-menu text-left">
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">Another Project</a></li>
                                        <li><a href="#">More Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333"> <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li class="active"> <a href="index.html" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Workset</span> </a>
                                            <ul class="nav lt">
                                                <li class="active"> <a href="index.html" class="active"> <i class="fa fa-angle-right"></i> <span>Dashboard v1</span> </a> </li>
                                                <li> <a href="dashboard.html"> <i class="fa fa-angle-right"></i> <span>Dashboard v2</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#layout"> <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Layouts</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="layout-c.html"> <i class="fa fa-angle-right"></i> <span>Color option</span> </a> </li>
                                                <li> <a href="layout-r.html"> <i class="fa fa-angle-right"></i> <span>Right nav</span> </a> </li>
                                                <li> <a href="layout-h.html"> <i class="fa fa-angle-right"></i> <span>Hbox Layout</span> </a> </li>
                                                <li> <a href="layout-boxed.html"> <i class="fa fa-angle-right"></i> <span>Boxed Layout</span> </a> </li>
                                                <li> <a href="layout-fluid.html"> <i class="fa fa-angle-right"></i> <span>Fluid Layout</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#uikit"> <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>UI kit</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="buttons.html"> <i class="fa fa-angle-right"></i> <span>Buttons</span> </a> </li>
                                                <li> <a href="icons.html"> <b class="badge bg-info pull-right">369</b> <i class="fa fa-angle-right"></i> <span>Icons</span> </a> </li>
                                                <li> <a href="grid.html"> <i class="fa fa-angle-right"></i> <span>Grid</span> </a> </li>
                                                <li> <a href="widgets.html"> <b class="badge pull-right">8</b> <i class="fa fa-angle-right"></i> <span>Widgets</span> </a> </li>
                                                <li> <a href="components.html"> <i class="fa fa-angle-right"></i> <span>Components</span> </a> </li>
                                                <li> <a href="list.html"> <i class="fa fa-angle-right"></i> <span>List group</span> </a> </li>
                                                <li> <a href="#table"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> <span>Table</span> </a>
                                                    <ul class="nav bg">
                                                        <li> <a href="table-static.html"> <i class="fa fa-angle-right"></i> <span>Table static</span> </a> </li>
                                                        <li> <a href="table-datatable.html"> <i class="fa fa-angle-right"></i> <span>Datatable</span> </a> </li>
                                                        <li> <a href="table-datagrid.html"> <i class="fa fa-angle-right"></i> <span>Datagrid</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="#form"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> <span>Form</span> </a>
                                                    <ul class="nav bg">
                                                        <li> <a href="form-elements.html"> <i class="fa fa-angle-right"></i> <span>Form elements</span> </a> </li>
                                                        <li> <a href="form-validation.html"> <i class="fa fa-angle-right"></i> <span>Form validation</span> </a> </li>
                                                        <li> <a href="form-wizard.html"> <i class="fa fa-angle-right"></i> <span>Form wizard</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="chart.html"> <i class="fa fa-angle-right"></i> <span>Chart</span> </a> </li>
                                                <li> <a href="fullcalendar.html"> <i class="fa fa-angle-right"></i> <span>Fullcalendar</span> </a> </li>
                                                <li> <a href="portlet.html"> <i class="fa fa-angle-right"></i> <span>Portlet</span> </a> </li>
                                                <li> <a href="timeline.html"> <i class="fa fa-angle-right"></i> <span>Timeline</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#pages"> <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Pages</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="gallery.html"> <i class="fa fa-angle-right"></i> <span>Gallery</span> </a> </li>
                                                <li> <a href="profile.html"> <i class="fa fa-angle-right"></i> <span>Profile</span> </a> </li>
                                                <li> <a href="invoice.html"> <i class="fa fa-angle-right"></i> <span>Invoice</span> </a> </li>
                                                <li> <a href="intro.html"> <i class="fa fa-angle-right"></i> <span>Intro</span> </a> </li>
                                                <li> <a href="master.html"> <i class="fa fa-angle-right"></i> <span>Master</span> </a> </li>
                                                <li> <a href="gmap.html"> <i class="fa fa-angle-right"></i> <span>Google Map</span> </a> </li>
                                                <li> <a href="jvectormap.html"> <i class="fa fa-angle-right"></i> <span>Vector Map</span> </a> </li>
                                                <li> <a href="signin.html"> <i class="fa fa-angle-right"></i> <span>Signin</span> </a> </li>
                                                <li> <a href="signup.html"> <i class="fa fa-angle-right"></i> <span>Signup</span> </a> </li>
                                                <li> <a href="404.html"> <i class="fa fa-angle-right"></i> <span>404</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="mail.html"> <b class="badge bg-danger pull-right">3</b> <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>Message</span> </a> </li>
                                        <li> <a href="notebook.html"> <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>Notes</span> </a> </li>
                                    </ul>
                                </nav> <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer lt hidden-xs b-t b-dark">
                            <div id="chat" class="dropup">
                                <section class="dropdown-menu on aside-md m-l-n">
                                    <section class="panel bg-white">
                                        <header class="panel-heading b-b b-light">Active chats</header>
                                        <div class="panel-body animated fadeInRight">
                                            <p class="text-sm">No active chats.</p>
                                            <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <div id="invite" class="dropup">
                                <section class="dropdown-menu on aside-md m-l-n">
                                    <section class="panel bg-white">
                                        <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
                                        <div class="panel-body animated fadeInRight">
                                            <p class="text-sm">No contacts in your lists.</p>
                                            <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                                        </div>
                                    </section>
                                </section>
                            </div> <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
                            <div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button> </div>
                        </footer>
                    </section>
                </aside> <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable padder">
                            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                <li class="active">Workset</li>
                            </ul>
                            <div class="m-b-md">
                                <h3 class="m-b-none">Workset</h3> <small>Welcome back, Noteman</small>
                            </div>
                            <section class="panel panel-default">
                                <div class="row m-l-none m-r-none bg-light lter">
                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-male fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong>52,000</strong></span> <small class="text-muted text-uc">New robots</small> </a> </div>
                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-bug fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#fff" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="2000" data-target="#bugs" data-update="3000"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="bugs">468</strong></span> <small class="text-muted text-uc">Bugs intruded</small> </a> </div>
                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="5000"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="firers">359</strong></span> <small class="text-muted text-uc">Extinguishers ready</small> </a> </div>
                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-clock-o fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong>31:50</strong></span> <small class="text-muted text-uc">Left to exit</small> </a> </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="col-md-8">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Statistics</header>
                                        <div class="panel-body">
                                            <div id="flot-1ine" style="height:210px"></div>
                                        </div>
                                        <footer class="panel-footer bg-white no-padder">
                                            <div class="row text-center no-gutter">
                                                <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">5,860</span> <small class="text-muted m-b block">Orders</small> </div>
                                                <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">10,450</span> <small class="text-muted m-b block">Sellings</small> </div>
                                                <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">21,230</span> <small class="text-muted m-b block">Items</small> </div>
                                                <div class="col-xs-3"> <span class="h4 font-bold m-t block">7,230</span> <small class="text-muted m-b block">Customers</small> </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                                <div class="col-md-4">
                                    <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Data graph</header>
                                        <div class="bg-light dk wrapper"> <span class="pull-right">Friday</span> <span class="h4">$540<br> <small class="text-muted">+1.05(2.15%)</small> </span>
                                            <div class="text-center m-b-n m-t-sm">
                                                <div class="sparkline" data-type="line" data-height="65" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" values="280,320,220,385,450,320,345,250,250,250,400,380"></div>
                                                <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="6" data-bar-color="#65bd77">10,9,11,10,11,10,12,10,9,10,11,9,8</div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div> <span class="text-muted">Total:</span> <span class="h3 block">$2500.00</span> </div>
                                            <div class="line pull-in"></div>
                                            <div class="row m-t-sm">
                                                <div class="col-xs-4"> <small class="text-muted block">Market</small> <span>$1500.00</span> </div>
                                                <div class="col-xs-4"> <small class="text-muted block">Referal</small> <span>$600.00</span> </div>
                                                <div class="col-xs-4"> <small class="text-muted block">Affiliate</small> <span>$400.00</span> </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="m-t-none">Todos</h4>
                                    <ul class="list-group gutter list-group-lg list-group-sp sortable">
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-1" data-toggle="class:text-lt text-success" class="active"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                                            <div class="clear text-success text-lt" id="todo-1"> Browser compatibility </div>
                                        </li>
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-2" data-toggle="class:text-lt text-danger"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-danger"></i> </a> </span>
                                            <div class="clear" id="todo-2"> Looking for more example templates </div>
                                        </li>
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-3" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                                            <div class="clear" id="todo-3"> Customizing components </div>
                                        </li>
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-4" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                                            <div class="clear" id="todo-4"> The fastest way to get started </div>
                                        </li>
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-5" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                                            <div class="clear" id="todo-5"> HTML5 doctype required </div>
                                        </li>
                                        <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-6" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                                            <div class="clear" id="todo-6"> LessCSS compiling </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <section class="panel b-light">
                                        <header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong></header>
                                        <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
                                        <div class="list-group"> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-danger">7:30</span> Meet a friend </a> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-success">9:30</span> Have a kick off meeting with .inc company </a> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-light">19:30</span> Milestone release </a> </div>
                                    </section>
                                </div>
                            </div>
                            <div>
                                <div class="btn-group m-b" data-toggle="buttons"> <label class="btn btn-sm btn-default active"> <input type="radio" name="options" id="option1"> Timeline </label> <label class="btn btn-sm btn-default"> <input type="radio" name="options" id="option2"> Activity </label> </div>
                                <section class="comment-list block">
                                    <article id="comment-id-1" class="comment-item"> <span class="fa-stack pull-left m-l-xs"> <i class="fa fa-circle text-info fa-stack-2x"></i> <i class="fa fa-play-circle text-white fa-stack-1x"></i> </span>
                                        <section class="comment-body m-b-lg">
                                            <header> <a href="#"><strong>John smith</strong></a> shared a <a href="#" class="text-info">video</a> to you <span class="text-muted text-xs"> 24 minutes ago </span> </header>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam.</div>
                                        </section>
                                    </article> <!-- .comment-reply -->
                                    <article id="comment-id-2" class="comment-reply">
                                        <article class="comment-item"> <a class="pull-left thumb-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a>
                                            <section class="comment-body m-b-lg">
                                                <header> <a href="#"><strong>John smith</strong></a> <span class="text-muted text-xs"> 26 minutes ago </span> </header>
                                                <div> Morbi id neque quam. Aliquam.</div>
                                            </section>
                                        </article>
                                        <article class="comment-item"> <a class="pull-left thumb-sm"> <img src="images/avatar.jpg" class="img-circle"> </a>
                                            <section class="comment-body m-b-lg">
                                                <header> <a href="#"><strong>Mike</strong></a> <span class="text-muted text-xs"> 26 minutes ago </span> </header>
                                                <div>Good idea.</div>
                                            </section>
                                        </article>
                                    </article> <!-- / .comment-reply -->
                                    <article id="comment-id-2" class="comment-item"> <span class="fa-stack pull-left m-l-xs"> <i class="fa fa-circle text-danger fa-stack-2x"></i> <i class="fa fa-file-o text-white fa-stack-1x"></i> </span>
                                        <section class="comment-body m-b-lg">
                                            <header> <a href="#"><strong>John Doe</strong></a> <span class="text-muted text-xs"> 1 hour ago </span> </header>
                                            <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit.</div>
                                        </section>
                                    </article>
                                    <article id="comment-id-2" class="comment-item"> <span class="fa-stack pull-left m-l-xs"> <i class="fa fa-circle text-success fa-stack-2x"></i> <i class="fa fa-check text-white fa-stack-1x"></i> </span>
                                        <section class="comment-body m-b-lg">
                                            <header> <a href="#"><strong>Jonathan</strong></a> completed a task <span class="text-muted text-xs"> 1 hour ago </span> </header>
                                            <div>Consecteter adipiscing elit.</div>
                                        </section>
                                    </article>
                                </section> <a href="#" class="btn btn-default btn-sm m-b"><i class="fa fa-plus icon-muted"></i> more</a>
                            </div>
                        </section>
                    </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
                </section>
                <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside>
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/charts/flot/jquery.flot.min.js"></script>
    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/charts/flot/jquery.flot.grow.js"></script>
    <script src="js/charts/flot/demo.js"></script>
    <script src="js/calendar/bootstrap_calendar.js"></script>
    <script src="js/calendar/demo.js"></script>
    <script src="js/sortable/jquery.sortable.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/note/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 14:37:18 GMT -->

</html>