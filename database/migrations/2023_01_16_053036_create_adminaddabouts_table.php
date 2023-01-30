<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminaddaboutsTable extends Migration
{
    
    public function up()
    {
        Schema::create('adminaddabouts', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->longText('description');
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('adminaddabouts');
    }
}
