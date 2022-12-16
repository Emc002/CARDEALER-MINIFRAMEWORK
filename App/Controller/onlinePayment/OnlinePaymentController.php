<?php

namespace Staditek\App\Controller\onlinePayment;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\onlinePayment\dataOnlinePayment;
use Staditek\App\Model\useraccount\dataUserAccount;
use Staditek\App\Model\userregis\dataUserRegis;
use Staditek\App\Model\cars\dataCars;


class OnlinePaymentController
{
  private static $model;
  private static $modelUA;
  private static $modelUR;
  private static $modelC;

  public function __construct()
  {
    self::$model = new dataOnlinePayment();
    self::$modelUA = new dataUserAccount();
    self::$modelUR = new dataUserRegis();
    self::$modelC = new dataCars();

  }
  public function onlinePayment()
  {
    $tampiDatalOnlinePaymnet = self::$model->onlinePayment();
    $tampiDatalOnlinePaymnet1['account'] = self::$modelUA->userAccount();
    $tampiDatalOnlinePaymnet1['cars'] = self::$modelC->cars();
    View::renderDashboard('dashboard/onlinePayment/onlinePayment', $tampiDatalOnlinePaymnet,  $tampiDatalOnlinePaymnet1);
  }

  public function viewOneOnlinePayment($id_payment)
  {
    $OneOnlinePaymnet = self::$model->findOnlinePayment($id_payment);
    View::renderDashboard('dashboard/onlinePayment/editOnlinePaymnet', $OneOnlinePaymnet);
  }

  public function addOnlinePaymentDisplay()
  {
    $tampiDatalOnlinePaymnet = self::$modelUA->userAccount();
    $tampiDatalOnlinePaymnet += self::$modelUR->userRegis();
    $tampiDatalOnlinePaymnetC = self::$modelC->cars();
    View::renderDashboard('dashboard/onlinePayment/addOnlinePayment',$tampiDatalOnlinePaymnet, $tampiDatalOnlinePaymnetC);
  }
  public function saveAddOnlinePayment()
  {
    $saveOnlinePayment = [
      'id_user_account' => $_POST['id_user_account'],
      'id_cars' => $_POST['id_cars'],
      'number_bank_account' => $_POST['number_bank_account'],
      'shipment_address' => $_POST['shipment_address'],
      'shipment_price' => $_POST['shipment_price'],
      'total_payment' => $_POST['total_payment'],
      'payment_date' => $_POST['payment_date'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveOnlinePayment($saveOnlinePayment);
    Router::redirect('onlinePayment');
  }

  public function saveBuyOnlinePayment()
  {
    $saveOnlinePaymentBuy = [
      'id_user_account' => $_POST['id_user_account'],
      'id_cars' => $_POST['id_cars'],
      'number_bank_account' => $_POST['number_bank_account'],
      'shipment_address' => $_POST['shipment_address'],
      'shipment_price' => $_POST['shipment_price'],
      'total_payment' => $_POST['total_payment'],
      'payment_date' => $_POST['payment_date'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveBuyOnlinePayment($saveOnlinePaymentBuy);
    Router::redirect('product');
  }

  public function updateAddOnlinePayment($id_payment)
  {
    $updateOnlinePayment = [
      'id_user_account' => $_POST['id_user_account'],
      'id_cars' => $_POST['id_cars'],
      'number_bank_account' => $_POST['number_bank_account'],
      'shipment_address' => $_POST['shipment_address'],
      'shipment_price' => $_POST['shipment_price'],
      'total_payment' => $_POST['total_payment'],
      'payment_date' => $_POST['payment_date'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateOnlinePayment($updateOnlinePayment, $id_payment);
    Router::redirect('onlinePayment');
  }

  public function deleteOnlinePayment($id_payment)
  {
    self::$model->deleteOnlinePayment($id_payment);
    Router::redirect('onlinePayment');
  }
}
