<?php

declare(strict_types=1);

namespace LullDev\PizzaStore\Pizzas;

use LullDev\PizzaStore\Pizza;

class KarbonaraPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Карбонара";
        $this->sauce = "Сливочный";
        $this->toppings = ["Бекон", "Яйца", "Пармезан"];
    }
}
