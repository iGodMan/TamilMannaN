<?php
    $album_id = 2;
    if(isset($_GET['album_id']))
    {
        $album_id = $_GET['album_id'];
    }
    include('config.php');
    $sql = mysqli_query($conn, "SELECT * FROM movie_details md WHERE md.status = 'Active' AND md.id = '$album_id'");
    $row = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>Download <?php echo $row['movie_title']; ?> Songs in Tamil For Free | Tamilmannan</title>
    <meta name="description"
        content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="<?php echo $root_path;?>js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $root_path;?>css/css-app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="<?php echo $root_path;?>js/ie/html5shiv.js"></script> <script src="<?php echo $root_path;?>js/ie/respond.min.js"></script> <script src="<?php echo $root_path;?>js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <?php include('themepart/header.php'); ?>
        <section>
            <section class="hbox stretch">
                
                <?php include('themepart/sidebar.php');?>
                <section id="content">
                    <section class="vbox" id="bjax-el">
                        <section class="scrollable wrapper-lg">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="panel wrapper-lg">
                                        <div class="row">
                                            <div class="col-sm-5"> <img src="<?php echo $row['poster'];?>" class="img-full m-b" style="height: 300px;object-fit: cover;">
                                            </div>
                                            <div class="col-sm-7">
                                                <h2 class="m-t-none text-black"><?php echo $row['movie_title'];?></h2>
                                                <div class="clearfix m-b-lg"> <a href="#"
                                                        class="thumb-sm pull-left m-r"> <img src="https://cdn-images-3.listennotes.com/podcasts/deep-talks-tamil/karikala-cholan-history-in-7yHYwzx4XKc-i_5LoqU7Nzd.1400x1400.jpg"
                                                            class="img-circle"> </a>
                                                    <div class="clear"> <a href="#" class="text-info">TamilMannan</a>
                                                        <small class="block text-muted text-danger">Administrator</small> </div>
                                                </div>
                                                <!-- <div class="m-b-lg"> 
                                                    <a href="#" class="btn btn-info">Play</a> 
                                                </div> -->
                                                <p>Download <?php echo $row['movie_title'];?> HQ Songs Crystal Creal 128Kbps Song and 320Kbps, <?php echo $row['movie_title'];?> Play and free Download online, <?php echo $row['movie_title'];?> Movie Mp3 All Songs Download</p>
                                                <!--  <a href="#" class="btn btn-default">3 Comments</a> </div>
                                                <div> Tags: <a href="#" class="badge bg-light">Tamilmannan</a> <a href="#"
                                                        class="badge bg-light">Pashion</a> </div> -->
                                            </div>
                                        </div>
                                        <div class="m-t">
                                            
                                        </div>
                                        <h4 class="m-t-lg m-b">Play List</h4>
                                        <ul class="list-group list-group-lg">
                                            <?php
                                                $getsql = mysqli_query($conn, "SELECT * FROM song_list_new WHERE `movie_id` = '$album_id'");
                                                while($row1 = mysqli_fetch_assoc($getsql)) {
                                                $song_title = $row1['song_title'];
                                                $spaceRemvdTitle = str_replace(' ', '-', $song_title);
                                            ?>
                                            <li class="list-group-item">
                                                <div class="pull-right m-l"> 
                                                        <a href="<?php echo $row1['song_link'];?>" download="<?php echo $row1['song_title'];?> - [TamilMannan]" class="m-r-sm"><i class="icon-cloud-download"></i></a> 
                                                            <!-- <a href="#"><i class="icon-plus"></i></a>  -->
                                                        </div> 
                                                        <!-- <a data-activity="Play" data-audio="<?php echo $row1['song_link'];?>" href="#"
                                                    class="jp-play-me m-r-sm pull-left audioPlay"> <i
                                                        class="icon-control-play text"></i> <i
                                                        class="icon-control-pause text-active"></i> </a> -->
                                                <div class="clear text-ellipsis"> <span><?php echo $row1['song_title'];?> </span> <span class="text-muted"> -- <?php echo $row1['song_size'];?></span><small style="display:block;" class="d-block"><?php echo $row1['song_singer'];?></small> </div>
                                            </li>
                                            <?php
                                                $tags[] = '<a href="/tag/'.$spaceRemvdTitle.'-song-free-download" class="badge bg-light">'.$song_title.' free download</a> <a href="/tag/'.$spaceRemvdTitle.'-mp3-song-download" class="badge bg-light">'.$song_title.' Mp3 song download</a> <a href="/tag/'.$spaceRemvdTitle.'-full-song-download-from-'.$row1['movie_title'].'-movie" class="badge bg-light">'.$song_title.' full song download from '.$row1['movie_title'].' Movie</a>';
                                                }
                                            ?>
                                        </ul>
                                        <br />
                                        <br />
                                        
                                        <div> Tags:

                                        <?php
                                            foreach($tags as $tag)
                                            {
                                                echo $tag;
                                            }
                                        ?>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Suggestions</div>
                                        <div class="panel-body">
                                            <?php 
                                            $sql3 = mysqli_query($conn, "SELECT * FROM movie_details WHERE `status` = 'Active'  ORDER BY RAND() LIMIT 5");
                                                while($row2 = mysqli_fetch_assoc($sql3)) {
                                            ?>
                                            <article class="media"> <a href="#" class="pull-left thumb-md m-t-xs"> <img
                                                        src="<?php echo $row2['poster'];?>" style="height: 70px;width: 70px;object-fit: cover;"> </a>
                                                <div class="media-body"> <a href="#" class="font-semibold"><?php echo $row2['movie_title'];?></a>
                                                    <!-- <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes
                                                        ago</div> -->
                                                </div>
                                            </article>
                                            <?php
                                                }
                                            ?>
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
    <!-- <script src="<?php echo $root_path;?>js/app.v1.js"></script>
    <script src="<?php echo $root_path;?>js/app.plugin.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/jPlayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/jPlayer/add-on/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/jPlayer/demo.js"></script> -->
    <script src="<?php echo $root_path;?>js/3388-js-app.v1.js"></script>
    <script src="<?php echo $root_path;?>js/3691-js-app.plugin.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/jPlayer-jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/add-on-jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_path;?>js/jPlayer-demo.js"></script>
    <script>
        $(document).ready(fucntion(){
            $('.audioPlay').click(function(){
                var get_link = $(this).data('audio');   
                var activ = $(this).data('activity');
                console.log(get_link);
                
                if(activ == 'Play')
                {
                    console.log('test');
                    
                    $(this).attr('activity', 'pause');
                    get_link.play();
                }
                else
                {
                    $(this).attr('activity', 'Play');
                    get_link.pause();
                }
            });
        });
    </script>
</body>

</html>