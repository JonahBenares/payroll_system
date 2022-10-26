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
        Schema::create('allowance_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('allowance_head_id')->contrained('allowance_head');
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->date('duty_date');
            $table->string('time_in');
            $table->string('time_out');
            $table->float('total_hours', 10, 2);
            $table->float('tardiness', 10, 2);
            $table->float('undertime', 10, 2);
            $table->float('absences', 10, 2);
            $table->float('balance_hours', 10, 2);
            $table->float('allowance_amount', 10, 2);
            $table->float('OT_allowance_amount', 10, 2);
            $table->float('total_allowance', 10, 2);
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
        Schema::dropIfExists('allowance_detail');
    }
};
