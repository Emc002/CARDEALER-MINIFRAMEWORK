<?php 

namespace Staditek\App\Controller\login;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\modelVerifyAccount\dataVerifyAccount;
use Staditek\App\Model\userregis\dataUserRegis;

class LoginController{


  private static $UserModel;
  private static $UserRegis;

  public function __construct()
  {
    self::$UserModel= new dataVerifyAccount();
    self::$UserRegis= new dataUserRegis();

  }
  public function login(){
    View::renderLogin('login');
  }
  public function loginManager(){
    View::renderLogin('loginManager');
  }
  public function createAccount(){
    $tampiDataUserRegis = self::$UserRegis->userRegis();
    View::renderLogin('createAccount',$tampiDataUserRegis);
  }

  public function register(){
    View::renderLogin('signup');
  }

  public function logout(){
   session_destroy();
   Router::redirect('');
  }
  public function postLogin()
  {
    $user = self::$UserModel->findEmail($_POST['email']);
    if($user && $user->password){
      $_SESSION['auth'] = $user;
        Router::redirect('');
        return;
    }
    Router::redirect('login');
  }

  public function postLoginManager()
  {
    $user = self::$UserModel->findEmailManager($_POST['email']);
    if($user && $user->password){
      $_SESSION['auth'] = $user;
        Router::redirect('cars');
        return;
    }
    Router::redirect('login');
  }

  // password_verify($_POST['password'],
}
