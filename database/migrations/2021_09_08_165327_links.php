<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Links extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links',function (Blueprint $table){
            $table->id();
            $table->text('link');
            $table->text('status');
            $table->text('time');
            $table->text('for')->nullable();
            $table->text('name');
            $table->text('slug');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
