<div class="row infoRow">
  <div class="col-9 infoTab table-responsive">
    <h1>TABLE PAYMENT CONFIRMATION</h1>
    <table class="table table-dark table-hover">
      <a href="<?= \Staditek\App\Core\Router::url("addPaymentConfirmationDisplay") ?>" type="button" class="btn btn-secondary">Add Confirmation Payment</a>
      <tr>
        <th>NO</th>
        <th>EMPLOYEE NAME</th>
        <th>EMPLOYEE AS</th>
        <th>PAYMENT NAME</th>
        <th>DATE CONFIRMATION</th>
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
              <?php echo $td->date_confirmation ?>
            </td>
            <td>
              <?php echo $td->created_at ?>
            </td>
            <td>
              <?php echo $td->updated_at ?>
            </td>
            <td>
              <a href="<?= \Staditek\App\Core\Router::url("viewOnePaymentConfirmation/$td->id_payment_confirmation ") ?>" type="button" class="btn btn-warning">Edit</a>
              <a href="<?= \Staditek\App\Core\Router::url("deletePaymentConfirmation/$td->id_payment_confirmation ") ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>