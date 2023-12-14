<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('company', 60);
            $table->string('train_station_start');
            $table->string('train_station_last');
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->string('train_code', 12)->default('xxx####xxxxx');
            // colonna wagons meglio farla unsigned perchè non vogliamo accettare valori negativi
            $table->tinyInteger('wagons_number')->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
