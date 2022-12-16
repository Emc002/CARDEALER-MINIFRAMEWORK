<div class="container">
  <div class="row cover0">
    <div class="col-lg-4">
      <h1>REGISTER PAGE</h1>
    </div>
  </div>
  <div class="row cover">
    <div class="bggambar">
      <img class="vector" src="<?= \Staditek\App\Core\Router::url("assets/images/carblack.png") ?>" />
    </div>
    <div class="bggambar1">
      <img class="vector" src="<?= \Staditek\App\Core\Router::url("assets/images/carwhite.png") ?>" />
    </div>
    <div class="col-lg-10 box_login">

      <form action="<?= \Staditek\App\Core\Router::url("saveAddUserRegis") ?>" method="post">

        <div class="control1">
          <div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="text" name="nik" placeholder="NIK">
          </div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="text" name="full_name" placeholder="FULL NAME">
          </div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="text" name="address" placeholder="ADDRESS">
          </div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="text" name="phone" placeholder="PHONE">
          </div>
          </div>

          <div>
          <div class="line">
          <select class="form-select" name="gender" placeholder="GENDER">
            <option value="none" selected>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          </div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="date" name="born_date" placeholder="BORN DATE">
          </div>
          <div class="line">
            <i class="fas fa-user"></i>
            <input type="text" name="nationality" placeholder="NATIONALITY">
          </div>
          </div>

          <input type="submit" class="btn solid" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>

</body>

</html>