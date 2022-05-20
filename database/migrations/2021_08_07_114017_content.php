<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Content extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content',function (Blueprint $table){
            $table->id();
            $table->text('title');
            $table->string('description');
            $table->string('category');
            $table->text('slug');
            $table->text('picture');
            $table->text('content');
            $table->string('vip')->nullable();
            $table->text('time');
            $table->integer('userid');
            $table->text('sponserlink')->nullable();
            $table->text('time_update')->nullable();
            $table->text('sponser')->nullable();
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
