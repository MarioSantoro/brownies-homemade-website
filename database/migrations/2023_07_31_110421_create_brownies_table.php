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
        Schema::create('brownies', function (Blueprint $table) {
            $table->id();
            $table->string('type', 21);
            $table->text('description');
            $table->text('thumb');
            $table->text('ingredients');
            $table->smallInteger('kcal');
            $table->tinyInteger('fat');
            $table->tinyInteger('carb');
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
        Schema::dropIfExists('brownies');;
    }
};
