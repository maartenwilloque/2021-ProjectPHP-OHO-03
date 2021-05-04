<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        //insert statuses
        DB::table('statuses')->insert(
            [
                [
                    'name' => 'Concept'
                ],
                [
                    'name' => 'Ingediend'
                ],
                [
                    'name' => 'Goedgekeurd KP'
                ],
                [
                    'name' => 'Afgekeurd KP'
                ],
                [
                    'name' => 'Goedgekeurd FIN'
                ],
                [
                    'name' => 'Afgekeurd FIN'
                ]
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
        Schema::dropIfExists('statuses');
    }
}
