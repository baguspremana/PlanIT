<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::where('username', 'admin')->delete();
        Admin::create([
            'fullname' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => '',
            'is_login' => '',
            'competition_id' => null,
        ]);
    }
}
