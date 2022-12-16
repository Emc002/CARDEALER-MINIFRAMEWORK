<?php

namespace Staditek\App\Controller\cars;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\cars\dataCars;

class CarsController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataCars();
  }
  public function cars()
  {
    $tampiDatalCars = self::$model->cars();
    View::renderDashboard('dashboard/cars/cars',$tampiDatalCars);
  }

  public function viewOneCars($id_cars)
  {
    $OneCars = self::$model->findCars($id_cars);
    View::renderDashboard('dashboard/cars/editCarsDisplay', $OneCars);
  }

  public function addCarsDisplay()
  {
    View::renderDashboard('dashboard/cars/addCarsDisplay');
  }
  public function saveAddCars()
  {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['product_img']['name'];
    $ukuran = $_FILES['product_img']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$ekstensi) ) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 3044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['product_img']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
        $saveCars = [
          'brand_car' => $_POST['brand_car'],
          'product_img' => $xx,
          'series_car' => $_POST['series_car'],
          'car_price' => $_POST['car_price'],
          'car_stock' => $_POST['car_stock'],
          'created_at' => $_POST['created_at'],
          'updated_at' => null
        ];
        self::$model->saveCars($saveCars);
        Router::redirect('cars');
      } else {
        die(var_dump("failed"));
      }
  }
  }

  public function updateAddCars($id_cars)
  {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['product_img']['name'];
    $ukuran = $_FILES['product_img']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$ekstensi) ) {
      Router::redirect('cars');
    } else {
      if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['product_img']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
    $updateCars2 = [
      'brand_car' => $_POST['brand_car'],
      'product_img' =>  $xx,
      'series_car' => $_POST['series_car'],
      'car_price' => $_POST['car_price'],
      'car_stock' => $_POST['car_stock'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateCars($updateCars2, $id_cars);
    Router::redirect('cars');
  } else {
    die(var_dump("failed"));
  }
}
  }

  public function deleteCars($id_cars)
  {
    self::$model->deleteCars($id_cars);
    Router::redirect('cars');
  }
}
