<?php

declare(strict_types=1);

namespace LullDev\PizzaStore\Pizzas;

use LullDev\PizzaStore\Pizza;

/**
 * Класс Сырной пиццы.
 */
class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пицца';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Пармезан', 'Чеддер'];
    }
}
