<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lastdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('check_date');
            $table->string('site_name');
            $table->string('site_url');
            $table->string('keyword');
            $table->integer('y_rank')->unsigned()->index()->nullable();
            $table->string('y_change')->nullable();
            $table->integer('y_count')->unsigned()->index();
            $table->string('y_url');
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
        Schema::drop('lastdatas');
    }
}
