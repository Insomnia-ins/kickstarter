<?php

	$connect = mysqli_connect("127.0.0.1","root","","kickstarter");
      
	$text_query = "SELECT * FROM register WHERE login = '{$_POST["login"]}' AND password = '{$_POST["passw"]}'";
 	$query = mysqli_query($connect, $text_query);

 	$result = $query->fetch_assoc();

 	if ($query->num_rows > 0 ) {
 		header('Location: 2.php?user='.$result["nickname"].'');
 	}else{
 		header('Location: auto.php?warning=такого пользователя нет');
 	}

?>