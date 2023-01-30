<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contactno');
            $table->string('address');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
