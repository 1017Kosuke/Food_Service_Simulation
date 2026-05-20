<?php

namespace FoodItems;

class CheeseBurger extends FoodItem {
    private string $category = "Burger";
    public function __construct() {
        parent::__construct("Cheese Burger", "A delicious burger with a slice of cheese.", 5.99, "Burger", 5);
    }
}