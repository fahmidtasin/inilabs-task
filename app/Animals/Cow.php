<?php

namespace App\Animals;

class Cow extends Animal
{
    public function makeSound(): string
    {
        return "Moo!";
    }
}
