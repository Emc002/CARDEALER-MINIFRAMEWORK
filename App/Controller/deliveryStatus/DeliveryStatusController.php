<?php

namespace Staditek\App\Controller\deliveryStatus;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\deliveryStatus\dataDeliveryStatus;
use Staditek\App\Model\shipment\dataShipment;
use Staditek\App\Model\confirmItem\dataConfirmItem;


class DeliveryStatusController
{
  private static $model;
  private static $modelS;
  private static $modelC;

  public function __construct()
  {
    self::$model = new dataDeliveryStatus();
    self::$modelS = new dataShipment();
    self::$modelC = new dataConfirmItem();

  }
  public function deliveryStatus()
  {
    $tampiDatalManager = self::$model->deliveryStatus();
    $tampiDatalManager1['shipment'] = self::$modelS->shipment();
    $tampiDatalManager1['confirmItem'] = self::$modelC->confirmItem();
    View::renderDashboard('dashboard/deliveryStatus/deliveryStatus', $tampiDatalManager, $tampiDatalManager1);
  }

  public function viewOneDeliveryStatus($id_delivery)
  {
    $OneManager = self::$model->findDeliveryStatus($id_delivery);
    View::renderDashboard('dashboard/deliveryStatus/editDeliveryStatus', $OneManager);
  }

  public function addDeliveryStatusDisplay()
  {
    $tampiDatalManager = self::$modelS->shipment();
    $tampiDatalManager1 = self::$modelC->confirmItem();
    View::renderDashboard('dashboard/deliveryStatus/addDeliveryStatus', $tampiDatalManager, $tampiDatalManager1 );
  }


  public function saveAddDeliveryStatus()
  {
    $saveDeliveryStatus = [
      'id_shipment' => $_POST['id_shipment'],
      'id_confirm_item_arrived' => $_POST['id_confirm_item_arrived'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveDeliveryStatus($saveDeliveryStatus);
    Router::redirect('deliveryStatus');
  }

  public function updateAddDeliveryStatus($id_delivery)
  {
    $updateDeliveryStatus = [
      'id_shipment' => $_POST['id_shipment'],
      'id_confirm_item_arrived' => $_POST['id_confirm_item_arrived'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateDeliveryStatus($updateDeliveryStatus, $id_delivery);
    Router::redirect('deliveryStatus');
  }

  public function deleteDeliveryStatus($id_delivery)
  {
    self::$model->deleteDeliveryStatus($id_delivery);
    Router::redirect('deliveryStatus');
  }
}
