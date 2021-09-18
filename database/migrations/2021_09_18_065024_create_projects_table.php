<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_tittle');
            $table->string('client_name');
            $table->string('days');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->bigInteger('to_dev')->unsigned()->default(0)->comment('assigned to developer');
            $table->foreign('to_dev')->references('id')->on('staff');
            $table->bigInteger('to_des')->unsigned()->default(0)->comment('assigned to designer');
            $table->foreign('to_des')->references('id')->on('staff');
            $table->bigInteger('current_status')->unsigned()->default(0)->comment('current status of project');
            $table->foreign('current_status')->references('id')->on('statuses');
            $table->tinyInteger('completion_percentage')->default(0)->comment("to show how muxh perent does project complete");
            $table->string('update_remarks')->comment("to show last status of update")->nullable();
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
        Schema::dropIfExists('projects');
    }
}
