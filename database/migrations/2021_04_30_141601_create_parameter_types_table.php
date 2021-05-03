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
        DB::table('parameter_types')->insert(
            [
                [
                    'value'=> 800,
                    'type_id'=> 1,
                    'from_date'=> date_create_from_format('d-m-Y','01-01-2000'),
                    'to_date'=> now(),
                ],
                [
                    'value'=> 0.50,
                    'type_id'=> 2,
                    'from_date'=> date_create_from_format('d-m-Y','01-01-2000'),
                    'to_date'=> now(),
                ],
                [
                    'value'=> 0.15,
                    'type_id'=> 3,
                    'from_date'=> date_create_from_format('d-m-Y','01-01-2000'),
                    'to_date'=> now(),
                ],
            ]
        );
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
