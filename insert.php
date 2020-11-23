<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div style="background-color: ;">
<div  style="background-color: ; width: 50%; margin-left: auto;margin-right: auto; height: 60%; display: flex;" class="shadow p-3 mb-5 bg-white rounded ">
<form style="width: 50%; margin-left: 10%; padding-top: 10%" class="" action="insertBD.php" method="GET">

          							<div class="form-group">
             
            							<label for="exampleInputName">Title</label>
            							<input style="width: 70%; height: 8%" type="zag" name="tit" class="form-control" required="required" placeholder="Напишите название"  >

          							</div>

           							<div class="form-group">
            							<label for="exampleInputEmail1" required="required">Description</label>
            							<input  style="width: 70%; height: 8%" type="op" name="des" class="form-control" required="required" placeholder="Напишите описание " style="height: 70px;">
          							</div>
           							
          							
          								<div class="form-group mt-3">
           									<label class="mr-2">Image</label>
            								<input type="file" name="img" lang="ENG" required="required">
          								</div>

                          <div class="form-group">
                          <label for="exampleInputEmail1" required="required">Goal</label>
                          <input type="hidden" name="don" value="0">
                          <input type="" name="name" <?php echo "value='".$_GET["userr"]."'"?> >
                          <input type="hidden" name="pl" <?php echo "value='".$_GET["userrpla"]."'"?>>
                          <input type="hidden" name="regist" <?php echo "value='".$_GET["regist"]."'"?>>
                          <input  style="width: 70%; height: 8%" type="op" name="gol" required="required" class="form-control" placeholder="Напишите финальную сумму сборов" style="height: 70px;">
                        </div>
         							

          				
                  <button type="submit" class="btn btn-outline-dark mt-3">Опубликовать</button>

       			</form>

            <img src="1213.png" style="height: 40%; width: 30%; margin-top: auto; margin-bottom: auto;">
            </div>
</div>