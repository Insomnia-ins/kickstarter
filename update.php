<?php
  $connect = mysqli_connect("127.0.0.1","root","","kickstarter");
      
  $text_query = "SELECT * FROM projects ";
  $query = mysqli_query($connect, $text_query);
  $text_zaprosa_vstavit = "UPDATE projects SET title = '{$_GET["tit"]}', img = '{$_GET["img"]}', description = '{$_GET["des"]}', goal = '{$_GET["gol"]}' WHERE id= '{$_GET["id"]}'";
            
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  header('Location: 2.php?user='.$_GET["regist"].'');


?>