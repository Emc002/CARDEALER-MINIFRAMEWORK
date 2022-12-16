<?php

namespace Staditek\App\Controller\paymentConfirmation;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\paymentConfirmation\dataPaymentConfirmation;
use Staditek\App\Model\employeeAccount\dataEmployeeAccount;
use Staditek\App\Model\onlinePayment\dataOnlinePayment;



class PaymentConfirmationController
{
  private static $model;
  private static $modelEA;
  private static $modelOP;


  public function __construct()
  {
    self::$model = new dataPaymentConfirmation();
    self::$modelEA = new dataEmployeeAccount();
    self::$modelOP = new dataOnlinePayment();


  }
  public function paymentConfirmation()
  {
    $tampiDatalPaymentConfirmation = self::$model->paymentConfirmation();
    View::renderDashboard('dashboard/paymentConfirmation/paymentConfirmation', $tampiDatalPaymentConfirmation);
  }

  public function viewOnePaymentConfirmation($id_payment_confirmation)
  {
    $OnePaymentConfirmation = self::$model->findPaymentConfirmation($id_payment_confirmation);
    View::renderDashboard('dashboard/paymentConfirmation/editPaymentConfirmation', $OnePaymentConfirmation);
  }

  public function addPaymentConfirmationDisplay()
  {
    $tampiDatalPaymentConfirmationOP = self::$modelOP->onlinePayment();
    // die(var_dump($tampiDatalPaymentConfirmationOP));
    $tampiDatalPaymentConfirmation = self::$modelEA->employeeAccount();
    View::renderDashboard('dashboard/paymentConfirmation/addPaymentConfirmation', $tampiDatalPaymentConfirmation, $tampiDatalPaymentConfirmationOP );
  }
  public function saveAddPaymentConfirmation()
  {
    $savePaymentConfirmation = [
      'id_employees_account' => $_POST['id_employees_account'],
      'id_online_payment' => $_POST['id_online_payment'],
      'date_confirmation' => $_POST['date_confirmation'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->savePaymentConfirmation($savePaymentConfirmation);
    Router::redirect('paymentConfirmation');
  }

  public function updateAddPaymentConfirmation($id_payment_confirmation)
  {
    $updatePaymentConfirmation = [
      'id_employees_account' => $_POST['id_employees_account'],
      'id_online_payment' => $_POST['id_online_payment'],
      'date_confirmation' => $_POST['date_confirmation'],
      'updated_at' => $_POST['username'],
    ];
    self::$model->updatePaymentConfirmation($updatePaymentConfirmation, $id_payment_confirmation);
    Router::redirect('paymentConfirmation');
  }

  public function deletePaymentConfirmation($id_payment_confirmation)
  {
    self::$model->deletePaymentConfirmation($id_payment_confirmation);
    Router::redirect('paymentConfirmation');
  }
}
