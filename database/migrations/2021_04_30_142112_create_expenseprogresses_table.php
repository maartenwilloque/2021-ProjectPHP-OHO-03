<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseprogressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenseprogresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('inspector_id')->nullable()->unsigned();// Relation with met user table
            $table->foreignId('status_id');
            $table->text('note')->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inspector_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('expenseprogresses');
    }
}
