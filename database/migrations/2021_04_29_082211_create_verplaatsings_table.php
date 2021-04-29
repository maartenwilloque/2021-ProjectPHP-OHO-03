<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerplaatsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verplaatsings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onkost_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('vervoermiddel_id');
            $table->text('reden');
            $table->date('datum')->default(date(now()));
            $table->float('afstand',3,1);
            $table->string('eenheid')->default('Km');
            $table->timestamps();
            // Foreign key relation
            $table->foreign('onkost_id')->references('id')->on('onkosts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vervoermiddel_id')->references('id')->on('vervoersmiddels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verplaatsings');
    }
}
