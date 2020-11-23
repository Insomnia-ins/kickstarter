<?php
  $connect = mysqli_connect("127.0.0.1","root","","kickstarter");
      
  $text_query = "SELECT * FROM projects ";
  $query = mysqli_query($connect, $text_query);
  $text_zaprosa_vstavit = "INSERT INTO projects (user, title, img, description, goal, donated, place)
            VALUES('{$_GET["name"]}', '{$_GET["tit"]}', '{$_GET["img"]}', '{$_GET["des"]}', '{$_GET["gol"]}', '{$_GET["don"]}', '{$_GET["pl"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  header('Location: 2.php?user='.$_GET["regist"].'');


?>