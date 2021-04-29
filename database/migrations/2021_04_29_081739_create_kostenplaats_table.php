<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostenplaatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kostenplaats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verantwoordelijke');// shorthand for $table->unsignedBigInteger('id');
            $table->string('kostenplaats',13)->unique();
            $table->string('omschrijving')->unique();
            $table->timestamps();
            // Foreign key relation
            $table->foreign('verantwoordelijke')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        // Insert some users (inside the up-function!)
        DB::table('kostenplaats')->insert(
            [
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3EIGE02274',
                    'omschrijving' => 'Buitenlandse reis',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3BWGB00000',
                    'omschrijving' => 'BW Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3BWGB01000',
                    'omschrijving' => 'BW Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3BWGE12000',
                    'omschrijving' => 'BW Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3BEMGV01101',
                    'omschrijving' => 'CNO',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3ZZGZ88888',
                    'omschrijving' => 'Corona unit 3',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3ZZGB03040',
                    'omschrijving' => 'CreateCave',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3ZZGT02186',
                    'omschrijving' => 'Cybersecurity',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3EIGB00000',
                    'omschrijving' => 'EI Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3EIGB01000',
                    'omschrijving' => 'EI Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EIGE12000',
                    'omschrijving' => 'EI Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3EMGB00000',
                    'omschrijving' => 'EM Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3EMGB01000',
                    'omschrijving' => 'EM Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EMGE12000',
                    'omschrijving' => 'EM Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3ETGB00000',
                    'omschrijving' => 'ET Beleid en Opleidingsinitiatieven',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3ETGB01000',
                    'omschrijving' => 'ET Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3ETGE12000',
                    'omschrijving' => 'ET Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3ETIGT02364',
                    'omschrijving' => 'ITF Project 4.0',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3BWGD02396',
                    'omschrijving' => 'KIEM',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EZZGB03031',
                    'omschrijving' => 'Labo Automatisatie: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3EZZGB03037',
                    'omschrijving' => 'Labo Bouw: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3EZZGB03033',
                    'omschrijving' => 'Labo Elektriciteit: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EZZGB03032',
                    'omschrijving' => 'Labo Electronica: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3EZZGT03030',
                    'omschrijving' => 'Labo Mechanica: Externe dienstverlening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3EZZGB03030',
                    'omschrijving' => 'Labo Mechanica: Verbruik',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3BWGR02037',
                    'omschrijving' => 'More BIM II',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3BWGT02037',
                    'omschrijving' => 'More BIM II (BTW)',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3TIGE01519',
                    'omschrijving' => 'Onthaaldagen Toeg.Info',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EMGE01096',
                    'omschrijving' => 'OOF VAK plus',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3EMGV01922',
                    'omschrijving' => 'Opleiding hernieuwbare energie',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3ZZGZ80000',
                    'omschrijving' => 'Overhead Unit 3',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EMGV00723',
                    'omschrijving' => 'EG Energiecoördinator',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3BWGE01159',
                    'omschrijving' => 'Project Realisatie eigen ontw.',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3BWGT01987',
                    'omschrijving' => 'Project Realisatie eigen ontwerp',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3EMGE00128',
                    'omschrijving' => 'Projectweek EM',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3ZZGE02254',
                    'omschrijving' => 'Projectwerk EM',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3ZZZV00633',
                    'omschrijving' => 'RTC',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3TIGE12001',
                    'omschrijving' => 'Stud. rekening IT Factory LPI',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3TIGB00000',
                    'omschrijving' => 'TI Beleid en Opleidingintiatieven ',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3TIGB01000',
                    'omschrijving' => 'TI Professionalisering Personeel',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3TIGE12000',
                    'omschrijving' => 'TI Studentenrekening',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3ZZGB00000',
                    'omschrijving' => 'U3 Beleid en Opleidingintiatieven ',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3ZZGB02000',
                    'omschrijving' => 'U3 Gastsprekers',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3BWGE01247',
                    'omschrijving' => 'Uitstap 3 Bouw',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3ZZGZ60000',
                    'omschrijving' => 'Unit 3 Community Stuvo Activiteiten',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 2,
                    'kostenplaats' => 'WU3BWGE01976',
                    'omschrijving' => 'VDAB-Studenten Bouw',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 3,
                    'kostenplaats' => 'WU3TIGE00094',
                    'omschrijving' => 'VLIR-IUS project Mekele',
                    'created_at' => now(),
                ],
                [
                    'verantwoordelijke' => 1,
                    'kostenplaats' => 'WU3TIGV00160',
                    'omschrijving' => 'Vorming en dienstverlening TD/Informatica',
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
        Schema::dropIfExists('kostenplaats');
    }
}
