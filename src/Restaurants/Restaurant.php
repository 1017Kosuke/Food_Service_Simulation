<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Invoices\Invoice;
use FoodOrders\FoodOrder;

class Restaurant {
    public array $menu;
    public array $staff;

    public function __construct(array $menu, array $staff) {
        $this->menu = $menu;
        $this->staff = $staff;
    }

    public function order(FoodOrder $order): Invoice {
        $foodItem = $order->getFoodItem();
        $finalPrice = $foodItem->getPrice();
        $orderTime = new \DateTime();
        $estimatedTimeMinutes = 30; 

        return new Invoice($finalPrice, $orderTime, $estimatedTimeMinutes);
    }

}