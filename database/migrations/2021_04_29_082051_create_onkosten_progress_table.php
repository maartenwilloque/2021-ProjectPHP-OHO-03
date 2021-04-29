<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnkostenProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onkosten_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onkost_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('keurder_id');// Relatie met user table
            $table->foreignId('status_id');
            $table->text('opmerking')->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('onkost_id')->references('id')->on('onkosts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('keurder_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onkosten_progress');
    }
}
