<?php

namespace Staditek\App\Model\shipment;

use Staditek\App\config\Database;

class dataShipment extends Database
{
  public function shipment()
  {
    $statement = self::$conn->prepare("select
    shipment.id_shipment, shipment.id_employe_account, shipment.id_payment_confirmation, shipment.shipment_date, shipment.estimated_time, shipment.created_at, shipment.updated_at,
    employees_account.id_employe_account,employees_account.id_employe_data,employees_account.avatar,employees_account.email,
    employees_data.id_employee,employees_data.employee_name,employees_data.employee_telp, employees_data.employee_as,
    user_regis.full_name, user_regis.address, user_regis.phone,
    cars.brand_car, cars.product_img, cars.series_car, cars.car_price,
    payment_confirmation.id_online_payment
    from shipment
    join employees_account on shipment.id_employe_account=employees_account.id_employe_account
    join employees_data on employees_account.id_employe_data = employees_data.id_employee
    join payment_confirmation on shipment.id_payment_confirmation = payment_confirmation.id_payment_confirmation
    join online_payment on payment_confirmation.id_online_payment = online_payment.id_payment
    join user_account on online_payment.id_user_account = user_account.id_user_account
    join user_regis on user_account.id_user_regis = user_regis.id_user_regis
    join cars on online_payment.id_cars = cars.id_cars;");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findShipment($id_shipment)
  {
    $statement = self::$conn->prepare("select * from shipment where id_shipment=$id_shipment");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveShipment($data)
  {
    $statement = self::$conn->prepare("INSERT INTO shipment(id_employe_account,id_payment_confirmation,shipment_date, estimated_time, created_at, updated_at)
    values
    (
    :id_employe_account,
    :id_payment_confirmation,
    :shipment_date,
    :estimated_time,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateShipment($data, $id_shipment)
  {

    $statement = self::$conn->prepare("UPDATE shipment
    SET
    id_employe_account=:id_employe_account,
    id_payment_confirmation=:id_payment_confirmation,
    shipment_date=:shipment_date,
    estimated_time=:estimated_time,
    updated_at=:updated_at
    where id_shipment =$id_shipment
    ");
    return $statement->execute($data);
  }

  public function deleteShipment($id_shipment)
  {
    $statement = self::$conn->prepare("DELETE FROM shipment where id_shipment=$id_shipment");
    $statement->execute();
  }
}
