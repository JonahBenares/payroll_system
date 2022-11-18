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
            $table->date('date_absent')->nullable();
            $table->float('undertime_mins',10,2)->nullable();
            $table->integer('filed')->nullable();
            $table->date('date_filed')->nullable();
            $table->integer('with_pay')->nullable();
            $table->float('pay_percentage',10,2)->nullable();
            $table->string('leave_type')->nullable();
		    $table->boolean('cancelled')->default(0);
            $table->date('cancel_date')->nullable();
            $table->string('cancel_remarks')->nullable();
            $table->integer('cancelled_by')->default(0);
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
