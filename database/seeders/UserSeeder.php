<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'email' => 'test3@gmail.com',
            'password' => '$12$/qK2PuZ9e4.GMV3hOfK5JupdgtaZZqPK1T11G66xzjTBnEaDfGYOG',
        ]);
    }
}
