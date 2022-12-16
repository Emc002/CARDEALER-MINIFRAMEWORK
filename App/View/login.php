<div class="container">
    <div class="row cover0">
      <div class="col-lg-4">
        <h1>LOGIN PAGE</h1>
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
        <form action="<?=\Staditek\App\Core\Router::url("postLogin") ?>" method="post">
          <div class="control">
            <div class="line">
            <i class='bx bx-envelope' ></i>
            <input type="text" name="email" placeholder="EMAIL">
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
  <a class="loginM" href="<?=\Staditek\App\Core\Router::url("loginManager") ?>" >LOGIN ADMIN <i class='bx bx1 bx-user'></i></a>

  </div>
 
</body>

</html>