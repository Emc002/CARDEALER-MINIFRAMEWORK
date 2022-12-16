<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd4394f83d17f54f0488619448110d57
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staditek\\App\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staditek\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Staditek\\App\\Controller\\cars\\CarsController' => __DIR__ . '/../..' . '/App/Controller/cars/CarsController.php',
        'Staditek\\App\\Controller\\confirmItem\\ConfirmItemController' => __DIR__ . '/../..' . '/App/Controller/confirmItem/ConfirmItemController.php',
        'Staditek\\App\\Controller\\deliveryStatus\\DeliveryStatusController' => __DIR__ . '/../..' . '/App/Controller/deliveryStatus/DeliveryStatusController.php',
        'Staditek\\App\\Controller\\employeeAccount\\EmployeeAccountController' => __DIR__ . '/../..' . '/App/Controller/employeeAccount/EmployeeAccountController.php',
        'Staditek\\App\\Controller\\employeeData\\EmployeeDataController' => __DIR__ . '/../..' . '/App/Controller/employeeData/EmployeeDataController.php',
        'Staditek\\App\\Controller\\guestBuyer\\GuestBuyerController' => __DIR__ . '/../..' . '/App/Controller/guestBuyer/GuestBuyerController.php',
        'Staditek\\App\\Controller\\homePage\\HomePageController' => __DIR__ . '/../..' . '/App/Controller/homePage/HomePageController.php',
        'Staditek\\App\\Controller\\manager\\ManagerController' => __DIR__ . '/../..' . '/App/Controller/manager/ManagerController.php',
        'Staditek\\App\\Controller\\onlinePayment\\OnlinePaymentController' => __DIR__ . '/../..' . '/App/Controller/onlinePayment/OnlinePaymentController.php',
        'Staditek\\App\\Controller\\paymentConfirmation\\PaymentConfirmationController' => __DIR__ . '/../..' . '/App/Controller/paymentConfirmation/PaymentConfirmationController.php',
        'Staditek\\App\\Controller\\shipment\\ShipmentController' => __DIR__ . '/../..' . '/App/Controller/shipment/ShipmentController.php',
        'Staditek\\App\\Controller\\userAccount\\UserAccountController' => __DIR__ . '/../..' . '/App/Controller/userAccount/UserAccountController.php',
        'Staditek\\App\\Controller\\userRegis\\UserRegisController' => __DIR__ . '/../..' . '/App/Controller/userRegis/UserRegisController.php',
        'Staditek\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Staditek\\App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
        'Staditek\\App\\Model\\cars\\dataCars' => __DIR__ . '/../..' . '/App/Model/cars/dataCars.php',
        'Staditek\\App\\Model\\confirmItem\\dataConfirmItem' => __DIR__ . '/../..' . '/App/Model/confirmItem/dataConfirmItem.php',
        'Staditek\\App\\Model\\deliveryStatus\\dataDeliveryStatus' => __DIR__ . '/../..' . '/App/Model/deliveryStatus/dataDeliveryStatus.php',
        'Staditek\\App\\Model\\employeeAccount\\dataEmployeeAccount' => __DIR__ . '/../..' . '/App/Model/employeeAccount/dataEmployeeAccount.php',
        'Staditek\\App\\Model\\employeeData\\dataEmployeeData' => __DIR__ . '/../..' . '/App/Model/employeeData/dataEmployeeData.php',
        'Staditek\\App\\Model\\guestBuyer\\dataGuestBuyer' => __DIR__ . '/../..' . '/App/Model/guestBuyer/dataGuestBuyer.php',
        'Staditek\\App\\Model\\manager\\dataManager' => __DIR__ . '/../..' . '/App/Model/manager/dataManager.php',
        'Staditek\\App\\Model\\onlinePayment\\dataOnlinePayment' => __DIR__ . '/../..' . '/App/Model/onlinePayment/dataOnlinePayment.php',
        'Staditek\\App\\Model\\paymentConfirmation\\dataPaymentConfirmation' => __DIR__ . '/../..' . '/App/Model/paymentConfirmation/dataPaymentConfirmation.php',
        'Staditek\\App\\Model\\shipment\\dataShipment' => __DIR__ . '/../..' . '/App/Model/shipment/dataShipment.php',
        'Staditek\\App\\Model\\useraccount\\dataUserAccount' => __DIR__ . '/../..' . '/App/Model/useraccount/dataUserAccount.php',
        'Staditek\\App\\Model\\userregis\\dataUserRegis' => __DIR__ . '/../..' . '/App/Model/userregis/dataUserRegis.php',
        'Staditek\\App\\config\\Database' => __DIR__ . '/../..' . '/App/config/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd4394f83d17f54f0488619448110d57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd4394f83d17f54f0488619448110d57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd4394f83d17f54f0488619448110d57::$classMap;

        }, null, ClassLoader::class);
    }
}