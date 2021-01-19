<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "indexblog";
//connect to db
$db =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($db,$_POST['delete_id']);
    $query = "DELETE FROM posts WHERE id = {$delete_id} " ;
  
    if(mysqli_query($db,$query)){
      header('location:index.php');
    } else {
        echo 'ERROR:'. mysqli_error($db); 
    }
}
$id =mysqli_real_escape_string($db,$_GET['id']);
$query = "SELECT * FROM posts WHERE id = '{$id}'";
$result = mysqli_query($db,$query);
$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);

?>