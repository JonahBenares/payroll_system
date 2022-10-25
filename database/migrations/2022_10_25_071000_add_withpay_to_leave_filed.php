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
        Schema::table('leave_filed', function (Blueprint $table) {
            $table->integer('with_pay')->comment('1=with pay, 0=without pay');
            $table->float('pay_percentage', 10,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leave_filed', function (Blueprint $table) {
            //
        });
    }
};
