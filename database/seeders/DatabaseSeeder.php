<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'groupname' => $faker->word,
                'password' => Hash::make('password'), 
                'leadername' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'wanumber' => $faker->phoneNumber,
                'lineid' => $faker->userName,
                'githubid' => $faker->userName,
                'birthplace' => $faker->city,
                'birthdate' => $faker->date,
                'cv' => $faker->sentence,
                'flazz' => $faker->creditCardNumber,
                'profilePicture' => $faker->sentence,
                'nonbinusianid' => $faker->randomNumber,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
