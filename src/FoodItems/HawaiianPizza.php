<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem {
  
    function __construct() {
        parent::__construct("Hawaiian Pizza", "A pizza topped with ham and pineapple.", 9.99, "Pizza", 15);
    }
}