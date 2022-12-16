<?php

namespace Staditek\App\Controller\userRegis;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\userregis\dataUserRegis;

class UserRegisController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataUserRegis();
  }
  public function userRegis()
  {
    $tampiDatalUserRegis = self::$model->userregis();
    View::renderDashboard('dashboard/userRegis/userRegis', $tampiDatalUserRegis);
  }

  public function viewOneUserRegis($id_user_regis)
  {
    $OneUserRegis = self::$model->findUserRegis($id_user_regis);
    View::renderDashboard('dashboard/userRegis/editUserRegis', $OneUserRegis);
  }

  public function addUserRegisDisplay()
  {
    View::renderDashboard('dashboard/userRegis/addUserRegis');
  }
  public function saveAddUserRegis()
  {
    $saveUserRegis = [
      'nik' => $_POST['nik'],
      'full_name' => $_POST['full_name'],
      'address' => $_POST['address'],
      'phone' =>  $_POST['phone'],
      'gender' => $_POST['gender'],
      'born_date' => $_POST['born_date'],
      'nationality' => $_POST['nationality'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveUserRegis($saveUserRegis);
    Router::redirect('createAccount');
  }
  public function updateAddUserRegis($id_user_regis)
  {
    $updateUserRegis = [
      'nik' => $_POST['nik'],
      'full_name' => $_POST['full_name'],
      'address' => $_POST['address'],
      'phone' => $_POST['phone'],
      'gender' => $_POST['gender'],
      'born_date' => $_POST['born_date'],
      'nationality' => $_POST['nationality'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateUserRegis($updateUserRegis, $id_user_regis);
    Router::redirect('userregis');
  }

  public function deleteUserRegis($id_user_regis)
  {
    self::$model->deleteUserRegis($id_user_regis);
    Router::redirect('userregis');
  }
}
