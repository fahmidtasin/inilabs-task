<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals\Dog;
use App\Animals\Cat;
use App\Animals\Cow;

class AnimalController extends Controller
{
    public function makeSounds()
    {
        // Create instances of each animal
        $dog = new Dog();
        $cat = new Cat();
        $cow = new Cow();

        // Get the sounds made by each animal
        $dogSound = $dog->makeSound();
        $catSound = $cat->makeSound();
        $cowSound = $cow->makeSound();

        return response()->json([
            'Dog Sound' => $dogSound,
            'Cat Sound' => $catSound,
            'Cow Sound' => $cowSound
        ], 200, [], JSON_PRETTY_PRINT);
    }
}
