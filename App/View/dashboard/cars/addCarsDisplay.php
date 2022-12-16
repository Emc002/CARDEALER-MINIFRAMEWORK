<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD CARS</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" enctype="multipart/form-data" action="<?=\Staditek\App\Core\Router::url("saveAddCars") ?>">
        <div class="form-group f1">
          <label for="brand_car">BRAND CAR</label>
          <input type="text" class="form-control" id="brand_car" name="brand_car">
        </div>

        <div class="form-group f1">
          <label for="product_img">PRODUCT IMAGES</label>
          <input type="file" class="form-control" id="product_img" name="product_img">
        </div>

        <div class="form-group f1">
          <label for="series_car">SERIES CAR</label>
          <input type="text" class="form-control" id="series_car" name="series_car">
        </div>

        <div class="form-group f1">
          <label for="car_price">PRICE CAR</label>
          <input type="number" class="form-control" id="car_price" name="car_price">
        </div>

        <div class="form-group f1">
          <label for="car_stock">STOCK CAR</label>
          <input type="number" class="form-control" id="car_stock" name="car_stock">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("cars") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>