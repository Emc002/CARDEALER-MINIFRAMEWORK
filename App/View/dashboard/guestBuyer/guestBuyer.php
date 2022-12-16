<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE GUEST BUYER</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addGuestBuyerDisplay") ?>" type="button" class="btn btn-secondary">Add Guest Buyer</a>
      <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
        <th>EMAIL</th>
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
              <?php echo $td->guest_name ?>
            </td>
            <td>
              <?php echo $td->guest_address ?>
            </td>
            <td>
              <?php echo $td->guest_telp ?>
            </td>
            <td>
              <?php echo $td->guest_email ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_guest ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteGuestBuyer/$td->id_guest") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_guest ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE GUEST BUYER</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateGuestBuyer/$td->id_guest") ?>">
                    <div class="form-group f1">
                        <label for="guest_name">NAME</label>
                        <input type="text" class="form-control" id="guest_name" value="<?php echo $td->guest_name ?>" name="guest_name">
                      </div>

                      <div class="form-group f1">
                        <label for="guest_address">ADDRESS</label>
                        <textarea type="text" class="form-control" id="guest_address" name="guest_address"><?php echo $td->guest_address ?></textarea>
                      </div>

                      <div class="form-group f1">
                        <label for="guest_telp">PHONE</label>
                        <input type="TEXT" class="form-control" id="guest_telp" value="<?php echo $td->guest_telp ?>" name="guest_telp">
                      </div>

                      <div class="form-group f1">
                        <label for="guest_email">EMAIL</label>
                        <input type="text" class="form-control" id="guest_email" value="<?php echo $td->guest_email ?>" name="guest_email">
                      </div>

                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">

                        <a href="<?= \Staditek\App\Core\Router::url("guestBuyer") ?>" class="btn btn-warning">Back</a>
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