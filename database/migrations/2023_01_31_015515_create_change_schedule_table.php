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
        Schema::create('change_schedule', function (Blueprint $table) {
            $table->id();
            $table->date('date_applied')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
            $table->integer('personal_id');
            $table->string('schedule_code')->nullable();
            $table->string('month_year')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('change_schedule');
    }
};
