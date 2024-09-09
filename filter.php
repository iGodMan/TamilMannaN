<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if(isset($_GET['type']))
{
    $type = $_GET['type'];
    $value = $_GET['value'];

    if($type == 'top')
    {
        // code for top views and downloads

        $keyword = 'Popular';
        $query = "ORDER BY views DESC";
    }
    else if($type == 'year')
    {
        // code for year
        $keyword = 'Year : '.$value;
        $query = "AND `year` = ".$value;

    }
    else if($type == 'atoz')
    {
        // code for atoz if a sshow "A"
        $keyword = $value.' - Collections';
        $query = "AND `movie_title` LIKE '".$value."%'";


    }
    else if($type == 'query')
    {
        // code for search

        $keyword = 'Find Result : '.$value;
        $query = "AND `movie_title` LIKE '%".$value."%'";


    }
    else
    {
        // show recently added
        $keyword = 'Recently Added';
        $query = "ORDER BY id DESC";
    }

}
else
{
    $keyword = 'Recently Added';
    $query = "ORDER BY id DESC";

}

    include('config.php');
?>
<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8">
    <title><?php echo $keyword; ?> Download Unlimited Tamil Songs, Stories and Ringtones | TamilMannaN</title>
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
                                    <h2 class="font-thin m-b"><?php echo $keyword; ?> <span class="musicbar animate inline m-l-sm"
                                            style="width:20px;height:20px"> <span
                                                class="bar1 a1 bg-primary lter"></span> <span
                                                class="bar2 a2 bg-info lt"></span> <span
                                                class="bar3 a3 bg-success"></span> <span
                                                class="bar4 a4 bg-warning dk"></span> <span
                                                class="bar5 a5 bg-danger dker"></span> </span></h2>
                                    <div class="row row-sm">
                                    <div class="albet" style="margin-bottom:15px;">
                                    <?php 
                                        if($type == 'year')
                                        {
                                            // if($value == )
                                            // {
                                            //     $btnColor = 'btn-danger';
                                            // }
                                            // else
                                            // {
                                            //     $btnColor = 'btn-primary';
                                            // }
                                            echo '<a href="'.$root_path.'filter.php?type=year&value=2024" style="margin: 4px;"><button class="btn btn-primary text-white">2024</button></a>'; 
                                            echo '<a href="'.$root_path.'filter.php?type=year&value=2023" style="margin: 4px;"><button class="btn btn-primary text-white">2023</button></a>'; 
                                        }
                                        else
                                        {
                                            foreach(range('a','z') as $letter) 
                                            {
                                                if($letter == $value)
                                                {
                                                    $btnColor = 'btn-danger';
                                                }
                                                else
                                                {
                                                    $btnColor = 'btn-primary';
                                                }
    
                                                echo '<a href="'.$root_path.'filter.php?type=atoz&value='.$letter.'" style="margin: 4px;"><button class="btn '.$btnColor.' text-white">'.$letter.'</button></a>'; 
                                            }
                                        }
                                        
                                            
                                    ?>
                                    </div>
                                    <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM `movie_details` WHERE status = 'Active' $query LIMIT 12");
                                            while($get = mysqli_fetch_assoc($sql))
                                            {
                                                $movie_title = $get['movie_title'];
                                                $poster = $get['poster'];
                                                $removedhifan = str_replace(' ', '-', $movie_title);
                                                echo '
                                                    <div class="col-xs-6 mt-5 col-sm-4 col-md-3 col-lg-2" bis_skin_checked="1" 
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