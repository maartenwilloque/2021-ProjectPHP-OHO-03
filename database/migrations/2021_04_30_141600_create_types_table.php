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
            $table->timestamps();
        });
        //Insert Types
        DB::table('types')->insert(
            [
                [
                    'name' => 'Algemeen'
                ],
                [
                    'name' => 'Algemeen_Laptop'
                ],
                [
                    'name' => 'Vervoer_KM'
                ],
                [
                    'name' => 'Vervoer_Fiets'
                ],
                [
                    'name' => 'Vervoer_Euro'
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
