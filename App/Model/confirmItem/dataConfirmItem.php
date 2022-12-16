<?php

namespace Staditek\App\Model\confirmItem;

use Staditek\App\config\Database;

class dataConfirmItem extends Database
{
  public function confirmItem()   
  {
    $statement = self::$conn->prepare("select confirm_item_recieve.id_confirm_item, confirm_item_recieve.id_shipment, confirm_item_recieve.date_confirm, confirm_item_recieve.created_at,confirm_item_recieve.updated_at,
    shipment.id_shipment,shipment.shipment_date,shipment.id_employe_account,shipment.id_payment_confirmation,
    payment_confirmation.id_payment_confirmation,payment_confirmation.id_online_payment,
    online_payment.id_payment,online_payment.id_user_account,online_payment.id_cars,
    user_account.id_user_account, user_account.id_user_regis, user_account.email,
    user_regis.id_user_regis, user_regis.full_name
    from confirm_item_recieve
    join shipment on confirm_item_recieve.id_shipment = shipment.id_shipment
    join payment_confirmation on shipment.id_payment_confirmation = payment_confirmation.id_payment_confirmation
    join online_payment on payment_confirmation.id_online_payment = online_payment.id_payment
    join user_account on online_payment.id_user_account = user_account.id_user_account
    join user_regis on user_account.id_user_regis = user_regis.id_user_regis;");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findConfirmItem($id_confirm_item)
  {
    $statement = self::$conn->prepare("select * from confirm_item_recieve where id_confirm_item=$id_confirm_item");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveConfirmItem($data)
  {
    $statement = self::$conn->prepare("INSERT INTO confirm_item_recieve(id_shipment,date_confirm, created_at, updated_at)
    values
    (
    :id_shipment,
    :date_confirm,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateConfirmItem($data, $id_confirm_item)
  {
    $statement = self::$conn->prepare("UPDATE confirm_item_recieve
    SET
    id_shipment=:id_shipment,
    date_confirm=:date_confirm,
    updated_at=:updated_at
    where id_confirm_item =$id_confirm_item
    ");
    return $statement->execute($data);
  }

  public function deleteConfirmItem($id_confirm_item)
  {
    $statement = self::$conn->prepare("DELETE FROM confirm_item_recieve where id_confirm_item=$id_confirm_item");
    $statement->execute();
  }
}
