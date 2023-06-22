<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allFarms', function (Blueprint $table) {
            $table->bigIncrements('farmId');
            $table->string('farmName',100);
            $table->string('farmType',100)->nullable();
            $table->string('farmManager',50)->nullable();
            $table->mediumText('farmContactInformation')->nullable();
            $table->string('farmPhone',50)->nullable();
            $table->string('farmEmail',50)->nullable();
            $table->mediumText('farmAwards')->nullable();
            $table->integer('farmTasks')->nullable();

            $table->integer('farmTasksOn')->nullable();
            $table->string('farmWebsite',200)->nullable();
            $table->string('farmFacebook',300)->nullable();
            $table->string('farmConsultant')->nullable();
            $table->string('farmEstd')->nullable();
            
            $table->string('farmPhoto',300)->nullable();
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
        Schema::dropIfExists('allFarms');
    }
}
