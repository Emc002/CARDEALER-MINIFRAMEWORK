<?php

namespace Staditek\App\Controller\shipment;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\shipment\dataShipment;
use Staditek\App\Model\employeeAccount\dataEmployeeAccount;
use Staditek\App\Model\paymentConfirmation\dataPaymentConfirmation;



class ShipmentController
{
  private static $model;
  private static $modelEA;
  private static $modelPC;


  public function __construct()
  {
    self::$model = new dataShipment();
    self::$modelEA = new dataEmployeeAccount();
    self::$modelPC = new dataPaymentConfirmation();


  }
  public function shipment()
  {
    $tampiDatalShipment = self::$model->shipment();
    $tampiDatalShipment1['employeeAccount'] = self::$modelEA->employeeAccount();
    $tampiDatalShipment1['paymentConfirmation'] = self::$modelPC->paymentConfirmation();
    View::renderDashboard('dashboard/shipment/shipment', $tampiDatalShipment, $tampiDatalShipment1);
  }

  public function viewOneShipment($id_shipment)
  {
    $OneShipment = self::$model->findShipment($id_shipment);
    View::renderDashboard('dashboard/shipment/editShipment', $OneShipment);
  }

  public function addShipmentDisplay()
  {
    $tampiDatalShipment = self::$modelEA->employeeAccount();
    $tampiDatalShipment1 = self::$modelPC->paymentConfirmation();
    View::renderDashboard('dashboard/shipment/addShipment', $tampiDatalShipment, $tampiDatalShipment1 );
  }


  public function saveAddShipment()
  {
    $saveShipment = [
      'id_employe_account' => $_POST['id_employe_account'],
      'id_payment_confirmation' => $_POST['id_payment_confirmation'],
      'shipment_date' => $_POST['shipment_date'],
      'estimated_time' => $_POST['estimated_time'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveShipment($saveShipment);
    Router::redirect('shipment');
  }

  public function updateAddShipment($id_shipment)
  {
    $updateShipment = [
      'id_employe_account' => $_POST['id_employe_account'],
      'id_payment_confirmation' => $_POST['id_payment_confirmation'],
      'shipment_date' => $_POST['shipment_date'],
      'estimated_time' => $_POST['estimated_time'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateShipment($updateShipment, $id_shipment);
    Router::redirect('shipment');
  }

  public function deleteShipment($id_shipment)
  {
    self::$model->deleteShipment($id_shipment);
    Router::redirect('shipment');
  }
}
