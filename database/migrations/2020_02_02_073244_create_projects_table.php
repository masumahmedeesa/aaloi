<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('projectId');
            $table->bigInteger('farmId');
            $table->string('projectName',100);
            $table->string('estdDate');
            $table->mediumText('location')->nullable();
            $table->mediumText('description')->nullable();
            
            $table->string('projectPhoto1')->nullable();
            $table->string('photo1Des')->nullable();

            $table->string('projectPhoto2')->nullable();
            $table->string('photo2Des')->nullable();

            $table->string('projectPhoto3')->nullable();
            $table->string('photo3Des')->nullable();

            $table->string('projectPhoto4')->nullable();
            $table->string('photo4Des')->nullable();

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
