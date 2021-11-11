<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminLogin extends Authenticatable
{
    use HasFactory;
    protected $table = "admin_logins";
    protected $fillable = [
        "username",
        "password",
        "remember_token",
    ];

    protected $primaryKey = 'id';
}
