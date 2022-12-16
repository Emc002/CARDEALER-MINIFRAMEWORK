<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD USER REGIS</label>
    <?php
    $arrival = new DateTime();
    $arrivalString = $arrival->format("Y-m-d H:i:s");
    ?>

    <div class="">
      <form method="post" action="<?= \Staditek\App\Core\Router::url("saveAddUserRegis") ?>">
        <div class="form-group f1">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" id="nik" name="nik">
        </div>

        <div class="form-group f1">
          <label for="full_name">NAME</label>
          <input type="text" class="form-control" id="full_name" name="full_name">
        </div>

        <div class="form-group f1">
          <label for="address">ADDRESS</label>
          <textarea type="text" class="form-control" id="address" name="address"></textarea>
        </div>

        <div class="form-group f1">
          <label for="phone">PHONE</label>
          <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group f1">
          <label for="gender">GENDER</label>
          <input type="number" class="form-control" id="gender" name="gender">
        </div>

        <div class="form-group f1">
          <label for="born_date">BORN DATE</label>
          <input type="date" class="form-control" id="born_date" name="born_date">
        </div>

        <div class="form-group f1">
          <label for="nationality">NATIONALITY</label>
          <input type="text" class="form-control" id="nationality" name="nationality">
        </div>

        <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="created_at" name="created_at">
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("userregis") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>