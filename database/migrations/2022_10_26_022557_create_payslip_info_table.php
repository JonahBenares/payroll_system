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
        Schema::create('payslip_info', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('pay_type')->comment('1=adjustment, 2=less GP, 3 =deductions');
            $table->integer('editable')->comment('1=editable, 0=not editable');
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
        Schema::dropIfExists('payslip_info');
    }
};
