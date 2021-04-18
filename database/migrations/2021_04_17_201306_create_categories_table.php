<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('categoryId');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
