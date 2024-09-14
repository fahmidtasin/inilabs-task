<?php

namespace App\Animals;

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Woof!";
    }
}
