<?php

use App\Amount;
use App\Expense;
use App\Expenseprogress;
use App\Transfer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('nl_BE');
        for ($i = 0; $i < 500; $i++) {
            $expenseid = $i + 1;
            $costcenter = (rand(1, 100) <= 25) ? 1 : rand(2, 48);
            $userid = rand(1, 50);
            $typeid = rand(1, 5);
            switch ($typeid) {
                case 1:
                    $name = $faker->randomElement(['bloemen', 'eten', 'cadeau', 'materiaal', 'excursie']);
                    $transport = 1;
                    break;
                case 2:
                    $name = 'Laptop';
                    $transport = 1;
                    break;
                case 3:
                    $name = $faker->randomElement(['klantbezoek', 'ophalen materiaal', 'stageplaats', 'excursie']);
                    $transport = 2;
                    break;
                case 4:
                    $name = 'Fietsvergoeding';
                    $transport = 1;
                    break;
                case 5:
                    $name = $faker->randomElement(['Treinticket', 'busticket', 'tramticket']);
                    $transport = 3;
                    break;
            };

            Expense::create(
                [
                    'costcentre_id' => $costcenter,
                    'user_id' => $userid,
                    'type_id' => $typeid,
                    'name' => $name,
                    'description' => $faker->sentence
                ]
            );
            $status = rand(2, 6);
            $inspector = null;
            $note = '';
            switch ($status) {
                case 2:
                    break;
                case 3:
                    $inspector = 1;
                    break;
                case 4:
                    $inspector = 1;
                    $note = $faker->sentence;
                    break;
                case 5:
                    $inspector = rand(2, 3);
                    break;
                case 6:
                    $inspector = rand(2, 3);
                    $note = $faker->sentence;
            }
            Expenseprogress::create(
                [
                    'expense_id' => $expenseid,
                    'inspector_id' => $inspector,
                    'status_id' => $status,
                    'note' => $note,
                ]
            );

            switch ($typeid) {
                case 2:
                    $total = rand(400, 800);
                    $quarter = $total / 4;
                    $payed = rand(0, 1);
                    switch ($payed) {
                        case 0:
                            Amount::create(
                                [
                                    'expense_id' => $expenseid,
                                    'amount' => $total,
                                    'remaining_amount' => $total - $quarter,
                                ]
                            );
                            break;

                    }
                    break;
                case 1:
                    Amount::create(
                        [
                            'expense_id' => $expenseid,
                            'amount' => rand(25, 200),
                        ]
                    );
                    break;
                case 3:
                case 4:
                    Transfer::create(
                        [
                            'expense_id' => $expenseid,
                            'transport_ID' => $transport,
                            'reason' => $name,
                            'date' => $faker->dateTimeBetween('-1 years', 'now'),
                            'distance' => rand(10, 50)
                        ]
                    );
                    break;
                case 5:
                    Amount::create(
                        [
                            'expense_id' => $expenseid,
                            'amount' => rand(5, 50),
                        ]
                    );


            }
        }
    }
}
