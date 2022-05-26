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
        Schema::create('peripherals', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->integer('mouse');
            $table->integer('keyboard');
            $table->integer('bag');
            $table->integer('power_supply');
            $table->integer('dock');
            $table->integer('dock_power_supply');
            $table->integer('monitor');
            $table->bigInteger('last_transaction_id')->nullable();
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
        Schema::dropIfExists('peripherals');
    }
};
