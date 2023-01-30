<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductsTable extends Migration
{
   
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('addproducts');
    }
}
