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
        Schema::create('swap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->integer('personal_id');
            $table->date('file_date',50)->nullable();
            $table->date('shift_from_rd')->nullable();
            $table->date('shift_to_duty')->nullable();
		    $table->date('shift_from_duty')->nullable();
            $table->date('shift_to_rd')->nullable();
		    $table->boolean('cancelled')->default(0);
            $table->date('cancel_date')->nullable();
            $table->string('cancel_remarks')->nullable();
            $table->integer('cancelled_by')->default(0);
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
        Schema::dropIfExists('swap');
    }
};
