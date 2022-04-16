<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('shipping_zones_table', function (Blueprint $table) {
            $table->id();
            $table->string('zone_name')->unique();
            $table->bigInteger('zone_order')->default(0);
            $table->timestamps();
        });

        Schema::create('shipping_zone_locations_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('shipping_zone_locations_table');
            $table->unsignedBigInteger('zone_id');
            $table->foreign('zone_id')->references('id')->on('shipping_zones_table');
            $table->string('location_code');
            $table->string('location_type');
            $table->string('location_name');
            $table->timestamps();
        });

        Schema::create('shipping_zone_methods_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zone_id');
            $table->foreign('zone_id')->references('id')->on('shipping_zones_table');
            $table->unsignedBigInteger('location_id')->nullable();;
            $table->foreign('location_id')->references('id')->on('shipping_zone_locations_table');
            $table->string('method_name');
            $table->string('method_type');
            $table->bigInteger('method_value');
            $table->bigInteger('method_order')->default(0);
            $table->tinyInteger('is_enabled')->default(1);
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
        Schema::dropIfExists('shipping_zones_table');
        Schema::dropIfExists('shipping_zones_methods_table');
        Schema::dropIfExists('shipping_zone_locations_table');
    }

};
