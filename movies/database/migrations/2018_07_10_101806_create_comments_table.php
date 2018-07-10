<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('movie_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('reply_to')->unsigned()->default(0);
			$table->integer('status')->unsigned()->default(1);
			$table->longText('body');
            $table->timestamps();
			$table->foreign('movie_id')->references('id')->on('movies');
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
