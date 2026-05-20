<?php 

namespace FoodOrders;

use FoodItems\FoodItem;
use Persons\Customers\Customer;

class FoodOrder {
    private FoodItem $foodItem;
    private Customer $customer;

    function __construct(FoodItem $foodItem, Customer $customer) {
        $this->foodItem = $foodItem;
        $this->customer = $customer;
    }

    function getFoodItem(): FoodItem {
        return $this->foodItem;
    }

    function getCustomer(): Customer {
        return $this->customer;
    }
}