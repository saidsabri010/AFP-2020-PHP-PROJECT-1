<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "indexblog";
//connect to db
$db =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$query = 'SELECT * FROM posts ORDER BY created_at DESC';
$result = mysqli_query($db,$query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);



if(isset($_POST['submit'])) {
    
    $title =mysqli_real_escape_string($db,$_POST['title']);
    $body =mysqli_real_escape_string($db,$_POST['body']);
    $author =mysqli_real_escape_string($db,$_POST['author']);

    $query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";
    if(mysqli_query($db,$query)){
      header('location:index.php');
    } else {
        echo 'ERROR:'. mysqli_error($db); 
    }
}

?>