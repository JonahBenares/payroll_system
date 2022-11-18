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
        Schema::create('tardiness_rate', function (Blueprint $table) {
            $table->id();
            $table->integer('minute_from')->unsigned();
            $table->integer('minute_to')->unsigned();
            $table->float('deduction_percent')->unsigned();
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
        Schema::dropIfExists('tardiness_rate');
    }
};
