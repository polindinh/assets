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
        Schema::create('pc_specifications', function (Blueprint $table) {
            $table->id();
            $table->string('cpu');
            $table->string('gpu');
            $table->integer('memory');
            $table->integer('storage');
            $table->boolean('is_ssd')->default(false);
            $table->boolean('wifi_enabled')->default(false);
            $table->boolean('wwan_enabled')->default(false);
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
        Schema::dropIfExists('pc_specifications');
    }
};
