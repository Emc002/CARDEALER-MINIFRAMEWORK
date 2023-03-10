<?php

namespace Staditek\App\Model\employeeAccount;

use Staditek\App\config\Database;

class dataEmployeeAccount extends Database
{
  public function employeeAccount()
  {
    $statement = self::$conn->prepare("select employees_account.id_employe_account, employees_account.id_employe_data, employees_account.avatar,employees_account.email, employees_account.password, employees_account.created_at, employees_account.updated_at,
    employees_data.id_employee, employees_data.employee_name, employees_data.employee_telp, employees_data.employee_as, employees_data.employee_address
    from employees_account
    join employees_data on employees_account.id_employe_data = employees_data.id_employee;");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findEmployeeAccount($id_employee_account)
  {
    $statement = self::$conn->prepare("select * from employees_account where id_employee_account=$id_employee_account");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveEmployeeAccount($data)
  {
    $statement = self::$conn->prepare("INSERT INTO employees_account(id_employe_data,avatar, email, password, sebagai, created_at, updated_at)
    values
    (
    :id_employe_data,
    :avatar,
    :email,
    :password,
    :sebagai,
    :created_at,
    :updated_at)
    ");
    return $statement->execute($data);
  }

  public function updateEmployeeAccount($data, $id_employe_account)
  {
    $statement = self::$conn->prepare("UPDATE employees_account
    SET
    id_employe_data=:id_employe_data,
    avatar=:avatar,
    email=:email,
    password=:password,
    sebagai=:sebagai,
    updated_at=:updated_at
    where id_employe_account =$id_employe_account
    ");
    return $statement->execute($data);
  }

  public function deleteEmployeeAccount($id_employe_account)
  {
    $statement = self::$conn->prepare("DELETE FROM employees_account where id_employe_account=$id_employe_account");
    $statement->execute();
  }
}
