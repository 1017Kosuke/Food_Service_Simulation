<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    function __construct() {
        parent::__construct("Fettuccine Alfredo", "Creamy fettuccine pasta with Alfredo sauce.", 8.99, "Pasta", 10);
    }
}