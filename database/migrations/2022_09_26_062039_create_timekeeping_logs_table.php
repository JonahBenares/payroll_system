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
        Schema::create('timekeeping_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->date('log_date');
            $table->string('log_type');
            $table->integer('undertime_mins');
            $table->integer('tardiness_mins');
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
        Schema::dropIfExists('timekeeping_logs');
    }
};
