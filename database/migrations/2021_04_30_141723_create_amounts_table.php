<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id');// shorthand for $table->unsignedBigInteger('id');
            $table->float('amount',6,2);
            $table->float('remaining_amount',6,2)->default(0);
            $table->date('date')->default(date(now()));
            $table->timestamps();
            // Foreign key relation
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amounts');
    }
}
