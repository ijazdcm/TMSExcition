<?php

namespace Database\Seeders;

use App\Models\AdminModels\Projects;
use App\Models\Projects\project_members;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projects::factory()->count(20)->create()->each(function ($project) {
            project_members::factory()->count(3)->create();
        });
    }
}
