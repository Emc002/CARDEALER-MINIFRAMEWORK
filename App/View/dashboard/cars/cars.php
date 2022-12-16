<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>
<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE CARS</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addCarsDisplay") ?>" type="button" class="btn btn-secondary">Add Cars</a>
      <tr>
        <th>NO</th>
        <th>BRAND NAME</th>
        <th>SERIES CAR</th>
        <th>PRICE CAR</th>
        <th>STOCK CAR</th>
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
              <?php echo $td->brand_car ?>
            </td>
            <td>
              <?php echo $td->series_car ?>
            </td>
            <td>
              <?php echo $td->car_price ?>
            </td>
            <td>
              <?php echo $td->car_stock ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
              <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_cars ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteCars/$td->id_cars") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_cars ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE CARS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateCars/$td->id_cars") ?>">
                      <div class="form-group f1">
                        <label for="brand_car">BRAND CAR</label>
                        <input type="text" class="form-control" id="brand_car" value="<?php echo $td->brand_car ?>" name="brand_car">
                      </div>

                      <div class="form-group f1">
                        <label for="product_img">PRODUCT IMAGES</label>
                        <input type="file" class="form-control" id="product_img" value="<?php echo $td->series_car ?>" name="product_img">
                      </div>

                      <div class="form-group f1">
                        <label for="series_car">SERIES CAR</label>
                        <input type="text" class="form-control" id="series_car" value="<?php echo $td->series_car ?>" name="series_car">
                      </div>

                      <div class="form-group f1">
                        <label for="car_price">PRICE CAR</label>
                        <input type="number" class="form-control" id="car_price" value="<?php echo $td->car_price ?>" name="car_price">
                      </div>

                      <div class="form-group f1">
                        <label for="car_stock">STOCK CAR</label>
                        <input type="number" class="form-control" id="car_stock" value="<?php echo $td->car_stock ?>" name="car_stock">
                      </div>

                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
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
  </div>
<?php
        }
?>
</tbody>
</table>
</div>