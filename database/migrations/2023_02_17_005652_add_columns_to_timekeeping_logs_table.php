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
            $table->integer('rest_day')->default('0')->after('regular_hours');
            $table->integer('holiday')->default('0')->after('rest_day');
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
