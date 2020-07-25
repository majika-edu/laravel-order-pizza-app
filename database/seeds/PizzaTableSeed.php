<?php

use Illuminate\Database\Seeder;

class PizzaTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza1.jpg',
            'title' => 'Vegie Pizza',
            'description' => 'Super healthy vegie pizza',
            'price' => '10'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza2.jpg',
            'title' => 'Pizza Capriciosa ',
            'description' => 'Good old familiar taste of Capriciosa',
            'price' => '12'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza1.jpg',
            'title' => 'Vegie Pizza',
            'description' => 'Super healthy vegie pizza',
            'price' => '10'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza2.jpg',
            'title' => 'Pizza Capriciosa ',
            'description' => 'Good old familiar taste of Capriciosa',
            'price' => '12'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza1.jpg',
            'title' => 'Vegie Pizza',
            'description' => 'Super healthy vegie pizza',
            'price' => '10'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza2.jpg',
            'title' => 'Pizza Capriciosa ',
            'description' => 'Good old familiar taste of Capriciosa',
            'price' => '12'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza1.jpg',
            'title' => 'Vegie Pizza',
            'description' => 'Super healthy vegie pizza',
            'price' => '10'

        ]); 
        $pizza->save(); 

        $pizza = new \App\Pizza([
            'imagePath' => 'images/pizza2.jpg',
            'title' => 'Pizza Capriciosa ',
            'description' => 'Good old familiar taste of Capriciosa',
            'price' => '12'

        ]); 
        $pizza->save(); 
    }
}
