<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaLivrosTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros_tags', function (Blueprint $table) {
            $table->integer('livros_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            
        });

        Schema::table('livros_tags', function (Blueprint $table) {
            $table->foreign('livros_id')->references('id')->on('livros');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livros_tags');
    }
}
