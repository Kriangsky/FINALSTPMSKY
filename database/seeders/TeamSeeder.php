<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\LeaderDetail;
use Faker\Factory as Faker;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $leaders = LeaderDetail::all();
        foreach ($leaders as $leader) {
            Team::create([
                'leader_id' => $leader->leader_id, // Replace with the actual leader_id
                'name' => $faker->company . " Team",
            ]);
        }

        // Add more seed data as needed
    }
}
