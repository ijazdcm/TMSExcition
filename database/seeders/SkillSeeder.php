<?php

namespace Database\Seeders;

use App\Models\SubMasters\Skill;
use App\Models\SubMasters\Staff_skill;
use Database\Factories\StaffSkillFactory;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::factory()->count(10)->create()->each(function(){
            Staff_skill::factory()->count(3)->create();
        });
    }
}
