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
            $table->string('undertime_mins');
            $table->string('leave_type')->comment('absent, ftl or undertime');
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
