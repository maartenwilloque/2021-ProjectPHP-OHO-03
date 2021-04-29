<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedragsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onkost_id');// shorthand for $table->unsignedBigInteger('id');
            $table->float('bedrag',6,2);
            $table->float('resterend_bedrag',6,2)->default(0);
            $table->timestamps();
            // Foreign key relation
            $table->foreign('onkost_id')->references('id')->on('onkosts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bedrags');
    }
}
