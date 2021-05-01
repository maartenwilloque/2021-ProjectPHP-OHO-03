<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_types', function (Blueprint $table) {
            $table->id();
            $table->float('value',6,2);
            $table->foreignId('type_id');
            $table->date('from_date')->default(date(now()));
            $table->date('to_date')->default(date(now()));
            $table->timestamps();
            // Foreign key relation
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
        Schema::dropIfExists('parameter_types');
    }
}
