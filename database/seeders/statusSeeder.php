<?php

namespace Database\Seeders;

use App\Models\AdminModels\status;
use Illuminate\Database\Seeder;

class statusSeeder extends Seeder
{


    protected $status=array('Initiation','On Process','On Demo','Hold','Completed');
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<count($this->status);$i++)
        {
            $status=new status();
            $status->status=$this->status[$i];
            $status->save();

        }
    }
}
