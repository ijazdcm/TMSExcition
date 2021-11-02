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
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('adhar_number');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->string('martial_status');
            $table->unsignedBigInteger('staff_role');
            $table->foreign('staff_role')->references('id')->on('roles');
            $table->string('Address');
            $table->string('profile_img');
            $table->string('phone_number');
            $table->string('email');
            $table->string('father_phone_number');
            $table->string('mother_phone_number');
            $table->string('experienceRadioBtn');
            $table->string('previous_company_name')->default(null);
            $table->bigInteger('previous_company_salary')->default(null);
            $table->string('education_qualification');
            $table->integer('experience');
            $table->date('doj');
            $table->string('active_status')->default(1)->comment('1 means active 0 means disabled');
            $table->string('dl_status')->default(1)->comment('1 means not deleted 0 means deleted');
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
