<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD SHIPMENT</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddShipment") ?>">
        <div class="form-group f1">
          <label for="id_employe_account">ID EMPLOYEE ACCOUNT</label>
          <select class="form-select" name="id_employe_account">
            <option value="" selected>NONE</option>
            <?php
            	foreach($dataDasboard as $s){
               ?>
            <option value="<?php echo $s->id_employe_account ?>">Nama :&nbsp;<?php echo $s->email ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group f1">
          <label for="id_payment_confirmation">ID PAYMENT CONFIRMATION</label>
          <select class="form-select" name="id_payment_confirmation">
            <option value="" selected>NONE</option>
            <?php
            	foreach($dataDasboard1 as $f){
               ?>
            <option value="<?php echo $f->id_payment_confirmation  ?>">Nama :&nbsp;<?php echo $f->full_name ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group f1">
          <label for="shipment_date">SHIPMENT DATE</label>
          <input type="date" class="form-control" id="shipment_date" name="shipment_date">
        </div>

        <div class="form-group f1">
          <label for="estimated_time">ESTIMATED TIME</label>
          <input type="number" class="form-control" id="estimated_time" name="estimated_time">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("shipment") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>