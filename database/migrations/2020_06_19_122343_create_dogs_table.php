<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name');
            $table->char('breed');
            $table->integer('age');
            $table->double('height', 5, 2);
            $table->char('fur');
            $table->date('date');
            $table->longText('description');
            $table->boolean('vaccinated');
            $table->boolean('cats');
            $table->boolean('dogs');
            $table->boolean('castrated');
            $table->boolean('commands');
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
