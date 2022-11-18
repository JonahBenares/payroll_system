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
            $table->string('full_name')->nullable();
            $table->string('emp_num')->nullable();
		    $table->integer('department')->nullable();
            $table->integer('business_unit')->comment('1=CENPRI, 3=PROGEN')->nullable();
            $table->boolean('supervisory')->default(false)->nullable();
            $table->float('hourly_rate', 10, 4)->nullable();
            $table->float('daily_rate', 10, 4)->nullable();
            $table->float('bi_monthly_rate', 10, 4)->nullable();
            $table->float('monthly_rate', 10, 4)->nullable();
            $table->integer('emp_location')->nullable();
            $table->integer('emp_category')->nullable();
		    $table->string('salary_type',50)->nullable();
            $table->integer('hmo_dependents')->nullable();
		    $table->float('pagibig_rate', 10,2)->nullable();
		    $table->integer('accounting_entry_id')->nullable();
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
