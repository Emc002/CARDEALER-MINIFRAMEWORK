<?php

namespace Staditek\App\Model\useraccount;

use Staditek\App\config\Database;

class dataUserAccount extends Database
{
  public function userAccount()
  {
    $statement = self::$conn->prepare("select user_account.id_user_account, user_account.id_user_regis, user_account.email, user_account.password, user_account.avatar, user_account.created_at,
    user_account.updated_at, 
    user_regis.id_user_regis, user_regis.full_name, user_regis.address, user_regis.gender, user_regis.phone
    from user_account
    join user_regis on user_account.id_user_regis = user_regis.id_user_regis;");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findUserAccount($id_user_account)
  {
    $statement = self::$conn->prepare("select * from user_account where id_user_account=$id_user_account");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveUserAccount($data)
  {
    $statement = self::$conn->prepare("INSERT INTO user_account(id_user_regis,email,avatar, password,  sebagai, created_at, updated_at)
    values
    (
    :id_user_regis,
    :email,
    :avatar,
    :password,
    :sebagai,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateUserAccount($data, $id_user_account)
  {
    $statement = self::$conn->prepare("UPDATE user_account
    SET
    id_user_regis=:id_user_regis,
    email=:email,
    avatar=:avatar,
    password=:password,
    sebagai=:sebagai
    updated_at=:updated_at
    where id_user_account =$id_user_account
    ");
    return $statement->execute($data);
  }

  public function deleteUserAccount($id_user_account)
  {
    $statement = self::$conn->prepare("DELETE FROM user_account where id_user_account=$id_user_account");
    $statement->execute();
  }

  public function findEmail($data){
    $statement = self::$conn->prepare("SELECT * FROM user_account WHERE email=:email");
    $statement->execute(['email'=>$data]);
  return $statement->fetch(\PDO::FETCH_OBJ);
  }
}
