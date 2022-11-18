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
        Schema::create('leave_filed', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->date('date_leave')->nullable();
            $table->date('date_filed')->nullable();
		    $table->string('undertime_mins')->nullable();
            $table->string('leave_type')->comment('absent, ftl or undertime')->nullable();
            $table->integer('with_pay')->comment('1=with pay, 0=without pay')->nullable();
            $table->float('pay_percentage', 10,2)->nullable();
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
        Schema::dropIfExists('leave_filed');
    }
};
