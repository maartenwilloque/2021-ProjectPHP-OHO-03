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
                'userRol' => "none",
                'domein' => "Login",
                'vraag' => "registreren",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'domein' => "Profiel/paswoord",
                'vraag' => "Hoe Profiel of paswoord updaten?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'domein' => "Onkosten Algemeen",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'domein' => "Onkosten Fiets",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Active",
                'domein' => "Onkosten Laptop",
                'vraag' => "Hoe invoeren?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Approver",
                'domein' => "Onkosten Behandelen",
                'vraag' => "Hoe behandelen?",
                'antwoord' => "bla bla",
            ]);
        FaqTabel::create(
            [
                'userRol' => "Finacieel medewerker",
                'domein' => "Onkosten Behandelen",
                'vraag' => "Hoe behandelen?",
                'antwoord' => "bla bla",
            ]);
    }
}
