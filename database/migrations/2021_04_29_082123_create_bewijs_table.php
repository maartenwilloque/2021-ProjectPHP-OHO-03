<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBewijsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bewijs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onkost_id');// shorthand for $table->unsignedBigInteger('id');
            $table->string('bewijs'); // string value documenten worden opgeslagen op server
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
        Schema::dropIfExists('bewijs');
    }
}
