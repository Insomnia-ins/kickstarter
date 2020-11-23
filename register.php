<?php
	$connect = mysqli_connect("127.0.0.1","root","","kickstarter");
      
	$text_query = "SELECT * FROM register WHERE login = '{$_POST["log"]}' AND password = '{$_POST["pass"]}' AND nickname = '{$_POST["nick"]}'";
 	$query = mysqli_query($connect, $text_query);
 	$result = $query->fetch_assoc();



if ($_POST["log"] != '' && $_POST["nam"] != '' && $_POST["nick"] != '' && $_POST["pass"] != '' ) {


	if ($_POST["log"] == $result['login'] || $_POST["nick"] == $result['nickname'] ) {
		header('Location: index.php?warningg=такой пользователь занят');
	}else{
  $text_zaprosa_vstavit = "INSERT INTO register (login, name, nickname, password)
            VALUES('{$_POST["log"]}', '{$_POST["nam"]}', '{$_POST["nick"]}', '{$_POST["pass"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
 	header('Location: 2.php?user='.$result["nickname"].'');
	}
}	else{

  header('Location: index.php?warning=Ошибка при вводе данных');
}
	
	
?>