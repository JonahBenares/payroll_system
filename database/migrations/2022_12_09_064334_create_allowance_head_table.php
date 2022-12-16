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
        Schema::create('allowance_head', function (Blueprint $table) {
            $table->id();
            $table->date('from_date',50)->nullable();
            $table->date('to_date',50)->nullable();
            $table->foreignId('allowance_id')->constrained;
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
        Schema::dropIfExists('allowance_head');
    }
};
