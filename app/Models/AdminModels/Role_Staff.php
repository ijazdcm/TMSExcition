<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Staff extends Model
{
    use HasFactory;
    protected $table="role__staff";
    protected $fillable=[
        "role_for_staff",
        "staff_role"
    ];


    public function role()
    {
        return $this->hasOne(Roles::class,'staff_role','id');
    }
}
