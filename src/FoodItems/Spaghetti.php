<?php

namespace FoodItems;

class Spaghetti extends FoodItem {
    function __construct() {
        parent::__construct("Spaghetti Bolognese", "Classic Italian pasta dish with a rich meat sauce.", 7.99, "Pasta", 12);
    }
}