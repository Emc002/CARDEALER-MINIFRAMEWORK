<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>


<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE SHIPMENT</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addShipmentDisplay") ?>" type="button" class="btn btn-secondary">Add Cars</a>
      <tr>
        <th>NO</th>
        <th>EMPLOYEE NAME</th>
        <th>WORK AS</th>
        <th>BUYER NAME</th>
        <th>BRAND CAR</th>
        <th>SERIES CAR</th>
        <th>SHIPMENT DATE</th>
        <th>ESTIMATED TIME</th>
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
              <?php echo $td->employee_name  ?>
            </td>
            <td>
              <?php echo $td->employee_as  ?>
            </td>
            <td>
              <?php echo $td->full_name  ?>
            </td>
            <td>
              <?php echo $td->brand_car  ?>
            </td>
            <td>
              <?php echo $td->series_car  ?>
            </td>
            <td>
              <?php echo $td->shipment_date ?>
            </td>
            <td>
              <?php echo $td->estimated_time ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
              <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_shipment ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteShipment/$td->id_shipment") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_shipment ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE EMPLOYEE ACCOUNT</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateShipment/$td->id_shipment") ?>">
                      <div class="form-group f1">
                        <label for="id_employe_account">ID EMPLOYEE ACCOUNT</label>
                        <select class="form-select" name="id_employe_account">
                          <option value="<?php echo $td->id_employe_account ?>" selected><?php echo $td->email ?></option>
                          <?php
                          foreach ($dataDasboard1['employeeAccount']  as $s) {
                          ?>
                            <option value="<?php echo $s->id_employe_account ?>">Email :&nbsp;<?php echo $s->email ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group f1">
                        <label for="id_payment_confirmation">ID PAYMENT CONFIRMATION</label>
                        <select class="form-select" name="id_payment_confirmation">
                          <option value="<?php echo $td->id_online_payment ?>" selected><?php echo $td->full_name ?></option>
                          <?php
                          foreach ($dataDasboard1['paymentConfirmation'] as $f) {
                          ?>
                            <option value="<?php echo $f->id_online_payment ?>">Name :&nbsp;<?php echo $f->full_name ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group f1">
                        <label for="shipment_date">SHIPMENT DATE</label>
                        <input type="datetime-local" class="form-control" id="shipment_date" value="<?php echo $td->shipment_date ?>" name="shipment_date">
                      </div>

                      <div class="form-group f1">
                        <label for="estimated_time">ESTIMATED TIME</label>
                        <input type="number" class="form-control" id="estimated_time" value="<?php echo $td->estimated_time ?>" name="estimated_time">
                      </div>

                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">

                        <a href="<?= \Staditek\App\Core\Router::url("shipment") ?>" class="btn btn-warning">Back</a>
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