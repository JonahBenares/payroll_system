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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_id')->unique();
            $table->string('full_name');
            $table->string('emp_num');
            $table->integer('business_unit')->comment('1=CENPRI, 3=PROGEN');
            $table->boolean('supervisory')->default(false);
            $table->float('hourly_rate', 10, 4);
            $table->float('daily_rate', 10, 4);
            $table->float('bi_monthly_rate', 10, 4);
            $table->float('monthly_rate', 10, 4);
            $table->integer('emp_location');
            $table->integer('emp_category');
            $table->integer('hmo_dependents');
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('employees');
    }
};
