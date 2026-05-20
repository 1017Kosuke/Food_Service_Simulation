<?php

spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . "/src/";
    $file = $base_dir . str_replace("\\", "/", $class) . ".php";
    if (file_exists($file)) {
        require $file;
    }
});



$cheeseBurger = new \FoodItems\CheeseBurger();
$fettuccine = new \FoodItems\Fettuccine();
$hawaiianPizza = new \FoodItems\HawaiianPizza();
$spaghetti = new \FoodItems\Spaghetti();

$Invah = new \Persons\Employees\Chef("Invah", 30,"Osaka",1,30);
$Nadia = new \Persons\Employees\Cashier("Nadia", 25,"Tokyo",1,25);


$saizeriya = new \Restaurants\Restaurant(
    [
        $cheeseBurger,
        $fettuccine,
        $hawaiianPizza,
        $spaghetti
    ],
    [
        $Invah,
        $Nadia
    ]
);


$intrestedTastesMap = [
    "Burger",
    "Pasta"
];

$Tom = new \Persons\Customers\Customer("Tom", 28, "Saitama", $intrestedTastesMap);
$invoice = $Tom -> order($saizeriya);
$invoice -> printInvoice();