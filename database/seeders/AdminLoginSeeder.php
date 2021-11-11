<?php

namespace Database\Seeders;

use App\Models\AdminModels\AdminLogin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_logins')->insert([
            'username' => "ADMIN",
            'password' => Hash::make(1412),
            'remember_token'=>"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
        ]);
    }
}
