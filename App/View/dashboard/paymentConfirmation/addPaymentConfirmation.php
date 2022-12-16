<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD PAYMENT CONFIRMATION</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddPaymentConfirmation") ?>">
        <div class="form-group f1">
          <label for="id_employees_account">ID EMPLOYEE ACCOUNT</label>
          <select class="form-select" name="id_employees_account">
            <option value="1" selected>NONE</option>
            <?php
            	foreach($dataDasboard as $s){
               ?>
            <option value="<?php echo $s->id_employe_account ?>">Nama :&nbsp;<?php echo $s->email ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group f1">
          <label for="id_online_payment">ID ONLINE PAYMENT</label>
          <select class="form-select" name="id_online_payment">
            <option value="1" selected>NONE</option>
            <?php
            	foreach($dataDasboard1 as $f){
               ?>
            <option value="<?php echo $f->id_payment ?>">Nama :&nbsp;<?php echo $f->full_name ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group f1">
          <label for="date_confirmation">DATE CONFIRMATION</label>
          <input type="date" class="form-control" id="date_confirmation" name="date_confirmation">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("paymentConfirmation") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>