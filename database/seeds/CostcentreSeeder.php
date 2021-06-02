<?php

use App\Costcentre;
use Illuminate\Database\Seeder;

class CostcentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3BWGB01000',
            'description' => 'BW Professionalisering Personeel',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3ZZGB03040',
            'description' => 'CreateCave',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3EIGB00000',
            'description' => 'EI Beleid en Opleidingsinitiatieven',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3EMGB00000',
            'description' => 'EM Beleid en Opleidingsinitiatieven',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3ETGB00000',
            'description' => 'ET Beleid en Opleidingsinitiatieven',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3ETIGT02364',
            'description' => 'ITF Project 4.0',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3EZZGB03037',
            'description' => 'Labo Bouw: Verbruik',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3EZZGT03030',
            'description' => 'Labo Mechanica: Externe dienstverlening',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3BWGT02037',
            'description' => 'More BIM II (BTW)',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3EMGV01922',
            'description' => 'Opleiding hernieuwbare energie',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3BWGE01159',
            'description' => 'Project Realisatie eigen ontw.',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3ZZGE02254',
            'description' => 'Projectwerk EM',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3TIGE12000',
            'description' => 'TI Studentenrekening',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3BWGE01247',
            'description' => 'Uitstap 3 Bouw',
            'created_at' => now(),
        ]);
        Costcentre::create([
            'responsible' => 5,
            'costcentre' => 'WU3TIGE00094',
            'description' => 'VLIR-IUS project Mekele',
            'created_at' => now(),
        ]);
    }
}
