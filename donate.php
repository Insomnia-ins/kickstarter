<?php
	
	$connect = mysqli_connect("127.0.0.1","root","","kickstarter");
  	$text_query = "SELECT * FROM projects";
 	$con = mysqli_query($connect, $text_query);

 	$sql = "UPDATE projects SET donated = donated + '{$_GET["don"]}' WHERE id= '{$_GET["id"]}'";

	$query_insert = mysqli_query($connect, $sql);
	header('Location: 2.php');
	


?>