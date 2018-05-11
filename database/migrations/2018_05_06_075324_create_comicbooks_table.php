<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comicbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('issue_no');
            $table->text('description');
            $table->text('avg_rating');
            $table->dateTime('published_on');
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
        Schema::dropIfExists('comicbooks');
    }
}
