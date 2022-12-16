<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD MANAGER</label>
    <?php
    $arrival = new DateTime();
    $arrivalString = $arrival->format("Y-m-d H:i:s");
    ?>

    <div class="">
      <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("saveAddManager") ?>">
        <div class="form-group f1">
          <label for="username">USERNAME</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group f1">
          <label for="email">EMAIL</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group f1">
          <label for="avatar">AVATAR</label>
          <input type="file" class="form-control" id="avatar" name="avatar">
        </div>

        <div class="form-group f1">
          <label for="password">PASSWORD</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="created_at" name="created_at">
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("manager") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>