<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\Participant;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $group = Group::where('username', 'peserta')->first();
        if($group != null) {
            $group_id = $group->id;
            $group->delete();

            Participant::where('group_id', $group_id)->delete();
        }

        $group = Group::create([
            'group_name' => $faker->name,
            'institution' => $faker->email,
            'username' => 'peserta',
            'password' => Hash::make('peserta'),
            'email' => $faker->email,
            'competition_id' => $faker->numberBetween(1,4),
        ]);

        for($i=0; $i<3; $i++){
            Participant::create(
                [
                    'group_id' => $group->id,
                    'full_name'=> $faker->name,
                    'birthdate'=> $faker->dateTimeThisCentury->format('Y-m-d'),
                    'email'=> $faker->email,
                    'contact'=> '081999101908',
                    'vegetarian' => $faker->numberBetween(0,1),
                    'buy_shirt' => $faker->numberBetween(0,1),
                    'captain' => ($i==0)?1:0,
                    'photo' => 'default.png'
                ]
            );
        }
    }
}
