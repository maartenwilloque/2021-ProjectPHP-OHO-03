<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenselinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenselines', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('expense_id');
            $table->date('date')->default(now());
            $table->foreignId('type_id');
            $table->string('attachment')->nullable();
            $table->float('distance',6,2)->nullable();
            $table->float('amount',6,2)->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenselines');
    }
}
