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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->float('night_premium', 10, 4)->comment('percentage');
            $table->float('regular_allowance', 10, 4)->comment('exact amount');
            $table->float('OT_allowance', 10, 4)->comment('exact amount');
            $table->float('HMO_rate', 10, 4)->comment('exact amount');
            $table->float('regular_holiday', 10, 4)->comment('percentage');
            $table->float('special_holiday', 10, 4)->comment('percentage');
            $table->float('rest_day', 10, 4)->comment('percentage');
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
        Schema::dropIfExists('rates');
    }
};
