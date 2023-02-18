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
        Schema::table('timekeeping_logs', function (Blueprint $table) {
            $table->integer('night_shift')->default('0')->after('overall_time');
            $table->float('nd_hours',10,2)->default('0')->after('night_shift');
            $table->float('regular_hours',10,2)->default('0')->comment('not night shift hours if night shift')->after('nd_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timekeeping_logs', function (Blueprint $table) {
            //
        });
    }
};
