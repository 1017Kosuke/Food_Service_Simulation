<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;
use FoodOrders\FoodOrder;

class Customer extends Person {
    private array $interestedMaps;
    
    public function __construct(string $name, int $age, string $address,array $interestedMaps) {
        parent::__construct($name, $age, $address);
        $this->interestedMaps = $interestedMaps;
    }
    public function intrestedCategories(Restaurant $restaurant) : array {
        $categories = [];
        foreach ($restaurant->menu as $foodItem) {
            if (in_array($foodItem->getCategory(), $this->interestedMaps)) {
                $categories[] = $foodItem->getCategory();
            }
        }
        return array_unique($categories);
    }

    public function order(Restaurant $restaurant): Invoice {
        $foodItem = $restaurant->menu[0]; 
        $order = new FoodOrder($foodItem, $this);
        return $restaurant->order($order);
    }
}