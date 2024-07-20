<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // call the employers table
        $employers = \App\Models\Employer::all();
        

        for ($i = 0; $i <= 100; $i++) {
            $employer = $employers->random();

            \App\Models\Job::factory()->create([
                'employer_id' => $employer->id
            ]);
        }
    }
}
