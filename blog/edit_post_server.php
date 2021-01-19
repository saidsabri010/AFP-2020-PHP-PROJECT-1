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
    $update_id = mysqli_real_escape_string($db,$_POST['update_id']);
    $title =mysqli_real_escape_string($db,$_POST['title']);
    $body =mysqli_real_escape_string($db,$_POST['body']);
    $author =mysqli_real_escape_string($db,$_POST['author']);

    $query = "UPDATE posts SET 
    title = '$title',
    author = '$author',
    body = '$body'
    WHERE id = {$update_id}";
    if(mysqli_query($db,$query)){
      header('location:index.php');
    } else {
        echo 'ERROR:'. mysqli_error($db); 
    }
}
$db =  mysqli_connect('localhost', 'root', '', 'indexblog');
$id =mysqli_real_escape_string($db,$_GET['id']);
$query = "SELECT * FROM posts WHERE id = '{$id}'";
$result = mysqli_query($db,$query);
$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($db);
?>