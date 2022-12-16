<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE ONLINE PAYMENT</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addOnlinePaymentDisplay") ?>" type="button" class="btn btn-secondary">Add Online Payment</a>
      <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>BRAND CAR</th>
        <th>PRICE CAR</th>
        <th>NUMBER BANK</th>
        <th>SHIPMENT ADDRESS</th>
        <th>SHIPMENT PRICE</th>
        <th>TOTAL PAYMENT</th>
        <th>PAYMENT DATE/th>
        <th>CREATED AT</th>
        <th>UPADATED AT</th>
        <th>ACTION</th>
      </tr>
      <tbody>
        <?php
        $N = 1;
        foreach ($dataDasboard as $td) {
        ?>
          <tr>
            <td>
              <?php echo $N++ ?>
            </td>
            <td>
              <?php echo $td->full_name ?>
            </td>
            <td>
              <?php echo $td->brand_car  ?>
            </td>
            <td>
              <?php echo $td->car_price  ?>
            </td>
            <td>
              <?php echo $td->number_bank_account ?>
            </td>
            <td>
              <?php echo $td->shipment_address ?>
            </td>
            <td>
              <?php echo $td->shipment_price ?>
            </td>
            <td>
              <?php echo $td->total_payment ?>
            </td>
            <td>
              <?php echo $td->payment_date ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
              <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_payment ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteOnlinePayment/$td->id_payment") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_payment ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE ONLINE PAYMENT</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateOnlinePayment/$td->id_payment") ?>">
                      <div class="form-group f1">
                        <label for="id_user_account">ID USER ACCOUNT</label>
                        <select class="form-select" name="id_user_account">
                          <option value="none" selected>NONE</option>
                          <?php
                          foreach ($dataDasboard1['account'] as $s) {
                          ?>
                            <option value="<?php echo $s->id_user_account ?>"><?php echo $s->email ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group f1">
                        <label for="id_cars">ID CARS</label>
                        <select class="form-select" name="id_cars">
                          <option value="none" selected>NONE</option>
                          <?php
                          foreach ($dataDasboard1['cars'] as $f) {
                          ?>
                            <option value="<?php echo $f->id_cars ?>"><?php echo $f->brand_car ?>-<?php echo $f->series_car ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group f1">
                        <label for="number_bank_account">NUMBER BANK ACCOUNT</label>
                        <input type="TEXT" class="form-control" id="number_bank_account" value="<?php echo $td->number_bank_account ?>" name="number_bank_account">
                      </div>

                      <div class="form-group f1">
                        <label for="shipment_address">SHIPMENT ADDRESS</label>
                        <textarea type="text" class="form-control" id="shipment_address" name="shipment_address"><?php echo $td->shipment_address ?></textarea>
                      </div>

                      <div class="form-group f1">
                        <label for="shipment_price">SHIPMNET PRICE</label>
                        <input type="number" class="form-control" id="shipment_price" value="<?php echo $td->shipment_price ?>" name="shipment_price">
                      </div>

                      <div class="form-group f1">
                        <label for="total_payment">TOTAL PAYMENT</label>
                        <input type="number" class="form-control" id="total_payment" value="<?php echo $td->total_payment ?>" name="total_payment">
                      </div>

                      <div class="form-group f1">
                        <label for="payment_date">PAYMENT DATE</label>
                        <input type="date" class="form-control" id="payment_date" value="<?php echo $td->payment_date ?>" name="payment_date">
                      </div>

                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">

                        <a href="<?= \Staditek\App\Core\Router::url("onlinePayment") ?>" class="btn btn-warning">Back</a>
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
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>