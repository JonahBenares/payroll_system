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
        Schema::create('allowance_time', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('allowance_head_id')->contrained('allowance_head');
            $table->foreignId('allowance_detail_id')->contrained('allowance_detail');
            $table->date('duty_date')->nullable();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->float('time_hours',10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allowance_time');
    }
};
