<?php

namespace Staditek\App\Model\paymentConfirmation;

use Staditek\App\config\Database;

class dataPaymentConfirmation extends Database
{
  public function paymentConfirmation()
  {
    $statement = self::$conn->prepare("select
    payment_confirmation.id_payment_confirmation, payment_confirmation.id_employees_account, payment_confirmation.id_online_payment, payment_confirmation.date_confirmation, payment_confirmation.created_at, payment_confirmation.updated_at,
    employees_account.id_employe_account, employees_account.id_employe_data,
    employees_data.id_employee, employees_data.employee_name, employees_data.employee_as,
    user_account.id_user_account, user_account.id_user_regis,
    user_regis.id_user_regis, user_regis.full_name, user_regis.address, user_regis.phone
    from payment_confirmation
    join employees_account on payment_confirmation.id_employees_account = employees_account.id_employe_account
    join employees_data on employees_account.id_employe_data=employees_data.id_employee
    join online_payment on payment_confirmation.id_online_payment = online_payment.id_payment
    join user_account on online_payment.id_user_account = user_account.id_user_account
    join user_regis on user_account.id_user_regis= user_regis.id_user_regis;");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findPaymentConfirmation($id_payment_confirmation)
  {
    $statement = self::$conn->prepare("select * from payment_confirmation where id_payment_confirmation=$id_payment_confirmation");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function savePaymentConfirmation($data)
  {
    $statement = self::$conn->prepare("INSERT INTO payment_confirmation(id_employees_account,id_online_payment, date_confirmation, created_at, updated_at)
    values
    (
    :id_employees_account,
    :id_online_payment,
    :date_confirmation,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updatePaymentConfirmation($data, $id_payment_confirmation)
  {

    $statement = self::$conn->prepare("UPDATE payment_confirmation
    SET
    id_employees_account=:id_employees_account,
    id_online_payment=:id_online_payment,
    date_confirmation=:date_confirmation,
    updated_at=:updated_at
    where id_payment_confirmation =$id_payment_confirmation
    ");
    return $statement->execute($data);
  }

  public function deletePaymentConfirmation($id_payment_confirmation)
  {
    $statement = self::$conn->prepare("DELETE FROM payment_confirmation where id_payment_confirmation=$id_payment_confirmation");
    $statement->execute();
  }
}
