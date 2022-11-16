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
        Schema::table('swap', function (Blueprint $table) {
            $table->boolean('cancelled')->default(0);
            $table->string('cancel_date');
            $table->string('cancel_remarks');
            $table->integer('cancelled_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('swap', function (Blueprint $table) {
            //
        });
    }
};
