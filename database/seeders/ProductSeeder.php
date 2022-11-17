<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>'LG Mobile',
            'price'=>'200',
            'description'=>"A Smartphone with 4GB ram and much more feature",
            'category'=>"Mobile",
            'gallery'=> "https://www.91mobiles.com/apple-iphone-12-price-in-india?ty=gallery"
        ],
        ['name'=>'Panasonic TV',
            'price'=>'400',
            'description'=>"A Smart TV with much more feature",
            'category'=>"Tv",
            'gallery'=> "https://depositphotos.com/13280777/stock-photo-plasma-lcd-oled-screen.html"
        ],
        ['name'=>'Son TV',
            'price'=>'500',
            'description'=>"A TV with  much more feature",
            'category'=>"TV",
            'gallery'=> "https://www.indiamart.com/proddetail/sony-led-tv-10917026248.html"
        ],
        ['name'=>'LG Fridge',
            'price'=>'200',
            'description'=>"A Fridge with  much more feature",
            'category'=>"Fridge",
            'gallery'=> "https://www.ramtons.com/213-liters-2-door-direct-cool-fridge-titan-silver-rf-257"
        ],
        ]);
    }
}
