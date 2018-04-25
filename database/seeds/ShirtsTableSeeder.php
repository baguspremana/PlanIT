<?php

use Illuminate\Database\Seeder;
use App\Shirt;

class ShirtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shirt::truncate();

        $data = [
            ['size'=>'S', 'price'=>75000],
            ['size'=>'M', 'price'=>75000],
            ['size'=>'L', 'price'=>75000],
            ['size'=>'XL', 'price'=>75000],
        ];

        foreach($data as $row){
            Shirt::create($row);
        }
    }
}
