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
            $table->unsignedBigInteger('brand_score')->nullable();
            $table->foreign('brand_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('price_score')->nullable();
            $table->foreign('price_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('processor_score')->nullable();
            $table->foreign('processor_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('processor_type_score')->nullable();
            $table->foreign('processor_type_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('gpu_score')->nullable();
            $table->foreign('gpu_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('gpu_type_score')->nullable();
            $table->foreign('gpu_type_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('ram_score')->nullable();
            $table->foreign('ram_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('storage_type_score')->nullable();
            $table->foreign('storage_type_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('storage_size_score')->nullable();
            $table->foreign('storage_size_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('screen_size_score')->nullable();
            $table->foreign('screen_size_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('screen_resolution_score')->nullable();
            $table->foreign('screen_resolution_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('screen_refresh_rate_score')->nullable();
            $table->foreign('screen_refresh_rate_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('features_score')->nullable();
            $table->foreign('features_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('design_score')->nullable();
            $table->foreign('design_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('backlit_keyboard_score')->nullable();
            $table->foreign('backlit_keyboard_score')->references('id')->on('criterion_scores')->onDelete('set null');
            $table->unsignedBigInteger('unit_weight_score')->nullable();
            $table->foreign('unit_weight_score')->references('id')->on('criterion_scores')->onDelete('set null');
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
