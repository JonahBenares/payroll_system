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
        Schema::create('adjustment_head', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_id');
            $table->foreignId('employee_id')->constrained('employees');
            $table->integer('location_id')->constrained('locations');
            $table->string('period_type')->nullable();
            $table->string('month_year')->nullable();
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
        Schema::dropIfExists('adjustment_head');
    }
};
