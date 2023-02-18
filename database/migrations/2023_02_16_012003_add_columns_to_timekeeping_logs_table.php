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
            $table->string('month_year')->nullable()->after('personal_id');
            $table->string('period')->nullable()->after('month_year');
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
