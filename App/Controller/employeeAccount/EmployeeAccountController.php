<?php

namespace Staditek\App\Controller\employeeAccount;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\employeeAccount\dataEmployeeAccount;
use Staditek\App\Model\employeeData\dataEmployeeData;


class EmployeeAccountController
{
  private static $model;
  private static $modelED;

  public function __construct()
  {
    self::$model = new dataEmployeeAccount();
    self::$modelED = new dataEmployeeData();
  }
  public function employeeAccount()
  {
    $tampiDatalEmployeeAccount = self::$model->employeeAccount();
    View::renderDashboard('dashboard/employeeAccount/employeeAccount', $tampiDatalEmployeeAccount);
  }

  public function viewOneEmployeeAccount($id_employee_account)
  {
    $OneEmployeeAccount = self::$model->findEmployeeAccount($id_employee_account);
    View::renderDashboard('dashboard/employeeAccount/editEmployeeAccount', $OneEmployeeAccount);
  }

  public function addEmployeeAccountDisplay()
  {
    $tampiDatalEmployeeAccount = self::$modelED->employeeData();
    View::renderDashboard('dashboard/employeeAccount/addEmployeeAccount', $tampiDatalEmployeeAccount);
  }
  public function saveAddEmployeeAccount()
  {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['avatar']['name'];
    $ukuran = $_FILES['avatar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
        $saveEmployeeAccount = [
          'id_employe_data' => $_POST['id_employe_data'],
          'email' => $_POST['email'],
          'avatar' => $xx,
          'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
          'sebagai' =>  "employee",
          'created_at' => $_POST['created_at'],
          'updated_at' => null
        ];
        self::$model->saveEmployeeAccount($saveEmployeeAccount);
        Router::redirect('employeeAccount');
      } else {
        die(var_dump("failed"));
      }
    }
  }

  public function updateAddEmployeeAccount($id_employee_account)
  {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['avatar']['name'];
    $ukuran = $_FILES['avatar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
      $updateEmployeeAccount = [
        'id_employe_data' => $_POST['id_employe_data'],
        'email' => $_POST['email'],
        'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
        'sebagai' =>  "employee",
        'updated_at' => $_POST['updated_at'],
      ];
      self::$model->updateEmployeeAccount($updateEmployeeAccount, $id_employee_account);
      Router::redirect('employeeAccount');
    } else {
      if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
        $updateEmployeeAccount = [
          'id_employe_data' => $_POST['id_employe_data'],
          'email' => $_POST['email'],
          'avatar' => $xx,
          'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
          'sebagai' =>  "employee",
          'updated_at' => $_POST['updated_at'],
        ];
        self::$model->updateEmployeeAccount($updateEmployeeAccount, $id_employee_account);
        Router::redirect('employeeAccount');
      } else {
        die(var_dump("failed"));
      }
    }
  }

  public function deleteEmployeeAccount($id_employe_account)
  {
    self::$model->deleteEmployeeAccount($id_employe_account);
    Router::redirect('employeeAccount');
  }
}
