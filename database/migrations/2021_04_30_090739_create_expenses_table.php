<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cost_center_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('user_id');
            $table->foreignId('parameter_type_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('cost_center_id')->references('id')->on('cost_centers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parameter_type_id')->references('id')->on('parameter_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
