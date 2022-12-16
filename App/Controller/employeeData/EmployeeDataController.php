<?php

namespace Staditek\App\Controller\employeeData;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\employeeData\dataEmployeeData;

class EmployeeDataController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataEmployeeData();
  }
  public function employeeData()
  {
    $tampiDatalEmployeeData = self::$model->employeeData();
    View::renderDashboard('dashboard/employeeData/employeeData', $tampiDatalEmployeeData);
  }

  public function viewOneEmployeeData($id_employee)
  {
    $OneEmployeeData = self::$model->findEmployeeData($id_employee);
    View::renderDashboard('dashboard/employeeData/editEmployeeData', $OneEmployeeData);
  }

  public function addEmployeeDataDisplay()
  {
    View::renderDashboard('dashboard/employeeData/addEmployeeData');
  }
  public function saveAddEmployeeData()
  {
    $saveEmployeeData = [
      'employee_name' => $_POST['employee_name'],
      'employee_address' => $_POST['employee_address'],
      'employee_telp' => $_POST['employee_telp'],
      'employee_as' => $_POST['employee_as'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveEmployeeData($saveEmployeeData);
    Router::redirect('employeeData');
  }

  public function updateAddEmployeeData($id_employee)
  {
    $updateEmployeeData = [
      'employee_name' => $_POST['employee_name'],
      'employee_address' => $_POST['employee_address'],
      'employee_telp' => $_POST['employee_telp'],
      'employee_as' => $_POST['employee_as'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateEmployeeData($updateEmployeeData, $id_employee);
    Router::redirect('employeeData');
  }

  public function deleteEmployeeData($id_employee)
  {
    self::$model->deleteEmployeeData($id_employee);
    Router::redirect('employeeData');
  }
}
