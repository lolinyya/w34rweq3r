<?php

declare(strict_types=1);

namespace LullDev\PizzaStore;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Готовим {$this->name}\n";
        echo "Добавляем {$this->sauce}\n";
        echo "Топпинги: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Режем пиццу диагональными ломтиками\n";
    }
}
