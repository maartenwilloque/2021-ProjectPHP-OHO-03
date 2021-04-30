<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_progresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('inspector_id');// Relation with met user table
            $table->foreignId('parameter_status_id');
            $table->text('note')->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inspector_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parameter_status_id')->references('id')->on('parameter_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_progresses');
    }
}
