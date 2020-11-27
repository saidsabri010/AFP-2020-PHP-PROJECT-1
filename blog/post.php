<?php include('delet_post_server.php'); ?>

<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post</title>
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1> <?php echo $post['title']; ?></h1>
    <div class="well"> 
         <small>Created on<?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> </small>
         <p><?php echo $post['body']; ?></p>
         <a class="btn btn default" href="index.php">Back</a>
         <hr>
         <form action="<?php echo $_SERVER['PHP_SELF'];?>"class="pull-right"method="post">
         <input type="hidden" name="delete_id" value="<?php echo $post['id']?>" >
         <input type="submit" name="delete" value="Delete" class="btn btn-danger">
         </form>
         <a href="editpost.php?id=<?php echo $post['id'];?>  " class="btn btn-default">Edit</a>
    </div>
</body>
</html>