<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "blogcomment";
$db =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$content =mysqli_real_escape_string($db,$_POST['content']);
$article_id =mysqli_real_escape_string($db,$_POST['article_id']);
$user_id =mysqli_real_escape_string($db,$_POST['user_id']);
$create_time =mysqli_real_escape_string($db,$_POST['create_time']);




$insert_sql = sprintf("INSERT INTO comments ".
                      "(article_id, user_id," .
                      " content, create_time) ".
                      "VALUES ('%s','%s', '%s', '%s');",
                      $article_id,
                      $user_id,
                      $content,
                      $create_time
);


mysqli_query($db,"set character set 'utf8'"); 
mysqli_query($db,"set names 'utf8'"); 


mysqli_query($db,$insert_sql);
$comment_res = mysqli_query($db,"SELECT * FROM comment WHERE article_id = '$article_id'  ORDER BY create_time DESC");

?>
