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
            $table->string('icon');
            $table->string('color');
            $table->timestamps();
        });
        //insert statuses
        DB::table('statuses')->insert(
            [
                [
                    'name' => 'Concept',
                    'icon' => 'fas fa-folder-plus',
                    'color' => '#f04c25'
                ],
                [
                    'name' => 'Ingediend',
                    'icon' => 'fas fa-sign-in-alt',
                    'color' => '#8F00FF'
                ],
                [
                    'name' => 'Goedgekeurd KP',
                    'icon' => 'far fa-thumbs-up',
                    'color' => '#78a346'
                ],
                [
                    'name' => 'Afgekeurd KP',
                    'icon' => 'far fa-check-square',
                    'color' => '#DC143C'
                ],
                [
                    'name' => 'Goedgekeurd FIN',
                    'icon' => 'far fa-hand-paper',
                    'color' => '#78a346'
                ],
                [
                    'name' => 'Afgekeurd FIN',
                    'icon' => 'fas fa-ban',
                    'color' => '#DC143C'
                ],
                [
                    'name' => 'Ingediend NA',
                    'icon' => 'fas fa-sign-in-alt',
                    'color' => '#8F00FF'
                ],
                [
                    'name' => 'Afgerond',
                    'icon' => 'fas fa-euro-sign',
                    'color' => '#78a346'
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
