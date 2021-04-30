<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('transport_id');
            $table->text('reason');
            $table->date('date')->default(date(now()));
            $table->float('distance',3,1);
            $table->string('unit')->default('Km');
            $table->timestamps();
            // Foreign key relation
            $table->foreign('expense_id')->references('id')->on('expenses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relocations');
    }
}
