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
            $table->dropColumn('log_type');
            $table->dropColumn('undertime_mins');
            $table->dropColumn('tardiness_mins');
            $table->string('time_in')->nullable()->after('log_date');
            $table->string('time_out')->nullable()->after('time_in');
            $table->string('break_in')->nullable()->after('time_out');
            $table->string('break_out')->nullable()->after('break_in');
            $table->string('total_time')->nullable()->after('break_out');
            $table->string('total_breaktime')->nullable()->after('total_time');
            $table->string('overall_time')->nullable()->after('total_breaktime');
            $table->integer('incomplete')->default('0')->after('overall_time');
            $table->string('incomplete_time_desc')->nullable()->after('incomplete');
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
            $table->string('log_type')->nullable();
            $table->integer('undertime_mins')->nullable();
            $table->integer('tardiness_mins')->nullable();
        });
    }
};
