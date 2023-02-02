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
        Schema::table('change_schedule', function (Blueprint $table) {
            $table->integer('cancel');
            $table->text('cancel_reason')->nullable();
            $table->date('cancel_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('change_schedule', function (Blueprint $table) {
            //
        });
    }
};
