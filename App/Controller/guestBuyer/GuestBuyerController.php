<?php

namespace Staditek\App\Controller\guestBuyer;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\guestBuyer\dataGuestBuyer;

class GuestBuyerController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataGuestBuyer();
  }
  public function guestBuyer()
  {
    $tampiDatalGuestBuyer = self::$model->guestBuyer();
    View::renderDashboard('dashboard/guestBuyer/guestBuyer', $tampiDatalGuestBuyer);
  }

  public function viewOneGuestBuyer($id_guest)
  {
    $OneGuestBuyer = self::$model->findGuestBuyer($id_guest);
    View::renderDashboard('dashboard/guestBuyer/editGuestBuyer', $OneGuestBuyer);
  }

  public function addGuestBuyerDisplay()
  {
    View::renderDashboard('dashboard/guestBuyer/addGuestBuyer');
  }
  public function saveAddGuestBuyer()
  {
    $saveGuestBuyer = [
      'guest_name' => $_POST['guest_name'],
      'guest_address' => $_POST['guest_address'],
      'guest_telp' => $_POST['guest_telp'],
      'guest_email' => $_POST['guest_email'],
      'created_at' => $_POST['created_at'],
      'updated_at' => null
    ];
    self::$model->saveGuestBuyer($saveGuestBuyer);
    Router::redirect('guestBuyer');
  }

  public function updateAddGuestBuyer($id_guest)
  {
    $updateGuestBuyer = [
      'guest_name' => $_POST['guest_name'],
      'guest_address' => $_POST['guest_address'],
      'guest_telp' => $_POST['guest_telp'],
      'guest_email' => $_POST['guest_email'],
      'updated_at' => $_POST['updated_at'],
    ];
    self::$model->updateGuestBuyer($updateGuestBuyer, $id_guest);
    Router::redirect('guestBuyer');
  }

  public function deleteGuestBuyer($id_guest)
  {
    self::$model->deleteGuestBuyer($id_guest);
    Router::redirect('guestBuyer');
  }
}
