<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parameternaam_id');// shorthand for $table->unsignedBigInteger('id');
            $table->float('waarde',6,2);
            $table->date('van_datum')->default(date(now()));
            $table->date('tot_datum')->default(date(now()));
            $table->timestamps();
            // Foreign key relation
            $table->foreign('parameternaam_id')->references('id')->on('parameternaams')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters');
    }
}
