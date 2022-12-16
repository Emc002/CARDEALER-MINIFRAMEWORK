<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD GUEST BUYER</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddGuestBuyer") ?>">
        <div class="form-group f1">
          <label for="guest_name">NAME</label>
          <input type="text" class="form-control" id="guest_name" name="guest_name">
        </div>

        <div class="form-group f1">
          <label for="guest_address">ADDRESS</label>
          <input type="text" class="form-control" id="guest_address" name="guest_address">
        </div>

        <div class="form-group f1">
          <label for="guest_telp">PHONE</label>
          <input type="text" class="form-control" id="guest_telp" name="guest_telp">
        </div>

        <div class="form-group f1">
          <label for="guest_email">EMAIL</label>
          <input type="text" class="form-control" id="guest_email" name="guest_email">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("guestBuyer") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>