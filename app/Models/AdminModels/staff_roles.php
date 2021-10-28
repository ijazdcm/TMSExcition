<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_roles extends Model
{
    use HasFactory;

    protected $table="staff_roles";

    protected $fillable=[
        "staff_id",
        "role_id",
    ];
}
