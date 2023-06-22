<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('companyId');
            $table->string('name');
            $table->string('categories')->nullable();
            $table->string('subcategories')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('estd')->nullable();
            $table->integer('count')->nullable();
            $table->string('description')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();

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
        Schema::dropIfExists('material_companies');
    }
}
