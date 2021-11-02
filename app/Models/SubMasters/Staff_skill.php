<?php

namespace App\Models\SubMasters;

use Database\Factories\Staff_skillFactory as FactoriesStaff_skillFactory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_skill extends Model
{
    use HasFactory;

    protected $table="staff_skills";
     protected $fillable=[
         "staff_id",
         "skill_id"
     ];

     public $timestamps=false;

     protected static function newFactory()
    {
        return FactoriesStaff_skillFactory::new();
    }
}
