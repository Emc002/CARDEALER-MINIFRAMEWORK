<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE STATUS DELIVERY</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addDeliveryStatusDisplay") ?>" type="button" class="btn btn-secondary">Add Status</a>
      <tr>
        <th>NO</th>
        <th>ID SHIPMENT</th>
        <th>ID CONFIRM ITEM</th>
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
              <?php echo $td->id_shipment  ?>
            </td>
            <td>
              <?php echo $td->id_confirm_item_arrived  ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_delivery ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteDeliveryStatus/$td->id_delivery ") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_delivery ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE DELIEVERY STATUS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateDeliveryStatus/$td->id_delivery") ?>">
                      <div class="form-group f1">
                        <label for="id_shipment">ID SHIPMENT</label>
                        <select class="form-select" name="id_shipment">
                          <option value="<?php echo $td->id_shipment ?>" selected><?php echo $td->id_shipment ?></option>
                          <?php
                          foreach ($dataDasboard1['shipment'] as $s) {
                          ?>
                            <option value="<?php echo $s->id_shipment ?>">No:&nbsp;<?php echo $s->id_shipment ?>&nbsp;&nbsp;&nbsp;<?php echo $s->shipment_date ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group f1">
                        <label for="id_confirm_item_arrived">ID CONFIRM ITEM</label>
                        <select class="form-select" name="id_confirm_item_arrived">
                          <option value="<?php echo $td->id_confirm_item ?>" selected><?php echo $td->id_confirm_item ?></option>
                          <?php
                          foreach ($dataDasboard1['confirmItem'] as $s) {
                          ?>
                            <option value="<?php echo $s->id_confirm_item ?>">No:&nbsp;<?php echo $s->id_confirm_item ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">

                        <a href="<?= \Staditek\App\Core\Router::url("deliveryStatus") ?>" class="btn btn-warning">Back</a>
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