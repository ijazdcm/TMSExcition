<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    use HasFactory;
    protected $table = "admin_logins";
    protected $fillable = [
        "username",
        "password"
    ];
}
