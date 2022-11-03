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
        Schema::create('leave_filing_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_filing_head_id')->contrained('leave_filing_head');
            $table->date('date_absent');
            $table->float('undertime_mins');
            $table->date('date_filed');
            $table->integer('with_pay');
            $table->float('pay_percentage');
            $table->string('leave_type');
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
        Schema::dropIfExists('leave_filing_detail');
    }
};
