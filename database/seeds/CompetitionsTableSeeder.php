<?php

use Illuminate\Database\Seeder;
use App\Competition;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::truncate();

        $data = [
            ['short_name'=>'Prog', 'long_name'=>'Pemrograman'],
            ['short_name'=>'Web', 'long_name'=>'Desain Web'],
            ['short_name'=>'Lcc', 'long_name'=>'Cerdas Cermat'],
            ['short_name'=>'Idea', 'long_name'=>'Ide Bisnis'],
        ];

        foreach($data as $row){
            Competition::create($row);
        }
    }
}
