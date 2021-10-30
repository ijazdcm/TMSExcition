<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('username');
            $table->string('intro');
            $table->string('profile_img');
            $table->unsignedBigInteger('staff_role');
            $table->foreign('staff_role')->references('id')->on('roles');
            $table->string('password')->default(Hash::make('1412'));
            $table->string('active_status')->default(1)->comment('1 means active 0 means disabled');
            $table->string('dl_status')->default(1)->comment('1 means not deleted 0 means deleted');
            $table->date('last_login');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
