<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table="staff";
    protected $fillable=[
        "name",
        "phonenumber",
        "password",
        "email",
        "active_status",
        "dl_status",
    ];


    public function staff_Role()
    {
        return $this->hasManyThrough(Roles::class,staff_roles::class,'staff_id','id','id','role_id');
    }
}
