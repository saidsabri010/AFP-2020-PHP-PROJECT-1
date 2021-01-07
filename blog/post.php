<?php include('delet_post_server.php'); ?>

<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post</title>
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
<script     src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        $("#comment_sub").click(function(){
            if(!$('#comment_text').val())
              $('#warning').html("<div class='alert alert-warning' role='alert'>comment can not be empty.</div>");
            else
            {
                
                $('#warning').html("");
                var content = $('#comment_text').val();
                var mydate = new Date();

                //alert(content);
                $('#content').append(mydate.toLocaleDateString() + "：<br>" + content + "<hr>");

                
                $('#comment_text').val("");

                var article_id = $('#article_id').text();

                
                $.ajax({
                        type: "post",
                 url: "scripts/preserve_comment.php",
                 data: {article_id: article_id, content: content, time: mydate},
                 datatype: "json", 
                 
                 success: function(msg){
                    
                 },
                 ，
                 error: function(msg){
                     
                     alert(msg);
                 }
                 });
            } 
        });
    });
    </script>
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
    <p id="article_id" class="hidden"><?php echo $article_id ?></p>
    <div>
   <p class="small">comments</p>
   <textarea id="texthelpblock" class="form-control" rows="3">
   </textarea>
   <p class="text-right"><button type="button" class="btn btn-primary btn-xs">submit</button></p>
</div>
</body>
</html>