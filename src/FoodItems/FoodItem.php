<?php

namespace FoodItems;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $price;
    private string $category;

    private int $preparationTimeMinutes;

    function __construct(string $name, string $description, float $price, string $category, int $preparationTimeMinutes) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->preparationTimeMinutes = $preparationTimeMinutes;
    }

    public function getCategory():string{
        return $this-> category;
    }

    public function getPrice():float{
        return $this-> price;
    }
}
