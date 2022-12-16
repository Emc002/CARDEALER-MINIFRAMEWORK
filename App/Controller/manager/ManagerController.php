<?php

namespace Staditek\App\Controller\manager;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\manager\dataManager;

class ManagerController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataManager();
  }
  public function manager()
  {
    $tampiDatalManager = self::$model->manager();
    View::renderDashboard('dashboard/manager/manager', $tampiDatalManager);
  }

  public function viewOneManager($id_manager)
  {
    $OneManager = self::$model->findManager($id_manager);
    View::renderDashboard('dashboard/manager/editManager', $OneManager);
  }

  public function addManagerDisplay()
  {
    View::renderDashboard('dashboard/manager/addManager');
  }


  public function saveAddManager()
  {
    $saveManager = [
      'username' => $_POST['username'],
      'email' => $_POST['email'],
      'avatar' => null,
      'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
      'sebagai' =>  "manager",
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveManager($saveManager);
    Router::redirect('manager');
  }

  public function updateAddManager($id_manager)
  {
    $updateManger = [
      'username' => $_POST['username'],
      'email' => $_POST['email'],
      'avatar' => $_POST['avatar'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'sebagai' =>  "manager",
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateManager($updateManger, $id_manager);
    Router::redirect('manager');
  }

  public function deleteManager($id_manager)
  {
    self::$model->deleteManager($id_manager);
    Router::redirect('manager');
  }
}
