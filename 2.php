<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.box{
			opacity: 0;
			display: none;
			transition: 2s;
		}
		.bt{
			display: none;

		}]
		.btnn{
			display: block;
		}
	</style>
</head>
<body>

<?php
    $connect = mysqli_connect("127.0.0.1","root","","kickstarter");
  	$text_query = "SELECT * FROM projects WHERE user not like '{$_GET["user"]}'  ";
  	$text_query2 = "SELECT * FROM projects WHERE user = '{$_GET["user"]}' ";
  	$text_query3 = "SELECT * FROM register WHERE nickname = '{$_GET["user"]}' ";
 	$con = mysqli_query($connect, $text_query);
 	$con2 = mysqli_query($connect, $text_query2);
 	$con3 = mysqli_query($connect, $text_query3);
?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
	

		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h1> Hello <?php echo $_GET["user"] ?>!</h1>
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	
		

	<div class="row mt-5 ">
		<?php 
	 		
	 		for($i=0;$i<$con->num_rows;$i++){
	 		$result = $con->fetch_assoc(); 
	 		
	 	?>  
		<div class="col-4 border-right" style="height: 650px;">
			
			<div class="col-12 " style="height: 300px; <?php echo "background-image: url(".$result["img"].")"?>; background-size: 100% 100%">
				
			</div>
			<div class="col-12  mt-2" style="height: 50px;">
				<?php
					echo "<p class='row' style='font-size: 25px;' >".$result["title"]."</p>";
				?>
			</div>
			<div class="col-12  mt-4" style="height: 50px;">
				<?php
					echo "<p class='row' style='' >".$result["description"]."</p>";
				?>
			</div>
			<div class="col-12  mt-4 " style="height: 30px;">
				<div class="row">
				<?php
					echo "<p class='' style='' > by ".$result["user"]."</p>";
				?>
				<?php
					echo "<p class='ml-3' style='' > from ".$result["place"]."</p>";
				?>
				</div>
			</div>
			<div class="col-12  mt-2 " style="height: 60px;">
				
				<?php
					echo "<p class='p-0 row' style='' > goal ".$result["goal"]."$</p>";
				?>
				<?php
					echo "<p class='p-0 row text-success' style='' > donated ".$result["donated"]."$</p>";
				?>
				
			</div>
			<form class="mt-4" action="donate.php" method="GET">
				<button type="submit" class="btn btn-outline-success" >donate</button>
				<input type="hidden"  name="id" <?php echo "value='".$result["id"]."'"?>>
				<input type="" name="don">
			</form>
		
		<!--Вывести сами проекты здесь-->
		</div>
		<?php } ?>
	</div>
	<hr>
	<?php 
	 		
	 		for($i=0;$i<$con3->num_rows;$i++){
	 		$result3 = $con3->fetch_assoc(); 
	 		
	 	?>  
	<div class="mt-5">
		<h4>My projects</h4>
		<form method="GET" action="insert.php">
		
		<input type="hidden" <?php echo "value = '".$result3["nickname"]."'" ?> name="userr">
		<input type="hidden" <?php echo "value = '".$result3["place"]."'" ?> name="userrpla">
		<input type="hidden" <?php echo "value = '".$_GET["user"]."'" ?> name="regist">
		<button type="submit" class="btn btn-outline-dark mt-3 col-2"  style="height: 70%; ">Опубликовать</button>
		<?php } ?>
		</form>
		
	<div class="row mt-5 ">
		
		<?php 
	 		
	 		for($i=0;$i<$con2->num_rows;$i++){
	 		$result2 = $con2->fetch_assoc(); 
	 		
	 	?>  
	 	
		<div class="col-4 border-right" style="height: 700px;">
			
			<div class="col-12 " style="height: 300px; <?php echo "background-image: url(".$result2["img"].")"?>; background-size: 100% 100%">
			
			</div>
			<div class="col-12  mt-2" style="height: 50px;">
				<?php
					echo "<p class='row' style='font-size: 25px;' >".$result2["title"]."</p>";
				?>
			</div>
			<div class="col-12  mt-4" style="height: 50px;">
				<?php
					echo "<p class='row' style='' >".$result2["description"]."</p>";
				?>
			</div>
			<div class="col-12  mt-4 " style="height: 30px;">
				<div class="row">
				<?php
					echo "<p class='' style='' > by ".$result2["user"]."</p>";
				?>
				<?php
					echo "<p class='ml-3' style='' > from ".$result2["place"]."</p>";
				?>
				</div>
			</div>
			<div class="col-12  mt-2 " style="height: 60px;">
				
				<?php
					echo "<p class='p-0 row' style='' > goal ".$result2["goal"]."$</p>";
				?>
				<?php
					echo "<p class='p-0 row text-success' style='' > donated ".$result2["donated"]."$</p>";
				?>
				
			</div>
			<form class="mt-4" action="donate.php" method="GET">
				<button type="submit" class="btn btn-outline-success" >donate</button>
				<input type="hidden"  name="id" <?php echo "value='".$result2["id"]."'"?>>
				<input type="" name="don">
			</form>
			<div class="row mt-4">
			<form class="ml-3" method="GET" action="update.php">
				<button type="button" class="btn btn-outline-primary btnn"  >edit</button>
				<button type="button" class="btn btn-outline-primary bt"  >close editor</button>
				<div class="box">
					<input type="hidden"  name="id" <?php echo "value='".$result2["id"]."'"?>>
					<label for="exampleInputEmail1" required="required">title</label>
					<input style="width: 70%; height: 8%" type="zag" name="tit" class="form-control" required="required"  <?php echo "value='".$result2["title"]."'";?>>
					<label for="exampleInputEmail1" required="required">description</label>
					<input style="width: 70%; height: 8%" type="zag" name="des" class="form-control" required="required"  <?php echo "value='".$result2["description"]."'";?>>
					<label for="exampleInputEmail1" required="required">Goal</label>
					<input style="width: 70%; height: 8%" type="zag" name="gol" class="form-control" required="required"  <?php echo "value='".$result2["goal"]."'";?>>
					<label for="exampleInputEmail1" required="required">image</label>
					<input style="width: 70%; height: 8%" type="zag" name="img" class="form-control" required="required"  <?php echo "value='".$result2["img"]."'";?>>
					<button type="submit" class="btn btn-outline-primary btnnn" >edit</button>

				</div>
			</form>
			<form class="ml-3" method="GET" action="delete.php">
				<button type="" class="btn btn-outline-danger btn" onclick="return proverka();" >delete</button>
				<input type="hidden" name="id" <?php echo "value='".$result2["id"]."'"?>>
			</form>
			</div>
		
		<!--Вывести сами проекты здесь-->
		</div>
		<?php } ?>
	</div>
	</div>
</div>
</body>
<script type="text/javascript">
	let btn = document.querySelectorAll(".btn");
	let btnn = document.querySelectorAll(".btnn");
	let bt = document.querySelectorAll(".bt");
	let btnnn = document.querySelectorAll(".btnnn");
	let box = document.querySelectorAll(".box");
	let y = 0;
for(let i=0;i< box.length;i++){
	let pro = function(){

		box[i].style.opacity = "1";
	}
	let pro2 = function(){

		box[i].style.display = "none";
	}
	btnn[i].onclick = function(){
		
		if (y == 0) {
		box[i].style.display = "block";
		bt[i].style.display = "block"
		btnn[i].style.display = "none";
		setTimeout(pro,10);
		y[i] = 1;
		}
	      else{
		
		setTimeout(pro2,2000);
		y[i] = 0;
		}
			
	}
	bt[i].onclick = function() {
		box[i].style.opacity = "0";
		bt[i].style.display = "none"
		btnn[i].style.display = "block";
		setTimeout(pro2,2000);
		y[i] = 0;
	}
}

function proverka() {
    if (confirm("Вы точно желаете удалить этот проект?")) {
        return true;
    } else {
        return false;
    }
}
</script>
</html>