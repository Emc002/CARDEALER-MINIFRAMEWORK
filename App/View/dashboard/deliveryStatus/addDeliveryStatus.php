<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD DELIEVERY STATUS</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddDeliveryStatus") ?>">
        <div class="form-group f1">
          <label for="id_shipment">ID SHIPMENT</label>
          <select class="form-select" name="id_shipment">
            <option value="none" selected>NONE</option>
            <?php 
            	foreach($dataDasboard as $s){
               ?>
            <option value="<?php echo $s->id_shipment ?>">No:&nbsp;<?php echo $s->id_shipment ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group f1">
          <label for="id_confirm_item_arrived">ID CONFIRM ITEM</label>
          <select class="form-select" name="id_confirm_item_arrived">
            <option value="none" selected>NONE</option>
            <?php 
            	foreach($dataDasboard1 as $s){
               ?>
            <option value="<?php echo $s->id_confirm_item ?>">No:&nbsp;<?php echo $s->id_confirm_item ?></option>
            <?php } ?>
          </select>
        </div>
          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("deliveryStatus") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>