<?php

namespace Staditek\App\Model\modelVerifyAccount;

use Staditek\App\config\Database;

class dataVerifyAccount extends Database
{
  public function findEmail($data){
    $statement = self::$conn->prepare("SELECT * FROM user_account WHERE email=:email");
    $statement->execute(['email'=>$data]);
    return $statement->fetch(\PDO::FETCH_OBJ);

  } 

  public function findEmailManager($data){
    $statement = self::$conn->prepare("SELECT * FROM manager WHERE email=:email");
    $statement->execute(['email'=>$data]);
    return $statement->fetch(\PDO::FETCH_OBJ);

  } 
}
