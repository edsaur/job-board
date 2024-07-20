<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all();

        for($i = 0; $i <= 50; $i++){
            $user = $users->random();

            \App\Models\Employer::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}