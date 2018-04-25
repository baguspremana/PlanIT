<?php

use Illuminate\Database\Seeder;
use App\Jury;

class JuriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jury::where('username', 'jury')->delete();
        Jury::create([
            'fullname' => 'Jury',
            'username' => 'jury',
            'password' => Hash::make('jury'),
            'email' => '',
            'is_login' => '',
            'competition_id' => 1,
        ]);
    }
}
