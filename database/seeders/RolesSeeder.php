<?php

namespace Database\Seeders;

use App\Models\AdminModels\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{


   protected  $staff_roll=array('Developer','Designer');
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<count($this->staff_roll);$i++)
        {
            $role= new Roles();
            $role->role_name=$this->staff_roll[$i];
            $role->save();
        }
    }
}
