<?php

declare(strict_types=1);

namespace LullDev\PizzaStore\Stores;

use LullDev\PizzaStore\Pizza;
use LullDev\PizzaStore\PizzaStore;
use LullDev\PizzaStore\Pizzas\CheesePizza;
use LullDev\PizzaStore\Pizzas\PepperoniPizza;
use LullDev\PizzaStore\Pizzas\KarbonaraPizza;

/**
 * Нью-Йоркская пиццерия с особым стилем пицц.
 */
class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'karbonara' => new KarbonaraPizza(),
            default => throw new \InvalidArgumentException("Неизвестный тип пиццы: $type"),
        };
    }
}
