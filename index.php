<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8">
    <title>TamilMannaN | Download Unlimited Tamil Songs, Stories and Ringtones</title>
    <meta name="description"
        content="TamilMannan is Tamil songs downloading poral, Download Any song you in your mood from n our 30k songs bay">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/jPlayer-jplayer.flat.css" type="text/css">
    <link rel="stylesheet" href="css/css-app.v1.css" type="text/css">
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <?php include('themepart/header.php'); ?>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <?php include('themepart/sidebar.php');?>
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder-lg w-f-md" id="bjax-target"> <a href="#"
                                        class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i
                                            class="icon-refresh i-lg inline" id="refresh"></i></a>
                                    <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm"
                                            style="width:20px;height:20px"> <span
                                                class="bar1 a1 bg-primary lter"></span> <span
                                                class="bar2 a2 bg-info lt"></span> <span
                                                class="bar3 a3 bg-success"></span> <span
                                                class="bar4 a4 bg-warning dk"></span> <span
                                                class="bar5 a5 bg-danger dker"></span> </span></h2>
                                    <div class="row row-sm">

                                        <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM `movie_details` WHERE status = 'Active' ORDER BY `id` DESC LIMIT 12");
                                            while($get = mysqli_fetch_assoc($sql))
                                            {
                                                $movie_title = $get['movie_title'];
                                                $poster = $get['poster'];
                                                $removedhifan = str_replace(' ', '-', $movie_title);
                                                echo '
                                                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" bis_skin_checked="1" 
                                                    onclick="window.location.href='.$root_path.'album/'.$get['id'].'/'.$removedhifan.'">
                                                        <a href="'.$root_path.'album/'.$get['id'].'/'.$removedhifan.'">
                                                            <div class="item" bis_skin_checked="1">
                                                                <div class="pos-rlt" bis_skin_checked="1">
                                                                    <div class="top" bis_skin_checked="1"> <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
                                                                    </div>
                                                                    <div class="item-overlay opacity r r-2x bg-black" bis_skin_checked="1">
                                                                    
                                                                        <div class="center text-center m-t-n" bis_skin_checked="1"> <a href="'.$root_path.'album/'.$get['id'].'/'.$removedhifan.'"><i class="icon-control-play i-2x"></i></a> </div>
                                                                        <div class="bottom padder m-b-sm" bis_skin_checked="1"> <a href="#" class="pull-right"> <i class="fa fa-heart-o"></i> </a>
                                                                            <a href="'.$root_path.'album/'.$get['id'].'/'.$removedhifan.'"> <i class="fa fa-plus-circle"></i> </a> </div>
                                                                    </div> <a href="'.$root_path.'album/'.$get['id'].'/'.$removedhifan.'"><img src="'.$poster.'" alt="" class="r r-2x img-full" style="    height: 250px;object-fit: cover;"></a>
                                                                </div>
                                                                <div class="padder-v" bis_skin_checked="1"> <a href="'.$root_path.'album/'.$get['id'].'/'.$removedhifan.'" class="text-ellipsis">'.$get['movie_title'].'</a> <a href="#" class="text-ellipsis text-xs text-muted">sdss  </a> </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class="font-thin">New Songs</h3>
                                            <div class="row row-sm">
                                                <?php
                                                    $count = 1;
                                                    $getsng = mysqli_query($conn, "SELECT * FROM `song_list_new` WHERE status = 'Active' ORDER BY `id` ASC LIMIT 8");
                                                    while($sngfb = mysqli_fetch_assoc($getsng))
                                                    {
                                                       
                                                ?>
                                                <div class="col-xs-6 col-sm-3">
                                                    <div class="item">
                                                        <div class="pos-rlt">
                                                            <div class="item-overlay opacity r r-2x bg-black">
                                                                <div class="center text-center m-t-n"> <a href="#"><i
                                                                            class="fa fa-play-circle i-2x"></i></a>
                                                                </div>
                                                            </div> <a href="#"><img style="height:150px;object-fit:cover;" src="images/pattern/<?php echo $count++;?>.png" alt=""
                                                                    class="r r-2x img-full"></a>
                                                        </div>
                                                        <div class="padder-v"> <a href="#" class="text-ellipsis"><?php echo $sngfb['song_title']; ?>
                                                                </a> <a href="#"
                                                                class="text-ellipsis text-xs text-muted"><?php echo $sngfb['movie_title']; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="font-thin">Top Songs</h3>
                                            <div class="list-group bg-white list-group-lg no-bg auto"> <a href="#"
                                                    class="list-group-item clearfix"> <span
                                                        class="pull-right h2 text-muted m-l">1</span> <span
                                                        class="pull-left thumb-sm avatar m-r"> <img
                                                            src="images/images-a4.png" alt="..."> </span> <span
                                                        class="clear"> <span>Little Town</span> <small
                                                            class="text-muted clear text-ellipsis">by Chris Fox</small>
                                                    </span> </a> <a href="#" class="list-group-item clearfix"> <span
                                                        class="pull-right h2 text-muted m-l">2</span> <span
                                                        class="pull-left thumb-sm avatar m-r"> <img
                                                            src="images/images-a5.png" alt="..."> </span> <span
                                                        class="clear"> <span>Lementum ligula vitae</span> <small
                                                            class="text-muted clear text-ellipsis">by Amanda
                                                            Conlan</small> </span> </a> <a href="#"
                                                    class="list-group-item clearfix"> <span
                                                        class="pull-right h2 text-muted m-l">3</span> <span
                                                        class="pull-left thumb-sm avatar m-r"> <img
                                                            src="images/images-a6.png" alt="..."> </span> <span
                                                        class="clear"> <span>Aliquam sollicitudin venenatis</span>
                                                        <small class="text-muted clear text-ellipsis">by Dan
                                                            Doorack</small> </span> </a> <a href="#"
                                                    class="list-group-item clearfix"> <span
                                                        class="pull-right h2 text-muted m-l">4</span> <span
                                                        class="pull-left thumb-sm avatar m-r"> <img
                                                            src="images/images-a7.png" alt="..."> </span> <span
                                                        class="clear"> <span>Aliquam sollicitudin venenatis ipsum</span>
                                                        <small class="text-muted clear text-ellipsis">by Lauren
                                                            Taylor</small> </span> </a> <a href="#"
                                                    class="list-group-item clearfix"> <span
                                                        class="pull-right h2 text-muted m-l">5</span> <span
                                                        class="pull-left thumb-sm avatar m-r"> <img
                                                            src="images/images-a8.png" alt="..."> </span> <span
                                                        class="clear"> <span>Vestibulum ullamcorper</span> <small
                                                            class="text-muted clear text-ellipsis">by Dan
                                                            Doorack</small> </span> </a> </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row m-t-lg m-b-lg">
                                        <div class="col-sm-6">
                                            <div class="bg-primary wrapper-md r"> <a href="#"> <span
                                                        class="h4 m-b-xs block"><i class=" icon-user-follow i-lg"></i>
                                                        Login or Create account</span> <span class="text-muted">Save and
                                                        share your playlist with your friends when you log in or create
                                                        an account.</span> </a> </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="bg-black wrapper-md r"> <a href="#"> <span
                                                        class="h4 m-b-xs block"><i class="icon-cloud-download i-lg"></i>
                                                        Download our app</span> <span class="text-muted">Get the apps
                                                        for desktop and mobile to start listening music at anywhere and
                                                        anytime.</span> </a> </div>
                                        </div>
                                    </div> -->
                                </section>
                               
                            </section>
                        </section> <!-- side content -->
                        
                    </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open"
                        data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section> <!-- Bootstrap -->
    <!-- App -->
    <script src="js/3388-js-app.v1.js"></script>
    <script src="js/3691-js-app.plugin.js"></script>
    <script type="text/javascript" src="js/jPlayer-jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/add-on-jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/jPlayer-demo.js"></script>
</body>

</html>