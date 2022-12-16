<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD USER ACCOUNT</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" enctype="multipart/form-data" action="<?=\Staditek\App\Core\Router::url("saveAddUserAccount") ?>">
        <div class="form-group f1">
          <label for="id_user_regis">ID USER REGIS</label>
          <select class="form-select" name="id_user_regis">
            <option value="none" selected>NONE</option>
            <?php
            	foreach($dataDasboard as $f){
               ?>
            <option value="<?php echo $f->id_user_regis ?>"><?php echo $f->full_name ?>-<?php echo $f->address ?></option>
            <?php } ?>
          </select>
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

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("useraccount") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>