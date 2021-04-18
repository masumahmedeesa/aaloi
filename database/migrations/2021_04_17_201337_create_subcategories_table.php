<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('subcategoryId');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            
            $table->bigInteger('categoryId');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
