<?php
$arrival = new DateTime();
$arrivalString = $arrival->format("Y-m-d H:i:s");
?>

<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE USER ACCOUNT</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addUserAccountDisplay") ?>" type="button" class="btn btn-secondary">Add User Account</a>
      <tr>
        <th>NO</th>
        <th>EMAIL</th>
        <th>AVATAR</th>
        <th>PASSWORD</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
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
              <?php echo $td->email ?>
            </td>
            <td>
              <?php echo $td->avatar ?>
            </td>
            <td>
              <?php echo substr($td->password, 0, 10) ?>...
            </td>
            <td>
              <?php echo $td->full_name  ?>
            </td>
            <td>
              <?php echo $td->address  ?>
            </td>
            <td>
              <?php echo $td->phone  ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $td->id_user_account ?>" class="btn btn-warning">Edit</button>
              <a href="<?= \Staditek\App\Core\Router::url("deleteUserAccount/$td->id_user_account ") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <div class="modal fade" id="staticBackdrop<?php echo $td->id_user_account ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="99" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE USER ACCOUNT</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="heightForm">
                    <form method="post" enctype="multipart/form-data" action="<?= \Staditek\App\Core\Router::url("updateUserAccount/$td->id_user_account") ?>">
                    <div class="form-group f1">
                        <label for="id_user_regis">ID USER REGIS</label>
                        <input type="text" class="form-control" id="id_user_regis" value="<?php echo $td->id_user_regis ?>" name="id_user_regis">
                      </div>

                      <div class="form-group f1">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $td->email ?>" name="email">
                      </div>

                      <div class="form-group f1">
                        <label for="avatar">AVATAR</label>
                        <input type="file" class="form-control" id="avatar" value="<?php echo $td->avatar ?>" name="avatar">
                      </div>

                      <div class="form-group f1">
                        <label for="password">PASSWORD</label>
                        <input type="text" class="form-control" id="password" value="<?php echo $td->password ?>" name="password">
                      </div>

                      <input type="hidden" class="form-control datepicker" value="<?php echo $arrivalString; ?>" id="updated_at" name="updated_at">
                      <div class="form-group f1">

                        <a href="<?= \Staditek\App\Core\Router::url("useraccount") ?>" class="btn btn-warning">Back</a>
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