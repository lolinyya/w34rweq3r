<?php

declare(strict_types=1);

namespace LullDev\PizzaStore;

/**
 * Абстрактный класс пиццы (родительский для всех видов пицц)
 */
abstract class Pizza
{
    protected string $name;      // Название пиццы
    protected string $sauce;    // Основной соус
    protected array $toppings = []; // Ингредиенты

    public function prepare(): void
    {
        echo "Начинаем готовить {$this->name}\n";
        echo "Добавляем соус {$this->sauce}\n";
        echo "Добавляем топпинги: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Нарезаем пиццу по диагонали\n";
    }
}
