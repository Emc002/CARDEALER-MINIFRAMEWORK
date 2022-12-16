<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD ONLINE PAYMENT</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddOnlinePayment") ?>">
        <div class="form-group f1">
          <label for="id_user_account">ID USER ACCOUNT</label>
          <select class="form-select" name="id_user_account">
            <option value="none" selected>NONE</option>
            <?php
            	foreach($dataDasboard as $s){
               ?>
            <option value="<?php echo $s->id_user_account ?>">Nama :&nbsp;<?php echo $s->email ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group f1">
          <label for="id_cars">ID CARS</label>
          <select class="form-select" name="id_cars">
            <option value="none" selected>NONE</option>
            <?php
            	foreach($dataDasboard1 as $f){
               ?>
            <option value="<?php echo $f->id_cars ?>"><?php echo $f->brand_car ?>-<?php echo $f->series_car ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group f1">
          <label for="number_bank_account">NUMBER BANK</label>
          <input type="text" class="form-control" id="number_bank_account" name="number_bank_account">
        </div>

        <div class="form-group f1">
          <label for="shipment_address">SHIPMENT ADDRESS</label>
          <input type="text" class="form-control" id="shipment_address" name="shipment_address">
        </div>

        <div class="form-group f1">
          <label for="shipment_price">SHIPMENT PRICE</label>
          <input type="number" class="form-control" id="shipment_price" name="shipment_price">
        </div>

        <div class="form-group f1">
          <label for="total_payment">TOTAL PAYMENT</label>
          <input type="number" class="form-control" id="total_payment" name="total_payment">
        </div>

        <div class="form-group f1">
          <label for="payment_date">PAYMENT DATE</label>
          <input type="date" class="form-control" id="payment_date" name="payment_date">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("onlinePayment") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>