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
            'name'=>'Alexander McQueen',
            'price'=>'Ksh.4,499',
            'description'=>"The sneaker features large flat laces and is finished with an Alexander McQueen signature on tongue and heel counter.",
            'category'=>"sneakers",
            'picture'=>"https://stockx.imgix.net/images/Alexander-McQueen-Oversized-Red-Croc-Effect.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1606332770&w=1000"
        ],
        [
            'name'=>'Puma',
            'price'=>'Ksh.3,499',
            'description'=>"PUMA and Nintendo® teamed up to bring you the Future Rider Nintendo Entertainment System™ shoe.",
            'category'=>"sneakers",
            'picture'=>"https://stockx-360.imgix.net/Puma-Future-Rider-NES/Images/Puma-Future-Rider-NES/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1607107259&w=1000"
        ]
            

    ]);
    }
}
