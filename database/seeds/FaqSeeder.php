<?php

use App\FaqTabel;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqTabel::create(
            [
                'userRol' => "Active",
                'vraag' => "Hoe Profiel of paswoord updaten?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Approver",
                'vraag' => "Hoe behandelen?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Finacieel medewerker",
                'vraag' => "Hoe behandelen?",
                'antwoord' => "bla bla",
            ]);
    }
}
