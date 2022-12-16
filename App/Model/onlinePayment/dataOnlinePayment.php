<?php

namespace Staditek\App\Model\onlinePayment;

use Staditek\App\config\Database;

class dataOnlinePayment extends Database
{
  public function onlinePayment()
  {
      $statement = self::$conn->prepare("select online_payment.id_payment, online_payment.id_user_account, online_payment.id_cars, online_payment.number_bank_account, online_payment.shipment_address, online_payment.shipment_price, online_payment.total_payment, online_payment.payment_date, online_payment.created_at,
      online_payment.updated_at, user_account.id_user_account, user_account.email, user_regis.id_user_regis, user_regis.full_name, user_regis.address, user_regis.phone,
      cars.id_cars, cars.brand_car,cars.series_car, cars.car_price
      from online_payment
      join user_account on online_payment.id_user_account = user_account.id_user_account
      join user_regis on user_account.id_user_regis = user_regis.id_user_regis
      join cars on online_payment.id_cars = cars.id_cars");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findOnlinePayment($id_payment)
  {
    $statement = self::$conn->prepare("select * from online_payment where id_payment =$id_payment ");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveOnlinePayment($data)
  {
    $statement = self::$conn->prepare("INSERT INTO online_payment(id_user_account,id_cars,number_bank_account, shipment_address,shipment_price, total_payment, payment_date, created_at, updated_at)
    values
    (
    :id_user_account,
    :id_cars,
    :number_bank_account,
    :shipment_address,
    :shipment_price,
    :total_payment,
    :payment_date,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function saveBuyOnlinePayment($data)
  {
    $statement = self::$conn->prepare("INSERT INTO online_payment(id_user_account,id_cars,number_bank_account, shipment_address,shipment_price, total_payment, payment_date, created_at, updated_at)
    values
    (
    :id_user_account,
    :id_cars,
    :number_bank_account,
    :shipment_address,
    :shipment_price,
    :total_payment,
    :payment_date,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateOnlinePayment($data, $id_payment)
  {
    $statement = self::$conn->prepare("UPDATE online_payment
    SET
    id_user_account=:id_user_account,
    id_cars=:id_cars,
    number_bank_account=:number_bank_account,
    shipment_address=:shipment_address,
    shipment_price=:shipment_price,
    total_payment=:total_payment,
    payment_date=:payment_date,
    updated_at=:updated_at
    where id_payment  =$id_payment 
    ");
    return $statement->execute($data);
  }

  public function deleteOnlinePayment($id_payment)
  {
    $statement = self::$conn->prepare("DELETE FROM online_payment where id_payment =$id_payment ");
    $statement->execute();
  }
}
