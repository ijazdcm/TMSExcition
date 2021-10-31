<?php

namespace Database\Seeders;

use App\Models\AdminModels\Staff;
use Illuminate\Database\Seeder;


class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::factory()->count(50)->create();
    }
}
