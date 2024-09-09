<?php

include('config.php');
$unaddedmv = [];
$sql = mysqli_query($conn, "SELECT movie_title,year FROM `song_list_new` WHERE `movie_id` = 0 GROUP BY `movie_title` ORDER BY `id` DESC");
while($get = mysqli_fetch_assoc($sql))
{
    $movie_title = $get['movie_title'];
    $movie_year = $get['year'];

    $clean_title = preg_replace("/\s*\(.*?\)/", "", $movie_title);

    // echo $clean_title; // Outputs: Jawan


    $url = "http://www.omdbapi.com/?s=".$clean_title."&apikey=b43d909e&y=".$movie_year."&type=movie";

    // Fetch the data from the API
    $response = file_get_contents($url);
    // echo $response;
    // Decode the JSON response
    $data = json_decode($response, true);

    // print_r($data['Search']);

    if(isset($data['Search']))
    {
        $year = $data['Search'][0]['Year'];
        $imdbID = $data['Search'][0]['imdbID'];
        $Poster = $data['Search'][0]['Poster'];
        // $OrgTitle = $data['Search'][0]['Title'];
        // echo $OrgTitle
        mysqli_query($conn, "INSERT INTO `movie_details`(`movie_title`, `poster`, `imdb_id`, `year`, `status`) VALUES ('$movie_title','$Poster','$imdbID','$year', 'Active')");
    
        $this_id = mysqli_insert_id($conn);
    
        mysqli_query($conn, "UPDATE `song_list_new` SET `movie_id`='$this_id' WHERE `movie_title` = '$movie_title' AND `year` = '$year'");

        $unaddedmv['added'][] = $movie_title;


    }
    else
    {
        $unaddedmv['unadded'][] = $movie_title;
    }

}
echo '<pre>';
print_r($unaddedmv);
echo '</pre>';
?>