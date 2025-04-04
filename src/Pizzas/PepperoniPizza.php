<?php

declare(strict_types=1);

namespace LullDev\PizzaStore\Pizzas;

use LullDev\PizzaStore\Pizza;

/**
 * Класс Пиццы Пепперони.
 */
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Пепперони', 'Орегано'];
    }
}
