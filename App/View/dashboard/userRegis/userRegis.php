<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE USER REGIS</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addUserRegisDisplay") ?>" type="button" class="btn btn-secondary">Add User Regis</a>
      <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
        <th>GENDER</th>
        <th>BORN DATE</th>
        <th>NATIONALITY</th>
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
              <?php echo $td->nik ?>
            </td>
            <td>
              <?php echo $td->full_name ?>
            </td>
            <td>
              <?php echo $td->address ?>
            </td>
            <td>
              <?php echo $td->phone ?>
            </td>
            <td>
              <?php echo $td->gender ?>
            </td>
            <td>
              <?php echo $td->born_date ?>
            </td>
            <td>
              <?php echo $td->nationality ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
              <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_user_regis ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteUserRegis/$td->id_user_regis ") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_user_regis ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE USER REGIS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateUserRegis/$td->id_user_regis") ?>">
                      <div class="form-group f1">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" value="<?php echo $td->nik ?>" name="nik">
                      </div>

                      <div class="form-group f1">
                        <label for="full_name">NAME</label>
                        <input type="text" class="form-control" id="full_name" value="<?php echo $td->full_name ?>" name="full_name">
                      </div>

                      <div class="form-group f1">
                        <label for="address">ADDRESS</label>
                        <textarea type="text" class="form-control" id="address" value="" name="address"><?php echo $td->address ?></textarea>
                      </div>

                      <div class="form-group f1">
                        <label for="phone">PHONE</label>
                        <input type="text" class="form-control" id="phone" value="<?php echo $td->phone ?>" name="phone">
                      </div>

                      <div class="form-group f1">
                        <label for="gender">GENDER</label>
                        <select class="form-select" name="gender">
                          <option value="<?php echo $td->gender ?>" selected><?php echo $td->gender ?></option>
                          <option value="male">MALE</option>
                          <option value="female">FEMALE</option>
                        </select>
                      </div>
                      <div class="form-group f1">
                        <label for="born_date">BORN DATE</label>
                        <input type="date" class="form-control" id="born_date" value="<?php echo $td->born_date ?>" name="born_date">
                      </div>
                      <div class="form-group f1">
                        <label for="nationality">NATIONALITY</label>
                        <input type="text" class="form-control" id="nationality" value="<?php echo $td->nationality ?>" name="nationality">
                      </div>
                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">
                        <a href="<?= \Staditek\App\Core\Router::url("userregis") ?>" class="btn btn-warning">Back</a>
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