<?php

use App\Http\Controllers\AdminControlls\AdminCurrentProjectsController;
use App\Http\Controllers\AdminControlls\AdminLoginController;
use App\Http\Controllers\AdminControlls\AdminProjectsController;
use App\Http\Controllers\AdminControlls\AdminStaffController;
use App\Http\Controllers\AdminControlls\AdminStaffListController;
use App\Http\Controllers\Auth\AdminControlls\AdminUserLoginController;
use App\Models\AdminModels\Projects;
use App\Models\AdminModels\Staff;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ADMIN ROUTES AREA

Route::view('/', 'pages.login');
//route section to handle the logins of admin
Route::post('/', [AdminLoginController::class, 'login'])->name('admin.login');
Route::group(["middleware"=>"is_admin","prefix"=>"admin","as"=>"admin."],function()
{

    Route::view('dashboard', 'masterDashboard')->name('dashboard');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
    Route::resource('projects', AdminProjectsController::class);
    Route::resource('Currentprojects', AdminCurrentProjectsController::class);

    //route resource to handle staff creation and more
    Route::resource('staffs', AdminStaffController::class);
    Route::resource('staffsLogin',AdminUserLoginController::class);
    Route::resource('staffsList', AdminStaffListController::class);

});


//END ADMIN ROUTES AREA

//USER ROUTE AREA

//Open Routes For User
Route::group(["prefix"=>"user","as"=>"user."],function()
{
    Route::view('login','pages.user.login')->name('login');
    Route::post('login', [AdminLoginController::class, 'login']);

});





//END USER ROUTE AREA


















//test route section
Route::get('/test', function () {

    $developers = Staff::all();
    return view('test', ["developers" => $developers]);
});
