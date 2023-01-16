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
        Schema::create('allowance_head', function (Blueprint $table) {
            $table->id();
            $table->date('from_date',50)->nullable();
            $table->date('to_date',50)->nullable();
            $table->foreignId('allowance_id')->constrained;
            $table->foreignId('bu_id')->constrained('business_unit');
<<<<<<< HEAD:database/migrations/2022_12_09_064334_create_allowance_head_table.php
=======
            $table->string('company')->nullable();
            $table->string('pay_to')->nullable();
            $table->string('apv_no')->nullable();
            $table->date('rfd_date')->nullable();
            $table->date('due_date')->nullable();
>>>>>>> e1fdbac5381f34b2772d369b2089ea74ca4cf791:database/migrations/2022_11_18_064103_create_allowance_head_table.php
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
        Schema::dropIfExists('allowance_head');
    }
};
