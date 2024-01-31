<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LeaderDetail;
use App\Models\User;
use Faker\Factory as Faker;


class LeaderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $faker = Faker::create();
        $users = User::all();
        foreach ($users as $user) {
            LeaderDetail::create([
                'user_id' => $user->user_id, // Replace with the actual user_id
                'name' => $faker->name,
                'email' => $user->email,
                'whatsapp' => $faker->phoneNumber,
                'line' => $faker->userName,
                'github' => $faker->userName,
                'birth_date' => $faker->date,
                'birth_place' => $faker->city,
                'is_binusian' => $faker->boolean,
                'cv' => 'path/to/cv.pdf',
                'flazz_card' => 'path/to/flazz_card.pdf',
                'id_card' => 'path/to/id_card.pdf',
            ]);
        }


        // Add more seed data as needed
    }
}
