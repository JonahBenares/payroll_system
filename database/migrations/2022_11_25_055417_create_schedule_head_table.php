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
        Schema::create('schedule_head', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->string('schedule_code')->nullable();
            $table->string('month_year')->nullable();
            $table->string('schedule_type')->nullable();
            $table->integer('alternate')->nullable()->default(0);
            $table->string('alternate_week')->nullable();
            $table->string('alternate_rd')->nullable();
            $table->string('rd1_day')->nullable();
            $table->string('rd2_day')->nullable();
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
        Schema::dropIfExists('schedule_head');
    }
};
