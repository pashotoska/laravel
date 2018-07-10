<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
            $table->string('name');
            $table->longText('description');
            $table->float('rate', 3, 2);
            $table->date('release_date');
            $table->float('ticket_price', 8, 2);
			$table->integer('currency_id')->unsigned();
			$table->integer('country_id')->unsigned();
            $table->string('photo');
            $table->timestamps();
            
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('currency_id')->references('id')->on('currencies');
			$table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
