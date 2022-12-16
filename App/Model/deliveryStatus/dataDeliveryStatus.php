<?php

namespace Staditek\App\Model\deliveryStatus;

use Staditek\App\config\Database;

class dataDeliveryStatus extends Database
{
  public function deliveryStatus()
  {
    $statement = self::$conn->prepare("select * from delivery_status join confirm_item_recieve on delivery_status.id_confirm_item_arrived = confirm_item_recieve.id_confirm_item");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findDeliveryStatus($id_delivery)
  {
    $statement = self::$conn->prepare("select * from delivery_status where id_delivery=$id_delivery");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveDeliveryStatus($data)
  {
    $statement = self::$conn->prepare("INSERT INTO delivery_status(id_shipment,id_confirm_item_arrived, created_at, updated_at)
    values
    (
    :id_shipment,
    :id_confirm_item_arrived,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateDeliveryStatus($data, $id_delivery)
  {
    $statement = self::$conn->prepare("UPDATE delivery_status
    SET
    id_shipment=:id_shipment,
    id_confirm_item_arrived=:id_confirm_item_arrived,
    updated_at=:updated_at
    where id_delivery =$id_delivery
    ");
    return $statement->execute($data);
  }

  public function deleteDeliveryStatus($id_delivery)
  {
    $statement = self::$conn->prepare("DELETE FROM delivery_status where id_delivery=$id_delivery");
    $statement->execute();
  }
}
