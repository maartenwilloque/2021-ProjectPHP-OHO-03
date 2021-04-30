<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostcentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costcentres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responsible');// shorthand for $table->unsignedBigInteger('id');
            $table->string('costcentre',13)->unique();
            $table->string('description')->unique();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('responsible')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        // Insert some users (inside the up-function!)
        DB::table('costcentres')->insert(
            [
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3EIGE02274',
                    'description' => 'Buitenlandse reis',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3BWGB00000',
                    'description' => 'BW Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3BWGB01000',
                    'description' => 'BW Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3BWGE12000',
                    'description' => 'BW Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3BEMGV01101',
                    'description' => 'CNO',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3ZZGZ88888',
                    'description' => 'Corona unit 3',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3ZZGB03040',
                    'description' => 'CreateCave',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3ZZGT02186',
                    'description' => 'Cybersecurity',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3EIGB00000',
                    'description' => 'EI Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3EIGB01000',
                    'description' => 'EI Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EIGE12000',
                    'description' => 'EI Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3EMGB00000',
                    'description' => 'EM Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3EMGB01000',
                    'description' => 'EM Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EMGE12000',
                    'description' => 'EM Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3ETGB00000',
                    'description' => 'ET Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3ETGB01000',
                    'description' => 'ET Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3ETGE12000',
                    'description' => 'ET Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3ETIGT02364',
                    'description' => 'ITF Project 4.0',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3BWGD02396',
                    'description' => 'KIEM',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EZZGB03031',
                    'description' => 'Labo Automatisatie: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3EZZGB03037',
                    'description' => 'Labo Bouw: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3EZZGB03033',
                    'description' => 'Labo Elektriciteit: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EZZGB03032',
                    'description' => 'Labo Electronica: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3EZZGT03030',
                    'description' => 'Labo Mechanica: Externe dienstverlening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3EZZGB03030',
                    'description' => 'Labo Mechanica: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3BWGR02037',
                    'description' => 'More BIM II',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3BWGT02037',
                    'description' => 'More BIM II (BTW)',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3TIGE01519',
                    'description' => 'Onthaaldagen Toeg.Info',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EMGE01096',
                    'description' => 'OOF VAK plus',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3EMGV01922',
                    'description' => 'Opleiding hernieuwbare energie',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3ZZGZ80000',
                    'description' => 'Overhead Unit 3',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EMGV00723',
                    'description' => 'EG Energiecoördinator',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3BWGE01159',
                    'description' => 'Project Realisatie eigen ontw.',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3BWGT01987',
                    'description' => 'Project Realisatie eigen ontwerp',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3EMGE00128',
                    'description' => 'Projectweek EM',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3ZZGE02254',
                    'description' => 'Projectwerk EM',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3ZZZV00633',
                    'description' => 'RTC',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3TIGE12001',
                    'description' => 'Stud. rekening IT Factory LPI',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3TIGB00000',
                    'description' => 'TI Beleid en Opleidingintiatieven ',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3TIGB01000',
                    'description' => 'TI Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3TIGE12000',
                    'description' => 'TI Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3ZZGB00000',
                    'description' => 'U3 Beleid en Opleidingintiatieven ',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3ZZGB02000',
                    'description' => 'U3 Gastsprekers',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3BWGE01247',
                    'description' => 'Uitstap 3 Bouw',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3ZZGZ60000',
                    'description' => 'Unit 3 Community Stuvo Activiteiten',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 2,
                    'costcentre' => 'WU3BWGE01976',
                    'description' => 'VDAB-Studenten Bouw',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 3,
                    'costcentre' => 'WU3TIGE00094',
                    'description' => 'VLIR-IUS project Mekele',
                    'created_at' => now(),
                ],
                [
                    'responsible' => 1,
                    'costcentre' => 'WU3TIGV00160',
                    'description' => 'Vorming en dienstverlening TD/Informatica',
                    'created_at' => now(),
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
        Schema::dropIfExists('costcentres');
    }
}
