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
        $staff=new Staff();
        $staff->name="Saravana";
        $staff->phonenumber="7708454539";
        $staff->email="saravanasai002@gmail.com";
        $staff->save();
        $staff=new Staff();
        $staff->name="Sai";
        $staff->phonenumber="7708454538";
        $staff->email="saravanasai02@gmail.com";
        $staff->save();
    }
}
