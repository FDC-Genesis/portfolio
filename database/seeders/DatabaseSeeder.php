<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Link;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Link::factory()->create([
            'title' => 'Class Scheduler',
            'url' => 'https://www.upwork.com/freelancers/~015650d5cf2a053cc2?p=1687917171436404736',
            'description' => "- To eliminate the use of Manual Scheduling by providing an easier and more effective way of scheduling.\n- To design a system that will help the department heads plot schedules for their departments and prevent conflicting schedules for faculty and students.\n- To design a system that will detect if there is a conflict on the plotted schedule and will generate a printable schedule of the class schedules for the admin and users.",
            'img_url' => '',
            'role' => 'Main Developer',
        ]);
    }
}
