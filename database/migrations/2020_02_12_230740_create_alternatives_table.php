<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 70);
            $table->string('image', 50);
            $table->string('brand', 10);
            $table->integer('price');
            $table->string('processor', 100);
            $table->string('gpu', 70);
            $table->integer('ram', 2);
            $table->string('storage', 50);
            $table->string('display', 50);
            $table->double('unit_weight', 2, 1);
            $table->string('connectivity', 30);
            $table->text('ports');
            $table->text('features');
            $table->string('link', 100);
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
        Schema::dropIfExists('alternatives');
    }
}
