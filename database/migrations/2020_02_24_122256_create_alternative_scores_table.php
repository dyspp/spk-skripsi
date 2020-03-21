<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativeScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternative_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alternative_id');
            $table->foreign('alternative_id')->references('id')->on('alternatives')->onDelete('cascade');
            $table->unique('alternative_id');
            // Processor
            $table->unsignedBigInteger('processor_manufacturer')->nullable();
            $table->foreign('processor_manufacturer')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('processor_class')->nullable();
            $table->foreign('processor_class')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('processor_base_speed')->nullable();
            $table->foreign('processor_base_speed')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('processor_core')->nullable();
            $table->foreign('processor_core')->references('id')->on('criterion_scores')->onDelete('set null');
            // GPU
            $table->unsignedBigInteger('gpu_manufacturer')->nullable();
            $table->foreign('gpu_manufacturer')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('gpu_class')->nullable();
            $table->foreign('gpu_class')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('gpu_memory')->nullable();
            $table->foreign('gpu_memory')->references('id')->on('criterion_scores')->onDelete('set null');
            // Memory (RAM)
            $table->unsignedBigInteger('ram')->nullable();
            $table->foreign('ram')->references('id')->on('criterion_scores')->onDelete('set null');
            // Storage
            $table->unsignedBigInteger('storage_type')->nullable();
            $table->foreign('storage_type')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('storage_size')->nullable();
            $table->foreign('storage_size')->references('id')->on('criterion_scores')->onDelete('set null');
            // Price
            $table->unsignedBigInteger('price')->nullable();
            $table->foreign('price')->references('id')->on('criterion_scores')->onDelete('set null');
            // Display
            $table->unsignedBigInteger('display_size')->nullable();
            $table->foreign('display_size')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('display_resolution')->nullable();
            $table->foreign('display_resolution')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('display_refresh_rate')->nullable();
            $table->foreign('display_refresh_rate')->references('id')->on('criterion_scores')->onDelete('set null');
            // Brand
            $table->unsignedBigInteger('brand')->nullable();
            $table->foreign('brand')->references('id')->on('criterion_scores')->onDelete('set null');
            // Unit Weight
            $table->unsignedBigInteger('unit_weight')->nullable();
            $table->foreign('unit_weight')->references('id')->on('criterion_scores')->onDelete('set null');
            // Design
            $table->unsignedBigInteger('design')->nullable();
            $table->foreign('design')->references('id')->on('criterion_scores')->onDelete('set null');
            // Features
            $table->unsignedBigInteger('features')->nullable();
            $table->foreign('features')->references('id')->on('criterion_scores')->onDelete('set null');
            // Backlit Keyboard
            $table->unsignedBigInteger('backlit_keyboard')->nullable();
            $table->foreign('backlit_keyboard')->references('id')->on('criterion_scores')->onDelete('set null');
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
        Schema::dropIfExists('alternative_scores');
    }
}
