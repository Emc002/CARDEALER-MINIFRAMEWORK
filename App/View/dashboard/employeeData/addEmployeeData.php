<div class="container-fluid psion">
  <div class="boxcreate col-12">
    <label class="headtitle">ADD EMPLOYEE DATA</label>
    <?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

    <div class="">
      <form method="post" action="<?=\Staditek\App\Core\Router::url("saveAddEmployeeData") ?>">
        <div class="form-group f1">
          <label for="employee_name">NAME</label>
          <input type="text" class="form-control" id="employee_name" name="employee_name">
        </div>

        <div class="form-group f1">
          <label for="employee_address">ADDRESS</label>
          <input type="text" class="form-control" id="employee_address" name="employee_address">
        </div>

        <div class="form-group f1">
          <label for="employee_telp">PHONE</label>
          <input type="text" class="form-control" id="employee_telp" name="employee_telp">
        </div>

        <div class="form-group f1">
          <label for="employee_as">WORK AS</label>
          <input type="text" class="form-control" id="employee_as" name="employee_as">
        </div>

          <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>"  id="created_at" name="created_at">      
        <div class="form-group f1">

          <a href="<?= \Staditek\App\Core\Router::url("employeeData") ?>" class="btn btn-warning">Back</a>
          <input type="submit" class="btn btn-primary" value="submit">
        </div>

      </form>

    </div>
  </div>
</div>