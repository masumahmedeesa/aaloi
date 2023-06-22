<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{

    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('materialId');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('benefits')->nullable();
            $table->integer('price')->nullable();
            $table->string('avialable')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->bigInteger('companyId');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
