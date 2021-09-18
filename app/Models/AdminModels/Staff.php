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


    public function staff_role()
    {
        return $this->hasOne(Role_Staff::class,'role_for_staff','id');
    }
}
