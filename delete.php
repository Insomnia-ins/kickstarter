<?php
  $connect = mysqli_connect("127.0.0.1","root","","kickstarter");
      
  $text_query = "DELETE FROM projects WHERE id = '{$_GET["id"]}' ";

  mysqli_query($connect, $text_query);
 

  header('Location: 2.php?user='.$_GET["regist"].'');
?>