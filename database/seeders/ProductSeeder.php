<?php

namespace Database\Seeders;

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
        [
            'name'=>'Air Jordan 1',
            'price'=>'4499',
            'description'=>"The Air Jordan 1 Shoe follows in the footsteps of greatness.",
            'category'=>"sneakers",
            'picture'=>"https://images.solecollector.com/complex/image/upload/c_fill,f_auto,fl_lossy,q_auto,w_1100/air-jordan-1-retro-og-hero_xf8joi.jpg"
        ],
        [
            'name'=>'Nike Air 270',
            'price'=>'4499',
            'description'=>"Nike's first lifestyle Air Max brings you style, comfort and big attitude in the Nike Air Max 270.",
            'category'=>"sneakers",
            'picture'=>"https://images.footlocker.com/is/image/FLEU/316701652204_01?wid=763&hei=538&fmt=png-alpha"
        ]
            

    ]);
    }
}
