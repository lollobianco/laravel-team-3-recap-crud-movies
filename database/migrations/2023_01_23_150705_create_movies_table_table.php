<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('movies_table', function (Blueprint $table) {
            // $table->id();
            // $table->string('title', 50);
            // $table->string('original_title', 50)->nullable();
            // $table->string('nationality', 50);
            // $table->string('date');
            // $table->float('vote');
            // $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_table');
    }
}
