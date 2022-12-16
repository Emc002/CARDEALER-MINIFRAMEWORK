<?php

namespace Staditek\App\Controller\userAccount;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\useraccount\dataUserAccount;
use Staditek\App\Model\userregis\dataUserRegis;


class UserAccountController
{
  private static $model;
  private static $modelUR;

  public function __construct()
  {
    self::$model = new dataUserAccount();
    self::$modelUR = new dataUserRegis();

  }
  public function userAccount()
  {
    $tampiDatalUserAccount = self::$model->userAccount();
    View::renderDashboard('dashboard/useraccount/userAccount', $tampiDatalUserAccount);
  }

  public function viewOneUserAccount($id_user_account)
  {
    $OneUserAccount = self::$model->findUserAccount($id_user_account);
    View::renderDashboard('dashboard/useraccount/editUserAccount', $OneUserAccount);
  }

  public function addUserAccountDisplay()
  {
    $tampiDatalUserAccount = self::$modelUR->userRegis();
    View::renderDashboard('dashboard/useraccount/addUserAccount', $tampiDatalUserAccount );
  }
  public function saveAddUserAccount()
  {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['avatar']['name'];
    $ukuran = $_FILES['avatar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$ekstensi) ) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 104407000) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
    $saveUserAccount = [
      'id_user_regis' => $_POST['id_user_regis'],
      'email' => $_POST['email'],
      'avatar' =>  $xx,
      'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
      'sebagai' =>  "user",
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveUserAccount($saveUserAccount);
    Router::redirect('useraccount');
  } else {
    die(var_dump("failed"));
  }
}

  }

  public function saveCreateAccount()
  {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['avatar']['name'];
    $ukuran = $_FILES['avatar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$ekstensi) ) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 104407000) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
    $saveUserAccount = [
      'id_user_regis' => $_POST['id_user_regis'],
      'email' => $_POST['email'],
      'avatar' =>  $xx,
      'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
      'sebagai' =>  "user",
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveUserAccount($saveUserAccount);
    Router::redirect('');
  } else {
    die(var_dump("failed"));
  }
}

  }

  public function updateAddUserAccount($id_user_account)
  {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['avatar']['name'];
    $ukuran = $_FILES['avatar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$ekstensi) ) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
    $updateUserAccount = [
      'id_user_regis' => $_POST['id_user_regis'],
      'email' => $_POST['email'],
      'avatar' =>  $xx,
      'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
      'sebagai' =>  "user",
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateUserAccount($updateUserAccount, $id_user_account);
    Router::redirect('useraccount');
  } else {
    die(var_dump("failed"));
  }
}

  }

  public function deleteUserAccount($id_user_account)
  {
    self::$model->deleteUserAccount($id_user_account);
    Router::redirect('useraccount');

  }
}
