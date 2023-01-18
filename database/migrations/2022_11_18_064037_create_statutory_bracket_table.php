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
            $table->foreignId('payslip_info_id')->references('id')->on('payslip_info');
            $table->float('salary_from', 10, 2)->nullable();
            $table->float('salary_to', 10, 2)->nullable();
            $table->float('deduction_amount', 10, 2)->nullable();
            $table->string('as_of')->nullable();
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
