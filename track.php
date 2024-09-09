<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>Musik | Web Application</title>
    <meta name="description"
        content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="css/css-app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
            <div class="navbar-header aside bg-info dk"> <a class="btn btn-link visible-xs"
                    data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="icon-list"></i> </a> <a
                    href="index.html" class="navbar-brand text-lt"> <i class="icon-earphones"></i> <img
                        src="images/logo.png" alt="." class="hide"> <span class="hidden-nav-xs m-l-sm">Musik</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i
                        class="icon-settings"></i> </a> </div>
            <ul class="nav navbar-nav hidden-xs">
                <li> <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> <i
                            class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a> </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit"
                                class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
                        </span> <input type="text" class="form-control input-sm no-border rounded"
                            placeholder="Search songs, albums..."> </div>
                </div>
            </form>
            <div class="navbar-right ">
                <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                    <li class="hidden-xs"> <a href="#" class="dropdown-toggle lt" data-toggle="dropdown"> <i
                                class="icon-bell"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                        <section class="dropdown-menu aside-xl animated fadeInUp">
                            <section class="panel bg-white">
                                <div class="panel-heading b-light bg-light"> <strong>You have <span
                                            class="count">2</span> notifications</strong> </div>
                                <div class="list-group list-group-alt"> <a href="#" class="media list-group-item"> <span
                                            class="pull-left thumb-sm"> <img src="images/a0.png" alt="..."
                                                class="img-circle"> </span> <span class="media-body block m-b-none"> Use
                                            awesome animate.css<br> <small class="text-muted">10 minutes ago</small>
                                        </span> </a> <a href="#" class="media list-group-item"> <span
                                            class="media-body block m-b-none"> 1.0 initial released<br> <small
                                                class="text-muted">1 hour ago</small> </span> </a> </div>
                                <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i
                                            class="fa fa-cog"></i></a> <a href="#notes"
                                        data-toggle="class:show animated fadeInRight">See all the notifications</a>
                                </div>
                            </section>
                        </section>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown"> <span
                                class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="images/a0.png"
                                    alt="..."> </span> John.Smith <b class="caret"></b> </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                            <li> <a href="profile.html">Profile</a> </li>
                            <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                            <li> <a href="docs.html">Help</a> </li>
                            <li class="divider"></li>
                            <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black dk aside hidden-print" id="nav">
                    <section class="vbox">
                        <section class="w-f-md scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                                data-size="10px" data-railOpacity="0.2">
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav bg clearfix">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Discover </li>
                                        <li> <a href="index.html"> <i class="icon-disc icon text-success"></i> <span
                                                    class="font-bold">What's new</span> </a> </li>
                                        <li> <a href="genres.html"> <i class="icon-music-tone-alt icon text-info"></i>
                                                <span class="font-bold">Genres</span> </a> </li>
                                        <li> <a href="events.html"> <i class="icon-drawer icon text-primary-lter"></i>
                                                <b class="badge bg-primary pull-right">6</b> <span
                                                    class="font-bold">Events</span> </a> </li>
                                        <li> <a href="listen.html"> <i class="icon-list icon text-info-dker"></i> <span
                                                    class="font-bold">Listen</span> </a> </li>
                                        <li> <a href="video.html" data-target="#content" data-el="#bjax-el"
                                                data-replace="true"> <i
                                                    class="icon-social-youtube icon text-primary"></i> <span
                                                    class="font-bold">Video</span> </a> </li>
                                        <li class="m-b hidden-nav-xs"></li>
                                    </ul>
                                    <ul class="nav" data-ride="collapse">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Interface </li>
                                        <li> <a href="#" class="auto"> <span class="pull-right text-muted"> <i
                                                        class="fa fa-angle-left text"></i> <i
                                                        class="fa fa-angle-down text-active"></i> </span> <i
                                                    class="icon-screen-desktop icon"> </i> <span>Layouts</span> </a>
                                            <ul class="nav dk text-sm">
                                                <li> <a href="layout-color.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Color
                                                            option</span> </a> </li>
                                                <li> <a href="layout-boxed.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Boxed
                                                            layout</span> </a> </li>
                                                <li> <a href="layout-fluid.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Fluid
                                                            layout</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#" class="auto"> <span class="pull-right text-muted"> <i
                                                        class="fa fa-angle-left text"></i> <i
                                                        class="fa fa-angle-down text-active"></i> </span> <i
                                                    class="icon-chemistry icon"> </i> <span>UI Kit</span> </a>
                                            <ul class="nav dk text-sm">
                                                <li> <a href="buttons.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Buttons</span>
                                                    </a> </li>
                                                <li> <a href="icons.html" class="auto"> <b
                                                            class="badge bg-info pull-right">369</b> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Icons</span>
                                                    </a> </li>
                                                <li> <a href="grid.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Grid</span>
                                                    </a> </li>
                                                <li> <a href="widgets.html" class="auto"> <b
                                                            class="badge bg-dark pull-right">8</b> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Widgets</span>
                                                    </a> </li>
                                                <li> <a href="components.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i>
                                                        <span>Components</span> </a> </li>
                                                <li> <a href="list.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>List
                                                            group</span> </a> </li>
                                                <li> <a href="#table" class="auto"> <span class="pull-right text-muted">
                                                            <i class="fa fa-angle-left text"></i> <i
                                                                class="fa fa-angle-down text-active"></i> </span> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Table</span>
                                                    </a>
                                                    <ul class="nav dker">
                                                        <li> <a href="table-static.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Table
                                                                    static</span> </a> </li>
                                                        <li> <a href="table-datatable.html"> <i
                                                                    class="fa fa-angle-right"></i>
                                                                <span>Datatable</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="#form" class="auto"> <span class="pull-right text-muted">
                                                            <i class="fa fa-angle-left text"></i> <i
                                                                class="fa fa-angle-down text-active"></i> </span> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Form</span>
                                                    </a>
                                                    <ul class="nav dker">
                                                        <li> <a href="form-elements.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    elements</span> </a> </li>
                                                        <li> <a href="form-validation.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    validation</span> </a> </li>
                                                        <li> <a href="form-wizard.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    wizard</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="chart.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Chart</span>
                                                    </a> </li>
                                                <li> <a href="portlet.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Portlet</span>
                                                    </a> </li>
                                                <li> <a href="timeline.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Timeline</span>
                                                    </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#" class="auto"> <span class="pull-right text-muted"> <i
                                                        class="fa fa-angle-left text"></i> <i
                                                        class="fa fa-angle-down text-active"></i> </span> <i
                                                    class="icon-grid icon"> </i> <span>Pages</span> </a>
                                            <ul class="nav dk text-sm">
                                                <li> <a href="profile.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Profile</span>
                                                    </a> </li>
                                                <li> <a href="blog.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Blog</span>
                                                    </a> </li>
                                                <li> <a href="invoice.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Invoice</span>
                                                    </a> </li>
                                                <li> <a href="gmap.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Google
                                                            Map</span> </a> </li>
                                                <li> <a href="jvectormap.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Vector
                                                            Map</span> </a> </li>
                                                <li> <a href="signin.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Signin</span>
                                                    </a> </li>
                                                <li> <a href="signup.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>Signup</span>
                                                    </a> </li>
                                                <li> <a href="404.html" class="auto"> <i
                                                            class="fa fa-angle-right text-xs"></i> <span>404</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav text-sm">
                                        <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <span
                                                class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span>
                                            Playlist </li>
                                        <li> <a href="#"> <i class="icon-music-tone icon"></i> <span>Hip-Pop</span> </a>
                                        </li>
                                        <li> <a href="#"> <i class="icon-playlist icon text-success-lter"></i> <b
                                                    class="badge bg-success dker pull-right">9</b> <span>Jazz</span>
                                            </a> </li>
                                    </ul>
                                </nav> <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <div class="bg hidden-xs ">
                                <div class="dropdown dropup wrapper-sm clearfix"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown"> <span class="thumb-sm avatar pull-left m-l-xs"> <img
                                                src="images/a3.png" class="dker" alt="..."> <i class="on b-black"></i>
                                        </span> <span class="hidden-nav-xs clear"> <span class="block m-l"> <strong
                                                    class="font-bold text-lt">John.Smith</strong> <b class="caret"></b>
                                            </span> <span class="text-muted text-xs block m-l">Art Director</span>
                                        </span> </a>
                                    <ul class="dropdown-menu animated fadeInRight aside text-left">
                                        <li> <span class="arrow bottom hidden-nav-xs"></span> <a href="#">Settings</a>
                                        </li>
                                        <li> <a href="profile.html">Profile</a> </li>
                                        <li> <a href="#"> <span class="badge bg-danger pull-right">3</span>
                                                Notifications </a> </li>
                                        <li> <a href="docs.html">Help</a> </li>
                                        <li class="divider"></li>
                                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </footer>
                    </section>
                </aside> <!-- /.aside -->
                <section id="content">
                    <section class="vbox" id="bjax-el">
                        <section class="scrollable wrapper-lg">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="panel wrapper-lg">
                                        <div class="row">
                                            <div class="col-sm-5"> <img src="images/m10.jpg" class="img-full m-b">
                                            </div>
                                            <div class="col-sm-7">
                                                <h2 class="m-t-none text-black">Tincidunt ut laoreet</h2>
                                                <div class="clearfix m-b-lg"> <a href="#"
                                                        class="thumb-sm pull-left m-r"> <img src="images/a0.png"
                                                            class="img-circle"> </a>
                                                    <div class="clear"> <a href="#" class="text-info">Mike Mcalidek</a>
                                                        <small class="block text-muted">2,415 followers / 225
                                                            following</small> </div>
                                                </div>
                                                <div class="m-b-lg"> <a href="#" class="btn btn-info">Play</a> <a
                                                        href="#" class="btn btn-default">3 Comments</a> </div>
                                                <div> Tags: <a href="#" class="badge bg-light">Musik</a> <a href="#"
                                                        class="badge bg-light">Pashion</a> </div>
                                            </div>
                                        </div>
                                        <div class="m-t">
                                            <p>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy
                                                nibh euismod tincidunt ut laoreet. John smith Admin</p>
                                        </div>
                                        <h4 class="m-t-lg m-b">Play List</h4>
                                        <ul class="list-group list-group-lg">
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"
                                                        class="m-r-sm"><i class="icon-plus"></i></a> <a href="#"><i
                                                            class="icon-close"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>E.T.M</span> <span
                                                        class="text-muted"> -- 04:35</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Vestibulum id ligula
                                                        porta</span> <span class="text-muted"> -- 04:15</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Praesent commodo cursus
                                                        magna</span> <span class="text-muted"> -- 02:25</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Curabitur blandit tempus</span>
                                                    <span class="text-muted"> -- 05:00</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Faucibus dolor auctor</span>
                                                    <span class="text-muted"> -- 03:50</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Get lacinia odio sem nec elit
                                                        cibus dolor auctor sed odio dui mollis ornare</span> <span
                                                        class="text-muted"> -- 04:05</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Faucibus dolor auctor</span>
                                                    <span class="text-muted"> -- 02:55</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Donec sed odio dui</span> <span
                                                        class="text-muted"> -- 04:35</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Urna mollis ornare vel eu
                                                        leo</span> <span class="text-muted"> -- 05:10</span> </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> <a href="#" class="m-r-sm"><i
                                                            class="icon-cloud-download"></i></a> <a href="#"><i
                                                            class="icon-plus"></i></a> </div> <a href="#"
                                                    class="jp-play-me m-r-sm pull-left"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a>
                                                <div class="clear text-ellipsis"> <span>Vivamus sagittis lacus vel
                                                        augue</span> <span class="text-muted"> -- 02:35</span> </div>
                                            </li>
                                        </ul>
                                        <h4 class="m-t-lg m-b">3 Comments</h4>
                                        <section class="comment-list block">
                                            <article id="comment-id-1" class="comment-item"> <a
                                                    class="pull-left thumb-sm"> <img src="images/a0.png"
                                                        class="img-circle"> </a>
                                                <section class="comment-body m-b">
                                                    <header> <a href="#"><strong>John smith</strong></a> <label
                                                            class="label bg-info m-l-xs">Editor</label> <span
                                                            class="text-muted text-xs block m-t-xs"> 24 minutes ago
                                                        </span> </header>
                                                    <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Morbi id neque quam. Aliquam sollicitudin
                                                        venenatis ipsum ac feugiat. Vestibulum.</div>
                                                </section>
                                            </article> <!-- .comment-reply -->
                                            <article id="comment-id-2" class="comment-item comment-reply"> <a
                                                    class="pull-left thumb-sm"> <img src="images/a1.png"
                                                        class="img-circle"> </a>
                                                <section class="comment-body m-b">
                                                    <header> <a href="#"><strong>John smith</strong></a> <label
                                                            class="label bg-dark m-l-xs">Admin</label> <span
                                                            class="text-muted text-xs block m-t-xs"> 26 minutes ago
                                                        </span> </header>
                                                    <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter
                                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                        laoreet.</div>
                                                </section>
                                            </article> <!-- / .comment-reply -->
                                            <article id="comment-id-2" class="comment-item"> <a
                                                    class="pull-left thumb-sm"> <img src="images/a2.png"
                                                        class="img-circle"> </a>
                                                <section class="comment-body m-b">
                                                    <header> <a href="#"><strong>John smith</strong></a> <label
                                                            class="label bg-dark m-l-xs">Admin</label> <span
                                                            class="text-muted text-xs block m-t-xs"> 26 minutes ago
                                                        </span> </header>
                                                    <blockquote class="m-t">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Integer posuere erat a ante.</p> <small>Someone famous in
                                                            <cite title="Source Title">Source Title</cite></small>
                                                    </blockquote>
                                                    <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter
                                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                        laoreet.</div>
                                                </section>
                                            </article>
                                        </section>
                                        <h4 class="m-t-lg m-b">Leave a comment</h4>
                                        <form>
                                            <div class="form-group pull-in clearfix">
                                                <div class="col-sm-6"> <label>Your name</label> <input type="text"
                                                        class="form-control" placeholder="Name"> </div>
                                                <div class="col-sm-6"> <label>Email</label> <input type="email"
                                                        class="form-control" placeholder="Enter email"> </div>
                                            </div>
                                            <div class="form-group"> <label>Comment</label> <textarea
                                                    class="form-control" rows="5"
                                                    placeholder="Type your comment"></textarea> </div>
                                            <div class="form-group"> <button type="submit"
                                                    class="btn btn-success">Submit comment</button> </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Suggestions</div>
                                        <div class="panel-body">
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="images/m18.jpg"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold">Bootstrap 3:
                                                        What you need to know</a>
                                                    <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes
                                                        ago</div>
                                                </div>
                                            </article>
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="images/m19.jpg"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold">Lorem ipsum
                                                        dolor sit amet it.</a>
                                                    <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="images/m20.jpg"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold">Sed diam
                                                        nonummy tincidunt ut laoreet</a>
                                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="images/m21.jpg"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold">Lonummy nibh
                                                        euismod sed laoreet</a>
                                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="images/m22.jpg"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold">Mibh euismod
                                                        tincidunt ut laoreet</a>
                                                    <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open"
                        data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section> <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
    <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>

</html>