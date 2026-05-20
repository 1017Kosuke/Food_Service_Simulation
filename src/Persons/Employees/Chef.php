<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;
use FoodItems\FoodItem;
use Persons\Employee;

class Chef extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    function prepareFood(FoodOrder $order): FoodItem {
        return $order->getFoodItem();
    }
}