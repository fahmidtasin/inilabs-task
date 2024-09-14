<?php

namespace App\Animals;

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Meow!";
    }
}
