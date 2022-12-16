<?php

namespace Staditek\App\Controller\confirmItem;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\confirmItem\dataConfirmItem;
use Staditek\App\Model\shipment\dataShipment;



class ConfirmItemController
{
  private static $model;
  private static $modelS;

  public function __construct()
  {
    self::$model = new dataConfirmItem();
    self::$modelS = new dataShipment();

  }
  public function confirmItem()
  {
    $tampiDatalConfirmItem = self::$model->confirmItem();
    View::renderDashboard('dashboard/confirmItem/confirmItem', $tampiDatalConfirmItem);
  }

  public function viewOneConfirmItem($id_confirm_item)
  {
    $OneConfirmItem = self::$model->findConfirmItem($id_confirm_item);
    View::renderDashboard('dashboard/confirmItem/editConfirmItem', $OneConfirmItem);
  }

  public function addConfirmItemDisplay()
  {
    $tampiDatalConfirmItem = self::$modelS->shipment();
    View::renderDashboard('dashboard/confirmItem/addConfirmItem', $tampiDatalConfirmItem);
  }
  public function saveAddConfirmItem()
  {
    $saveConfirmItem = [
      'id_shipment' => $_POST['id_shipment'],
      'date_confirm' => $_POST['date_confirm'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveConfirmItem($saveConfirmItem);
    Router::redirect('confirmItem');
  }

  public function updateAddConfirmItem($id_confirm_item)
  {
    $updateConfirmItem = [
      'id_shipment' => $_POST['id_shipment'],
      'date_confirm' => $_POST['date_confirm'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateConfirmItem($updateConfirmItem, $id_confirm_item);
    Router::redirect('confirmItem');
  }

  public function deleteConfirmItem($id_confirm_item)
  {
    self::$model->deleteConfirmItem($id_confirm_item);
    Router::redirect('confirmItem');
  }
}
