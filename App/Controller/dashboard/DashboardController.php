<?php

namespace Staditek\App\Controller\dashboard;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\cars\dataCars;

class DashboardController
{

  private static $carsModel;
  public function __construct()
  {
    self::$carsModel = new dataCars();
  }    
  public function index()
  {
    View::renderDashboard('dashboard/index');
  }
}
