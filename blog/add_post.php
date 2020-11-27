<?php 
session_start();
if(!isset($_SESSION['username'])){
  $_SESSION['msg'] ="You must log in first to view this page";
  header("location:login.php");
}
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location:login.php");

  //for the database please create one  with name : indexblog and with a table named : posts
  //the table should have id(int),title(varchar,255),body(text),author(varchar,255),created_at(timestap)
  


}

?>
<?php include('posts_server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
  </head>
  <body>
  <div class="main_container" id="home">
<div class="navbar">
<div class="logo">
<a href="#logo">Damn</a>
</div>
<div class="navbar_items"> 
<ul>
  <li> <a href="index.php">Home</a> </li>
  <li> <a href="#contact">Contact us</a> </li>
  <li> <a href="#servecies">Our Service</a> </li>
  <li> <a href="#ourteam">Our Team</a> </li>
  <li> <a href="#about">About</a> </li>
  <li><a href="index.php?logout='1'">Logout</a></li>
 
</ul>
</div>
</div>
  <div class="container">
  <h1>Add Post</h1>
  <form method ="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
  <label for="">title</label>
  <input type="text" name="title" class="form-control">
  </div>

  </div>
  <div class="form-group">
  <label for="">author</label>
  <input type="text" name="author" class="form-control">
  </div>

  </div>
  <div class="form-group">
  <label for="">body</label>
  <textarea type="text" name="body" class="form-control"></textarea>
  </div>
  <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
  </div>
  </body>
</html>