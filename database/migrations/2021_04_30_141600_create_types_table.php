<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->float('value', 6, 2)->nullable();

            $table->timestamps();
        });
        //Insert Types
        DB::table('types')->insert(
            [
                [
                    'name' => 'Algemeen',
                    'value'=> 1
                ],
                [
                    'name' => 'Algemeen_Laptop',

                    'value'=> 800


                ],
                [
                    'name' => 'Vervoer_KM',



                    'value'=> 0.50
                ],
                [
                    'name' => 'Vervoer_Fiets',
                    'value'=> 0.15


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
        Schema::dropIfExists('types');
    }
}
