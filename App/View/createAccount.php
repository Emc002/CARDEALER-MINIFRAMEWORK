<div class="container">
    <div class="row cover0">
      <div class="col-lg-4">
        <h1>CREATE ACCOUNT</h1>
      </div>
    </div>
    <div class="row cover">
      <div class="bggambar">
        <img class="vector" src="<?=\Staditek\App\Core\Router::url("assets/images/carblack.png") ?>"/>
      </div>
      <div class="bggambar1">
        <img class="vector" src="<?=\Staditek\App\Core\Router::url("assets/images/carwhite.png") ?>"/>
      </div>
      <div class="col-lg-5 box_login">
      <?php
            	foreach($data as $f){
               ?>

<?php } ?>
        <form enctype="multipart/form-data" action="<?=\Staditek\App\Core\Router::url("saveCreateAccount") ?>" method="post">

          <div class="control">
            <input type="hidden" name="id_user_regis" value="<?php echo $f->id_user_regis ?>" placeholder="<?php echo $f->id_user_regis ?>">
            <div class="line">
            <i class='bx bx-envelope' ></i>
            <input type="text" name="email" placeholder="EMAIL">
            </div>
            <div class="line">
            <i class='bx bx-file' ></i>
            <input class="avafile" type="file" name="avatar" placeholder="AVATAR">
            </div>
            <div class="line">
            <i class='bx bx-lock-alt'></i>
              <input type="password" name="password" placeholder="PASSWORD">
            </div>
            <input type="submit" class="btn solid" name="submit" value = "Submit">
          </div>      
        </form>
      </div> 
    </div>
  </div>
 
</body>

</html>