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
        Schema::create('statutory_bracket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deduction_id')->constrained();
            $table->float('salary_from', 10, 2);
            $table->float('salary_to', 10, 2);
            $table->float('deduction_amount', 10, 2);
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
        Schema::dropIfExists('statutory_bracket');
    }
};