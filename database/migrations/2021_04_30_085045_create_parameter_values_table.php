<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parameter_name_id');// shorthand for $table->unsignedBigInteger('id');
            $table->float('value',6,2);
            $table->date('from_date')->default(date(now()));
            $table->date('to_date')->default(date(now()));
            $table->timestamps();
            // Foreign key relation
            $table->foreign('parameter_name_id')->references('id')->on('parameter_names')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameter_values');
    }
}
