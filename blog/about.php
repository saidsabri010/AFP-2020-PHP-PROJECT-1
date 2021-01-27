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
 
     //database for login and register: please create one on xampp named : blog and a tables named : users
     //table should have id(int),username(varchar),email(varchar),password(varchar).

    //for the database please create one  with name : indexblog and with a table named : posts
  //the table should have id(int),title(varchar,255),body(text),author(varchar,255),created_at(timestap)
}
?>



<?php include('posts_server.php'); ?>
<html lang="en" dir="ltr">

  <head>
  
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link rel="icon" href="/blog/images/icon.png">
    
<style>
table {
   font-family: arial, sans-serif, bold;
  border: 1px solid purple;
   border-spacing: 5px;
}
th{
  border: 2px solid black;
  background-color:yellow;
  border-spacing: 5px;}
  
td{border: 1px solid red;
background-color:cyan;
  border-spacing: 5px;}
</style>
  </head>
<body>

  <div style="background-image: url('C:\xampp\htdocs\AFP-2020-PHP-PROJECT\images\download.jpg');">

  <table style="width:100%"> 

  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td><a href=https://www.facebook.com/wade.friedrichs.7>Wade</td>
    <td>Friendrich</a></td>
  </tr>
  <tr>
    <td><a href=https://www.facebook.com/mxolisi.silabela>Mxoliso</td>
    <td>Silabella</a></td>
  </tr>
  <tr>
    <td><a href=https://www.facebook.com/said.cn.92>Said</td>
    <td>Sabri</a></td>    
  </tr>
   <tr>
    <td><a href=https://www.facebook.com/shiyi.wan.52012>Shiyi</td>
    <td>Wan</a></td>    
  </tr>
   <tr>
    <td><a href=https://www.facebook.com/boldizsar.szenczi>Szenczi</td>
    <td>Boldizsar</a></td>
  </tr>
   <tr>
    <td><a href=https://www.facebook.com/rasul.kochkarov.378>Rasul</td>
    <td>Yuldashov</a></td>
  </tr>
</table>
</body>
</html>
