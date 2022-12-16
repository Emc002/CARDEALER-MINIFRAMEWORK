<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>
<div class="row">
  <?php
  foreach ($data as $td) {
  ?>
    <div class="col-4">
      <div class="boxCars">
        <img class="imgproduct" src="<?= \Staditek\App\Core\Router::url('assets/images/' . $td->product_img) ?>" />
        <h2><?php echo $td->brand_car ?> <?php echo $td->series_car ?></h2>
        <p>Perfection of car style</p>
        <p>Rp<?php echo $td->car_price ?></p>
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_cars ?>" class="btn btn-success">BUY</button>
      </div>
    </div>
    <div class="modal fade" id="staticBackdrop<?php echo $td->id_cars ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">BUY CARS</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="detailBuy">
              <h6>DETAIL:</h6>
              <?php if ($_SESSION['auth'] !== null) { ?>
                <p><b>User Id :</b> <?php echo $auth->id_user_account ?></p>
              <?php
              }
              ?>
              <p><b>Brand Cars :</b> <?php echo $td->brand_car ?></p>
              <p><b>Series Cars :</b> <?php echo $td->series_car ?></p>
              <p><b>Price Cars :</b> <?php echo $td->car_price ?></p>
            </div>
            <div class="heightForm">
              <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("saveBuyOnlinePayment") ?>">
                <div class="form-group f1">
                  <input type="hidden" class="form-control datepicker" value="<?php echo $auth->id_user_account ?>" id="id_user_account" name="id_user_account">
                </div>
                <div class="form-group f1">
                  <input type="hidden" class="form-control datepicker" value="<?php echo $td->id_cars ?>" id="id_cars" name="id_cars">
                </div>
                <?php if ($_SESSION['auth'] == null) { ?>

                  <div class="form-group f1">
                    <label for="guest_name">NAME</label>
                    <input type="text" class="form-control" id="guest_name" name="guest_name">
                  </div>
                  <div class="form-group f1">
                    <label for="guest_address">ADDRESS</label>
                    <textarea type="file" class="form-control" id="guest_address" name="guest_address"></textarea>
                  </div>
                  <div class="form-group f1">
                    <label for="guest_telp">PHONE</label>
                    <input type="text" class="form-control" id="guest_telp" name="guest_telp">
                  </div>
                <?php
                }
                ?>
                <div class="form-group f1">
                  <label for="number_bank_account">NUMBER BANK</label>
                  <input type="text" class="form-control" id="number_bank_account" name="number_bank_account">
                </div>
                <div class="form-group f1">
                  <label for="shipment_address">SHIPMENT ADDRESS</label>
                  <textarea type="file" class="form-control" id="shipment_address" name="shipment_address"></textarea>
                </div>
                <div class="form-group f1">
                  <label for="shipment_price">SHIPMENT PRICE</label>
                  <input type="text" class="form-control" id="shipment_price" name="shipment_price">
                </div>
                <div class="form-group f1">
                  <label for="total_payment">TOTAL PAYMENT</label>
                  <input type="number" class="form-control" id="total_payment" name="total_payment">
                </div>
                <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="payment_date" name="payment_date">
                <div class="form-group f1">
                  <a href="<?= \Staditek\App\Core\Router::url("cars") ?>" class="btn btn-warning">Back</a>
                  <input type="submit" class="btn btn-primary" value="submit">
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">DONE</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>