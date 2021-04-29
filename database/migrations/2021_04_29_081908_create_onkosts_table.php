<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnkostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onkosts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kostenplaats_id');// shorthand for $table->unsignedBigInteger('id');
            $table->foreignId('user_id');
            $table->foreignId('type_id');
            $table->string('naam');
            $table->text('beschrijving')->nullable();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('kostenplaats_id')->references('id')->on('kostenplaats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('onkosts');
    }
}
