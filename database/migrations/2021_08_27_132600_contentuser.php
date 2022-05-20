<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contentuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentuser',function (Blueprint $table){
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('banner');
            $table->text('sponser')->nullable();
            $table->text('sponserlink')->nullable();
            $table->string('vip')->nullable();
            $table->text('time');
            $table->text('update')->nullable();
            $table->string('status');
            $table->string('category');
            $table->text('content');
            $table->integer('userid');
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
