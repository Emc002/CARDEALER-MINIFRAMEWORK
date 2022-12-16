<?php

namespace Staditek\App\Controller\homePage;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\cars\dataCars;

class HomePageController
{

  private static $model;
  public function __construct()
  {
    self::$model = new dataCars();
  }
  public function index()
  {
    View::render('home/homePage');
  }

  public function product()
  {
    $tampiDatalCars = self::$model->cars();
    View::render('home/product', $tampiDatalCars);
  }
  
  public function contact()
  {
    View::render('home/contact');
  }

  public function about()
  {
    View::render('home/about');
  }


  public function profile()
  {
    View::render('home/profile');
  }
}
