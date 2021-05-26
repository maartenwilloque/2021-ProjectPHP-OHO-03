<?php

use App\Expense;
use App\Expenseline;
use App\Expenseprogress;
use Illuminate\Database\Seeder;

class ExpenselineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('nl_BE');
        for ($i = 0; $i < 500; $i++) {
            $expenseid = $i + 1;
            $costcentre = (rand(1, 100) <= 25) ? 1 : rand(2, 48);
            $userid = rand(1, 50);

            Expense::create([
                'costcentre_id' => $costcentre,
                'user_id' => $userid,
                'name' => 'Algemeen',
                'date' => now(),
                'description' => $faker->sentence
            ]);
            $expenselinescounter = rand(1, 8);
            $typeid = rand(1, 4);
            switch ($expenselinescounter) {
                case 1:
                    $date = $faker->dateTimeBetween('-1 months', 'now');

                    switch ($typeid) {
                        case 1:
                            Expenseline::create([
                                'description' => $faker->randomElement(['bloemen', 'eten', 'cadeau', 'materiaal', 'excursie']),
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'attachment' => 'www.google.be',
                                'amount' => rand(25, 200)
                            ]);
                            break;
                        case 4:
                            $distance = rand(10, 50);
                            Expenseline::create([
                                'description' => 'fiets',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'amount' => $distance * 0.15]);
                            break;
                        case 3:
                            $distance = rand(10, 50);
                            Expenseline::create([
                                'description' => $faker->randomElement(['klantbezoek', 'ophalen materiaal', 'stageplaats', 'excursie']),
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'attachment' => 'www.google.be',
                                'amount' => $distance * 0.15]);
                            break;
                        case 2:
                            $total = rand(400, 800);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'attachment' => 'www.google.be',
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'attachment' => 'www.google.be',
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'attachment' => 'www.google.be',
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'attachment' => 'www.google.be',
                                'amount' => $total / 4]);
                            $status = rand(2, 8);
                            if ($status != 2) {
                                $inspector = $faker->randomElement([3, 5]);
                                $note = $faker->sentence;
                            } else {
                                $inspector = null;
                                $note = '';
                            }

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);


                            break;

                    }

                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                    if ($typeid == 2) {
                        $status = rand(2, 8);
                        if ($status != 2) {
                            $inspector = $faker->randomElement([3, 5]);
                            $note = $faker->sentence;
                        } else {
                            $inspector = null;
                            $note = '';
                        }

                        Expenseprogress::create([
                            'expense_id' => $expenseid,
                            'inspector_id' => $inspector,
                            'status_id' => $status,
                            'note' => $note,

                        ]);
                        break;
                    }
                    $date = $faker->dateTimeBetween('-1 months', 'now');
                    for ($x = 2; $x < $expenselinescounter + 1; $x++) {
                        if ($typeid == 4) {
                            $distance = rand(10, 50);
                            Expenseline::create([
                                'description' => 'fiets',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'amount' => $distance * 0.15]);
                        } else {
                            $typeid = $faker->randomElement([1, 3,]);

                            switch ($typeid) {
                                case 1:
                                    Expenseline::create([
                                        'description' => $faker->randomElement(['bloemen', 'eten', 'cadeau', 'materiaal', 'excursie']),
                                        'expense_id' => $expenseid,
                                        'date' => $date,
                                        'type_id' => $typeid,
                                        'attachment' => 'www.google.be',
                                        'amount' => rand(25, 200)
                                    ]);
                                    break;
                                case 3:
                                    $distance = rand(10, 50);
                                    Expenseline::create([
                                        'description' => $faker->randomElement(['klantbezoek', 'ophalen materiaal', 'stageplaats', 'excursie']),
                                        'expense_id' => $expenseid,
                                        'date' => $date,
                                        'type_id' => $typeid,
                                        'distance' => $distance,
                                        'attachment' => 'www.google.be',
                                        'amount' => $distance * 0.15]);
                                    break;

                            }
                        }

                    }


            }
            if ($typeid != 2) {
                $status = rand(2, 8);
                if ($status != 2) {
                    $inspector = $faker->randomElement([3, 5]);
                    $note = $faker->sentence;
                } else {
                    $inspector = null;
                    $note = '';
                }

                Expenseprogress::create([
                    'expense_id' => $expenseid,
                    'inspector_id' => $inspector,
                    'status_id' => $status,
                    'note' => $note,

                ]);
            }

        }
    }
}