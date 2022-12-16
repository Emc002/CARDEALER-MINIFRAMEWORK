<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE EMPLOYEE DATA</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addEmployeeDataDisplay") ?>" type="button" class="btn btn-secondary">Add Employees</a>
      <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
        <th>WORK AS</th>
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
              <?php echo $td->employee_name ?>
            </td>
            <td>
              <?php echo $td->employee_address ?>
            </td>
            <td>
              <?php echo $td->employee_telp ?>
            </td>
            <td>
              <?php echo $td->employee_as ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_employee ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteEmployeeData/$td->id_employee") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_employee ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE CARS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateEmployeeData/$td->id_employee") ?>">
                      <div class="form-group f1">
                        <label for="employee_name">NAME</label>
                        <input type="text" class="form-control" id="employee_name" value="<?php echo $td->employee_name ?>" name="employee_name">
                      </div>

                      <div class="form-group f1">
                        <label for="employee_address">ADDRESS</label>
                        <textarea type="text" class="form-control" id="employee_address" value="" name="employee_address"><?php echo $td->employee_address ?></textarea>
                      </div>

                      <div class="form-group f1">
                        <label for="employee_telp">PHONE</label>
                        <input type="text" class="form-control" id="employee_telp" value="<?php echo $td->employee_telp ?>" name="employee_telp">
                      </div>

                      <div class="form-group f1">
                        <label for="employee_as">WORK AS</label>
                        <input type="text" class="form-control" id="employee_as" value="<?php echo $td->employee_as ?>" name="employee_as">
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
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>