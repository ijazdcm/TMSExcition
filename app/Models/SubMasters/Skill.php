<?php

namespace App\Models\SubMasters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

 protected $table="skills";
  protected $fillable=[
      "skill_name"
  ];

  public $timestamps = false;

}
