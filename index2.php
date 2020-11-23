<!-- регистрация -->
<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style type="text/css">
		
	</style>
</head>
<?php
	$connect = mysqli_connect("127.0.0.1","root","","register");
      
 	$text_query = "SELECT * FROM users";
  	$query = mysqli_query($connect, $text_query);

?>
<body class="bg-light">
<div class="col-5 mx-auto mt-5">
	<div class="row">
		<!-- картинка -->
		
		<!-- форма -->
		<div class="col-6 pt-3">
			<div class="text-center px-5 pt-1 bg-white border mb-2 pt-4">
				<img src="images/0002.png" class="w-50">
				<h6>Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.</h6>
				<form method="POST" action='reginsert.php'  >
					<input type="email" name="log"  class="form-control my-2" placeholder="Эл. адрес">
					<input type="" name="nam"   class="form-control my-2" placeholder="Имя и фамилия">
					<input type="" name="nick"   class="form-control my-2" placeholder="Имя пользователя">
					<input name="pass"  type="password" minlength="6"  class="form-control my-2 " placeholder="Пароль">
					<div class="text-center">
						<p style="color: red;"><?php echo $_GET['warning'];?></p>
						<p style="color: red;"><?php echo $_GET['warningg'];?></p>
						<button class="btn btn-primary btn-sm px-5 my-1">Регистрация</button>
						<p class="text-secondary">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
					</div>
				</form>
			</div>
			<div class="bg-white border text-center pt-3 pb-1">
				<p>Есть аккаунт? <a href="auto.php">Вход</a></p>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>