<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Shapes\Circle;
use  App\Shapes\Rectangle;

class ShapeController extends Controller
{
    public function show()
    {
        $circle = new Circle(5);
        $rectangle = new Rectangle(4, 6);

        return response()->json([
            'Circle Area is = ' => $circle->area() . "\n",
            'Rectangle Area is = ' => $rectangle->area()
        ]);

    }
}
