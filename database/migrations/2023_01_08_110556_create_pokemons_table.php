<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type1');
            $table->string('type2');
            $table->smallInteger('total');
            $table->smallInteger('hp');
            $table->smallInteger('attack');
            $table->smallInteger('defense');
            $table->smallInteger('sp_atk');
            $table->smallInteger('sp_def');
            $table->smallInteger('speed');
            $table->tinyInteger('generation');
            $table->tinyInteger('legendary');
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
        Schema::dropIfExists('pokemons');
    }
};
