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
        Schema::table('ot_detail', function (Blueprint $table) {
            $table->float('RD_SH_NP', 10,2)->nullable();
            $table->float('RD_SH_NP_HR', 10,2)->nullable();
            $table->float('RD_SH_NP_OT', 10,2)->nullable();
            $table->float('RD_SH_NP_OT_HR', 10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ot_detail', function (Blueprint $table) {
            //
        });
    }
};
