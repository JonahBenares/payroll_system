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
        Schema::create('leave_filing_head', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->string('pay_period')->nullable();
            $table->integer('absences')->nullable();
            $table->integer('ftl')->nullable();
            $table->integer('undertime')->nullable();
            $table->float('total_undertime',10,2)->nullable();
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
        Schema::dropIfExists('leave_filing_head');
    }
};
